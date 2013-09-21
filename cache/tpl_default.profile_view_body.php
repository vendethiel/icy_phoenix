<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 20:14:50 +0000 (time = 1379794490)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php  $this->set_filename('xs_include_bb849aaece9c782fa8a556f683a7a91c', 'overall_header.tpl', true);  $this->pparse('xs_include_bb849aaece9c782fa8a556f683a7a91c');  ?>

<?php if ($this->vars['S_ADMIN']) {  ?>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['L_QUICK_ADMIN_OPTIONS']) ? $this->vars['L_QUICK_ADMIN_OPTIONS'] : $this->lang('L_QUICK_ADMIN_OPTIONS'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1 row-center" colspan="2" ><span class="genmed"><a href="<?php echo isset($this->vars['U_ADMIN_EDIT_PROFILE']) ? $this->vars['U_ADMIN_EDIT_PROFILE'] : $this->lang('U_ADMIN_EDIT_PROFILE'); ?>" title="<?php echo isset($this->vars['L_ADMIN_EDIT_PROFILE']) ? $this->vars['L_ADMIN_EDIT_PROFILE'] : $this->lang('L_ADMIN_EDIT_PROFILE'); ?>"><?php echo isset($this->vars['L_ADMIN_EDIT_PROFILE']) ? $this->vars['L_ADMIN_EDIT_PROFILE'] : $this->lang('L_ADMIN_EDIT_PROFILE'); ?></a>&nbsp;&bull;&nbsp;<a href="<?php echo isset($this->vars['U_ADMIN_EDIT_PERMISSIONS']) ? $this->vars['U_ADMIN_EDIT_PERMISSIONS'] : $this->lang('U_ADMIN_EDIT_PERMISSIONS'); ?>" title="<?php echo isset($this->vars['L_ADMIN_EDIT_PERMISSIONS']) ? $this->vars['L_ADMIN_EDIT_PERMISSIONS'] : $this->lang('L_ADMIN_EDIT_PERMISSIONS'); ?>"><?php echo isset($this->vars['L_ADMIN_EDIT_PERMISSIONS']) ? $this->vars['L_ADMIN_EDIT_PERMISSIONS'] : $this->lang('L_ADMIN_EDIT_PERMISSIONS'); ?></a>&nbsp;&bull;&nbsp;<?php echo isset($this->vars['L_USER_ACTIVE_INACTIVE']) ? $this->vars['L_USER_ACTIVE_INACTIVE'] : $this->lang('L_USER_ACTIVE_INACTIVE'); ?>&nbsp;&bull;&nbsp;<?php echo isset($this->vars['L_BANNED_USERNAME']) ? $this->vars['L_BANNED_USERNAME'] : $this->lang('L_BANNED_USERNAME'); ?>&nbsp;[&nbsp;<a href="<?php echo isset($this->vars['U_USER_BAN_UNBAN']) ? $this->vars['U_USER_BAN_UNBAN'] : $this->lang('U_USER_BAN_UNBAN'); ?>" title="<?php echo isset($this->vars['L_USER_BAN_UNBAN']) ? $this->vars['L_USER_BAN_UNBAN'] : $this->lang('L_USER_BAN_UNBAN'); ?>"><?php echo isset($this->vars['L_USER_BAN_UNBAN']) ? $this->vars['L_USER_BAN_UNBAN'] : $this->lang('L_USER_BAN_UNBAN'); ?></a>&nbsp;]&nbsp;&bull;&nbsp;<?php echo isset($this->vars['L_BANNED_EMAIL']) ? $this->vars['L_BANNED_EMAIL'] : $this->lang('L_BANNED_EMAIL'); ?></span></td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
<?php } ?>

