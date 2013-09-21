<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 19:11:34 +0000 (time = 1379790694)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php  $this->set_filename('xs_include_f004f47ce94034d103208749bd67a3cb', 'overall_header.tpl', true);  $this->pparse('xs_include_f004f47ce94034d103208749bd67a3cb');  ?>

<script type="text/javascript" src="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['T_COMMON_TPL_PATH']) ? $this->vars['T_COMMON_TPL_PATH'] : $this->lang('T_COMMON_TPL_PATH'); ?>js/bbcb_mg.js"></script>
<script type="text/javascript">
// <![CDATA[
function openAllSmiles()
{
	smiles = window.open('<?php echo isset($this->vars['U_SMILEYS_MORE']) ? $this->vars['U_SMILEYS_MORE'] : $this->lang('U_SMILEYS_MORE'); ?>', '_xs_smileys', 'width=600,height=400,resizable=yes,scrollbars=yes');
	smiles.focus();
	return false;
}
// ]]>
</script>

<?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ? sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
<?php

// check if quick reply is enabled
global $user, $config, $forum_id, $topic_id, $is_auth, $forum_topic_data, $lang, $images;

$can_reply = $user->data['session_logged_in'] ? true : false;
//$can_reply = true;

if($can_reply)
{
	$is_auth_type = 'auth_reply';
	if(!$is_auth[$is_auth_type])
	{
		$can_reply = false;
	}
	elseif ((($forum_topic_data['forum_status'] == FORUM_LOCKED) || ($forum_topic_data['topic_status'] == TOPIC_LOCKED)) && !$is_auth['auth_mod'])
	{
		$can_reply = false;
	}
}
if($can_reply)
{
	$this->assign_block_vars('xs_quick_reply', array());
}

// Start Check Locked Status
$lock = ($forum_topic_data['topic_status'] == TOPIC_LOCKED) ? true : false;
$unlock = ($forum_topic_data['topic_status'] == TOPIC_UNLOCKED) ? true : false;
if (($lock || $unlock) && $is_auth['auth_mod'])
{
	if ($forum_topic_data['topic_status'] == TOPIC_LOCKED)
	{
		$this->assign_block_vars('switch_unlock_topic', array(
			'L_UNLOCK_TOPIC' => $lang['Unlock_topic'],
			'S_UNLOCK_CHECKED' => ($unlock) ? 'checked="checked"' : ''
			)
		);
	}
	elseif ($forum_topic_data['topic_status'] == TOPIC_UNLOCKED)
	{
		$this->assign_block_vars('switch_lock_topic', array(
			'L_LOCK_TOPIC' => $lang['Lock_topic'],
			'S_LOCK_CHECKED' => ($lock) ? 'checked="checked"' : ''
			)
		);
	}
}
// End check locked status

