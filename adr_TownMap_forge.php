<?php 
/***************************************************************************
 *				adr_TownMap_forge.php
 *				------------------------
 *	begin 			: 22/11/2004
 *	copyright			: One_Piece
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

define('IN_ICYPHOENIX', true); 
define('IN_ADR_TOWNMAP', true);
define('IN_TOWNMAP_INFOBOX', true);
define('IN_TOWNMAP_FORGE', true);
define('IN_TOWNMAP_COPYRIGHT', true);
define('IN_ADR_FORGE', true);
define('IN_ADR_SHOPS', true);
define('IN_ADR_CHARACTER', true);
define('IP_ROOT_PATH', './'); 
if (!defined('PHP_EXT')) define('PHP_EXT', $phpEx = substr(strrchr(__FILE__, '.'), 1));
include(IP_ROOT_PATH . 'common.' . $phpEx);

$loc = 'town';
$sub_loc = 'adr_TownMap_forge';

//
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();
// End session management
//

$user_id = $userdata['user_id'];
$points = $userdata['user_points'];

include(IP_ROOT_PATH . 'adr/includes/adr_global.'.$phpEx);

// Sorry , only logged users ...
if ( !$userdata['session_logged_in'] )
{
	$redirect = "adr_TownMap_forge.$phpEx";
	$redirect .= ( isset($user_id) ) ? '&user_id=' . $user_id : '';
	header('Location: ' . append_sid("login_ip.$phpEx?redirect=$redirect", true));
}
adr_enable_check();
adr_ban_check($user_id);
adr_character_created_check($user_id);

// Includes the tpl and the header and the choice for the season
adr_template_file('adr_TownMap_forge_body.tpl');
page_header();
include(IP_ROOT_PATH . 'adr/includes/adr_header.'.$phpEx);

$saison = 'Carte' . $board_config['adr_seasons'];

// Get the general config
$adr_general = adr_get_general_config();

// Grab details for skill limit
$sql = "SELECT character_skill_limit FROM " . ADR_CHARACTERS_TABLE . "
		WHERE character_id = $user_id ";
if( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not query skill limit value', '', __LINE__, __FILE__, $sql);
}
$limit_update = $db->sql_fetchrow($result);

if ( !$adr_general['Adr_disable_rpg'] && $userdata['user_level'] != ADMIN ) 
{	
	adr_previous ( Adr_disable_rpg , 'index' , '' );
}
// Deny access if user is imprisioned
if($userdata['user_cell_time']){
	adr_previous(Adr_shops_no_thief, adr_cell, '');
}
if ( $adr_general['Adr_character_limit_enable'] != 0 && $limit_update['character_skill_limit'] <= 0 ) 
{	
	adr_previous ( Adr_skill_limit , adr_character , '' );
}

if( isset($_POST['mode']) || isset($_GET['mode']) )
{
	$mode = ( isset($_POST['mode']) ) ? $_POST['mode'] : $_GET['mode'];
	$mode = htmlspecialchars($mode);	
}
else
{
	$mode = "";
}


if ( $mode != "" )
{
	switch($mode)
	{
		case 'repair' :
			$template->assign_block_vars('repair',array());
			$sql = " SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
				WHERE item_owner_id = $user_id
				AND item_in_shop = 0
				AND item_in_warehouse = 0
				AND item_duration > 0
				AND item_type_use = 3 ";
			if ( !($result = $db->sql_query($sql)))
			{
				message_die(GENERAL_ERROR, 'Could not check user tools',"", __LINE__, __FILE__, $sql);
			}
			$tools = $db->sql_fetchrowset($result);
		
			$tool_list = '<select name="item_tool">';
			$tool_list .= '<option value = "0" >' . $lang['Adr_forge_mining_no_tool'] . '</option>';
			for ( $i = 0 ; $i < count($tools) ; $i ++ )
			{
				$tool_list .= '<option value = "'.$tools[$i]['item_id'].'" >' . adr_get_lang($tools[$i]['item_name']) . ' ( ' . $lang['Adr_items_power'] . ' : ' . $tools[$i]['item_power'] . ' - ' . $lang['Adr_items_duration'] . ' : ' . $tools[$i]['item_duration'] . ' )'.'</option>';
			}
			$tool_list .= '</select>';

			$sql = " SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
				WHERE item_owner_id = $user_id
				AND item_in_shop = 0
				AND item_in_warehouse = 0
				AND item_duration < item_duration_max
				AND item_duration > 0
				AND item_duration_max > 1
				AND item_type_use IN ( 5 , 6 , 7 , 8 , 9 , 10) ";
			if ( !($result = $db->sql_query($sql)))
			{
				message_die(GENERAL_ERROR, 'Could not check user items',"", __LINE__, __FILE__, $sql);
			}
			$items = $db->sql_fetchrowset($result);

			$items_list = '<select name="item_to_repair">';
			$items_list .= '<option value = "0" >' . $lang['Adr_forge_repair_no_item'] . '</option>';
			for ( $i = 0 ; $i < count($items) ; $i ++ )
			{
				$items_list .= '<option value = "'.$items[$i]['item_id'].'" >' . adr_get_lang($items[$i]['item_name']) . ' ( ' . $lang['Adr_items_power'] . ' : ' . $items[$i]['item_power'] . ' - ' . $lang['Adr_items_quality'] . ' : ' . adr_get_item_quality($items[$i]['item_quality'],simple) . ' - ' . $lang['Adr_items_type_use'] . ' : ' . adr_get_item_type($items[$i]['item_type_use'],simple) . ')'.'</option>';
			}
			$items_list .= '</select>';

			$template->assign_vars(array(
				'ITEMS_LIST' => $items_list,
				'TOOL_LIST' => $tool_list,
				'L_SELECT_TOOL' => $lang['Adr_forge_mining_select_tool'],
				'L_SELECT_ITEMS' => $lang['Adr_forge_repair_select_item'],
				'L_GO_REPAIR' => $lang['Adr_forge_repair_go'],
				'L_REPAIR_ITEM_EXPLAIN' => $lang['Adr_forge_repair_explain'],
			));

			break ;

		case 'repair_action' :
			
			$tool = intval($_POST['item_tool']);
			$item_to_repair = intval($_POST['item_to_repair']);

			// No tool , no repair
			if ( !$tool )
			{
				adr_previous ( Adr_forge_repair_tool_needed , adr_TownMap_forge , "mode=repair" );
			}

			// No item to repair ?
			if ( !$item_to_repair )
			{
				adr_previous ( Adr_forge_repair_item_to_repair_needed , adr_TownMap_forge , "mode=repair" );
			}

			$success = adr_use_skill_forge($user_id,$tool,$item_to_repair);
			
			if ( $success == -1 )
			{
				$message = $lang['Adr_forge_repair_failure_critical'];
			}
			else if ( !$success )
			{
				$message = $lang['Adr_forge_repair_failure'];
			}
			else
			{
				$message = sprintf($lang['Adr_forge_repair_success'] , $success  );
			}

			$direction = append_sid("adr_TownMap_forge.$phpEx?mode=repair");
			$message .= '<br /><br />'.sprintf($lang['Adr_return'],"<a href=\"" . $direction . "\">", "</a>") ;
			message_die ( GENERAL_MESSAGE , $message );

			break;


		case 'stone' :

			$template->assign_block_vars('stone',array());
			$sql = " SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
				WHERE item_owner_id = $user_id
				AND item_in_shop = 0
				AND item_in_warehouse = 0
				AND item_duration > 0
				AND item_type_use = 3 ";
			if ( !($result = $db->sql_query($sql)))
			{
				message_die(GENERAL_ERROR, 'Could not check user tools',"", __LINE__, __FILE__, $sql);
			}
			$tools = $db->sql_fetchrowset($result);
		
			$tool_list = '<select name="item_tool">';
			$tool_list .= '<option value = "0" >' . $lang['Adr_forge_mining_no_tool'] . '</option>';
			for ( $i = 0 ; $i < count($tools) ; $i ++ )
			{
				$tool_list .= '<option value = "'.$tools[$i]['item_id'].'" >' . adr_get_lang($tools[$i]['item_name']) . ' ( ' . $lang['Adr_items_power'] . ' : ' . $tools[$i]['item_power'] . ' - ' . $lang['Adr_items_duration'] . ' : ' . $tools[$i]['item_duration'] . ' )'.'</option>';
			}
			$tool_list .= '</select>';

			$sql = " SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
				WHERE item_owner_id = $user_id
				AND item_quality < 5 
				AND item_in_shop = 0
				AND item_in_warehouse = 0
				AND item_duration > 0
				AND item_type_use IN ( 1 , 2 ) ";
			if ( !($result = $db->sql_query($sql)))
			{
				message_die(GENERAL_ERROR, 'Could not check user items',"", __LINE__, __FILE__, $sql);
			}
			$items = $db->sql_fetchrowset($result);

			$items_list = '<select name="item_to_repair">';
			$items_list .= '<option value = "0" >' . $lang['Adr_forge_repair_no_item'] . '</option>';
			for ( $i = 0 ; $i < count($items) ; $i ++ )
			{
				$items_list .= '<option value = "'.$items[$i]['item_id'].'" >' . adr_get_lang($items[$i]['item_name']) . ' ( ' . $lang['Adr_items_power'] . ' : ' . $items[$i]['item_power'] . ' - ' . $lang['Adr_items_quality'] . ' : ' . adr_get_item_quality($items[$i]['item_quality'],simple) . ' - ' . $lang['Adr_items_type_use'] . ' : ' . adr_get_item_type($items[$i]['item_type_use'],simple) . ')'.'</option>';
			}
			$items_list .= '</select>';

			$template->assign_vars(array(
				'ITEMS_LIST' => $items_list,
				'TOOL_LIST' => $tool_list,
				'L_SELECT_TOOL' => $lang['Adr_forge_mining_select_tool'],
				'L_SELECT_ITEMS' => $lang['Adr_forge_stone_select_item'],
				'L_GO_REPAIR' => $lang['Adr_forge_stone_go'],
				'L_STONE_EXPLAIN' => $lang['Adr_forge_stone_explain'],
			));

			break ;

		case 'stone_action' :
			
			$tool = intval($_POST['item_tool']);
			$item_to_repair = intval($_POST['item_to_repair']);

			// No tool , no repair
			if ( !$tool )
			{
				adr_previous ( Adr_forge_stone_tool_needed , adr_TownMap_forge , "mode=stone" );
			}

			// No item to repair ?
			if ( !$item_to_repair )
			{
				adr_previous ( Adr_forge_stone_item_to_repair_needed , adr_TownMap_forge , "mode=stone" );
			}

			$success = adr_use_skill_stone($user_id,$tool,$item_to_repair);
			
			if ( $success == -1 )
			{
				$message = $lang['Adr_forge_repair_failure_critical'];
			}
			else if ( !$success )
			{
				$message = $lang['Adr_forge_stone_failure'];
			}
			else
			{
				$message = sprintf($lang['Adr_forge_stone_success'] , $success  );
			}

			$direction = append_sid("adr_TownMap_forge.$phpEx?mode=stone");
			$message .= '<br /><br />'.sprintf($lang['Adr_return'],"<a href=\"" . $direction . "\">", "</a>") ;
			message_die ( GENERAL_MESSAGE , $message );

			break;


		case 'create' :
			break;
	}
}

else
{
	$template->assign_block_vars('main',array());
}

// Fix the values

$InfoForge = $_POST['InfoForge'];

if ( $InfoForge )
{
	adr_previous( Adr_TownMap_Forge_Infos , adr_TownMap_forge , '' );
}

else

$template->assign_vars(array(

	'SAISON' => $saison,
	'L_TOWNMAP_FORGE' => $lang['TownMap_Forge'],
	'L_TOWNBOUTONINFO' => $lang['Adr_TownMap_Bouton_Infos'],
	'L_TOWNBOUTONRETOUR' => $lang['Adr_TownMap_Bouton_Retour'],
	'L_FORGEPRESENTATION' => $lang['Adr_TownMap_Forge_Presentation'],
	'L_FORGEENTREE' => $lang['TownMap_Forge_Entree'],
	'L_REPAIR_ITEM' => $lang['Adr_forge_repair'],
	'L_CREATE_ITEM' => $lang['Adr_forge_create'],
	'L_STONE' => $lang['Adr_forge_stone'],
	'L_COPYRIGHT' => $lang['Adr_copyright'],
	'L_TOWNMAPCOPYRIGHT' => $lang['TownMap_Copyright'],
	'U_TOWNBOUTONRETOUR' => append_sid("adr_zones.$phpEx"),
	'U_TOWNMAP_FORGE' => append_sid("adr_TownMap_forge.$phpEx"),
	'U_COPYRIGHT' => append_sid("adr_copyright.$phpEx"),
	'U_TOWNMAPCOPYRIGHT' => append_sid("TownMap_Copyright.$phpEx"),
	'U_REPAIR_ITEM' => append_sid("adr_TownMap_forge.$phpEx?mode=repair"),
	'U_CREATE_ITEM' => append_sid("adr_TownMap_forge.$phpEx?mode=create"),
	'U_STONE' => append_sid("adr_TownMap_forge.$phpEx?mode=stone"),
	'S_FORGE_ACTION'=> append_sid("adr_TownMap_forge.$phpEx"),
	'S_CHARACTER_ACTION' => append_sid("adr_TownMap_forge.$phpEx"),
));

$template->pparse('body');
include(IP_ROOT_PATH . 'includes/page_tail.'.$phpEx);
 
?> 