<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td height="2"></td>
	<td>
		<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr><td height="2"></td></tr>
		<tr>
			<td width="50%" valign="top" class="forumline">
				<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr><th colspan="2"><span class="genmed"><b><?php echo isset($this->vars['L_INVISION_MEMBER_TITLE']) ? $this->vars['L_INVISION_MEMBER_TITLE'] : $this->lang('L_INVISION_MEMBER_TITLE'); ?> &amp; <?php echo isset($this->vars['L_AVATAR']) ? $this->vars['L_AVATAR'] : $this->lang('L_AVATAR'); ?></b></span></th></tr>
					<tr>
						<td width="33%" class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_INVISION_MEMBER_TITLE']) ? $this->vars['L_INVISION_MEMBER_TITLE'] : $this->lang('L_INVISION_MEMBER_TITLE'); ?> &amp; <?php echo isset($this->vars['L_AVATAR']) ? $this->vars['L_AVATAR'] : $this->lang('L_AVATAR'); ?></span></b></td>
						<td width="64%" class="row1 row-center"><span class="genmed"><?php echo isset($this->vars['INVISION_AVATAR_IMG']) ? $this->vars['INVISION_AVATAR_IMG'] : $this->lang('INVISION_AVATAR_IMG'); ?><br clear="all" /><?php echo isset($this->vars['USER_RANK_01']) ? $this->vars['USER_RANK_01'] : $this->lang('USER_RANK_01'); ?><?php echo isset($this->vars['USER_RANK_01_IMG']) ? $this->vars['USER_RANK_01_IMG'] : $this->lang('USER_RANK_01_IMG'); ?><?php echo isset($this->vars['USER_RANK_02']) ? $this->vars['USER_RANK_02'] : $this->lang('USER_RANK_02'); ?><?php echo isset($this->vars['USER_RANK_02_IMG']) ? $this->vars['USER_RANK_02_IMG'] : $this->lang('USER_RANK_02_IMG'); ?><?php echo isset($this->vars['USER_RANK_03']) ? $this->vars['USER_RANK_03'] : $this->lang('USER_RANK_03'); ?><?php echo isset($this->vars['USER_RANK_03_IMG']) ? $this->vars['USER_RANK_03_IMG'] : $this->lang('USER_RANK_03_IMG'); ?><?php echo isset($this->vars['USER_RANK_04']) ? $this->vars['USER_RANK_04'] : $this->lang('USER_RANK_04'); ?><?php echo isset($this->vars['USER_RANK_04_IMG']) ? $this->vars['USER_RANK_04_IMG'] : $this->lang('USER_RANK_04_IMG'); ?><?php echo isset($this->vars['USER_RANK_05']) ? $this->vars['USER_RANK_05'] : $this->lang('USER_RANK_05'); ?><?php echo isset($this->vars['USER_RANK_05_IMG']) ? $this->vars['USER_RANK_05_IMG'] : $this->lang('USER_RANK_05_IMG'); ?></span></td>
					</tr>
					<tr><th colspan="2"><span class="genmed"><b><?php echo isset($this->vars['L_INVISION_COMMUNICATE']) ? $this->vars['L_INVISION_COMMUNICATE'] : $this->lang('L_INVISION_COMMUNICATE'); ?></b></span></th></tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_PM']) ? $this->vars['L_PM'] : $this->lang('L_PM'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><?php echo isset($this->vars['PM_IMG']) ? $this->vars['PM_IMG'] : $this->lang('PM_IMG'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_EMAIL_ADDRESS']) ? $this->vars['L_EMAIL_ADDRESS'] : $this->lang('L_EMAIL_ADDRESS'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><?php echo isset($this->vars['EMAIL_IMG']) ? $this->vars['EMAIL_IMG'] : $this->lang('EMAIL_IMG'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_PHONE']) ? $this->vars['L_PHONE'] : $this->lang('L_PHONE'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><?php echo isset($this->vars['PHONE']) ? $this->vars['PHONE'] : $this->lang('PHONE'); ?></span></td>
					</tr>
					<?php if ($this->vars['S_LOGGED_IN']) {  ?>
					<?php if ($this->vars['SHOW_FRIEND_LINK']) {  ?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_FRIENDSHIP_STATUS']) ? $this->vars['L_FRIENDSHIP_STATUS'] : $this->lang('L_FRIENDSHIP_STATUS'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="gensmall"><a href="<?php echo isset($this->vars['U_FRIEND_ADD_REMOVE']) ? $this->vars['U_FRIEND_ADD_REMOVE'] : $this->lang('U_FRIEND_ADD_REMOVE'); ?>" class="gensmall"><?php if ($this->vars['IS_FRIEND']) {  ?><?php echo isset($this->vars['L_FRIEND_REMOVE']) ? $this->vars['L_FRIEND_REMOVE'] : $this->lang('L_FRIEND_REMOVE'); ?><?php } else { ?><?php echo isset($this->vars['L_FRIEND_ADD']) ? $this->vars['L_FRIEND_ADD'] : $this->lang('L_FRIEND_ADD'); ?><?php } ?></a></span></td>
					</tr>
					<?php } ?>
					<?php if ($this->vars['ICON_CHAT']) {  ?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_AJAX_SHOUTBOX_PVT']) ? $this->vars['L_AJAX_SHOUTBOX_PVT'] : $this->lang('L_AJAX_SHOUTBOX_PVT'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="gensmall"><a href="<?php echo isset($this->vars['U_AJAX_SHOUTBOX_PVT_LINK']) ? $this->vars['U_AJAX_SHOUTBOX_PVT_LINK'] : $this->lang('U_AJAX_SHOUTBOX_PVT_LINK'); ?>"><?php echo isset($this->vars['L_AJAX_SHOUTBOX_PVT_LINK']) ? $this->vars['L_AJAX_SHOUTBOX_PVT_LINK'] : $this->lang('L_AJAX_SHOUTBOX_PVT_LINK'); ?></a></span></td>
					</tr>
					<?php } ?>
					<?php } ?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_INVISION_COMMUNICATE']) ? $this->vars['L_INVISION_COMMUNICATE'] : $this->lang('L_INVISION_COMMUNICATE'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><?php if ($this->vars['ICON_CHAT']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_CHAT']) ? $this->vars['ICON_CHAT'] : $this->lang('ICON_CHAT'); ?><?php } ?><?php if ($this->vars['ICON_AIM']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_AIM']) ? $this->vars['ICON_AIM'] : $this->lang('ICON_AIM'); ?><?php } ?><?php if ($this->vars['ICON_FACEBOOK']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_FACEBOOK']) ? $this->vars['ICON_FACEBOOK'] : $this->lang('ICON_FACEBOOK'); ?><?php } ?><?php if ($this->vars['ICON_FLICKR']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_FLICKR']) ? $this->vars['ICON_FLICKR'] : $this->lang('ICON_FLICKR'); ?><?php } ?><?php if ($this->vars['ICON_GOOGLEPLUS']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_GOOGLEPLUS']) ? $this->vars['ICON_GOOGLEPLUS'] : $this->lang('ICON_GOOGLEPLUS'); ?><?php } ?><?php if ($this->vars['ICON_ICQ']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_ICQ']) ? $this->vars['ICON_ICQ'] : $this->lang('ICON_ICQ'); ?><?php } ?><?php if ($this->vars['ICON_JABBER']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_JABBER']) ? $this->vars['ICON_JABBER'] : $this->lang('ICON_JABBER'); ?><?php } ?><?php if ($this->vars['ICON_LINKEDIN']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_LINKEDIN']) ? $this->vars['ICON_LINKEDIN'] : $this->lang('ICON_LINKEDIN'); ?><?php } ?><?php if ($this->vars['ICON_MSN']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_MSN']) ? $this->vars['ICON_MSN'] : $this->lang('ICON_MSN'); ?><?php } ?><?php if ($this->vars['ICON_SKYPE']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_SKYPE']) ? $this->vars['ICON_SKYPE'] : $this->lang('ICON_SKYPE'); ?><?php } ?><?php if ($this->vars['ICON_TWITTER']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_TWITTER']) ? $this->vars['ICON_TWITTER'] : $this->lang('ICON_TWITTER'); ?><?php } ?><?php if ($this->vars['ICON_YAHOO']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_YAHOO']) ? $this->vars['ICON_YAHOO'] : $this->lang('ICON_YAHOO'); ?><?php } ?><?php if ($this->vars['ICON_YOUTUBE']) {  ?>&nbsp;<?php echo isset($this->vars['ICON_YOUTUBE']) ? $this->vars['ICON_YOUTUBE'] : $this->lang('ICON_YOUTUBE'); ?><?php } ?>&nbsp;</span></td>
					</tr>
					<?php

$custom_contact_count = ( isset($this->_tpldata['custom_contact.']) ) ? sizeof($this->_tpldata['custom_contact.']) : 0;
for ($custom_contact_i = 0; $custom_contact_i < $custom_contact_count; $custom_contact_i++)
{
 $custom_contact_item = &$this->_tpldata['custom_contact.'][$custom_contact_i];
 $custom_contact_item['S_ROW_COUNT'] = $custom_contact_i;
 $custom_contact_item['S_NUM_ROWS'] = $custom_contact_count;

?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($custom_contact_item['NAME']) ? $custom_contact_item['NAME'] : ''; ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><?php echo isset($custom_contact_item['VALUE']) ? $custom_contact_item['VALUE'] : ''; ?></span></td>
					</tr>
					<?php

} // END custom_contact

if(isset($custom_contact_item)) { unset($custom_contact_item); } 

?>
					<?php if ($this->vars['ADR_PROFILE_DISPLAY']) {  ?>
					<tr><th colspan="2"><span class="genmed"><b>RPG</b></span></th></tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_Adr_character_see']) ? $this->vars['L_Adr_character_see'] : $this->lang('L_Adr_character_see'); ?></span></b></td>
					<?php

$adr_profile_none_count = ( isset($this->_tpldata['adr_profile_none.']) ) ? sizeof($this->_tpldata['adr_profile_none.']) : 0;
for ($adr_profile_none_i = 0; $adr_profile_none_i < $adr_profile_none_count; $adr_profile_none_i++)
{
 $adr_profile_none_item = &$this->_tpldata['adr_profile_none.'][$adr_profile_none_i];
 $adr_profile_none_item['S_ROW_COUNT'] = $adr_profile_none_i;
 $adr_profile_none_item['S_NUM_ROWS'] = $adr_profile_none_count;

?>
						<td class="row1 post-buttons"><span class="genmed"><?php echo isset($this->vars['L_Adr_character_lack']) ? $this->vars['L_Adr_character_lack'] : $this->lang('L_Adr_character_lack'); ?></span></td>
					<?php

} // END adr_profile_none

if(isset($adr_profile_none_item)) { unset($adr_profile_none_item); } 

?>
					<?php

$adr_profile_count = ( isset($this->_tpldata['adr_profile.']) ) ? sizeof($this->_tpldata['adr_profile.']) : 0;
for ($adr_profile_i = 0; $adr_profile_i < $adr_profile_count; $adr_profile_i++)
{
 $adr_profile_item = &$this->_tpldata['adr_profile.'][$adr_profile_i];
 $adr_profile_item['S_ROW_COUNT'] = $adr_profile_i;
 $adr_profile_item['S_NUM_ROWS'] = $adr_profile_count;

?>
						<td class="row1 post-buttons"><span class="genmed"><a href="<?php echo isset($adr_profile_item['U_NAME']) ? $adr_profile_item['U_NAME'] : ''; ?>"><?php echo isset($adr_profile_item['NAME']) ? $adr_profile_item['NAME'] : ''; ?></a></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_Rabbitoshi']) ? $this->vars['L_Rabbitoshi'] : $this->lang('L_Rabbitoshi'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><a href="<?php echo isset($adr_profile_item['RABBITOSHI_LINK']) ? $adr_profile_item['RABBITOSHI_LINK'] : ''; ?>">Rabbitoshi</a></span></td>
					<?php

} // END adr_profile

if(isset($adr_profile_item)) { unset($adr_profile_item); } 

?>
					</tr>
					<?php } ?>
				</table>
			</td>
			<td width="2"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="2" alt="" /></td>
			<td width="50%" valign="top" class="forumline">
				<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr><th colspan="2"><span class="genmed"><b><?php echo isset($this->vars['L_INVISION_INFO']) ? $this->vars['L_INVISION_INFO'] : $this->lang('L_INVISION_INFO'); ?></b></span></th></tr>
					<tr>
						<td width="33%" class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_ONLINE_STATUS']) ? $this->vars['L_ONLINE_STATUS'] : $this->lang('L_ONLINE_STATUS'); ?></span></b></td>
						<td width="64%" class="row1"><span class="genmed"><?php echo isset($this->vars['ONLINE_STATUS_IMG']) ? $this->vars['ONLINE_STATUS_IMG'] : $this->lang('ONLINE_STATUS_IMG'); ?>&nbsp;<?php echo isset($this->vars['USER_OS_IMG']) ? $this->vars['USER_OS_IMG'] : $this->lang('USER_OS_IMG'); ?>&nbsp;<?php echo isset($this->vars['USER_BROWSER_IMG']) ? $this->vars['USER_BROWSER_IMG'] : $this->lang('USER_BROWSER_IMG'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_USER_FIRST_NAME']) ? $this->vars['L_USER_FIRST_NAME'] : $this->lang('L_USER_FIRST_NAME'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['USER_FIRST_NAME']) ? $this->vars['USER_FIRST_NAME'] : $this->lang('USER_FIRST_NAME'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_USER_LAST_NAME']) ? $this->vars['L_USER_LAST_NAME'] : $this->lang('L_USER_LAST_NAME'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['USER_LAST_NAME']) ? $this->vars['USER_LAST_NAME'] : $this->lang('USER_LAST_NAME'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_INVISION_WEBSITE']) ? $this->vars['L_INVISION_WEBSITE'] : $this->lang('L_INVISION_WEBSITE'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['WWW']) ? $this->vars['WWW'] : $this->lang('WWW'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_BIRTHDAY']) ? $this->vars['L_BIRTHDAY'] : $this->lang('L_BIRTHDAY'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['BIRTHDAY']) ? $this->vars['BIRTHDAY'] : $this->lang('BIRTHDAY'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_GENDER']) ? $this->vars['L_GENDER'] : $this->lang('L_GENDER'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['GENDER']) ? $this->vars['GENDER'] : $this->lang('GENDER'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_LOCATION']) ? $this->vars['L_LOCATION'] : $this->lang('L_LOCATION'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['LOCATION']) ? $this->vars['LOCATION'] : $this->lang('LOCATION'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_INTERESTS']) ? $this->vars['L_INTERESTS'] : $this->lang('L_INTERESTS'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['INTERESTS']) ? $this->vars['INTERESTS'] : $this->lang('INTERESTS'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_OCCUPATION']) ? $this->vars['L_OCCUPATION'] : $this->lang('L_OCCUPATION'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['OCCUPATION']) ? $this->vars['OCCUPATION'] : $this->lang('OCCUPATION'); ?></span></td>
					</tr>
					<?php

