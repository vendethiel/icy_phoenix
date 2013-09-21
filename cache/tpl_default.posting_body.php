<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 20:17:52 +0000 (time = 1379794672)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php

$switch_privmsg_count = ( isset($this->_tpldata['switch_privmsg.']) ) ? sizeof($this->_tpldata['switch_privmsg.']) : 0;
for ($switch_privmsg_i = 0; $switch_privmsg_i < $switch_privmsg_count; $switch_privmsg_i++)
{
 $switch_privmsg_item = &$this->_tpldata['switch_privmsg.'][$switch_privmsg_i];
 $switch_privmsg_item['S_ROW_COUNT'] = $switch_privmsg_i;
 $switch_privmsg_item['S_NUM_ROWS'] = $switch_privmsg_count;

?>
<?php  $this->set_filename('xs_include_86b3551b8d4ef4c39484d80068c8156f', 'overall_header.tpl', true);  $this->pparse('xs_include_86b3551b8d4ef4c39484d80068c8156f');  ?>
<?php

} // END switch_privmsg

if(isset($switch_privmsg_item)) { unset($switch_privmsg_item); } 

?>

<?php if ($this->vars['S_AJAX_FEATURES']) {  ?>
<script type="text/javascript">
// <![CDATA[
var L_RESULTS = '<?php echo isset($this->vars['L_SEARCH_RESULTS']) ? $this->vars['L_SEARCH_RESULTS'] : $this->lang('L_SEARCH_RESULTS'); ?>';
var L_RESULT = '<?php echo isset($this->vars['L_SEARCH_RESULT']) ? $this->vars['L_SEARCH_RESULT'] : $this->lang('L_SEARCH_RESULT'); ?>';
var L_MORE_MATCHES = '<?php echo isset($this->vars['L_MORE_MATCHES']) ? $this->vars['L_MORE_MATCHES'] : $this->lang('L_MORE_MATCHES'); ?>';
var L_AJAX_NO_RESULTS = '<?php echo isset($this->vars['L_AJAX_NO_RESULTS']) ? $this->vars['L_AJAX_NO_RESULTS'] : $this->lang('L_AJAX_NO_RESULTS'); ?>';
// ]]>
</script>

<!-- <script type="text/javascript" src="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['T_COMMON_TPL_PATH']) ? $this->vars['T_COMMON_TPL_PATH'] : $this->lang('T_COMMON_TPL_PATH'); ?>js/ajax/ajax_core.js"></script> -->
<script type="text/javascript" src="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['T_COMMON_TPL_PATH']) ? $this->vars['T_COMMON_TPL_PATH'] : $this->lang('T_COMMON_TPL_PATH'); ?>js/ajax/ajax_postfunctions.js"></script>
<?php } ?>

<script type="text/javascript">
// <![CDATA[
function attach_rules(forum_id)
{
	window.open('<?php echo isset($this->vars['U_ATTACH_RULES']) ? $this->vars['U_ATTACH_RULES'] : $this->lang('U_ATTACH_RULES'); ?>' + forum_id + '&sid=<?php echo isset($this->vars['S_SID']) ? $this->vars['S_SID'] : $this->lang('S_SID'); ?>', '_attach_rules', 'height=200,width=500,resizable=no,scrollbars=yes');
}
// ]]>
</script>

<?php if ($this->vars['S_JQUERY_TOPIC_TAGS']) {  ?>
<script type="text/javascript">
// <![CDATA[
	$(function() {
		$('input.tag').tagedit({
			texts: { // some texts
				removeLinkTitle: '<?php echo isset($this->vars['L_TAGS_REMOVE_ITEM']) ? $this->vars['L_TAGS_REMOVE_ITEM'] : $this->lang('L_TAGS_REMOVE_ITEM'); ?>',
				saveEditLinkTitle: '<?php echo isset($this->vars['L_TAGS_EDIT_ITEM']) ? $this->vars['L_TAGS_EDIT_ITEM'] : $this->lang('L_TAGS_EDIT_ITEM'); ?>',
				deleteLinkTitle: '<?php echo isset($this->vars['L_TAGS_DELETE_ITEM']) ? $this->vars['L_TAGS_DELETE_ITEM'] : $this->lang('L_TAGS_DELETE_ITEM'); ?>',
				deleteConfirmation: '<?php echo isset($this->vars['L_TAGS_DELETE_CONFIRM']) ? $this->vars['L_TAGS_DELETE_CONFIRM'] : $this->lang('L_TAGS_DELETE_CONFIRM'); ?>',
				deletedElementTitle: '<?php echo isset($this->vars['L_TAGS_DELETED_ITEM']) ? $this->vars['L_TAGS_DELETED_ITEM'] : $this->lang('L_TAGS_DELETED_ITEM'); ?>',
				breakEditLinkTitle: '<?php echo isset($this->vars['L_TAGS_BREAK_EDIT']) ? $this->vars['L_TAGS_BREAK_EDIT'] : $this->lang('L_TAGS_BREAK_EDIT'); ?>'
			},
			autocompleteURL: 'ajax.php?mode=tags_search_json&json=1&sid=<?php echo isset($this->vars['S_SID']) ? $this->vars['S_SID'] : $this->lang('S_SID'); ?>',
			//autocompleteOptions: {minLength: 0},
			// put a classname here if the wrapper ul shoud receive a special class
			//additionalListClass: 'post',
			// return, comma, space, period, semicolon
			//breakKeyCodes: [ 13, 44, 32, 46, 59 ]
		});
		
	});
// ]]>
</script>
<?php } ?>

<?php

