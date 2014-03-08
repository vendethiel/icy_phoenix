<?php
/***************************************************************************
 *                              admin_adr_vault_users.php
 *                                   ------------------
 *
 *   begin                : 		    15/02/2004
 *
 *
 ***************************************************************************/

define('IN_ICYPHOENIX', 1);
define('IN_ADR_ADMIN', 1);
define('IN_ADR_VAULT', 1);

if( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$module['Adr_Users']['Adr_vault_users'] = $file;
	return;
}

define('IP_ROOT_PATH', "./../");

if (!defined('PHP_EXT')) define('PHP_EXT', $phpEx = substr(strrchr(__FILE__, '.'), 1));
require('pagestart.' . PHP_EXT);
include(IP_ROOT_PATH . 'adr/includes/adr_global.'.$phpEx);

adr_template_file('admin/config_adr_vault_users_body.tpl');

$submit = isset($_POST['submit']); 

if ( ( isset($_POST['owner_name']) || isset($_GET['owner_name']) ) && ( $_POST['owner_name'] != '' || $_GET['owner_name'] != '' ))
{
	$username = ( isset($_POST['owner_name']) ) ? htmlspecialchars($_POST['owner_name']) : htmlspecialchars($_GET['owner_name']);
	$sql = " SELECT user_id FROM ". USERS_TABLE ." 
		WHERE username = '" . str_replace("\'", "''", $username) . "'";
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not obtain group list', '', __LINE__, __FILE__, $sql);
	}
	$row = $db->sql_fetchrow($result);	
	$owner_id = intval($row['user_id']);
}
else if ( isset($_POST[POST_OWNERS_URL]) || isset($_GET[POST_OWNERS_URL]) || !(is_numeric( $owner_id ))  )
{
	$owner_id = ( isset($_POST[POST_OWNERS_URL]) ) ? intval($_POST[POST_OWNERS_URL]) : intval($_GET[POST_OWNERS_URL]);
}
if ( !$owner_id )
{
	$owner_id = 2;
}

$sql = "SELECT u.user_id , u.username
	FROM " . USERS_TABLE . " u , ". ADR_VAULT_USERS_TABLE . " v
	WHERE u.user_id = v.owner_id
	ORDER by u.username";
if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not obtain group list', '', __LINE__, __FILE__, $sql);
}
$select_list = '';
if ( $row = $db->sql_fetchrow($result) )
{
	$select_list .= '<select name="' . POST_OWNERS_URL . '">';
	do
	{
		$select_list .= '<option value="' . $row['user_id'] . '">' . $row['username'] . '</option>';
	}
	while ( $row = $db->sql_fetchrow($result) );
	$select_list .= '</select>';
}

if( $submit )
{
	$owner_id = intval ($_POST['user_id']);
	$on_account = intval($_POST['on_account']);
	$loan_sum = intval( $_POST['loan_sum'] );
	$pay_off = intval( $_POST['pay_off'] );
	$protect_account = intval( $_POST['protect_account'] );
	$protect_loan = intval( $_POST['protect_loan'] );

	if ( $pay_off || !$loan_sum )
	{
		$loan_sum = 0;
		$loan_sql = 'loan_time = 0 ,';
	}

	$sql = "UPDATE " . ADR_VAULT_USERS_TABLE . "
		SET account_sum = $on_account ,
		loan_sum = $loan_sum ,
		$loan_sql 
		account_protect = $protect_account ,
		loan_protect = $protect_loan 
		WHERE owner_id = $owner_id";
	if (!$db->sql_query($sql))
	{
		message_die(GENERAL_ERROR, "Could not update user's account", '', __LINE__, __FILE__, $sql);
	}
	else
	{
		message_die(GENERAL_MESSAGE, sprintf($lang['Adr_vault_users_updated_return_settings'], '<a href="' . append_sid(basename(__FILE__)) . '">', '</a>'), $lang['Adr_vault_settings']);
	}

}
else
{	
	$sql = "SELECT * FROM  " . ADR_GENERAL_TABLE ; 
	if (!$result = $db->sql_query($sql)) 
	{
		message_die(CRITICAL_ERROR, 'Error Getting Vault Config!');
	}
	while( $row = $db->sql_fetchrow($result) )
	{
		$vault_general[$row['config_name']] = $row['config_value'];
	}

	$sql = "SELECT vu.* , u.username FROM " . ADR_VAULT_USERS_TABLE . " vu , " . USERS_TABLE . " u
		WHERE vu.owner_id = ".$owner_id."
		AND vu.owner_id = u.user_id";
	if( !$result = $db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, "Couldn't obtain rabbitoshi owners data", "", __LINE__, __FILE__, $sql);
	}
	$vault_owner = $db->sql_fetchrow($result);

	if ( $vault_owner['loan_sum'] != 0 )
	{
		$loan_sum = $vault_owner['loan_sum'];
		$template->assign_block_vars( 'active_loan' , array());
	}
	else
	{
		$loan_sum = $lang['Adr_vault_no_loan'];
		$template->assign_block_vars( 'no_loan' , array());
	}
}

$template->assign_vars(array(
	"USER_ID" => $vault_owner['owner_id'],
	"OWNER" => $vault_owner['username'],
	"ON_ACCOUNT" => $vault_owner['account_sum'],
	"LOAN" => $loan_sum,
	"PROTECT_ACCOUNT_CHECKED" => ( $vault_owner['account_protect'] ? 'CHECKED' :'' ),
	"PROTECT_LOAN_CHECKED"  => ( $vault_owner['loan_protect'] ? 'CHECKED' :'' ),
	"L_POINTS" => $board_config['points_name'],
	"L_VAULT_TITLE" => $lang['Adr_vault_users_title'],
	"L_VAULT_TEXT" => $lang['Adr_vault_users_title_explain'],
	"L_SUBMIT" => $lang['Submit'],
	"L_SELECT" => $lang['Select'],
	"L_SELECT_OWNER" => $lang['Adr_vault_user_select'],
	"L_SELECT_OWNER_LIST" => $lang['Adr_vault_user_select_list'],
	"L_SELECT_OWNER_INPUT" => $lang['Adr_vault_user_select_input'],
	"L_OWNER" => $lang['Adr_vault_user'],
	"L_ACCOUNT" => $lang['Adr_vault_user_account'],
	"L_ON_ACCOUNT" => $lang['Adr_vault_user_on_account'],
	"L_LOAN" => $lang['Adr_vault_user_loan'],
	"L_STOCK_EXCHANGE" => $lang['Adr_vault_user_stocks'],
	"L_LOAN_PAY_OFF" => $lang['Adr_vault_user_pay_off'],
	"L_PREFERENCES" => $lang['Adr_vault_user_preferences'],
	"L_PROTECT_ACCOUNT" => $lang['Adr_vault_user_protect_account'],
	"L_PROTECT_LOAN" => $lang['Adr_vault_user_protect_loan'],
	"S_SELECT_OWNER" => $select_list,
	"S_VAULT_ACTION" => append_sid("admin_adr_vault_users.$phpEx?owner_id = ".POST_OWNERS_URL.""),
));


$template->pparse("body");

include('./page_footer_admin.'.$phpEx);

?>