$custom_about_count = ( isset($this->_tpldata['custom_about.']) ) ? sizeof($this->_tpldata['custom_about.']) : 0;
for ($custom_about_i = 0; $custom_about_i < $custom_about_count; $custom_about_i++)
{
 $custom_about_item = &$this->_tpldata['custom_about.'][$custom_about_i];
 $custom_about_item['S_ROW_COUNT'] = $custom_about_i;
 $custom_about_item['S_NUM_ROWS'] = $custom_about_count;

?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($custom_about_item['NAME']) ? $custom_about_item['NAME'] : ''; ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><?php echo isset($custom_about_item['VALUE']) ? $custom_about_item['VALUE'] : ''; ?></span></td>
					</tr>
					<?php

} // END custom_about

if(isset($custom_about_item)) { unset($custom_about_item); } 

?>
					<tr>
						<td class="row2" valign="top" width="30%"><b><span class="genmed"><?php echo isset($this->vars['L_INVISION_SIGNATURE']) ? $this->vars['L_INVISION_SIGNATURE'] : $this->lang('L_INVISION_SIGNATURE'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['INVISION_USER_SIG']) ? $this->vars['INVISION_USER_SIG'] : $this->lang('INVISION_USER_SIG'); ?></span></td>
					</tr>
					<?php