$switch_privmsg_count = ( isset($this->_tpldata['switch_privmsg.']) ) ? sizeof($this->_tpldata['switch_privmsg.']) : 0;
for ($switch_privmsg_i = 0; $switch_privmsg_i < $switch_privmsg_count; $switch_privmsg_i++)
{
 $switch_privmsg_item = &$this->_tpldata['switch_privmsg.'][$switch_privmsg_i];
 $switch_privmsg_item['S_ROW_COUNT'] = $switch_privmsg_i;
 $switch_privmsg_item['S_NUM_ROWS'] = $switch_privmsg_count;

?>
<?php echo isset($this->vars['CPL_MENU_OUTPUT']) ? $this->vars['CPL_MENU_OUTPUT'] : $this->lang('CPL_MENU_OUTPUT'); ?>
<table width="100%" align="center" cellspacing="0" cellpadding="0">
<tr>
	<td width="100%" align="center" style="vertical-align: top;">
		<div class="forumline" style="margin-left: 5%; margin-right: 5%;">
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td width="25%" align="center"><?php echo isset($this->vars['INBOX_IMG']) ? $this->vars['INBOX_IMG'] : $this->lang('INBOX_IMG'); ?><br /><span class="forumlink"><?php echo isset($this->vars['INBOX']) ? $this->vars['INBOX'] : $this->lang('INBOX'); ?></span></td>
			<td width="25%" align="center"><?php echo isset($this->vars['SENTBOX_IMG']) ? $this->vars['SENTBOX_IMG'] : $this->lang('SENTBOX_IMG'); ?><br /><span class="forumlink"><?php echo isset($this->vars['SENTBOX']) ? $this->vars['SENTBOX'] : $this->lang('SENTBOX'); ?></span></td>
			<td width="25%" align="center"><?php echo isset($this->vars['OUTBOX_IMG']) ? $this->vars['OUTBOX_IMG'] : $this->lang('OUTBOX_IMG'); ?><br /><span class="forumlink"><?php echo isset($this->vars['OUTBOX']) ? $this->vars['OUTBOX'] : $this->lang('OUTBOX'); ?></span></td>
			<td width="25%" align="center"><?php echo isset($this->vars['SAVEBOX_IMG']) ? $this->vars['SAVEBOX_IMG'] : $this->lang('SAVEBOX_IMG'); ?><br /><span class="forumlink"><?php echo isset($this->vars['SAVEBOX']) ? $this->vars['SAVEBOX'] : $this->lang('SAVEBOX'); ?></span></td>
		</tr>
		</table>
		</div>
	</td>
</tr>
</table>
<?php

} // END switch_privmsg

if(isset($switch_privmsg_item)) { unset($switch_privmsg_item); } 

?>

<?php

$switch_prv_msg_review_count = ( isset($this->_tpldata['switch_prv_msg_review.']) ) ? sizeof($this->_tpldata['switch_prv_msg_review.']) : 0;
for ($switch_prv_msg_review_i = 0; $switch_prv_msg_review_i < $switch_prv_msg_review_count; $switch_prv_msg_review_i++)
{
 $switch_prv_msg_review_item = &$this->_tpldata['switch_prv_msg_review.'][$switch_prv_msg_review_i];
 $switch_prv_msg_review_item['S_ROW_COUNT'] = $switch_prv_msg_review_i;
 $switch_prv_msg_review_item['S_NUM_ROWS'] = $switch_prv_msg_review_count;

?>
<table class="forumline" width="100%" cellspacing="0">
<tr><td class="row-header" colspan="2"><span><?php echo isset($switch_prv_msg_review_item['PRIVATE_MSG_TITLE']) ? $switch_prv_msg_review_item['PRIVATE_MSG_TITLE'] : ''; ?></span></td></tr>
<tr><td align="left" valign="top" colspan="2" width="65%" class="row2"><div class="post-text post-text-hide-flow"><?php echo isset($switch_prv_msg_review_item['PRIVATE_MSG_REVIEW']) ? $switch_prv_msg_review_item['PRIVATE_MSG_REVIEW'] : ''; ?></div></td></tr>
</table>
<?php

} // END switch_prv_msg_review

if(isset($switch_prv_msg_review_item)) { unset($switch_prv_msg_review_item); } 

?>
<form action="<?php echo isset($this->vars['S_POST_ACTION']) ? $this->vars['S_POST_ACTION'] : $this->lang('S_POST_ACTION'); ?>" method="post" name="post" onsubmit="return checkForm(this);" <?php echo isset($this->vars['S_FORM_ENCTYPE']) ? $this->vars['S_FORM_ENCTYPE'] : $this->lang('S_FORM_ENCTYPE'); ?>>
<?php

$save_draft_confirm_count = ( isset($this->_tpldata['save_draft_confirm.']) ) ? sizeof($this->_tpldata['save_draft_confirm.']) : 0;
for ($save_draft_confirm_i = 0; $save_draft_confirm_i < $save_draft_confirm_count; $save_draft_confirm_i++)
{
 $save_draft_confirm_item = &$this->_tpldata['save_draft_confirm.'][$save_draft_confirm_i];
 $save_draft_confirm_item['S_ROW_COUNT'] = $save_draft_confirm_i;
 $save_draft_confirm_item['S_NUM_ROWS'] = $save_draft_confirm_count;

?>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['L_DRAFTS']) ? $this->vars['L_DRAFTS'] : $this->lang('L_DRAFTS'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td class="row1g"><?php echo isset($this->vars['L_DRAFT_CONFIRM']) ? $this->vars['L_DRAFT_CONFIRM'] : $this->lang('L_DRAFT_CONFIRM'); ?><br /><br /><input type="submit" name="draft_confirm" value="<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>" class="mainoption" /></td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
<br />
<?php

} // END save_draft_confirm

if(isset($save_draft_confirm_item)) { unset($save_draft_confirm_item); } 

?>
<input type="hidden" name="post_time" value="<?php echo time(); ?>" />
<?php echo isset($this->vars['POST_PREVIEW_BOX']) ? $this->vars['POST_PREVIEW_BOX'] : $this->lang('POST_PREVIEW_BOX'); ?>
<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<?php if ($this->vars['S_FORUM_RULES']) {  ?>
<table class="forumline" width="100%" cellspacing="0">
<tr><td class="row-header"><span><?php if ($this->vars['S_FORUM_RULES_TITLE']) {  ?><?php echo isset($this->vars['L_FORUM_RULES']) ? $this->vars['L_FORUM_RULES'] : $this->lang('L_FORUM_RULES'); ?><?php } ?>&nbsp;</span></td></tr>
<tr><td class="row1g-left" width="100%"><div class="post-text"><?php echo isset($this->vars['FORUM_RULES']) ? $this->vars['FORUM_RULES'] : $this->lang('FORUM_RULES'); ?></div></td></tr>
</table>
<br />
<?php } ?>

