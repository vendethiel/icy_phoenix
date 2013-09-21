<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 11:31:22 +0000 (time = 1379763082)

if (!defined('IN_ICYPHOENIX')) exit;

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<head>
<title><?php echo isset($this->vars['PAGE_TITLE']) ? $this->vars['PAGE_TITLE'] : $this->lang('PAGE_TITLE'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>" />
<link rel="stylesheet" href="<?php echo isset($this->vars['T_URL']) ? $this->vars['T_URL'] : $this->lang('T_URL'); ?>/style_<?php echo isset($this->vars['TPL_COLOR']) ? $this->vars['TPL_COLOR'] : $this->lang('TPL_COLOR'); ?>.css" type="text/css">
</head>

<body style="margin: 0px; padding: 0px;">
<script src="<?php echo isset($this->vars['T_COMMON_TPL_PATH']) ? $this->vars['T_COMMON_TPL_PATH'] : $this->lang('T_COMMON_TPL_PATH'); ?>js/bbcode.js" type="text/javascript" ></script>
<form method="post" name="post" action="<?php echo isset($this->vars['U_SHOUTBOX']) ? $this->vars['U_SHOUTBOX'] : $this->lang('U_SHOUTBOX'); ?>" onsubmit="return checkForm(this)">
<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>
<table class="row1" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td class="nav-header" width="100%">
	<div class="center-block-text">
		<span class="gensmall">
			<?php

$switch_auth_post_count = ( isset($this->_tpldata['switch_auth_post.']) ) ? sizeof($this->_tpldata['switch_auth_post.']) : 0;
for ($switch_auth_post_i = 0; $switch_auth_post_i < $switch_auth_post_count; $switch_auth_post_i++)
{
 $switch_auth_post_item = &$this->_tpldata['switch_auth_post.'][$switch_auth_post_i];
 $switch_auth_post_item['S_ROW_COUNT'] = $switch_auth_post_i;
 $switch_auth_post_item['S_NUM_ROWS'] = $switch_auth_post_count;

?>
			<?php

$switch_bbcode_count = ( isset($switch_auth_post_item['switch_bbcode.']) ) ? sizeof($switch_auth_post_item['switch_bbcode.']) : 0;
for ($switch_bbcode_i = 0; $switch_bbcode_i < $switch_bbcode_count; $switch_bbcode_i++)
{
 $switch_bbcode_item = &$switch_auth_post_item['switch_bbcode.'][$switch_bbcode_i];
 $switch_bbcode_item['S_ROW_COUNT'] = $switch_bbcode_i;
 $switch_bbcode_item['S_NUM_ROWS'] = $switch_bbcode_count;

?>
			<input type="button" class="button" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onclick="bbstyle(0)" />
			<input type="button" class="button" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onclick="bbstyle(2)" />
			<input type="button" class="button" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onclick="bbstyle(4)" />
			<input type="button" class="button" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onclick="bbstyle(6)" />&nbsp;&nbsp;
			<!-- <span class="nav"><a href="<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>" onclick="window.open('<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>', '_phpbbsmilies', 'width=250,height=300,resizable=yes,scrollbars=yes');return false;" class="nav"><?php echo isset($this->vars['L_SMILIES']) ? $this->vars['L_SMILIES'] : $this->lang('L_SMILIES'); ?></a></span> -->
			<?php

} // END switch_bbcode

if(isset($switch_bbcode_item)) { unset($switch_bbcode_item); } 

?>
			<?php echo isset($this->vars['L_SHOUT_TEXT']) ? $this->vars['L_SHOUT_TEXT'] : $this->lang('L_SHOUT_TEXT'); ?>:&nbsp;
			<input type="text" class="post" name="message" value="<?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?>" size="25" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" />
			&nbsp;
			<input type="submit" class="mainoption" value="<?php echo isset($this->vars['L_SHOUT_SUBMIT']) ? $this->vars['L_SHOUT_SUBMIT'] : $this->lang('L_SHOUT_SUBMIT'); ?>" name="shout" />
			<?php

} // END switch_auth_post

if(isset($switch_auth_post_item)) { unset($switch_auth_post_item); } 

?>
			<?php

$switch_auth_no_post_count = ( isset($this->_tpldata['switch_auth_no_post.']) ) ? sizeof($this->_tpldata['switch_auth_no_post.']) : 0;
for ($switch_auth_no_post_i = 0; $switch_auth_no_post_i < $switch_auth_no_post_count; $switch_auth_no_post_i++)
{
 $switch_auth_no_post_item = &$this->_tpldata['switch_auth_no_post.'][$switch_auth_no_post_i];
 $switch_auth_no_post_item['S_ROW_COUNT'] = $switch_auth_no_post_i;
 $switch_auth_no_post_item['S_NUM_ROWS'] = $switch_auth_no_post_count;

?>
			<?php echo isset($this->vars['L_SHOUTBOX_LOGIN']) ? $this->vars['L_SHOUTBOX_LOGIN'] : $this->lang('L_SHOUTBOX_LOGIN'); ?>&nbsp;
			<?php

} // END switch_auth_no_post

if(isset($switch_auth_no_post_item)) { unset($switch_auth_no_post_item); } 

?>
			<input type="submit" class="liteoption" value="<?php echo isset($this->vars['L_SHOUT_REFRESH']) ? $this->vars['L_SHOUT_REFRESH'] : $this->lang('L_SHOUT_REFRESH'); ?>" name="refresh" />
		</span>
	</div>
	</td>
</tr>
</table>
<iframe src="<?php echo isset($this->vars['U_SHOUTBOX_VIEW']) ? $this->vars['U_SHOUTBOX_VIEW'] : $this->lang('U_SHOUTBOX_VIEW'); ?>" align="left" width="100%" height="162" frameborder="0" marginheight="0" marginwidth="0"></iframe>
</form>
</body>