$switch_groups_on_count = ( isset($this->_tpldata['switch_groups_on.']) ) ? sizeof($this->_tpldata['switch_groups_on.']) : 0;
for ($switch_groups_on_i = 0; $switch_groups_on_i < $switch_groups_on_count; $switch_groups_on_i++)
{
 $switch_groups_on_item = &$this->_tpldata['switch_groups_on.'][$switch_groups_on_i];
 $switch_groups_on_item['S_ROW_COUNT'] = $switch_groups_on_i;
 $switch_groups_on_item['S_NUM_ROWS'] = $switch_groups_on_count;

?>
					<tr><th colspan="2"><span class="genmed"><b><?php echo isset($this->vars['L_INVISION_MEMBER_GROUP']) ? $this->vars['L_INVISION_MEMBER_GROUP'] : $this->lang('L_INVISION_MEMBER_GROUP'); ?></b></span></th></tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_INVISION_MEMBER_GROUP']) ? $this->vars['L_INVISION_MEMBER_GROUP'] : $this->lang('L_INVISION_MEMBER_GROUP'); ?></span></b></td>
						<td class="row1">
							<span class="genmed">
					<?php

} // END switch_groups_on

if(isset($switch_groups_on_item)) { unset($switch_groups_on_item); } 

?>
							<?php

$groups_count = ( isset($this->_tpldata['groups.']) ) ? sizeof($this->_tpldata['groups.']) : 0;
for ($groups_i = 0; $groups_i < $groups_count; $groups_i++)
{
 $groups_item = &$this->_tpldata['groups.'][$groups_i];
 $groups_item['S_ROW_COUNT'] = $groups_i;
 $groups_item['S_NUM_ROWS'] = $groups_count;

?>
								<a href="<?php echo isset($groups_item['U_GROUP_NAME']) ? $groups_item['U_GROUP_NAME'] : ''; ?>"<?php echo isset($groups_item['GROUP_COLOR']) ? $groups_item['GROUP_COLOR'] : ''; ?>><b<?php echo isset($groups_item['GROUP_COLOR']) ? $groups_item['GROUP_COLOR'] : ''; ?>><?php echo isset($groups_item['L_GROUP_NAME']) ? $groups_item['L_GROUP_NAME'] : ''; ?></b></a>:&nbsp;<?php echo isset($groups_item['L_GROUP_DESC']) ? $groups_item['L_GROUP_DESC'] : ''; ?><br />
							<?php

} // END groups

if(isset($groups_item)) { unset($groups_item); } 

?>
					<?php

$switch_groups_on_count = ( isset($this->_tpldata['switch_groups_on.']) ) ? sizeof($this->_tpldata['switch_groups_on.']) : 0;
for ($switch_groups_on_i = 0; $switch_groups_on_i < $switch_groups_on_count; $switch_groups_on_i++)
{
 $switch_groups_on_item = &$this->_tpldata['switch_groups_on.'][$switch_groups_on_i];
 $switch_groups_on_item['S_ROW_COUNT'] = $switch_groups_on_i;
 $switch_groups_on_item['S_NUM_ROWS'] = $switch_groups_on_count;

?>
							</span>
						</td>
					</tr>
					<?php

} // END switch_groups_on

if(isset($switch_groups_on_item)) { unset($switch_groups_on_item); } 