<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['L_POST_A']) ? $this->vars['L_POST_A'] : $this->lang('L_POST_A'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<?php

$switch_username_select_count = ( isset($this->_tpldata['switch_username_select.']) ) ? sizeof($this->_tpldata['switch_username_select.']) : 0;
for ($switch_username_select_i = 0; $switch_username_select_i < $switch_username_select_count; $switch_username_select_i++)
{
 $switch_username_select_item = &$this->_tpldata['switch_username_select.'][$switch_username_select_i];
 $switch_username_select_item['S_ROW_COUNT'] = $switch_username_select_i;
 $switch_username_select_item['S_NUM_ROWS'] = $switch_username_select_count;

?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></b></span></td>
	<td class="row2"><span class="genmed"><input type="text" class="post" tabindex="1" name="username" size="25" maxlength="25" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" /></span></td>
</tr>
<?php

} // END switch_username_select

if(isset($switch_username_select_item)) { unset($switch_username_select_item); } 

?>
<?php

$switch_privmsg_count = ( isset($this->_tpldata['switch_privmsg.']) ) ? sizeof($this->_tpldata['switch_privmsg.']) : 0;
for ($switch_privmsg_i = 0; $switch_privmsg_i < $switch_privmsg_count; $switch_privmsg_i++)
{
 $switch_privmsg_item = &$this->_tpldata['switch_privmsg.'][$switch_privmsg_i];
 $switch_privmsg_item['S_ROW_COUNT'] = $switch_privmsg_i;
 $switch_privmsg_item['S_NUM_ROWS'] = $switch_privmsg_count;

?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></b></span></td>
	<td class="row2"><span class="genmed"><input type="text" class="post" name="username" maxlength="25" size="25" tabindex="1" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" <?php echo isset($this->vars['S_AJAX_PM_USER_CHECK']) ? $this->vars['S_AJAX_PM_USER_CHECK'] : $this->lang('S_AJAX_PM_USER_CHECK'); ?> /><span id="pm_username_select">&nbsp;</span>&nbsp;<input type="submit" name="usersubmit" value="<?php echo isset($this->vars['L_FIND_USERNAME']) ? $this->vars['L_FIND_USERNAME'] : $this->lang('L_FIND_USERNAME'); ?>" class="liteoption" onclick="window.open('<?php echo isset($this->vars['U_SEARCH_USER']) ? $this->vars['U_SEARCH_USER'] : $this->lang('U_SEARCH_USER'); ?>', '_search', 'width=400,height=200,resizable=yes'); return false;" /></span></td>
</tr>
<tr id="pm_username_error_tbl" style="display: none;">
	<td class="row1">&nbsp;</td>
	<td class="row2"><span class="gen" id="pm_username_error_text">&nbsp;</span></td>
</tr>
<?php

} // END switch_privmsg

if(isset($switch_privmsg_item)) { unset($switch_privmsg_item); } 

?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?></b></span></td>
	<td class="row2"><input type="text" name="subject" size="45" maxlength="120" style="width: 98%;" tabindex="2" class="post" value="<?php echo isset($this->vars['SUBJECT']) ? $this->vars['SUBJECT'] : $this->lang('SUBJECT'); ?>" <?php echo isset($this->vars['S_AJAX_BLUR']) ? $this->vars['S_AJAX_BLUR'] : $this->lang('S_AJAX_BLUR'); ?> /></td>
</tr>
<?php if ($this->vars['S_AJAX_FEATURES']) {  ?>
<tr id="subject_error_tbl" style="display:none;">
	<td class="row1">&nbsp;</td>
	<td class="row2"><span class="gen"><?php echo isset($this->vars['L_EMPTY_SUBJECT']) ? $this->vars['L_EMPTY_SUBJECT'] : $this->lang('L_EMPTY_SUBJECT'); ?></span></td>
</tr>
<tr id="searchresults_tbl" style="display:none;">
	<td class="row1">&nbsp;</td>
	<td class="row2"><span class="gen"><a href="#" target="_blank" class="gen" id="searchresults_lnk"><?php echo isset($this->vars['L_AJAX_NO_RESULTS']) ? $this->vars['L_AJAX_NO_RESULTS'] : $this->lang('L_AJAX_NO_RESULTS'); ?></a></span></td>
</tr>
<?php } ?>
<?php

$topic_description_count = ( isset($this->_tpldata['topic_description.']) ) ? sizeof($this->_tpldata['topic_description.']) : 0;
for ($topic_description_i = 0; $topic_description_i < $topic_description_count; $topic_description_i++)
{
 $topic_description_item = &$this->_tpldata['topic_description.'][$topic_description_i];
 $topic_description_item['S_ROW_COUNT'] = $topic_description_i;
 $topic_description_item['S_NUM_ROWS'] = $topic_description_count;

?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($this->vars['L_TOPIC_DESCRIPTION']) ? $this->vars['L_TOPIC_DESCRIPTION'] : $this->lang('L_TOPIC_DESCRIPTION'); ?></b></span></td>
	<td class="row2"><span class="gen"><input type="text" name="topic_desc" size="45" maxlength="240" style="width: 98%;" tabindex="3" class="post" value="<?php echo isset($this->vars['TOPIC_DESCRIPTION']) ? $this->vars['TOPIC_DESCRIPTION'] : $this->lang('TOPIC_DESCRIPTION'); ?>" /></span></td>
</tr>
<?php

} // END topic_description

if(isset($topic_description_item)) { unset($topic_description_item); } 

?>
<?php

$switch_type_toggle_count = ( isset($this->_tpldata['switch_type_toggle.']) ) ? sizeof($this->_tpldata['switch_type_toggle.']) : 0;
for ($switch_type_toggle_i = 0; $switch_type_toggle_i < $switch_type_toggle_count; $switch_type_toggle_i++)
{
 $switch_type_toggle_item = &$this->_tpldata['switch_type_toggle.'][$switch_type_toggle_i];
 $switch_type_toggle_item['S_ROW_COUNT'] = $switch_type_toggle_i;
 $switch_type_toggle_item['S_NUM_ROWS'] = $switch_type_toggle_count;

?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($this->vars['L_TYPE_TOGGLE_TITLE']) ? $this->vars['L_TYPE_TOGGLE_TITLE'] : $this->lang('L_TYPE_TOGGLE_TITLE'); ?></b></span></td>
	<td class="row2"><span class="gen"><b><?php echo isset($this->vars['S_TYPE_TOGGLE']) ? $this->vars['S_TYPE_TOGGLE'] : $this->lang('S_TYPE_TOGGLE'); ?></b></span></td>
</tr>
<?php

} // END switch_type_toggle

if(isset($switch_type_toggle_item)) { unset($switch_type_toggle_item); } 

?>
<?php

$switch_news_cat_count = ( isset($this->_tpldata['switch_news_cat.']) ) ? sizeof($this->_tpldata['switch_news_cat.']) : 0;
for ($switch_news_cat_i = 0; $switch_news_cat_i < $switch_news_cat_count; $switch_news_cat_i++)
{
 $switch_news_cat_item = &$this->_tpldata['switch_news_cat.'][$switch_news_cat_i];
 $switch_news_cat_item['S_ROW_COUNT'] = $switch_news_cat_i;
 $switch_news_cat_item['S_NUM_ROWS'] = $switch_news_cat_count;

?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($switch_news_cat_item['L_NEWS_CATEGORY']) ? $switch_news_cat_item['L_NEWS_CATEGORY'] : ''; ?></b></span></td>
	<td class="row2"><select name="<?php echo isset($switch_news_cat_item['S_NAME']) ? $switch_news_cat_item['S_NAME'] : ''; ?>"><?php echo isset($switch_news_cat_item['S_CATEGORY_BOX']) ? $switch_news_cat_item['S_CATEGORY_BOX'] : ''; ?></select></td>
</tr>
<?php

} // END switch_news_cat

if(isset($switch_news_cat_item)) { unset($switch_news_cat_item); } 

?>
<tr>
	<td class="row1" width="22%" valign="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="1">
			<tr><td><span class="gen"><b><?php echo isset($this->vars['L_MESSAGE_BODY']) ? $this->vars['L_MESSAGE_BODY'] : $this->lang('L_MESSAGE_BODY'); ?></b></span></td></tr>
			<tr>
				<td valign="middle" align="center"><br />
					<!-- Begin Lo-Fi Mod -->
					<?php
					global $lofi;
					if (!$lofi)
					{
					?>
					<!-- End Lo-Fi Mod -->
					<?php echo isset($this->vars['BBCB_SMILEYS_MG']) ? $this->vars['BBCB_SMILEYS_MG'] : $this->lang('BBCB_SMILEYS_MG'); ?>
					<!-- Begin Lo-Fi Mod -->
					<?php
					}
					?>
					<!-- End Lo-Fi Mod -->
					<br />
				</td>
			</tr>
		</table>
	</td>
	<td class="row2" width="78%" valign="top">
		<?php echo isset($this->vars['BBCB_MG']) ? $this->vars['BBCB_MG'] : $this->lang('BBCB_MG'); ?>
		<div class="message-box"><textarea id="message" name="message" rows="15" cols="76" tabindex="4" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"><?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?></textarea></div>
	</td>
</tr>
<?php

$switch_edit_count = ( isset($this->_tpldata['switch_edit.']) ) ? sizeof($this->_tpldata['switch_edit.']) : 0;
for ($switch_edit_i = 0; $switch_edit_i < $switch_edit_count; $switch_edit_i++)
{
 $switch_edit_item = &$this->_tpldata['switch_edit.'][$switch_edit_i];
 $switch_edit_item['S_ROW_COUNT'] = $switch_edit_i;
 $switch_edit_item['S_NUM_ROWS'] = $switch_edit_count;

?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($this->vars['L_EDIT_NOTES']) ? $this->vars['L_EDIT_NOTES'] : $this->lang('L_EDIT_NOTES'); ?></b></span></td>
	<td class="row2"><input type="text" name="notes" size="45" maxlength="60" style="width: 98%;" tabindex="5" class="post" value="<?php echo isset($switch_edit_item['NOTES']) ? $switch_edit_item['NOTES'] : ''; ?>" /></td>
</tr>
<?php

} // END switch_edit

if(isset($switch_edit_item)) { unset($switch_edit_item); } 

?>
<?php if ($this->vars['S_POSTING_TOPIC']) {  ?>
<?php if ($this->vars['S_ADMIN'] || $this->vars['S_MOD']) {  ?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($this->vars['L_CLEAN_NAME']) ? $this->vars['L_CLEAN_NAME'] : $this->lang('L_CLEAN_NAME'); ?></b></span><br /><span class="gensmall"><?php echo isset($this->vars['L_CLEAN_NAME_EXPLAIN']) ? $this->vars['L_CLEAN_NAME_EXPLAIN'] : $this->lang('L_CLEAN_NAME_EXPLAIN'); ?></span></td>
	<td class="row2"><span class="gen"><input type="text" name="topic_title_clean" size="45" maxlength="240" style="width: 98%;" tabindex="6" class="post" value="<?php echo isset($this->vars['TOPIC_TITLE_CLEAN']) ? $this->vars['TOPIC_TITLE_CLEAN'] : $this->lang('TOPIC_TITLE_CLEAN'); ?>" /></span></td>
</tr>
<?php } ?>
<?php if ($this->vars['S_TOPIC_TAGS']) {  ?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($this->vars['L_TOPIC_TAGS']) ? $this->vars['L_TOPIC_TAGS'] : $this->lang('L_TOPIC_TAGS'); ?></b></span><br /><span class="gensmall"><?php echo isset($this->vars['L_TOPIC_TAGS_EXPLAIN']) ? $this->vars['L_TOPIC_TAGS_EXPLAIN'] : $this->lang('L_TOPIC_TAGS_EXPLAIN'); ?></span></td>
	<!-- <td class="row2"><span class="gen"><input type="text" id="topic_tags" name="topic_tags" size="45" maxlength="240" style="width: 98%;" tabindex="7" class="post" value="<?php echo isset($this->vars['TOPIC_TAGS']) ? $this->vars['TOPIC_TAGS'] : $this->lang('TOPIC_TAGS'); ?>" /></span></td> -->
	<td class="row2">
		<span class="gen">
			<?php if ($this->vars['S_JQUERY_TOPIC_TAGS']) {  ?>
			<?php

$ttag_count = ( isset($this->_tpldata['ttag.']) ) ? sizeof($this->_tpldata['ttag.']) : 0;
for ($ttag_i = 0; $ttag_i < $ttag_count; $ttag_i++)
{
 $ttag_item = &$this->_tpldata['ttag.'][$ttag_i];
 $ttag_item['S_ROW_COUNT'] = $ttag_i;
 $ttag_item['S_NUM_ROWS'] = $ttag_count;

?>
			<input type="text" name="ttag[]" size="45" maxlength="240" style="width: 98%;" tabindex="8" class="tag" value="<?php echo isset($ttag_item['TTAG']) ? $ttag_item['TTAG'] : ''; ?>" />
			<?php

} // END ttag

if(isset($ttag_item)) { unset($ttag_item); } 

?>
			<input type="text" name="ttag[]" size="45" maxlength="240" style="width: 98%;" tabindex="8" class="tag" value="" />
			<?php } else { ?>
			<input type="text" name="topic_tags" size="45" maxlength="240" style="width: 98%;" tabindex="7" class="post" value="<?php echo isset($this->vars['TOPIC_TAGS']) ? $this->vars['TOPIC_TAGS'] : $this->lang('TOPIC_TAGS'); ?>" />
			<?php } ?>
		</span>
	</td>
</tr>
<?php } ?>
<?php } ?>
<?php if ($this->vars['S_FEATURED_IMAGE']) {  ?>
<tr>
	<td class="row1"><span class="gen"><b><?php echo isset($this->vars['L_POST_FEATURED_IMAGE']) ? $this->vars['L_POST_FEATURED_IMAGE'] : $this->lang('L_POST_FEATURED_IMAGE'); ?></b></span><br /><span class="gensmall"><?php echo isset($this->vars['L_POST_FEATURED_IMAGE_EXPLAIN']) ? $this->vars['L_POST_FEATURED_IMAGE_EXPLAIN'] : $this->lang('L_POST_FEATURED_IMAGE_EXPLAIN'); ?></span></td>
	<td class="row2"><span class="gen"><input type="text" name="post_images" size="45" maxlength="240" style="width: 98%;" tabindex="6" class="post" value="<?php echo isset($this->vars['POST_FEATURED_IMAGE']) ? $this->vars['POST_FEATURED_IMAGE'] : $this->lang('POST_FEATURED_IMAGE'); ?>" /></span></td>
</tr>
<?php } ?>
<tr>
	<td class="catBottom" colspan="2">
		<input type="button" tabindex="8" class="liteoption" value="<?php echo isset($this->vars['L_POST_HIGHLIGHT']) ? $this->vars['L_POST_HIGHLIGHT'] : $this->lang('L_POST_HIGHLIGHT'); ?>" onclick="copymetasearch();" />&nbsp;
		<input type="submit" tabindex="9" name="preview" class="liteoption" value="<?php echo isset($this->vars['L_PREVIEW']) ? $this->vars['L_PREVIEW'] : $this->lang('L_PREVIEW'); ?>" />&nbsp;
		<?php

$allow_drafts_count = ( isset($this->_tpldata['allow_drafts.']) ) ? sizeof($this->_tpldata['allow_drafts.']) : 0;
for ($allow_drafts_i = 0; $allow_drafts_i < $allow_drafts_count; $allow_drafts_i++)
{
 $allow_drafts_item = &$this->_tpldata['allow_drafts.'][$allow_drafts_i];
 $allow_drafts_item['S_ROW_COUNT'] = $allow_drafts_i;
 $allow_drafts_item['S_NUM_ROWS'] = $allow_drafts_count;

?>
		<input type="submit" tabindex="10" name="draft" class="altoption" value="<?php echo isset($this->vars['L_DRAFT_SAVE']) ? $this->vars['L_DRAFT_SAVE'] : $this->lang('L_DRAFT_SAVE'); ?>" />&nbsp;
		<?php

} // END allow_drafts

if(isset($allow_drafts_item)) { unset($allow_drafts_item); } 

?>
		<input type="submit" accesskey="s" tabindex="11" name="post" class="mainoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" />
	</td>
</tr>
<tr>
	<td class="row1" valign="top"><span class="gen"><b><?php echo isset($this->vars['L_OPTIONS']) ? $this->vars['L_OPTIONS'] : $this->lang('L_OPTIONS'); ?></b></span><br /><span class="gensmall"><?php echo isset($this->vars['HTML_STATUS']) ? $this->vars['HTML_STATUS'] : $this->lang('HTML_STATUS'); ?><br /><?php echo isset($this->vars['BBCODE_STATUS']) ? $this->vars['BBCODE_STATUS'] : $this->lang('BBCODE_STATUS'); ?><br /><?php echo isset($this->vars['SMILIES_STATUS']) ? $this->vars['SMILIES_STATUS'] : $this->lang('SMILIES_STATUS'); ?></span></td>
	<td class="row2">
		<div class="genmed">
			<?php

$switch_show_portal_count = ( isset($this->_tpldata['switch_show_portal.']) ) ? sizeof($this->_tpldata['switch_show_portal.']) : 0;
for ($switch_show_portal_i = 0; $switch_show_portal_i < $switch_show_portal_count; $switch_show_portal_i++)
{
 $switch_show_portal_item = &$this->_tpldata['switch_show_portal.'][$switch_show_portal_i];
 $switch_show_portal_item['S_ROW_COUNT'] = $switch_show_portal_i;
 $switch_show_portal_item['S_NUM_ROWS'] = $switch_show_portal_count;

?>
			<label><input type="checkbox" name="topic_show_portal" <?php echo isset($this->vars['S_TOPIC_SHOW_PORTAL']) ? $this->vars['S_TOPIC_SHOW_PORTAL'] : $this->lang('S_TOPIC_SHOW_PORTAL'); ?> />&nbsp;<?php echo isset($this->vars['L_SHOW_PORTAL']) ? $this->vars['L_SHOW_PORTAL'] : $this->lang('L_SHOW_PORTAL'); ?></label><br />
			<?php

} // END switch_show_portal

if(isset($switch_show_portal_item)) { unset($switch_show_portal_item); } 

?>
			<?php

$switch_html_checkbox_count = ( isset($this->_tpldata['switch_html_checkbox.']) ) ? sizeof($this->_tpldata['switch_html_checkbox.']) : 0;
for ($switch_html_checkbox_i = 0; $switch_html_checkbox_i < $switch_html_checkbox_count; $switch_html_checkbox_i++)
{
 $switch_html_checkbox_item = &$this->_tpldata['switch_html_checkbox.'][$switch_html_checkbox_i];
 $switch_html_checkbox_item['S_ROW_COUNT'] = $switch_html_checkbox_i;
 $switch_html_checkbox_item['S_NUM_ROWS'] = $switch_html_checkbox_count;

?>
			<label><input type="checkbox" name="disable_html" <?php echo isset($this->vars['S_HTML_CHECKED']) ? $this->vars['S_HTML_CHECKED'] : $this->lang('S_HTML_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_DISABLE_HTML']) ? $this->vars['L_DISABLE_HTML'] : $this->lang('L_DISABLE_HTML'); ?></label><br />
			<?php

} // END switch_html_checkbox

