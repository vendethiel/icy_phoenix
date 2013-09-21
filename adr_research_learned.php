<?php 
/***************************************************************************
 *					adr_research_learned.php
 *				------------------------
 *	Date				: 07/05/07  
 *  Original Author     : Maiken
 *  Version 			: 0.0.1
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

define('IN_ICYPHOENIX', true); 
define('IN_ADR_CAULDRON', true);
define('IN_ADR_SHOPS', true);
define('IN_ADR_CHARACTER', true);
define('IP_ROOT_PATH', './'); 
if (!defined('PHP_EXT')) define('PHP_EXT', $phpEx = substr(strrchr(__FILE__, '.'), 1));
include(IP_ROOT_PATH . 'common.' . $phpEx);

//
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();
// End session management
//
include_once(IP_ROOT_PATH . 'adr/includes/adr_global.'.$phpEx);

$user_id = $userdata['user_id'];

// Sorry , only logged users ...
if ( !$userdata['session_logged_in'] )
{
	$redirect = "adr_research_learned.$phpEx";
	$redirect .= ( isset($user_id) ) ? '&user_id=' . $user_id : '';
	header('Location: ' . append_sid("login_ip.$phpEx?redirect=$redirect", true));
}

// Includes the tpl and the header
adr_template_file('adr_research_learned_body.tpl');

page_header();

// Get the general config
$adr_general = adr_get_general_config();
adr_enable_check();
adr_ban_check($user_id);
adr_character_created_check($user_id);

$sql = "SELECT * FROM " . ADR_LIBRARY_LEARN_TABLE . "
		WHERE user_id = '$user_id'
		ORDER BY book_id DESC";
if( !($result = $db->sql_query($sql)) ){
	message_die(GENERAL_ERROR, 'Could not obtain required learned information', "", __LINE__, __FILE__, $sql);}
$research_log = $db->sql_fetchrowset($result);

for ( $i = 0 ; $i < count( $research_log ) ; $i++ )
{
	$template->assign_block_vars('learned', array(		
		"BOOK_NAME" => $research_log[$i]['book_name'],
		"BOOK_INFO" => $research_log[$i]['book_details'],
	));
}

include(IP_ROOT_PATH . 'adr/includes/adr_header.'.$phpEx);
$template->pparse('body');
include(IP_ROOT_PATH . 'includes/page_tail.'.$phpEx);
?>