?>
				</table>
			</td>
		</tr>
		<tr><td width="2"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="2" alt="" /></td></tr>
		<tr>
			<td width="50%" valign="top" class="forumline">
				<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr><th colspan="2"><span class="genmed"><b><?php echo isset($this->vars['L_INVISION_P_DETAILS']) ? $this->vars['L_INVISION_P_DETAILS'] : $this->lang('L_INVISION_P_DETAILS'); ?></b></span></th></tr>
					<tr>
						<td width="33%" class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_INVISION_POSTS']) ? $this->vars['L_INVISION_POSTS'] : $this->lang('L_INVISION_POSTS'); ?></span></b></td>
						<td width="64%" class="row1"><span class="genmed"><b><?php echo isset($this->vars['POSTS']) ? $this->vars['POSTS'] : $this->lang('POSTS'); ?></b>&nbsp;-&nbsp;<?php echo isset($this->vars['INVISION_POST_PERCENT_STATS']) ? $this->vars['INVISION_POST_PERCENT_STATS'] : $this->lang('INVISION_POST_PERCENT_STATS'); ?></span></td>
					</tr>
					<?php if ($this->vars['S_POSTS_SECTION']) {  ?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_INVISION_PPD_STATS']) ? $this->vars['L_INVISION_PPD_STATS'] : $this->lang('L_INVISION_PPD_STATS'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['INVISION_POST_DAY_STATS']) ? $this->vars['INVISION_POST_DAY_STATS'] : $this->lang('INVISION_POST_DAY_STATS'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_INVISION_MOST_ACTIVE']) ? $this->vars['L_INVISION_MOST_ACTIVE'] : $this->lang('L_INVISION_MOST_ACTIVE'); ?></span></b></td>
						<td class="row1"><div class="genmed"><?php if ($this->vars['INVISION_MOST_ACTIVE_FORUM_ID'] > 0) {  ?><a href="<?php echo isset($this->vars['INVISION_MOST_ACTIVE_FORUM_URL']) ? $this->vars['INVISION_MOST_ACTIVE_FORUM_URL'] : $this->lang('INVISION_MOST_ACTIVE_FORUM_URL'); ?>"><?php echo isset($this->vars['INVISION_MOST_ACTIVE_FORUM_NAME']) ? $this->vars['INVISION_MOST_ACTIVE_FORUM_NAME'] : $this->lang('INVISION_MOST_ACTIVE_FORUM_NAME'); ?></a><br /><?php echo isset($this->vars['L_INVISION_MOST_ACTIVE_POSTS']) ? $this->vars['L_INVISION_MOST_ACTIVE_POSTS'] : $this->lang('L_INVISION_MOST_ACTIVE_POSTS'); ?><?php } else { ?><?php echo isset($this->vars['L_NO_POSTS']) ? $this->vars['L_NO_POSTS'] : $this->lang('L_NO_POSTS'); ?><?php } ?></div></td>
					</tr>
					<?php } ?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_RECENT_USER_ACTIVITY']) ? $this->vars['L_RECENT_USER_ACTIVITY'] : $this->lang('L_RECENT_USER_ACTIVITY'); ?></span></b></td>
						<td class="row1">
							<?php if ($this->vars['S_EXTRA_STATS_AUTH']) {  ?>
							<span class="genmed">[ <a href="<?php echo isset($this->vars['U_EXTRA_STATS']) ? $this->vars['U_EXTRA_STATS'] : $this->lang('U_EXTRA_STATS'); ?>"><?php echo isset($this->vars['L_EXTRA_STATS']) ? $this->vars['L_EXTRA_STATS'] : $this->lang('L_EXTRA_STATS'); ?></a> ]</span><br />
							<?php } ?>
							<?php if ($this->vars['S_POSTS_SECTION']) {  ?>
							<span class="genmed">[ <a href="<?php echo isset($this->vars['U_USER_RECENT_TOPICS']) ? $this->vars['U_USER_RECENT_TOPICS'] : $this->lang('U_USER_RECENT_TOPICS'); ?>"><?php echo isset($this->vars['L_USER_TOPICS_STARTED']) ? $this->vars['L_USER_TOPICS_STARTED'] : $this->lang('L_USER_TOPICS_STARTED'); ?></a> ]</span><br />
							<span class="genmed">[ <a href="<?php echo isset($this->vars['U_USER_RECENT_POSTS']) ? $this->vars['U_USER_RECENT_POSTS'] : $this->lang('U_USER_RECENT_POSTS'); ?>"><?php echo isset($this->vars['L_USER_POSTS']) ? $this->vars['L_USER_POSTS'] : $this->lang('L_USER_POSTS'); ?></a> ]</span><br />
							<?php } ?>
							<?php if ($this->vars['S_ADMIN']) {  ?>
							<span class="genmed">[ <a href="<?php echo isset($this->vars['U_USER_RECENT_TOPICS_VIEW']) ? $this->vars['U_USER_RECENT_TOPICS_VIEW'] : $this->lang('U_USER_RECENT_TOPICS_VIEW'); ?>"><?php echo isset($this->vars['L_USER_TOPICS_VIEWS']) ? $this->vars['L_USER_TOPICS_VIEWS'] : $this->lang('L_USER_TOPICS_VIEWS'); ?></a> ]</span>
							<?php } ?>
						</td>
					</tr>
					<?php

$show_thanks_profile_count = ( isset($this->_tpldata['show_thanks_profile.']) ) ? sizeof($this->_tpldata['show_thanks_profile.']) : 0;
for ($show_thanks_profile_i = 0; $show_thanks_profile_i < $show_thanks_profile_count; $show_thanks_profile_i++)
{
 $show_thanks_profile_item = &$this->_tpldata['show_thanks_profile.'][$show_thanks_profile_i];
 $show_thanks_profile_item['S_ROW_COUNT'] = $show_thanks_profile_i;
 $show_thanks_profile_item['S_NUM_ROWS'] = $show_thanks_profile_count;

?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_THANKS_RECEIVED']) ? $this->vars['L_THANKS_RECEIVED'] : $this->lang('L_THANKS_RECEIVED'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['THANKS_RECEIVED']) ? $this->vars['THANKS_RECEIVED'] : $this->lang('THANKS_RECEIVED'); ?></span></td>
					</tr>
					<?php

} // END show_thanks_profile