if(isset($switch_html_checkbox_item)) { unset($switch_html_checkbox_item); } 

?>
			<label><input type="checkbox" name="disable_acro_auto" <?php echo isset($this->vars['S_ACRO_AUTO_CHECKED']) ? $this->vars['S_ACRO_AUTO_CHECKED'] : $this->lang('S_ACRO_AUTO_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_DISABLE_ACRO_AUTO']) ? $this->vars['L_DISABLE_ACRO_AUTO'] : $this->lang('L_DISABLE_ACRO_AUTO'); ?></label><br />
			<?php

$switch_bbcode_checkbox_count = ( isset($this->_tpldata['switch_bbcode_checkbox.']) ) ? sizeof($this->_tpldata['switch_bbcode_checkbox.']) : 0;
for ($switch_bbcode_checkbox_i = 0; $switch_bbcode_checkbox_i < $switch_bbcode_checkbox_count; $switch_bbcode_checkbox_i++)
{
 $switch_bbcode_checkbox_item = &$this->_tpldata['switch_bbcode_checkbox.'][$switch_bbcode_checkbox_i];
 $switch_bbcode_checkbox_item['S_ROW_COUNT'] = $switch_bbcode_checkbox_i;
 $switch_bbcode_checkbox_item['S_NUM_ROWS'] = $switch_bbcode_checkbox_count;

?>
			<label><input type="checkbox" name="disable_bbcode" <?php echo isset($this->vars['S_BBCODE_CHECKED']) ? $this->vars['S_BBCODE_CHECKED'] : $this->lang('S_BBCODE_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_DISABLE_BBCODE']) ? $this->vars['L_DISABLE_BBCODE'] : $this->lang('L_DISABLE_BBCODE'); ?></label><br />
			<?php

} // END switch_bbcode_checkbox

