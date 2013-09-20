<?php
/***************************************************************************
 *				    adr_tower.php
 *				------------------------
 *	begin 		: 10/03/2005
 *	copyright		: One_Piece
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
define('IN_ADR_ZONES', true);
define('IN_ADR_CHARACTER', true);
define('IP_ROOT_PATH', './');
if (!defined('PHP_EXT')) define('PHP_EXT', $phpEx = substr(strrchr(__FILE__, '.'), 1));
include_once(IP_ROOT_PATH . 'common.'.$phpEx);

//
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();
// End session management
//
$user_id = $userdata['user_id'];
include_once(IP_ROOT_PATH . 'adr/includes/adr_global.'.$phpEx);

// Sorry , only logged users ...
if ( !$userdata['session_logged_in'] )
{
	$redirect = "adr_character.$phpEx";
	$redirect .= ( isset($user_id) ) ? '&user_id=' . $user_id : '';
	header('Location: ' . append_sid("login_ip.$phpEx?redirect=$redirect", true));
}

// Includes the tpl and the header
adr_template_file('adr_tower_body.tpl');
include_once(IP_ROOT_PATH . 'includes/page_header.'.$phpEx);

// Get the general config and character infos
$adr_general = adr_get_general_config();
adr_enable_check();
adr_ban_check($user_id);
adr_character_created_check($user_id);
$adr_user = adr_get_user_infos($user_id);

$template->assign_vars(array(
	'L_ZONE_TOWER' => $lang['Adr_zone_tower_title'],
	'L_ZONE_CHARACTER_SKILLS' => $lang['Adr_zone_character_skills'],
	'L_ZONE_CHARACTER_EQUIP' => $lang['Adr_zone_character_equip'],
	'U_ZONE_CHARACTER_SKILLS' => append_sid("adr_character_skills.$phpEx"),
	'U_ZONE_CHARACTER_EQUIP' => append_sid("adr_character_equipment.$phpEx"),
	'S_ZONES_ACTION' => append_sid("adr_tower.$phpEx"),
));

include(IP_ROOT_PATH . 'adr/includes/adr_header.'.$phpEx);

$template->pparse('body');
include_once(IP_ROOT_PATH . 'includes/page_tail.'.$phpEx);

?>