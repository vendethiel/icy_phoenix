<?php 
/***************************************************************************
 *			      adr_TownMap_Boutique.php
 *				------------------------
 *	begin 			: 19/11/2004
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
define('IN_TOWNMAP_BOUTIQUE', true);
define('IN_TOWNMAP_COPYRIGHT', true);
define('IN_ADR_BATTLE', true);
define('IN_ADR_CHARACTER', true);
define('IP_ROOT_PATH', './'); 
if (!defined('PHP_EXT')) define('PHP_EXT', $phpEx = substr(strrchr(__FILE__, '.'), 1));
include(IP_ROOT_PATH . 'common.' . $phpEx);

$loc = 'town';
$sub_loc = 'adr_TownMap_Boutique';

//
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();
// End session management
//

include(IP_ROOT_PATH . 'adr/includes/adr_global.'.$phpEx);
$user_id = $userdata['user_id'];

// Sorry , only logged users ...
if ( !$userdata['session_logged_in'] )
{
	$redirect = "adr_TownMap_Boutique.$phpEx";
	$redirect .= ( isset($user_id) ) ? '&user_id=' . $user_id : '';
	header('Location: ' . append_sid("login_ip.$phpEx?redirect=$redirect", true));
}

// Includes the tpl and the header and the choice of the season
adr_template_file('adr_TownMap_Boutique_body.tpl');
page_header();
include(IP_ROOT_PATH . 'adr/includes/adr_header.'.$phpEx);

$saison = 'Carte' . $board_config['adr_seasons'];

// Deny access if the user is into a battle
$sql = " SELECT * FROM  " . ADR_BATTLE_LIST_TABLE . " 
	WHERE battle_challenger_id = $user_id
	AND battle_result = 0
	AND battle_type = 1 ";
if( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not query battle list', '', __LINE__, __FILE__, $sql);
}
$bat = $db->sql_fetchrow($result);

if ( is_numeric($bat['battle_id']) )
{
	adr_previous( Adr_battle_progress , adr_battle , '' );
}


// Get the general config
$adr_general = adr_get_general_config();

adr_enable_check();
adr_ban_check($user_id);
adr_character_created_check($user_id);
// Deny access if user is imprisioned
if($userdata['user_cell_time']){
	adr_previous(Adr_shops_no_thief, adr_cell, '');}
// Get the user infos
$adr_char = adr_get_user_infos($user_id);

// Fix the values

$InfoBoutique = $_POST['InfoBoutique'];

if ( $InfoBoutique )
{
	adr_previous( Adr_TownMap_Boutique_Infos , adr_TownMap_Boutique , '' );
}

else

{
	$template->assign_vars(array(

		'SAISON' => $saison,
		'L_TOWNMAP_BOUTIQUE' => $lang['TownMap_Boutique'],
		'L_BOUTIQUE' => $lang['TownMap_Boutique_Lien'],
		'L_LISTEBOUTIQUE' => $lang['TownMap_Boutique_liste'],
		'L_RECHERCHEBOUTIQUE' => $lang['TownMap_Boutique_recherche'],
		'L_CREERBOUTIQUE' => $lang['TownMap_Boutique_creer'],
		'L_TOWNBOUTONINFO' => $lang['Adr_TownMap_Bouton_Infos'],
		'L_TOWNBOUTONRETOUR' => $lang['Adr_TownMap_Bouton_Retour'],
		'L_BOUTIQUEPRESENTATION' => $lang['Adr_TownMap_Boutique_Presentation'],
		'L_BOUTIQUEENTREE' => $lang['TownMap_Boutique_Entree'],
		'L_TOWNMAPCOPYRIGHT' => $lang['TownMap_Copyright'],
	      'L_COPYRIGHT' => $lang['Adr_copyright'],
	      'U_COPYRIGHT' => append_sid("adr_copyright.$phpEx"),
		'U_TOWNBOUTONRETOUR' => append_sid("adr_zones.$phpEx"),
		'U_TOWNMAP_BOUTIQUE' => append_sid("adr_TownMap_Boutique.$phpEx"),
		'U_BOUTIQUE' => append_sid("adr_shops.$phpEx"),
		'U_LISTEBOUTIQUE' => append_sid("adr_shops.$phpEx?mode=shop_list"),
		'U_RECHERCHEBOUTIQUE' => append_sid("adr_shops.$phpEx?mode=search_item"),
		'U_CREERBOUTIQUE' => append_sid("adr_shops.$phpEx?mode=create_shop"),
		'U_TOWNMAPCOPYRIGHT' => append_sid("TownMap_Copyright.$phpEx"),
		'S_CHARACTER_ACTION' => append_sid("adr_TownMap_Boutique.$phpEx"),
	));
}


$template->pparse('body');
include(IP_ROOT_PATH . 'includes/page_tail.'.$phpEx);
 
?> 