if(isset($switch_bbcode_checkbox_item)) { unset($switch_bbcode_checkbox_item); } 

?>
			<?php

$switch_smilies_checkbox_count = ( isset($this->_tpldata['switch_smilies_checkbox.']) ) ? sizeof($this->_tpldata['switch_smilies_checkbox.']) : 0;
for ($switch_smilies_checkbox_i = 0; $switch_smilies_checkbox_i < $switch_smilies_checkbox_count; $switch_smilies_checkbox_i++)
{
 $switch_smilies_checkbox_item = &$this->_tpldata['switch_smilies_checkbox.'][$switch_smilies_checkbox_i];
 $switch_smilies_checkbox_item['S_ROW_COUNT'] = $switch_smilies_checkbox_i;
 $switch_smilies_checkbox_item['S_NUM_ROWS'] = $switch_smilies_checkbox_count;

?>
			<label><input type="checkbox" name="disable_smilies" <?php echo isset($this->vars['S_SMILIES_CHECKED']) ? $this->vars['S_SMILIES_CHECKED'] : $this->lang('S_SMILIES_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_DISABLE_SMILIES']) ? $this->vars['L_DISABLE_SMILIES'] : $this->lang('L_DISABLE_SMILIES'); ?></label><br />
			<?php

} // END switch_smilies_checkbox