$prev_id = false;
$postrow_count = (isset($this->_tpldata['postrow.'])) ? count($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
	$postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
	// set profile link and search button

	// check for new post
	$new_post = strpos($postrow_item['MINI_POST_IMG'], '_new') > 0 ? true : false;
	$postrow_item['LINK_CLASS'] = $new_post ? '-new' : '';
	// fix text
	$search = array('  ', "\t", "\n ");
	$replace = array('&nbsp;&nbsp;', '&nbsp;&nbsp;&nbsp;&nbsp;', "\n&nbsp;");
	$postrow_item['MESSAGE'] = str_replace($search, $replace, $postrow_item['MESSAGE']);
	// set prev/next post links
	$next_id = $postrow_i == ($postrow_count - 1) ? false : $this->_tpldata['postrow.'][$postrow_i + 1]['U_POST_ID'];
	if(($next_id !== false) || ($prev_id !== false))
	{
		$str = '';
		if($prev_id)
		{
			$str .= '<a href="#p' . $prev_id . '"><img src="' . $images['arrow_alt_up'] . '" alt="" /></a>';
			//$str .= '<br /><img src="' . $images['spacer'] . '" width="9" height="2" alt="" />';
		}
		else
		{
			$str .= '<img src="' . $images['spacer'] . '" width="9" height="2" alt="" />';
		}
		$str .= '&nbsp;';
		if($next_id)
		{
			//$str .= '<img src="' . $images['spacer'] . '" width="9" height="2" alt="" /><br />';
			$str .= '<a href="#p' . $next_id . '"><img src="' . $images['arrow_alt_down'] . '" alt="" /></a>';
		}
		else
		{
			$str .= '<img src="' . $images['spacer'] . '" width="9" height="2" alt="" />';
		}
		$str .= '';
		$postrow_item['ARROWS'] = $str;
	}
	$prev_id = $postrow_item['U_POST_ID'];
	ob_start();
?>
<?php echo isset($postrow_item['ATTACHMENTS']) ? $postrow_item['ATTACHMENTS'] : ''; ?>
<?php
$postrow_item['ATTACHMENTS'] = ob_get_contents();
ob_end_clean();
}
?>
<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
<?php
// show quick reply
if($can_reply)
{
	// quick reply button
	global $images;
	$this->vars['CA_QUICK_REPLY_BUTTON'] = '<a href="javascript:showQuickEditor();" title="' . $lang['Post_a_reply'] . '"><img src="' . $images['quick_reply'] . '" alt="' . $lang['Quick_Reply'] . '" title="' . $lang['Quick_Reply'] . '" /></a>';
	// quick reply form
	ob_start();
?>
<div id="quick_reply" style="display: none; position: relative;">
<a id="quick"></a>
<form action="<?php echo append_sid(CMS_PAGE_POSTING); ?>" method="post" name="post" style="display: inline;">
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
<input type="hidden" name="post_time" value="<?php echo time(); ?>" />
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo $lang['Post_a_reply']; ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1" width="200" nowrap="nowrap"><span class="gen"><b><?php echo $lang['Subject']; ?>:</b></span></td>
	<td class="row2" width="100%"><input type="text" name="subject" size="45" maxlength="120" style="width: 98%;" tabindex="2" class="post" value="<?php echo isset($this->vars['L_REPLY_PREFIX']) ? $this->vars['L_REPLY_PREFIX'] : $this->lang('L_REPLY_PREFIX'); ?><?php echo isset($this->vars['TOPIC_TITLE']) ? $this->vars['TOPIC_TITLE'] : $this->lang('TOPIC_TITLE'); ?>" /></td>
</tr>
<tr>
	<td class="row1" width="200" valign="top" nowrap="nowrap"><span class="gen"><b><?php echo $lang['Message_body']; ?>:<br /><img src="<?php echo isset($this->vars['T_TEMPLATE_PATH']) ? $this->vars['T_TEMPLATE_PATH'] : $this->lang('T_TEMPLATE_PATH'); ?>/images/spacer.gif" width="200" height="1" alt="" /></b></span></td>
	<td class="row2" width="100%"><div class="message-box"><textarea name="message" rows="15" cols="35" tabindex="3"></textarea></div></td>
</tr>
<tr>
	<td class="row1" width="200" nowrap="nowrap"><span class="gen"><b><?php echo isset($this->vars['L_SMILEYS']) ? $this->vars['L_SMILEYS'] : $this->lang('L_SMILEYS'); ?>:</b></span></td>
	<td class="row2 row-center" align="center" width="100%">
		<table width="100%" align="center">
		<tr>
			<td align="center">
				<?php

$smilies_count = ( isset($this->_tpldata['smilies.']) ) ? sizeof($this->_tpldata['smilies.']) : 0;
for ($smilies_i = 0; $smilies_i < $smilies_count; $smilies_i++)
{
 $smilies_item = &$this->_tpldata['smilies.'][$smilies_i];
 $smilies_item['S_ROW_COUNT'] = $smilies_i;
 $smilies_item['S_NUM_ROWS'] = $smilies_count;

?>
				<img src="<?php echo isset($smilies_item['URL']) ? $smilies_item['URL'] : ''; ?>" onmouseover="this.style.cursor='pointer';" onclick="emoticon('<?php echo isset($smilies_item['CODE']) ? $smilies_item['CODE'] : ''; ?>');" alt="<?php echo isset($smilies_item['DESC']) ? $smilies_item['DESC'] : ''; ?>" title="<?php echo isset($smilies_item['DESC']) ? $smilies_item['DESC'] : ''; ?>" />
				<?php

} // END smilies

if(isset($smilies_item)) { unset($smilies_item); } 

?>
			</td>
			<td align="center" valign="middle">&nbsp;<input type="button" class="liteoption" name="SmilesButt" value="<?php echo isset($this->vars['L_SMILEYS_MORE']) ? $this->vars['L_SMILEYS_MORE'] : $this->lang('L_SMILEYS_MORE'); ?>" onclick="openAllSmiles();" /></td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="row1" valign="top" nowrap="nowrap"><span class="gen"><b><?php echo $lang['Options']; ?>:</b></span></td>
	<td class="row2">
	<?php
		$user_sig = ($user->data['user_sig'] != '' && $config['allow_sig']) ? $user->data['user_sig'] : '';
		$html_on = $config['allow_html'] ? $user->data['user_allowhtml'] : 1;
		$bbcode_on = $config['allow_bbcode'] ? $user->data['user_allowbbcode'] : 0;
		$smilies_on = $config['allow_smilies'] ? $user->data['user_allowsmile'] : 0;
	?>
	<label><input type="checkbox" name="disable_acro_auto" />&nbsp;<span class="genmed"><?php echo $lang['Disable_ACRO_AUTO_post']; ?></span></label><br />
	<?php if($config['allow_html'] || (($user->data['user_level'] == ADMIN) && $config['allow_html_only_for_admins'])) { ?>
	<label><input type="checkbox" name="disable_html" <?php echo ($html_on ? '' : 'checked="checked"'); ?> />&nbsp;<span class="genmed"><?php echo $lang['Disable_HTML_post']; ?></span></label><br />
	<?php } else { ?><input type="hidden" name="disable_html" value="checked" /><?php } ?>
	<?php if($config['allow_bbcode']) { ?>
	<label><input type="checkbox" name="disable_bbcode" <?php echo ($bbcode_on ? '' : 'checked="checked"'); ?> />&nbsp;<span class="genmed"><?php echo $lang['Disable_BBCode_post']; ?></span></label><br />
	<?php } else { ?><input type="hidden" name="disable_bbcode" value="checked" /><?php } ?>
	<?php if($config['allow_smilies']) { ?>
	<label><input type="checkbox" name="disable_smilies" <?php echo ($smilies_on ? '' : 'checked="checked"'); ?> />&nbsp;<span class="genmed"><?php echo $lang['Disable_Smilies_post']; ?></span></label><br />
	<?php } else { ?><input type="hidden" name="disable_smilies" value="checked" /><?php } ?>
	<?php if($user_sig) { ?>
	<label><input type="checkbox" name="attach_sig" <?php echo ($user->data['user_attachsig'] ? 'checked="checked"' : ''); ?> />&nbsp;<span class="genmed"><?php echo $lang['Attach_signature']; ?></span></label><br />
	<?php } else { ?><input type="hidden" name="attach_sig" value="" /><?php } ?>
	<label><input type="checkbox" name="notify" <?php echo ($user->data['user_notify'] ? 'checked="checked"' : ''); ?> />&nbsp;<span class="genmed"><?php echo $lang['Notify']; ?></span></label><br />
	<?php

$switch_lock_topic_count = ( isset($this->_tpldata['switch_lock_topic.']) ) ? sizeof($this->_tpldata['switch_lock_topic.']) : 0;
for ($switch_lock_topic_i = 0; $switch_lock_topic_i < $switch_lock_topic_count; $switch_lock_topic_i++)
{
 $switch_lock_topic_item = &$this->_tpldata['switch_lock_topic.'][$switch_lock_topic_i];
 $switch_lock_topic_item['S_ROW_COUNT'] = $switch_lock_topic_i;
 $switch_lock_topic_item['S_NUM_ROWS'] = $switch_lock_topic_count;

?>
	<label><input type="checkbox" name="lock" <?php echo isset($switch_lock_topic_item['S_LOCK_CHECKED']) ? $switch_lock_topic_item['S_LOCK_CHECKED'] : ''; ?> />&nbsp;<span><?php echo isset($switch_lock_topic_item['L_LOCK_TOPIC']) ? $switch_lock_topic_item['L_LOCK_TOPIC'] : ''; ?></span></label><br />
	<?php

} // END switch_lock_topic

if(isset($switch_lock_topic_item)) { unset($switch_lock_topic_item); } 

?>
	<?php

$switch_unlock_topic_count = ( isset($this->_tpldata['switch_unlock_topic.']) ) ? sizeof($this->_tpldata['switch_unlock_topic.']) : 0;
for ($switch_unlock_topic_i = 0; $switch_unlock_topic_i < $switch_unlock_topic_count; $switch_unlock_topic_i++)
{
 $switch_unlock_topic_item = &$this->_tpldata['switch_unlock_topic.'][$switch_unlock_topic_i];
 $switch_unlock_topic_item['S_ROW_COUNT'] = $switch_unlock_topic_i;
 $switch_unlock_topic_item['S_NUM_ROWS'] = $switch_unlock_topic_count;

?>
	<label><input type="checkbox" name="unlock" <?php echo isset($switch_unlock_topic_item['S_UNLOCK_CHECKED']) ? $switch_unlock_topic_item['S_UNLOCK_CHECKED'] : ''; ?> />&nbsp;<span><?php echo isset($switch_unlock_topic_item['L_UNLOCK_TOPIC']) ? $switch_unlock_topic_item['L_UNLOCK_TOPIC'] : ''; ?></span></label><br />
	<?php

} // END switch_unlock_topic

if(isset($switch_unlock_topic_item)) { unset($switch_unlock_topic_item); } 

?>
	</td>
</tr>
<tr>
	<td class="cat" colspan="2">
		<input type="hidden" name="mode" value="reply" />
		<input type="hidden" name="f" value="<?php echo $forum_id; ?>" />
		<input type="hidden" name="t" value="<?php echo $topic_id; ?>" />
		<input type="hidden" name="sid" value="<?php echo $user->data['session_id']; ?>" />
		<input type="submit" tabindex="5" name="preview" class="liteoption" value="<?php echo $lang['Preview']; ?>" />&nbsp;
		<input type="submit" accesskey="s" tabindex="6" name="post" class="mainoption" value="<?php echo $lang['Submit']; ?>" />
	</td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</form>
</div>
<?php
	$str = ob_get_contents();
	ob_end_clean();
	$this->vars['CA_QUICK_REPLY_FORM'] = $str;
}
?>
<?php if ($this->vars['IS_KB_MODE']) {  ?>
<?php  $this->set_filename('xs_include_477d1c96cfa94eb9ee91932b526a4f75', 'viewtopic_kb_body.tpl', true);  $this->pparse('xs_include_477d1c96cfa94eb9ee91932b526a4f75');  ?>
<?php } else { ?>
<?php  $this->set_filename('xs_include_6bb1c83317e63867ef62df14e097e062', 'viewtopic_body.tpl', true);  $this->pparse('xs_include_6bb1c83317e63867ef62df14e097e062');  ?>
<?php } ?>

<?php  $this->set_filename('xs_include_2256e631a91a4e6bebd3fe92df23c9b6', 'overall_footer.tpl', true);  $this->pparse('xs_include_2256e631a91a4e6bebd3fe92df23c9b6');  ?>