if(isset($show_thanks_profile_item)) { unset($show_thanks_profile_item); } 

?>
					<?php if ($this->vars['FEEDBACK']) {  ?>
					<tr>
						<td class="row2" valign="top" width="30%"><b><span class="genmed"><?php echo isset($this->vars['L_FEEDBACK_RECEIVED']) ? $this->vars['L_FEEDBACK_RECEIVED'] : $this->lang('L_FEEDBACK_RECEIVED'); ?></span></b></td>
						<td class="row1"><?php echo isset($this->vars['FEEDBACK']) ? $this->vars['FEEDBACK'] : $this->lang('FEEDBACK'); ?></td>
					</tr>
					<?php } ?>
					<?php if ($this->vars['S_ADMIN_MOD']) {  ?>
					<tr><th colspan="2" align="center"><?php echo isset($this->vars['L_MODERATOR_IP_INFORMATION']) ? $this->vars['L_MODERATOR_IP_INFORMATION'] : $this->lang('L_MODERATOR_IP_INFORMATION'); ?>:</th></tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_EMAIL_ADDRESS']) ? $this->vars['L_EMAIL_ADDRESS'] : $this->lang('L_EMAIL_ADDRESS'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><a href="mailto:<?php echo isset($this->vars['USER_EMAIL_ADDRESS']) ? $this->vars['USER_EMAIL_ADDRESS'] : $this->lang('USER_EMAIL_ADDRESS'); ?>"><?php echo isset($this->vars['USER_EMAIL_ADDRESS']) ? $this->vars['USER_EMAIL_ADDRESS'] : $this->lang('USER_EMAIL_ADDRESS'); ?></a></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_REGISTERED_IP_ADDRESS']) ? $this->vars['L_REGISTERED_IP_ADDRESS'] : $this->lang('L_REGISTERED_IP_ADDRESS'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><?php echo isset($this->vars['U_USER_IP_ADDRESS']) ? $this->vars['U_USER_IP_ADDRESS'] : $this->lang('U_USER_IP_ADDRESS'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_REGISTERED_HOSTNAME']) ? $this->vars['L_REGISTERED_HOSTNAME'] : $this->lang('L_REGISTERED_HOSTNAME'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><?php echo isset($this->vars['USER_REGISTERED_HOSTNAME']) ? $this->vars['USER_REGISTERED_HOSTNAME'] : $this->lang('USER_REGISTERED_HOSTNAME'); ?></span></td>
					</tr>
					<?php } ?>
				</table>
			</td>
			<td width="2"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="7" height="1" alt="" /></td>
			<td width="50%" valign="top" class="forumline">
				<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr><th colspan="2"><span class="genmed"><b><?php echo isset($this->vars['L_INVISION_A_STATS']) ? $this->vars['L_INVISION_A_STATS'] : $this->lang('L_INVISION_A_STATS'); ?></b></span></th></tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['JOINED']) ? $this->vars['JOINED'] : $this->lang('JOINED'); ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_LOGON']) ? $this->vars['L_LOGON'] : $this->lang('L_LOGON'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['LAST_LOGON']) ? $this->vars['LAST_LOGON'] : $this->lang('LAST_LOGON'); ?></span></td>
					</tr>
					<?php if ($this->vars['S_ADMIN_MOD']) {  ?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_TOTAL_ONLINE_TIME']) ? $this->vars['L_TOTAL_ONLINE_TIME'] : $this->lang('L_TOTAL_ONLINE_TIME'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['TOTAL_ONLINE_TIME']) ? $this->vars['TOTAL_ONLINE_TIME'] : $this->lang('TOTAL_ONLINE_TIME'); ?></span></td>
					</tr>
					<?php } ?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_Profile_viewed']) ? $this->vars['L_Profile_viewed'] : $this->lang('L_Profile_viewed'); ?></span></b></td>
						<td class="row1 post-buttons"><span class="genmed"><?php echo isset($this->vars['U_VISITS']) ? $this->vars['U_VISITS'] : $this->lang('U_VISITS'); ?></span></td>
					</tr>
					<?php

