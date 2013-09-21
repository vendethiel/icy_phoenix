<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 12:11:51 +0000 (time = 1379765511)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php if (! $this->vars['HAS_DIED'] && ! $this->vars['HEADER_INCLUDED']) {  ?>
<?php  $this->set_filename('xs_include_7b541a75496c0bac6e49247218647e87', 'overall_header.tpl', true);  $this->pparse('xs_include_7b541a75496c0bac6e49247218647e87');  ?>
<?php } ?>

<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['MESSAGE_TITLE']) ? $this->vars['MESSAGE_TITLE'] : $this->lang('MESSAGE_TITLE'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td class="row1g gen" style="padding:20px;" align="center"><?php echo isset($this->vars['MESSAGE_TEXT']) ? $this->vars['MESSAGE_TEXT'] : $this->lang('MESSAGE_TEXT'); ?></td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>

<?php if (! $this->vars['HAS_DIED']) {  ?>
<?php  $this->set_filename('xs_include_29cbd07eb984322e0435a788087449e3', 'overall_footer.tpl', true);  $this->pparse('xs_include_29cbd07eb984322e0435a788087449e3');  ?>
<?php } ?>