if(isset($switch_smilies_checkbox_item)) { unset($switch_smilies_checkbox_item); } 

?>
			<?php

$switch_signature_checkbox_count = ( isset($this->_tpldata['switch_signature_checkbox.']) ) ? sizeof($this->_tpldata['switch_signature_checkbox.']) : 0;
for ($switch_signature_checkbox_i = 0; $switch_signature_checkbox_i < $switch_signature_checkbox_count; $switch_signature_checkbox_i++)
{
 $switch_signature_checkbox_item = &$this->_tpldata['switch_signature_checkbox.'][$switch_signature_checkbox_i];
 $switch_signature_checkbox_item['S_ROW_COUNT'] = $switch_signature_checkbox_i;
 $switch_signature_checkbox_item['S_NUM_ROWS'] = $switch_signature_checkbox_count;

?>
			<label><input type="checkbox" name="attach_sig" <?php echo isset($this->vars['S_SIGNATURE_CHECKED']) ? $this->vars['S_SIGNATURE_CHECKED'] : $this->lang('S_SIGNATURE_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_ATTACH_SIGNATURE']) ? $this->vars['L_ATTACH_SIGNATURE'] : $this->lang('L_ATTACH_SIGNATURE'); ?></label><br />
			<?php

} // END switch_signature_checkbox

if(isset($switch_signature_checkbox_item)) { unset($switch_signature_checkbox_item); } 

?>
			<?php

$switch_bookmark_checkbox_count = ( isset($this->_tpldata['switch_bookmark_checkbox.']) ) ? sizeof($this->_tpldata['switch_bookmark_checkbox.']) : 0;
for ($switch_bookmark_checkbox_i = 0; $switch_bookmark_checkbox_i < $switch_bookmark_checkbox_count; $switch_bookmark_checkbox_i++)
{
 $switch_bookmark_checkbox_item = &$this->_tpldata['switch_bookmark_checkbox.'][$switch_bookmark_checkbox_i];
 $switch_bookmark_checkbox_item['S_ROW_COUNT'] = $switch_bookmark_checkbox_i;
 $switch_bookmark_checkbox_item['S_NUM_ROWS'] = $switch_bookmark_checkbox_count;

?>
			<label><input type="checkbox" name="setbm" <?php echo isset($this->vars['S_SETBM_CHECKED']) ? $this->vars['S_SETBM_CHECKED'] : $this->lang('S_SETBM_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_SET_BOOKMARK']) ? $this->vars['L_SET_BOOKMARK'] : $this->lang('L_SET_BOOKMARK'); ?></label><br />
			<?php

} // END switch_bookmark_checkbox

if(isset($switch_bookmark_checkbox_item)) { unset($switch_bookmark_checkbox_item); } 

?>
			<?php

$switch_notify_checkbox_count = ( isset($this->_tpldata['switch_notify_checkbox.']) ) ? sizeof($this->_tpldata['switch_notify_checkbox.']) : 0;
for ($switch_notify_checkbox_i = 0; $switch_notify_checkbox_i < $switch_notify_checkbox_count; $switch_notify_checkbox_i++)
{
 $switch_notify_checkbox_item = &$this->_tpldata['switch_notify_checkbox.'][$switch_notify_checkbox_i];
 $switch_notify_checkbox_item['S_ROW_COUNT'] = $switch_notify_checkbox_i;
 $switch_notify_checkbox_item['S_NUM_ROWS'] = $switch_notify_checkbox_count;

?>
			<label><input type="checkbox" name="notify" <?php echo isset($this->vars['S_NOTIFY_CHECKED']) ? $this->vars['S_NOTIFY_CHECKED'] : $this->lang('S_NOTIFY_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_NOTIFY_ON_REPLY']) ? $this->vars['L_NOTIFY_ON_REPLY'] : $this->lang('L_NOTIFY_ON_REPLY'); ?></label><br />
			<?php

} // END switch_notify_checkbox

if(isset($switch_notify_checkbox_item)) { unset($switch_notify_checkbox_item); } 

?>
			<?php

$switch_mark_edit_checkbox_count = ( isset($this->_tpldata['switch_mark_edit_checkbox.']) ) ? sizeof($this->_tpldata['switch_mark_edit_checkbox.']) : 0;
for ($switch_mark_edit_checkbox_i = 0; $switch_mark_edit_checkbox_i < $switch_mark_edit_checkbox_count; $switch_mark_edit_checkbox_i++)
{
 $switch_mark_edit_checkbox_item = &$this->_tpldata['switch_mark_edit_checkbox.'][$switch_mark_edit_checkbox_i];
 $switch_mark_edit_checkbox_item['S_ROW_COUNT'] = $switch_mark_edit_checkbox_i;
 $switch_mark_edit_checkbox_item['S_NUM_ROWS'] = $switch_mark_edit_checkbox_count;

?>
			<label><input type="checkbox" name="mark_edit" <?php echo isset($this->vars['S_MARK_EDIT_CHECKED']) ? $this->vars['S_MARK_EDIT_CHECKED'] : $this->lang('S_MARK_EDIT_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_MARK_EDIT']) ? $this->vars['L_MARK_EDIT'] : $this->lang('L_MARK_EDIT'); ?></label><br />
			<?php

} // END switch_mark_edit_checkbox