$switch_upload_limits_count = ( isset($this->_tpldata['switch_upload_limits.']) ) ? sizeof($this->_tpldata['switch_upload_limits.']) : 0;
for ($switch_upload_limits_i = 0; $switch_upload_limits_i < $switch_upload_limits_count; $switch_upload_limits_i++)
{
 $switch_upload_limits_item = &$this->_tpldata['switch_upload_limits.'][$switch_upload_limits_i];
 $switch_upload_limits_item['S_ROW_COUNT'] = $switch_upload_limits_i;
 $switch_upload_limits_item['S_NUM_ROWS'] = $switch_upload_limits_count;

?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['L_UPLOAD_QUOTA']) ? $this->vars['L_UPLOAD_QUOTA'] : $this->lang('L_UPLOAD_QUOTA'); ?></span></b></td>
						<td align="left" class="row2">
							<table width="190" cellspacing="0" class="forumline">
								<tr>
									<td colspan="3" width="190" class="row2" nowrap="nowrap"><img src="<?php echo isset($this->vars['BAR_GRAPHIC_LEFT']) ? $this->vars['BAR_GRAPHIC_LEFT'] : $this->lang('BAR_GRAPHIC_LEFT'); ?>" width="4" height="12" alt="" /><img src="<?php echo isset($this->vars['BAR_GRAPHIC_BODY']) ? $this->vars['BAR_GRAPHIC_BODY'] : $this->lang('BAR_GRAPHIC_BODY'); ?>" width="<?php echo isset($this->vars['UPLOAD_LIMIT_IMG_WIDTH']) ? $this->vars['UPLOAD_LIMIT_IMG_WIDTH'] : $this->lang('UPLOAD_LIMIT_IMG_WIDTH'); ?>" height="12" alt="<?php echo isset($this->vars['INBOX_LIMIT_PERCENT']) ? $this->vars['INBOX_LIMIT_PERCENT'] : $this->lang('INBOX_LIMIT_PERCENT'); ?>" /><img src="<?php echo isset($this->vars['BAR_GRAPHIC_RIGHT']) ? $this->vars['BAR_GRAPHIC_RIGHT'] : $this->lang('BAR_GRAPHIC_RIGHT'); ?>" width="4" height="12" alt="" /></td>
								</tr>
								<tr>
									<td width="33%" class="row3"><span class="gensmall"><span class="text_green">0%</span></span></td>
									<td width="34%" class="row3 row-center"><span class="gensmall"><span class="text_blue">50%</span></span></td>
									<td width="33%" class="row3 row-right"><span class="gensmall"><span class="text_red">100%</span></span></td>
								</tr>
							</table>
							<span class="genmed">[<?php echo isset($this->vars['UPLOADED']) ? $this->vars['UPLOADED'] : $this->lang('UPLOADED'); ?> / <?php echo isset($this->vars['QUOTA']) ? $this->vars['QUOTA'] : $this->lang('QUOTA'); ?> / <?php echo isset($this->vars['PERCENT_FULL']) ? $this->vars['PERCENT_FULL'] : $this->lang('PERCENT_FULL'); ?>]</span><br />
							<span class="gen"><a href="<?php echo isset($this->vars['U_UACP']) ? $this->vars['U_UACP'] : $this->lang('U_UACP'); ?>" class="genmed"><?php echo isset($this->vars['L_UACP']) ? $this->vars['L_UACP'] : $this->lang('L_UACP'); ?></a></span>
						</td>
					</tr>
					<?php

} // END switch_upload_limits

if(isset($switch_upload_limits_item)) { unset($switch_upload_limits_item); } 

?>
					<?php echo isset($this->vars['CASH']) ? $this->vars['CASH'] : $this->lang('CASH'); ?>
					<?php

$trophy_count = ( isset($this->_tpldata['trophy.']) ) ? sizeof($this->_tpldata['trophy.']) : 0;
for ($trophy_i = 0; $trophy_i < $trophy_count; $trophy_i++)
{
 $trophy_item = &$this->_tpldata['trophy.'][$trophy_i];
 $trophy_item['S_ROW_COUNT'] = $trophy_i;
 $trophy_item['S_NUM_ROWS'] = $trophy_count;

?>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($trophy_item['TROPHY_TITLE']) ? $trophy_item['TROPHY_TITLE'] : ''; ?>:</span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($trophy_item['PROFILE_TROPHY']) ? $trophy_item['PROFILE_TROPHY'] : ''; ?></span></td>
					</tr>
					<tr>
						<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($this->vars['PROFILE_TITLE']) ? $this->vars['PROFILE_TITLE'] : $this->lang('PROFILE_TITLE'); ?></span></b></td>
						<td class="row1"><span class="genmed"><?php echo isset($this->vars['PROFILE_TIME']) ? $this->vars['PROFILE_TIME'] : $this->lang('PROFILE_TIME'); ?></span></td>
					</tr>
					<?php

} // END trophy

if(isset($trophy_item)) { unset($trophy_item); } 

?>
				</table>
			</td>
		</tr>
		</table>
	</td>
	<td height="1">&nbsp;</td>
</tr>
<tr><td height="2">&nbsp;</td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>

