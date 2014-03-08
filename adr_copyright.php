<?php 
/***************************************************************************
 *					adr_copyright.php
 *				------------------------
 *	begin 			: 28/02/2004
 *	copyright			: Malicious Rabbit / Dr DLP
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
define('IN_ADR_COPYRIGHT', true); 
define('IP_ROOT_PATH', './'); 
if (!defined('PHP_EXT')) define('PHP_EXT', $phpEx = substr(strrchr(__FILE__, '.'), 1));
include(IP_ROOT_PATH . 'common.' . $phpEx);

$loc = 'character_prefs';
$sub_loc = 'adr_character_prefs';

//
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();
// End session management
//
include(IP_ROOT_PATH . 'adr/includes/adr_global.'.$phpEx);

// Includes the tpl and the header
adr_template_file('adr_copyright_body.tpl');

// Get the general settings
$adr_general = adr_get_general_config();

if ( $lang['Translator'] )
{
	$template->assign_block_vars('translator' , array());
}


$template->assign_vars(array(
	'TRANSLATOR' => $lang['Translator'],
	'L_COPYRIGHT_EXPLAIN' => $lang['Adr_copyright_explain'],
	'L_IMAGES' => $lang['Adr_copyright_images'],
	'L_TRANSLATOR' => $lang['Adr_copyright_translator'],
	'L_THANKS' => $lang['Adr_copyright_thanks'],
	'L_AUTHOR' => $lang['Adr_copyright_author'],
	'L_NEW_AUTHOR' => $lang['Adr_copyright_new_author'],
));

include(IP_ROOT_PATH . 'adr/includes/adr_header.'.$phpEx);

$template->pparse('body');
include(IP_ROOT_PATH . 'includes/page_tail.'.$phpEx);

// Empty the memory
$db->sql_freeresult($result);

?>