if(isset($switch_mark_edit_checkbox_item)) { unset($switch_mark_edit_checkbox_item); } 

?>
			<?php

$switch_delete_checkbox_count = ( isset($this->_tpldata['switch_delete_checkbox.']) ) ? sizeof($this->_tpldata['switch_delete_checkbox.']) : 0;
for ($switch_delete_checkbox_i = 0; $switch_delete_checkbox_i < $switch_delete_checkbox_count; $switch_delete_checkbox_i++)
{
 $switch_delete_checkbox_item = &$this->_tpldata['switch_delete_checkbox.'][$switch_delete_checkbox_i];
 $switch_delete_checkbox_item['S_ROW_COUNT'] = $switch_delete_checkbox_i;
 $switch_delete_checkbox_item['S_NUM_ROWS'] = $switch_delete_checkbox_count;

?>
			<label><input type="checkbox" name="delete" />&nbsp;<?php echo isset($this->vars['L_DELETE_POST']) ? $this->vars['L_DELETE_POST'] : $this->lang('L_DELETE_POST'); ?></label><br />
			<?php

} // END switch_delete_checkbox

if(isset($switch_delete_checkbox_item)) { unset($switch_delete_checkbox_item); } 

?>
			<?php

$switch_lock_topic_count = ( isset($this->_tpldata['switch_lock_topic.']) ) ? sizeof($this->_tpldata['switch_lock_topic.']) : 0;
for ($switch_lock_topic_i = 0; $switch_lock_topic_i < $switch_lock_topic_count; $switch_lock_topic_i++)
{
 $switch_lock_topic_item = &$this->_tpldata['switch_lock_topic.'][$switch_lock_topic_i];
 $switch_lock_topic_item['S_ROW_COUNT'] = $switch_lock_topic_i;
 $switch_lock_topic_item['S_NUM_ROWS'] = $switch_lock_topic_count;

?>
			<label><input type="checkbox" name="lock" <?php echo isset($this->vars['S_LOCK_CHECKED']) ? $this->vars['S_LOCK_CHECKED'] : $this->lang('S_LOCK_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_LOCK_TOPIC']) ? $this->vars['L_LOCK_TOPIC'] : $this->lang('L_LOCK_TOPIC'); ?></label><br />
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
			<label><input type="checkbox" name="unlock" <?php echo isset($this->vars['S_UNLOCK_CHECKED']) ? $this->vars['S_UNLOCK_CHECKED'] : $this->lang('S_UNLOCK_CHECKED'); ?> />&nbsp;<?php echo isset($this->vars['L_UNLOCK_TOPIC']) ? $this->vars['L_UNLOCK_TOPIC'] : $this->lang('L_UNLOCK_TOPIC'); ?></label><br />
			<?php

} // END switch_unlock_topic

if(isset($switch_unlock_topic_item)) { unset($switch_unlock_topic_item); } 

?>
		</div>
	</td>
</tr>

<?php echo isset($this->vars['ATTACHBOX']) ? $this->vars['ATTACHBOX'] : $this->lang('ATTACHBOX'); ?>
<?php echo isset($this->vars['POLLBOX']) ? $this->vars['POLLBOX'] : $this->lang('POLLBOX'); ?>
<?php echo isset($this->vars['REGBOX']) ? $this->vars['REGBOX'] : $this->lang('REGBOX'); ?>
<?php