<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['L_EXTRA_PROFILE_INFO']) ? $this->vars['L_EXTRA_PROFILE_INFO'] : $this->lang('L_EXTRA_PROFILE_INFO'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td class="row1"><div class="post-text post-text-hide-flow"><?php echo isset($this->vars['SELFDES']) ? $this->vars['SELFDES'] : $this->lang('SELFDES'); ?></div></td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>

<?php

$recent_pics_block_count = ( isset($this->_tpldata['recent_pics_block.']) ) ? sizeof($this->_tpldata['recent_pics_block.']) : 0;
for ($recent_pics_block_i = 0; $recent_pics_block_i < $recent_pics_block_count; $recent_pics_block_i++)
{
 $recent_pics_block_item = &$this->_tpldata['recent_pics_block.'][$recent_pics_block_i];
 $recent_pics_block_item['S_ROW_COUNT'] = $recent_pics_block_i;
 $recent_pics_block_item['S_NUM_ROWS'] = $recent_pics_block_count;

?>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['L_RECENT_PUBLIC_PICS']) ? $this->vars['L_RECENT_PUBLIC_PICS'] : $this->lang('L_RECENT_PUBLIC_PICS'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<?php

$no_pics_count = ( isset($recent_pics_block_item['no_pics.']) ) ? sizeof($recent_pics_block_item['no_pics.']) : 0;
for ($no_pics_i = 0; $no_pics_i < $no_pics_count; $no_pics_i++)
{
 $no_pics_item = &$recent_pics_block_item['no_pics.'][$no_pics_i];
 $no_pics_item['S_ROW_COUNT'] = $no_pics_i;
 $no_pics_item['S_NUM_ROWS'] = $no_pics_count;

?>
<tr><td class="row1 row-center" colspan="<?php echo isset($this->vars['S_COLS']) ? $this->vars['S_COLS'] : $this->lang('S_COLS'); ?>" height="50"><span class="gen"><?php echo isset($this->vars['L_NO_PICS']) ? $this->vars['L_NO_PICS'] : $this->lang('L_NO_PICS'); ?></span></td></tr>
<?php

} // END no_pics

if(isset($no_pics_item)) { unset($no_pics_item); } 

?>
<?php

$recent_pics_count = ( isset($recent_pics_block_item['recent_pics.']) ) ? sizeof($recent_pics_block_item['recent_pics.']) : 0;
for ($recent_pics_i = 0; $recent_pics_i < $recent_pics_count; $recent_pics_i++)
{
 $recent_pics_item = &$recent_pics_block_item['recent_pics.'][$recent_pics_i];
 $recent_pics_item['S_ROW_COUNT'] = $recent_pics_i;
 $recent_pics_item['S_NUM_ROWS'] = $recent_pics_count;

?>
<tr>
	<?php

$recent_col_count = ( isset($recent_pics_item['recent_col.']) ) ? sizeof($recent_pics_item['recent_col.']) : 0;
for ($recent_col_i = 0; $recent_col_i < $recent_col_count; $recent_col_i++)
{
 $recent_col_item = &$recent_pics_item['recent_col.'][$recent_col_i];
 $recent_col_item['S_ROW_COUNT'] = $recent_col_i;
 $recent_col_item['S_NUM_ROWS'] = $recent_col_count;

?>
	<td class="row1 row-center" width="<?php echo isset($this->vars['S_COL_WIDTH']) ? $this->vars['S_COL_WIDTH'] : $this->lang('S_COL_WIDTH'); ?>">
		<a href="<?php echo isset($recent_col_item['U_PIC_DL']) ? $recent_col_item['U_PIC_DL'] : ''; ?>"<?php echo isset($recent_col_item['PIC_PREVIEW_HS']) ? $recent_col_item['PIC_PREVIEW_HS'] : ''; ?>><img src="<?php echo isset($recent_col_item['THUMBNAIL']) ? $recent_col_item['THUMBNAIL'] : ''; ?>" alt="<?php echo isset($recent_col_item['DESC']) ? $recent_col_item['DESC'] : ''; ?>" title="<?php echo isset($recent_col_item['DESC']) ? $recent_col_item['DESC'] : ''; ?>" vspace="10" /></a>
	</td>
	<?php

} // END recent_col

if(isset($recent_col_item)) { unset($recent_col_item); } 

?>
</tr>
<tr>
	<?php

$recent_detail_count = ( isset($recent_pics_item['recent_detail.']) ) ? sizeof($recent_pics_item['recent_detail.']) : 0;
for ($recent_detail_i = 0; $recent_detail_i < $recent_detail_count; $recent_detail_i++)
{
 $recent_detail_item = &$recent_pics_item['recent_detail.'][$recent_detail_i];
 $recent_detail_item['S_ROW_COUNT'] = $recent_detail_i;
 $recent_detail_item['S_NUM_ROWS'] = $recent_detail_count;

?>
	<td class="row1 row-center">
		<div class="gensmall">
			<?php echo isset($this->vars['L_PIC_TITLE']) ? $this->vars['L_PIC_TITLE'] : $this->lang('L_PIC_TITLE'); ?>: <a href="<?php echo isset($recent_detail_item['U_PIC_SP']) ? $recent_detail_item['U_PIC_SP'] : ''; ?>"><?php echo isset($recent_detail_item['PIC_TITLE']) ? $recent_detail_item['PIC_TITLE'] : ''; ?></a><br />
			<?php echo isset($this->vars['L_DOWNLOAD']) ? $this->vars['L_DOWNLOAD'] : $this->lang('L_DOWNLOAD'); ?>: <a href="<?php echo isset($recent_detail_item['U_PIC_DL']) ? $recent_detail_item['U_PIC_DL'] : ''; ?>"><?php echo isset($recent_detail_item['PIC_TITLE']) ? $recent_detail_item['PIC_TITLE'] : ''; ?></a><br />
			<?php echo isset($this->vars['L_POSTER']) ? $this->vars['L_POSTER'] : $this->lang('L_POSTER'); ?>: <?php echo isset($recent_detail_item['POSTER']) ? $recent_detail_item['POSTER'] : ''; ?><br />
			<?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($recent_detail_item['TIME']) ? $recent_detail_item['TIME'] : ''; ?><br />
			<?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?>: <?php echo isset($recent_detail_item['VIEW']) ? $recent_detail_item['VIEW'] : ''; ?><br />
		</div>
	</td>
	<?php

} // END recent_detail

if(isset($recent_detail_item)) { unset($recent_detail_item); } 

?>
</tr>
<?php

} // END recent_pics

if(isset($recent_pics_item)) { unset($recent_pics_item); } 

?>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
<?php

} // END recent_pics_block

if(isset($recent_pics_block_item)) { unset($recent_pics_block_item); } 

?>

<?php if ($this->vars['S_EXTRA_STATS']) {  ?>
<?php  $this->set_filename('xs_include_27eeefec27a7f71e1563978ba10bb336', 'profile_view_stats.tpl', true);  $this->pparse('xs_include_27eeefec27a7f71e1563978ba10bb336');  ?>
<?php } ?>

<?php

$profile_char_count = ( isset($this->_tpldata['profile_char.']) ) ? sizeof($this->_tpldata['profile_char.']) : 0;
for ($profile_char_i = 0; $profile_char_i < $profile_char_count; $profile_char_i++)
{
 $profile_char_item = &$this->_tpldata['profile_char.'][$profile_char_i];
 $profile_char_item['S_ROW_COUNT'] = $profile_char_i;
 $profile_char_item['S_NUM_ROWS'] = $profile_char_count;

?>
<?php echo isset($profile_char_item['CHAR_PROFILE']) ? $profile_char_item['CHAR_PROFILE'] : ''; ?>
<?php

} // END profile_char

if(isset($profile_char_item)) { unset($profile_char_item); } 

?>

<table class="empty-table" width="100%" align="center" cellspacing="0"><tr><td align="right" class="nav"><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td></tr></table>

<?php  $this->set_filename('xs_include_2b995cab2fad336f794d18d54347b9e5', 'overall_footer.tpl', true);  $this->pparse('xs_include_2b995cab2fad336f794d18d54347b9e5');  ?>