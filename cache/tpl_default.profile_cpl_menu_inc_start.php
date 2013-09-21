<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 19:55:40 +0000 (time = 1379793340)

if (!defined('IN_ICYPHOENIX')) exit;

?><table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td id="var_width" width="160" valign="top" align="left" style="padding-right: 7px;">
		<div id="quick_links_profile2" style="padding-top: 5px; display: none; margin-left: 0px; text-align: left; position: relative; float: left;"><a href="#" onclick="ShowHide('quick_links_profile', 'quick_links_profile2', 'quick_links_profile'); setWidth('var_width', 160); setWidth('full_width', 'auto'); setWidth('full_width_cpl', 'auto'); return false;" title="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?> <?php echo isset($this->vars['L_CPL_NAV']) ? $this->vars['L_CPL_NAV'] : $this->lang('L_CPL_NAV'); ?>"><img src="<?php echo isset($this->vars['IMG_NAV_MENU_APPLICATION']) ? $this->vars['IMG_NAV_MENU_APPLICATION'] : $this->lang('IMG_NAV_MENU_APPLICATION'); ?>" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?> <?php echo isset($this->vars['L_CPL_NAV']) ? $this->vars['L_CPL_NAV'] : $this->lang('L_CPL_NAV'); ?>" /></a></div>
		<div id="quick_links_profile">
		<script type="text/javascript">
		<!--
		tmp = 'quick_links_profile';
		if(GetCookie(tmp) == '2')
		{
			ShowHide('quick_links_profile', 'quick_links_profile2', 'quick_links_profile');
			setWidth('var_width', 16);
		}
		//-->
		</script>
		<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('quick_links_profile', 'quick_links_profile2', 'quick_links_profile'); setWidth('var_width',16); setWidth('full_width', '100%'); setWidth('full_width_cpl', '100%');" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>" />
		<span class="forumlink"><?php echo isset($this->vars['L_CPL_NAV']) ? $this->vars['L_CPL_NAV'] : $this->lang('L_CPL_NAV'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
		<tr>
			<th style="cursor: pointer;" align="left" onclick="ShowHide('personal_profile', 'personal_profile2', 'personal_profile');">
				<img src="<?php echo isset($this->vars['IMG_NAV_MENU_USERS']) ? $this->vars['IMG_NAV_MENU_USERS'] : $this->lang('IMG_NAV_MENU_USERS'); ?>" alt="<?php echo isset($this->vars['L_CPL_PERSONAL_PROFILE']) ? $this->vars['L_CPL_PERSONAL_PROFILE'] : $this->lang('L_CPL_PERSONAL_PROFILE'); ?>" title="<?php echo isset($this->vars['L_CPL_PERSONAL_PROFILE']) ? $this->vars['L_CPL_PERSONAL_PROFILE'] : $this->lang('L_CPL_PERSONAL_PROFILE'); ?>" />&nbsp;
				<a href="#" onclick="return false;" title="<?php echo isset($this->vars['L_CPL_PERSONAL_PROFILE']) ? $this->vars['L_CPL_PERSONAL_PROFILE'] : $this->lang('L_CPL_PERSONAL_PROFILE'); ?>" class="nav-menu-link"><b><?php echo isset($this->vars['L_CPL_PERSONAL_PROFILE']) ? $this->vars['L_CPL_PERSONAL_PROFILE'] : $this->lang('L_CPL_PERSONAL_PROFILE'); ?></b></a>
			</th>
		</tr>
		<tr>
			<td class="row5">
				<div id="personal_profile2" class="nav-menu">
					<table class="forumline-no2" width="100%" cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td align="left" width="8"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_REGISTRATION_INFO']) ? $this->vars['U_CPL_REGISTRATION_INFO'] : $this->lang('U_CPL_REGISTRATION_INFO'); ?>"><?php echo isset($this->vars['L_CPL_REG_INFO']) ? $this->vars['L_CPL_REG_INFO'] : $this->lang('L_CPL_REG_INFO'); ?></a></td>
					</tr>
					<tr>
						<td align="left" width="8"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_DELETE_ACCOUNT']) ? $this->vars['U_CPL_DELETE_ACCOUNT'] : $this->lang('U_CPL_DELETE_ACCOUNT'); ?>"><?php echo isset($this->vars['L_CPL_DELETE_ACCOUNT']) ? $this->vars['L_CPL_DELETE_ACCOUNT'] : $this->lang('L_CPL_DELETE_ACCOUNT'); ?></a></td>
					</tr>
					<tr>
						<td align="left" width="8"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_PROFILE_INFO']) ? $this->vars['U_CPL_PROFILE_INFO'] : $this->lang('U_CPL_PROFILE_INFO'); ?>"><?php echo isset($this->vars['L_CPL_PROFILE_INFO']) ? $this->vars['L_CPL_PROFILE_INFO'] : $this->lang('L_CPL_PROFILE_INFO'); ?></a></td>
					</tr>
					<tr>
						<td align="left" width="8"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_ZEBRA']) ? $this->vars['U_CPL_ZEBRA'] : $this->lang('U_CPL_ZEBRA'); ?>"><?php echo isset($this->vars['L_CPL_ZEBRA']) ? $this->vars['L_CPL_ZEBRA'] : $this->lang('L_CPL_ZEBRA'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_PROFILE_VIEWED']) ? $this->vars['U_CPL_PROFILE_VIEWED'] : $this->lang('U_CPL_PROFILE_VIEWED'); ?>"><?php echo isset($this->vars['L_CPL_PROFILE_VIEWED']) ? $this->vars['L_CPL_PROFILE_VIEWED'] : $this->lang('L_CPL_PROFILE_VIEWED'); ?></a></td>
					</tr>
					<tr>
						<td align="left" width="8"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_AVATAR_PANEL']) ? $this->vars['U_CPL_AVATAR_PANEL'] : $this->lang('U_CPL_AVATAR_PANEL'); ?>"><?php echo isset($this->vars['L_CPL_AVATAR_PANEL']) ? $this->vars['L_CPL_AVATAR_PANEL'] : $this->lang('L_CPL_AVATAR_PANEL'); ?></a></td>
					</tr>
					<tr>
						<td align="left" width="8"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_SIGNATURE']) ? $this->vars['U_CPL_SIGNATURE'] : $this->lang('U_CPL_SIGNATURE'); ?>"><?php echo isset($this->vars['L_CPL_SIG_EDIT']) ? $this->vars['L_CPL_SIG_EDIT'] : $this->lang('L_CPL_SIG_EDIT'); ?></a></td>
					</tr>
					</table>
				</div>
				<div id="personal_profile" class="js-sh-box">
					<script type="text/javascript">
					<!--
					tmp = 'personal_profile';
					if(GetCookie(tmp) == '2')
					{
						ShowHide('personal_profile', 'personal_profile2', 'personal_profile');
					}
					//-->
					</script>
				</div>
			</td>
		</tr>
		<tr>
			<th style="cursor: pointer;" align="left" onclick="ShowHide('settings_options', 'settings_options2', 'settings_options');">
				<img src="<?php echo isset($this->vars['IMG_NAV_MENU_WSETTINGS']) ? $this->vars['IMG_NAV_MENU_WSETTINGS'] : $this->lang('IMG_NAV_MENU_WSETTINGS'); ?>" alt="<?php echo isset($this->vars['L_CPL_SETTINGS_OPTIONS']) ? $this->vars['L_CPL_SETTINGS_OPTIONS'] : $this->lang('L_CPL_SETTINGS_OPTIONS'); ?>" title="<?php echo isset($this->vars['L_CPL_SETTINGS_OPTIONS']) ? $this->vars['L_CPL_SETTINGS_OPTIONS'] : $this->lang('L_CPL_SETTINGS_OPTIONS'); ?>" />&nbsp;
				<a href="#" onclick="return false;" title="<?php echo isset($this->vars['L_CPL_SETTINGS_OPTIONS']) ? $this->vars['L_CPL_SETTINGS_OPTIONS'] : $this->lang('L_CPL_SETTINGS_OPTIONS'); ?>" class="nav-menu-link"><b><?php echo isset($this->vars['L_CPL_SETTINGS_OPTIONS']) ? $this->vars['L_CPL_SETTINGS_OPTIONS'] : $this->lang('L_CPL_SETTINGS_OPTIONS'); ?></b></a>
			</th>
		</tr>
		<tr>
			<td class="row5">
				<div id="settings_options2" class="nav-menu">
					<table class="forumline-no2" width="100%" cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_PREFERENCES']) ? $this->vars['U_CPL_PREFERENCES'] : $this->lang('U_CPL_PREFERENCES'); ?>"><?php echo isset($this->vars['L_CPL_PREFERENCES']) ? $this->vars['L_CPL_PREFERENCES'] : $this->lang('L_CPL_PREFERENCES'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_BOARD_SETTINGS']) ? $this->vars['U_CPL_BOARD_SETTINGS'] : $this->lang('U_CPL_BOARD_SETTINGS'); ?>"><?php echo isset($this->vars['L_CPL_BOARD_SETTINGS']) ? $this->vars['L_CPL_BOARD_SETTINGS'] : $this->lang('L_CPL_BOARD_SETTINGS'); ?></a></td>
					</tr>
					<tr>
						<td align="left" width="8"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_CALENDAR_SETTINGS']) ? $this->vars['U_CPL_CALENDAR_SETTINGS'] : $this->lang('U_CPL_CALENDAR_SETTINGS'); ?>"><?php echo isset($this->vars['L_Calendar_settings']) ? $this->vars['L_Calendar_settings'] : $this->lang('L_Calendar_settings'); ?></a></td>
					</tr>
					<tr>
						<td align="left" width="8"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_SUBFORUM_SETTINGS']) ? $this->vars['U_CPL_SUBFORUM_SETTINGS'] : $this->lang('U_CPL_SUBFORUM_SETTINGS'); ?>"><?php echo isset($this->vars['L_Hierarchy_setting']) ? $this->vars['L_Hierarchy_setting'] : $this->lang('L_Hierarchy_setting'); ?></a></td>
					</tr>
					<?php