$switch_type_cal_count = ( isset($this->_tpldata['switch_type_cal.']) ) ? sizeof($this->_tpldata['switch_type_cal.']) : 0;
for ($switch_type_cal_i = 0; $switch_type_cal_i < $switch_type_cal_count; $switch_type_cal_i++)
{
 $switch_type_cal_item = &$this->_tpldata['switch_type_cal.'][$switch_type_cal_i];
 $switch_type_cal_item['S_ROW_COUNT'] = $switch_type_cal_i;
 $switch_type_cal_item['S_NUM_ROWS'] = $switch_type_cal_count;

?>
<tr><th colspan="2"><?php echo isset($this->vars['L_CALENDAR_TITLE']) ? $this->vars['L_CALENDAR_TITLE'] : $this->lang('L_CALENDAR_TITLE'); ?></th></tr>
<tr>
	<td class="row1" valign="top"><span class="gen"><b><?php echo isset($this->vars['L_CALENDAR_TITLE']) ? $this->vars['L_CALENDAR_TITLE'] : $this->lang('L_CALENDAR_TITLE'); ?></b></span></td>
	<td valign="top" class="row1">
		<table cellpadding="2" cellspacing="0" width="100%" border="0">
			<tr>
				<td align="right" nowrap="nowrap"><span><b><?php echo isset($this->vars['L_CALENDAR_TITLE']) ? $this->vars['L_CALENDAR_TITLE'] : $this->lang('L_CALENDAR_TITLE'); ?>:&nbsp;</b></span></td>
				<td align="left" width="100%">
					<span class="genmed">
						<?php echo isset($this->vars['S_CALENDAR_DAY']) ? $this->vars['S_CALENDAR_DAY'] : $this->lang('S_CALENDAR_DAY'); ?><?php echo isset($this->vars['S_CALENDAR_MONTH']) ? $this->vars['S_CALENDAR_MONTH'] : $this->lang('S_CALENDAR_MONTH'); ?><?php echo isset($this->vars['S_CALENDAR_YEAR']) ? $this->vars['S_CALENDAR_YEAR'] : $this->lang('S_CALENDAR_YEAR'); ?>&nbsp;
						<a href="#" class="genmed" onclick="document.post.topic_calendar_day.value='<?php echo isset($this->vars['TODAY_DAY']) ? $this->vars['TODAY_DAY'] : $this->lang('TODAY_DAY'); ?>';document.post.topic_calendar_month.value='<?php echo isset($this->vars['TODAY_MONTH']) ? $this->vars['TODAY_MONTH'] : $this->lang('TODAY_MONTH'); ?>';document.post.topic_calendar_year.value='<?php echo isset($this->vars['TODAY_YEAR']) ? $this->vars['TODAY_YEAR'] : $this->lang('TODAY_YEAR'); ?>';return false;"><?php echo isset($this->vars['L_TODAY']) ? $this->vars['L_TODAY'] : $this->lang('L_TODAY'); ?></a>
					</span>
				</td>
			</tr>
			<tr>
				<td align="right" nowrap="nowrap"><span><b><?php echo isset($this->vars['L_TIME']) ? $this->vars['L_TIME'] : $this->lang('L_TIME'); ?>:&nbsp;</b></span></td>
				<td align="left" width="100%">
					<span class="genmed">
						<input name="topic_calendar_hour" type="text" maxlength="2" size="3" value="<?php echo isset($this->vars['CALENDAR_HOUR']) ? $this->vars['CALENDAR_HOUR'] : $this->lang('CALENDAR_HOUR'); ?>" class="post" />&nbsp;<?php echo isset($this->vars['L_HOURS']) ? $this->vars['L_HOURS'] : $this->lang('L_HOURS'); ?>&nbsp;&nbsp;
						<input name="topic_calendar_min" type="text" maxlength="2" size="3" value="<?php echo isset($this->vars['CALENDAR_MIN']) ? $this->vars['CALENDAR_MIN'] : $this->lang('CALENDAR_MIN'); ?>" class="post" />&nbsp;<?php echo isset($this->vars['L_MINUTES']) ? $this->vars['L_MINUTES'] : $this->lang('L_MINUTES'); ?>
					</span>
				</td>
			</tr>
			<tr>
				<td align="right" nowrap="nowrap"><span><b><?php echo isset($this->vars['L_CALENDAR_DURATION']) ? $this->vars['L_CALENDAR_DURATION'] : $this->lang('L_CALENDAR_DURATION'); ?>:&nbsp;</b></span></td>
				<td align="left" width="100%">
					<span class="genmed">
						<input name="topic_calendar_duration_day" type="text" maxlength="5" size="3" value="<?php echo isset($this->vars['CALENDAR_DURATION_DAY']) ? $this->vars['CALENDAR_DURATION_DAY'] : $this->lang('CALENDAR_DURATION_DAY'); ?>" class="post" />&nbsp;<?php echo isset($this->vars['L_DAYS']) ? $this->vars['L_DAYS'] : $this->lang('L_DAYS'); ?>&nbsp;&nbsp;
						<input name="topic_calendar_duration_hour" type="text" maxlength="5" size="3" value="<?php echo isset($this->vars['CALENDAR_DURATION_HOUR']) ? $this->vars['CALENDAR_DURATION_HOUR'] : $this->lang('CALENDAR_DURATION_HOUR'); ?>" class="post" />&nbsp;<?php echo isset($this->vars['L_HOURS']) ? $this->vars['L_HOURS'] : $this->lang('L_HOURS'); ?>&nbsp;&nbsp;
						<input name="topic_calendar_duration_min" type="text" maxlength="5" size="3" value="<?php echo isset($this->vars['CALENDAR_DURATION_MIN']) ? $this->vars['CALENDAR_DURATION_MIN'] : $this->lang('CALENDAR_DURATION_MIN'); ?>" class="post" />&nbsp;<?php echo isset($this->vars['L_MINUTES']) ? $this->vars['L_MINUTES'] : $this->lang('L_MINUTES'); ?>
					</span>
				</td>
			</tr>
		</table>
	</td>
</tr>
<?php

} // END switch_type_cal

if(isset($switch_type_cal_item)) { unset($switch_type_cal_item); } 

?>

<?php

$switch_confirm_count = ( isset($this->_tpldata['switch_confirm.']) ) ? sizeof($this->_tpldata['switch_confirm.']) : 0;
for ($switch_confirm_i = 0; $switch_confirm_i < $switch_confirm_count; $switch_confirm_i++)
{
 $switch_confirm_item = &$this->_tpldata['switch_confirm.'][$switch_confirm_i];
 $switch_confirm_item['S_ROW_COUNT'] = $switch_confirm_i;
 $switch_confirm_item['S_NUM_ROWS'] = $switch_confirm_count;

?>
<tr><td class="row1 row-center" colspan="2"><br /><br /><?php echo isset($this->vars['CONFIRM_IMAGE']) ? $this->vars['CONFIRM_IMAGE'] : $this->lang('CONFIRM_IMAGE'); ?><br /><br /></td></tr>
<tr>
	<td class="row2 row-center" colspan="2">
		<span class="gen"><b><?php echo isset($this->vars['L_CT_CONFIRM']) ? $this->vars['L_CT_CONFIRM'] : $this->lang('L_CT_CONFIRM'); ?></b></span><br />
		<span class="gensmall"><?php echo isset($this->vars['L_CT_CONFIRM_E']) ? $this->vars['L_CT_CONFIRM_E'] : $this->lang('L_CT_CONFIRM_E'); ?></span><br /><br />
		<input type="text" class="post" style="width: 200px" name="confirm_code" size="6" value="" />
		<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
	</td>
</tr>
<?php

} // END switch_confirm

if(isset($switch_confirm_item)) { unset($switch_confirm_item); } 

?>

<tr>
	<td class="cat" colspan="2">
		<?php echo isset($this->vars['S_HIDDEN_FORM_FIELDS']) ? $this->vars['S_HIDDEN_FORM_FIELDS'] : $this->lang('S_HIDDEN_FORM_FIELDS'); ?>
		<input type="submit" tabindex="12" name="preview" class="liteoption" value="<?php echo isset($this->vars['L_PREVIEW']) ? $this->vars['L_PREVIEW'] : $this->lang('L_PREVIEW'); ?>" />&nbsp;
		<input type="submit" accesskey="s" tabindex="13" name="post" class="mainoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" />
	</td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</form>
<?php

$switch_privmsg_count = ( isset($this->_tpldata['switch_privmsg.']) ) ? sizeof($this->_tpldata['switch_privmsg.']) : 0;
for ($switch_privmsg_i = 0; $switch_privmsg_i < $switch_privmsg_count; $switch_privmsg_i++)
{
 $switch_privmsg_item = &$this->_tpldata['switch_privmsg.'][$switch_privmsg_i];
 $switch_privmsg_item['S_ROW_COUNT'] = $switch_privmsg_i;
 $switch_privmsg_item['S_NUM_ROWS'] = $switch_privmsg_count;

?>
	</td>
</tr>
</table>
<?php

} // END switch_privmsg

if(isset($switch_privmsg_item)) { unset($switch_privmsg_item); } 

?>
<div align="right"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></div>

<?php echo isset($this->vars['TOPIC_REVIEW_BOX']) ? $this->vars['TOPIC_REVIEW_BOX'] : $this->lang('TOPIC_REVIEW_BOX'); ?>

<?php  $this->set_filename('xs_include_e6f1831db5b65f80278f6c3df588a807', 'overall_footer.tpl', true);  $this->pparse('xs_include_e6f1831db5b65f80278f6c3df588a807');  ?>