<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 11:31:22 +0000 (time = 1379763082)

if (!defined('IN_ICYPHOENIX')) exit;

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<head>
<title><?php echo isset($this->vars['PAGE_TITLE']) ? $this->vars['PAGE_TITLE'] : $this->lang('PAGE_TITLE'); ?></title>
<meta http-equiv="refresh" content="120;url=<?php echo isset($this->vars['U_SHOUTBOX_VIEW']) ? $this->vars['U_SHOUTBOX_VIEW'] : $this->lang('U_SHOUTBOX_VIEW'); ?>?auto_refresh=1" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>" />
<link rel="shortcut icon" href="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?>images/favicon.ico" />
<link rel="stylesheet" href="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['T_TPL_PATH']) ? $this->vars['T_TPL_PATH'] : $this->lang('T_TPL_PATH'); ?>style_<?php echo isset($this->vars['CSS_COLOR']) ? $this->vars['CSS_COLOR'] : $this->lang('CSS_COLOR'); ?>.css" type="text/css" />
</head>
<body style="margin: 0px; padding: 0px;">
<table class="forumline" width="100%" cellspacing="0">
<?php if ($this->vars['S_SHOUTBOX_COMPACT']) {  ?>
<?php

$shoutrow_count = ( isset($this->_tpldata['shoutrow.']) ) ? sizeof($this->_tpldata['shoutrow.']) : 0;
for ($shoutrow_i = 0; $shoutrow_i < $shoutrow_count; $shoutrow_i++)
{
 $shoutrow_item = &$this->_tpldata['shoutrow.'][$shoutrow_i];
 $shoutrow_item['S_ROW_COUNT'] = $shoutrow_i;
 $shoutrow_item['S_NUM_ROWS'] = $shoutrow_count;

?>
<tr>
	<td class="<?php echo isset($shoutrow_item['ROW_CLASS']) ? $shoutrow_item['ROW_CLASS'] : ''; ?>" width="100%" align="left" valign="top">
		<div style="text-align: left; vertical-align: top;"><div style="position: relative; float: left; text-align: left; vertical-align: top;"><b><?php echo isset($shoutrow_item['USERNAME']) ? $shoutrow_item['USERNAME'] : ''; ?>:</b>&nbsp;&diams;&nbsp;<span class="gensmall"><?php echo isset($shoutrow_item['TIME']) ? $shoutrow_item['TIME'] : ''; ?>&nbsp;&raquo;&nbsp;<?php echo isset($shoutrow_item['SHOUT']) ? $shoutrow_item['SHOUT'] : ''; ?></span></div></div>
	</td>
</tr>
<?php

} // END shoutrow

if(isset($shoutrow_item)) { unset($shoutrow_item); } 

?>
<?php } elseif ($this->vars['S_SHOUTBOX_FULL']) {  ?>
<?php

$shoutrow_count = ( isset($this->_tpldata['shoutrow.']) ) ? sizeof($this->_tpldata['shoutrow.']) : 0;
for ($shoutrow_i = 0; $shoutrow_i < $shoutrow_count; $shoutrow_i++)
{
 $shoutrow_item = &$this->_tpldata['shoutrow.'][$shoutrow_i];
 $shoutrow_item['S_ROW_COUNT'] = $shoutrow_i;
 $shoutrow_item['S_NUM_ROWS'] = $shoutrow_count;

?>
<tr>
	<td class="<?php echo isset($shoutrow_item['ROW_CLASS']) ? $shoutrow_item['ROW_CLASS'] : ''; ?>" width="100%" align="left" valign="top">
		<div style="text-align: right; vertical-align: top;">
			<div style="position: relative; float: left; text-align: left; vertical-align: top;"><b><?php echo isset($shoutrow_item['USERNAME']) ? $shoutrow_item['USERNAME'] : ''; ?>:</b></div>
			<span class="gensmall"><?php echo isset($shoutrow_item['TIME']) ? $shoutrow_item['TIME'] : ''; ?></span>
		</div>
		<br />
		<div class="post-text post-text-hide-flow"><?php echo isset($shoutrow_item['SHOUT']) ? $shoutrow_item['SHOUT'] : ''; ?></div>
	</td>
</tr>
<?php

} // END shoutrow

if(isset($shoutrow_item)) { unset($shoutrow_item); } 

?>
<?php } else { ?>
<?php

$shoutrow_count = ( isset($this->_tpldata['shoutrow.']) ) ? sizeof($this->_tpldata['shoutrow.']) : 0;
for ($shoutrow_i = 0; $shoutrow_i < $shoutrow_count; $shoutrow_i++)
{
 $shoutrow_item = &$this->_tpldata['shoutrow.'][$shoutrow_i];
 $shoutrow_item['S_ROW_COUNT'] = $shoutrow_i;
 $shoutrow_item['S_NUM_ROWS'] = $shoutrow_count;

?>
<tr class="<?php echo isset($shoutrow_item['ROW_CLASS']) ? $shoutrow_item['ROW_CLASS'] : ''; ?>h">
	<td class="<?php echo isset($shoutrow_item['ROW_CLASS']) ? $shoutrow_item['ROW_CLASS'] : ''; ?>h" style="background: none; min-width: 150px;" nowrap="nowrap"><span class="gensmall"><?php echo isset($shoutrow_item['USERNAME']) ? $shoutrow_item['USERNAME'] : ''; ?>&nbsp;&bull;&nbsp;[&nbsp;<?php echo isset($shoutrow_item['TIME']) ? $shoutrow_item['TIME'] : ''; ?>&nbsp;]</span></td>
	<td class="<?php echo isset($shoutrow_item['ROW_CLASS']) ? $shoutrow_item['ROW_CLASS'] : ''; ?>h" width="100%" style="background: none;"><div class="post-text post-text-hide-flow"><?php echo isset($shoutrow_item['SHOUT']) ? $shoutrow_item['SHOUT'] : ''; ?></div></td>
</tr>
<?php

} // END shoutrow

if(isset($shoutrow_item)) { unset($shoutrow_item); } 

?>
<?php } ?>
</table>
</body>