$login_sec_link_count = ( isset($this->_tpldata['login_sec_link.']) ) ? sizeof($this->_tpldata['login_sec_link.']) : 0;
for ($login_sec_link_i = 0; $login_sec_link_i < $login_sec_link_count; $login_sec_link_i++)
{
 $login_sec_link_item = &$this->_tpldata['login_sec_link.'][$login_sec_link_i];
 $login_sec_link_item['S_ROW_COUNT'] = $login_sec_link_i;
 $login_sec_link_item['S_NUM_ROWS'] = $login_sec_link_count;

?>
					<tr>
						<td align="left" width="8"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_LOGIN_SEC']) ? $this->vars['U_LOGIN_SEC'] : $this->lang('U_LOGIN_SEC'); ?>"><?php echo isset($this->vars['L_LOGIN_SEC']) ? $this->vars['L_LOGIN_SEC'] : $this->lang('L_LOGIN_SEC'); ?></a></td>
					</tr>
					<?php

} // END login_sec_link

if(isset($login_sec_link_item)) { unset($login_sec_link_item); } 

?>
					</table>
				</div>
				<div id="settings_options" class="js-sh-box">
					<script type="text/javascript">
					<!--
					tmp = 'settings_options';
					if(GetCookie(tmp) == '2')
					{
						ShowHide('settings_options', 'settings_options2', 'settings_options');
					}
					//-->
					</script>
				</div>
			</td>
		</tr>
		<tr>
			<th style="cursor: pointer;" align="left" onclick="ShowHide('private_messages', 'private_messages2', 'private_messages');">
				<img src="<?php echo isset($this->vars['IMG_NAV_MENU_PM']) ? $this->vars['IMG_NAV_MENU_PM'] : $this->lang('IMG_NAV_MENU_PM'); ?>" alt="<?php echo isset($this->vars['L_CPL_PRIVATE_MESSAGES']) ? $this->vars['L_CPL_PRIVATE_MESSAGES'] : $this->lang('L_CPL_PRIVATE_MESSAGES'); ?>" title="<?php echo isset($this->vars['L_CPL_PRIVATE_MESSAGES']) ? $this->vars['L_CPL_PRIVATE_MESSAGES'] : $this->lang('L_CPL_PRIVATE_MESSAGES'); ?>" />&nbsp;
				<a href="#" onclick="return false;" title="<?php echo isset($this->vars['L_CPL_PRIVATE_MESSAGES']) ? $this->vars['L_CPL_PRIVATE_MESSAGES'] : $this->lang('L_CPL_PRIVATE_MESSAGES'); ?>" class="nav-menu-link"><b><?php echo isset($this->vars['L_CPL_PRIVATE_MESSAGES']) ? $this->vars['L_CPL_PRIVATE_MESSAGES'] : $this->lang('L_CPL_PRIVATE_MESSAGES'); ?></b></a>
			</th>
		</tr>
		<tr>
			<td class="row5">
				<div id="private_messages2" class="nav-menu">
					<table class="forumline-no2" width="100%" cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_NEWMSG']) ? $this->vars['U_CPL_NEWMSG'] : $this->lang('U_CPL_NEWMSG'); ?>"><?php echo isset($this->vars['L_CPL_NEWMSG']) ? $this->vars['L_CPL_NEWMSG'] : $this->lang('L_CPL_NEWMSG'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_PRIVATEMSGS']) ? $this->vars['U_PRIVATEMSGS'] : $this->lang('U_PRIVATEMSGS'); ?>"><?php echo isset($this->vars['PRIVATE_MESSAGE_INFO']) ? $this->vars['PRIVATE_MESSAGE_INFO'] : $this->lang('PRIVATE_MESSAGE_INFO'); ?></a></td>
					</tr>
					<!--
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_INBOX']) ? $this->vars['U_CPL_INBOX'] : $this->lang('U_CPL_INBOX'); ?>"><?php echo isset($this->vars['L_CPL_INBOX']) ? $this->vars['L_CPL_INBOX'] : $this->lang('L_CPL_INBOX'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_OUTBOX']) ? $this->vars['U_CPL_OUTBOX'] : $this->lang('U_CPL_OUTBOX'); ?>"><?php echo isset($this->vars['L_CPL_OUTBOX']) ? $this->vars['L_CPL_OUTBOX'] : $this->lang('L_CPL_OUTBOX'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_SAVEBOX']) ? $this->vars['U_CPL_SAVEBOX'] : $this->lang('U_CPL_SAVEBOX'); ?>"><?php echo isset($this->vars['L_CPL_SAVEBOX']) ? $this->vars['L_CPL_SAVEBOX'] : $this->lang('L_CPL_SAVEBOX'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_SENTBOX']) ? $this->vars['U_CPL_SENTBOX'] : $this->lang('U_CPL_SENTBOX'); ?>"><?php echo isset($this->vars['L_CPL_SENTBOX']) ? $this->vars['L_CPL_SENTBOX'] : $this->lang('L_CPL_SENTBOX'); ?></a></td>
					</tr>
					-->
					</table>
				</div>
				<div id="private_messages" class="js-sh-box">
					<script type="text/javascript">
					<!--
					tmp = 'private_messages';
					if(GetCookie(tmp) == '2')
					{
						ShowHide('private_messages', 'private_messages2', 'private_messages');
					}
					//-->
					</script>
				</div>
			</td>
		</tr>
		<tr>
			<th style="cursor: pointer;" align="left" onclick="ShowHide('more_info', 'more_info2', 'more_info');">
				<img src="<?php echo isset($this->vars['IMG_NAV_MENU_STAR']) ? $this->vars['IMG_NAV_MENU_STAR'] : $this->lang('IMG_NAV_MENU_STAR'); ?>" alt="<?php echo isset($this->vars['L_CPL_MORE_INFO']) ? $this->vars['L_CPL_MORE_INFO'] : $this->lang('L_CPL_MORE_INFO'); ?>" title="<?php echo isset($this->vars['L_CPL_MORE_INFO']) ? $this->vars['L_CPL_MORE_INFO'] : $this->lang('L_CPL_MORE_INFO'); ?>" />&nbsp;
				<a href="#" onclick="return false;" title="<?php echo isset($this->vars['L_CPL_MORE_INFO']) ? $this->vars['L_CPL_MORE_INFO'] : $this->lang('L_CPL_MORE_INFO'); ?>" class="nav-menu-link"><b><?php echo isset($this->vars['L_CPL_MORE_INFO']) ? $this->vars['L_CPL_MORE_INFO'] : $this->lang('L_CPL_MORE_INFO'); ?></b></a>
			</th>
		</tr>
		<tr>
			<td class="row5">
				<div id="more_info2" class="nav-menu">
					<table class="forumline-no2" width="100%" cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_DRAFTS']) ? $this->vars['U_CPL_DRAFTS'] : $this->lang('U_CPL_DRAFTS'); ?>"><?php echo isset($this->vars['L_CPL_DRAFTS']) ? $this->vars['L_CPL_DRAFTS'] : $this->lang('L_CPL_DRAFTS'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_BOOKMARKS']) ? $this->vars['U_CPL_BOOKMARKS'] : $this->lang('U_CPL_BOOKMARKS'); ?>"><?php echo isset($this->vars['L_CPL_BOOKMARKS']) ? $this->vars['L_CPL_BOOKMARKS'] : $this->lang('L_CPL_BOOKMARKS'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_WATCHED_TOPICS']) ? $this->vars['U_WATCHED_TOPICS'] : $this->lang('U_WATCHED_TOPICS'); ?>"><?php echo isset($this->vars['L_WATCHED_TOPICS']) ? $this->vars['L_WATCHED_TOPICS'] : $this->lang('L_WATCHED_TOPICS'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_SUBSCFORUMS']) ? $this->vars['U_CPL_SUBSCFORUMS'] : $this->lang('U_CPL_SUBSCFORUMS'); ?>"><?php echo isset($this->vars['L_CPL_SUBSCFORUMS']) ? $this->vars['L_CPL_SUBSCFORUMS'] : $this->lang('L_CPL_SUBSCFORUMS'); ?></a></td>
					</tr>
					<?php

$switch_show_digests_count = ( isset($this->_tpldata['switch_show_digests.']) ) ? sizeof($this->_tpldata['switch_show_digests.']) : 0;
for ($switch_show_digests_i = 0; $switch_show_digests_i < $switch_show_digests_count; $switch_show_digests_i++)
{
 $switch_show_digests_item = &$this->_tpldata['switch_show_digests.'][$switch_show_digests_i];
 $switch_show_digests_item['S_ROW_COUNT'] = $switch_show_digests_i;
 $switch_show_digests_item['S_NUM_ROWS'] = $switch_show_digests_count;

?>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_DIGESTS']) ? $this->vars['U_DIGESTS'] : $this->lang('U_DIGESTS'); ?>"><?php echo isset($this->vars['L_DIGESTS']) ? $this->vars['L_DIGESTS'] : $this->lang('L_DIGESTS'); ?></a></td>
					</tr>
					<?php

} // END switch_show_digests

if(isset($switch_show_digests_item)) { unset($switch_show_digests_item); } 

?>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_OWN_POSTS']) ? $this->vars['U_CPL_OWN_POSTS'] : $this->lang('U_CPL_OWN_POSTS'); ?>"><?php echo isset($this->vars['L_CPL_OWN_POSTS']) ? $this->vars['L_CPL_OWN_POSTS'] : $this->lang('L_CPL_OWN_POSTS'); ?></a></td>
					</tr>
					<tr>
						<td width="8" align="left" valign="middle"><?php echo isset($this->vars['IMG_NAV_MENU_SEP']) ? $this->vars['IMG_NAV_MENU_SEP'] : $this->lang('IMG_NAV_MENU_SEP'); ?></td>
						<td class="genmed" align="left"><a href="<?php echo isset($this->vars['U_CPL_OWN_PICTURES']) ? $this->vars['U_CPL_OWN_PICTURES'] : $this->lang('U_CPL_OWN_PICTURES'); ?>"><?php echo isset($this->vars['L_CPL_OWN_PICTURES']) ? $this->vars['L_CPL_OWN_PICTURES'] : $this->lang('L_CPL_OWN_PICTURES'); ?></a></td>
					</tr>
					</table>
				</div>
				<div id="more_info" class="js-sh-box">
					<script type="text/javascript">
					<!--
					tmp = 'more_info';
					if(GetCookie(tmp) == '2')
					{
						ShowHide('more_info', 'more_info2', 'more_info');
					}
					//-->
					</script>
				</div>
			</td>
		</tr>
		</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
		<?php echo isset($this->vars['FRIENDS_ONLINE']) ? $this->vars['FRIENDS_ONLINE'] : $this->lang('FRIENDS_ONLINE'); ?>
		</div>
	</td>
	<td id="full_width_cpl" valign="top" style="padding-left: 7px;">