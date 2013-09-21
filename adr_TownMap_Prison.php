<?php 
/***************************************************************************
 *				adr_TownMap_Prison.php
 *				------------------------
 *	begin 			: 23/11/2004
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
define('IN_TOWNMAP_PRISON', true);
define('IN_TOWNMAP_COPYRIGHT', true);
define('IN_ADR_BATTLE', true);
define('IN_ADR_CHARACTER', true);
define('IP_ROOT_PATH', './'); 
if (!defined('PHP_EXT')) define('PHP_EXT', $phpEx = substr(strrchr(__FILE__, '.'), 1));
include(IP_ROOT_PATH . 'common.' . $phpEx);

$loc = 'town';
$sub_loc = 'adr_TownMap_Prison';

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
	$redirect = "adr_TownMap_Prison.$phpEx";
	$redirect .= ( isset($user_id) ) ? '&user_id=' . $user_id : '';
	header('Location: ' . append_sid("login_ip.$phpEx?redirect=$redirect", true));
}
adr_enable_check();
adr_ban_check($user_id);
adr_character_created_check($user_id);

// Includes the tpl and the header
adr_template_file('adr_TownMap_Prison_body.tpl');
page_header();
include(IP_ROOT_PATH . 'adr/includes/adr_header.'.$phpEx);

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


$saison = 'Carte'.$board_config['adr_seasons'];

// Get the general config
$adr_general = adr_get_general_config();

if ( !$adr_general['Adr_disable_rpg'] && $userdata['user_level'] != ADMIN ) 
{	
	adr_previous ( Adr_disable_rpg , 'index' , '' );
}

// Get the user infos
$adr_char = adr_get_user_infos($user_id);

// Fix the values

$InfoPrison = $_POSTS['InfoPrison'];

if ( $InfoPrison )
{
	adr_previous( Adr_TownMap_Prison_Infos , adr_TownMap_Prison , '' );
}

else

{
	$template->assign_vars(array(
		'SAISON' => $saison,
		'L_TOWNMAP_PRISON' => $lang['TownMap_Prison'],
		'L_TOWNBOUTONINFO' => $lang['Adr_TownMap_Bouton_Infos'],
		'L_TOWNBOUTONRETOUR' => $lang['Adr_TownMap_Bouton_Retour'],
		'L_PRISONPRESENTATION' => $lang['Adr_TownMap_Prison_Presentation'],
		'L_PRISONENTREE' => $lang['TownMap_Prison_Entree'],
		'L_TOWNMAPCOPYRIGHT' => $lang['TownMap_Copyright'],
	      'L_COPYRIGHT' => $lang['Adr_copyright'],
		'L_PRISON' => $lang['TownMap_Prison_Lien'],
		'U_PRISON' => append_sid("adr_courthouse.$phpEx"),
	      'U_COPYRIGHT' => append_sid("adr_copyright.$phpEx"),
		'U_TOWNBOUTONRETOUR' => append_sid("adr_zones.$phpEx"),
		'U_TOWNMAP_PRISON' => append_sid("adr_TownMap_Prison.$phpEx"),
		'U_TOWNMAPCOPYRIGHT' => append_sid("TownMap_Copyright.$phpEx"),
		'S_CHARACTER_ACTION' => append_sid("adr_TownMap_Prison.$phpEx"),
	));
}


$template->pparse('body');
include(IP_ROOT_PATH . 'includes/page_tail.'.$phpEx);
 
?> 