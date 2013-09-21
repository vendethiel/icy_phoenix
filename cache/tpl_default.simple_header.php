<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 20:17:53 +0000 (time = 1379794673)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php if ($this->vars['S_LOFI']) {  ?>
<?php if ($this->vars['S_LOFI_BOTS']) {  ?>
<?php  $this->set_filename('xs_include_61536fc959e61e1929edd7a06558cb7b', '../common/lofi/bots/lofi_bots_header.tpl', true);  $this->pparse('xs_include_61536fc959e61e1929edd7a06558cb7b');  ?>
<?php } else { ?>
<?php  $this->set_filename('xs_include_b5ee0d13f3a4f16b37af16349364c4ca', '../common/lofi/lofi_header.tpl', true);  $this->pparse('xs_include_b5ee0d13f3a4f16b37af16349364c4ca');  ?>
<?php } ?>
<?php } else { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo isset($this->vars['S_CONTENT_DIRECTION']) ? $this->vars['S_CONTENT_DIRECTION'] : $this->lang('S_CONTENT_DIRECTION'); ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>" />
<meta http-equiv="content-style-type" content="text/css" />
<?php echo isset($this->vars['META']) ? $this->vars['META'] : $this->lang('META'); ?>
<?php echo isset($this->vars['META_TAG']) ? $this->vars['META_TAG'] : $this->lang('META_TAG'); ?>
<?php echo isset($this->vars['NAV_LINKS']) ? $this->vars['NAV_LINKS'] : $this->lang('NAV_LINKS'); ?>
<title><?php echo isset($this->vars['PAGE_TITLE']) ? $this->vars['PAGE_TITLE'] : $this->lang('PAGE_TITLE'); ?></title>
<link rel="shortcut icon" href="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?>images/favicon.ico" />
<link rel="stylesheet" href="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['T_TPL_PATH']) ? $this->vars['T_TPL_PATH'] : $this->lang('T_TPL_PATH'); ?>style_<?php echo isset($this->vars['CSS_COLOR']) ? $this->vars['CSS_COLOR'] : $this->lang('CSS_COLOR'); ?>.css" type="text/css" />
<?php

$css_style_include_count = ( isset($this->_tpldata['css_style_include.']) ) ? sizeof($this->_tpldata['css_style_include.']) : 0;
for ($css_style_include_i = 0; $css_style_include_i < $css_style_include_count; $css_style_include_i++)
{
 $css_style_include_item = &$this->_tpldata['css_style_include.'][$css_style_include_i];
 $css_style_include_item['S_ROW_COUNT'] = $css_style_include_i;
 $css_style_include_item['S_NUM_ROWS'] = $css_style_include_count;

?>
<link rel="stylesheet" href="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['T_TPL_PATH']) ? $this->vars['T_TPL_PATH'] : $this->lang('T_TPL_PATH'); ?><?php echo isset($css_style_include_item['CSS_FILE']) ? $css_style_include_item['CSS_FILE'] : ''; ?>" type="text/css" />
<?php

} // END css_style_include

if(isset($css_style_include_item)) { unset($css_style_include_item); } 

?>
<?php

$css_include_count = ( isset($this->_tpldata['css_include.']) ) ? sizeof($this->_tpldata['css_include.']) : 0;
for ($css_include_i = 0; $css_include_i < $css_include_count; $css_include_i++)
{
 $css_include_item = &$this->_tpldata['css_include.'][$css_include_i];
 $css_include_item['S_ROW_COUNT'] = $css_include_i;
 $css_include_item['S_NUM_ROWS'] = $css_include_count;

?>
<link rel="stylesheet" href="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['T_COMMON_TPL_PATH']) ? $this->vars['T_COMMON_TPL_PATH'] : $this->lang('T_COMMON_TPL_PATH'); ?><?php echo isset($css_include_item['CSS_FILE']) ? $css_include_item['CSS_FILE'] : ''; ?>" type="text/css" />
<?php

} // END css_include

if(isset($css_include_item)) { unset($css_include_item); } 

?>

<?php if ($this->vars['IS_PROSILVER']) {  ?>
<link rel="stylesheet" href="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['T_TPL_PATH']) ? $this->vars['T_TPL_PATH'] : $this->lang('T_TPL_PATH'); ?>style_css.<?php echo isset($this->vars['PHP_EXT']) ? $this->vars['PHP_EXT'] : $this->lang('PHP_EXT'); ?>?color=<?php echo isset($this->vars['CSS_COLOR']) ? $this->vars['CSS_COLOR'] : $this->lang('CSS_COLOR'); ?>&amp;lang=<?php echo isset($this->vars['CURRENT_TPL_LANG']) ? $this->vars['CURRENT_TPL_LANG'] : $this->lang('CURRENT_TPL_LANG'); ?>" type="text/css" />
<?php } ?>

<?php  $this->set_filename('xs_include_17fd77cd63122b9466875d0b989db6a5', 'overall_inc_header_js.tpl', true);  $this->pparse('xs_include_17fd77cd63122b9466875d0b989db6a5');  ?>

</head>
<body<?php if ($this->vars['S_SLIDESHOW_SCRIPT']) {  ?> onload="runSlideShow()"<?php } ?><?php if ($this->vars['NO_PADDING']) {  ?> style="margin: 0 !important; padding: 0 !important;"<?php } ?>>
<a name="top" id="top"></a>
<?php if (! $this->vars['NO_PADDING']) {  ?><div class="simple_header_wrapper"><?php } ?>
<div class="rounded_line">
<table id="forumtable" width="100%" cellspacing="0" style="width: 100% !important;">
<tr>
	<td id="content"<?php if ($this->vars['NO_PADDING']) {  ?> style="margin: 0 !important; padding: 0 !important;"<?php } ?>>
<?php } ?>