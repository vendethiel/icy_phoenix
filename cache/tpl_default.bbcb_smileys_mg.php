<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 20:17:52 +0000 (time = 1379794672)

if (!defined('IN_ICYPHOENIX')) exit;

?><table class="forumline" width="90%" border="0" cellspacing="0" cellpadding="0">
<tr><th colspan="<?php echo isset($this->vars['S_SMILIES_COLSPAN']) ? $this->vars['S_SMILIES_COLSPAN'] : $this->lang('S_SMILIES_COLSPAN'); ?>"><b><?php echo isset($this->vars['L_EMOTICONS']) ? $this->vars['L_EMOTICONS'] : $this->lang('L_EMOTICONS'); ?></b></th></tr>
<?php

$smilies_row_count = ( isset($this->_tpldata['smilies_row.']) ) ? sizeof($this->_tpldata['smilies_row.']) : 0;
for ($smilies_row_i = 0; $smilies_row_i < $smilies_row_count; $smilies_row_i++)
{
 $smilies_row_item = &$this->_tpldata['smilies_row.'][$smilies_row_i];
 $smilies_row_item['S_ROW_COUNT'] = $smilies_row_i;
 $smilies_row_item['S_NUM_ROWS'] = $smilies_row_count;

?>
<tr>
	<?php

$smilies_col_count = ( isset($smilies_row_item['smilies_col.']) ) ? sizeof($smilies_row_item['smilies_col.']) : 0;
for ($smilies_col_i = 0; $smilies_col_i < $smilies_col_count; $smilies_col_i++)
{
 $smilies_col_item = &$smilies_row_item['smilies_col.'][$smilies_col_i];
 $smilies_col_item['S_ROW_COUNT'] = $smilies_col_i;
 $smilies_col_item['S_NUM_ROWS'] = $smilies_col_count;

?>
	<td align="center"><a href="javascript:emoticon('<?php echo isset($smilies_col_item['SMILEY_CODE']) ? $smilies_col_item['SMILEY_CODE'] : ''; ?>');"><img src="<?php echo isset($smilies_col_item['SMILEY_IMG']) ? $smilies_col_item['SMILEY_IMG'] : ''; ?>" border="0" onmouseover="this.style.cursor='pointer';" alt="<?php echo isset($smilies_col_item['SMILEY_DESC']) ? $smilies_col_item['SMILEY_DESC'] : ''; ?>" title="<?php echo isset($smilies_col_item['SMILEY_DESC']) ? $smilies_col_item['SMILEY_DESC'] : ''; ?>" /></a></td>
	<?php

} // END smilies_col

if(isset($smilies_col_item)) { unset($smilies_col_item); } 

?>
</tr>
<?php

} // END smilies_row

if(isset($smilies_row_item)) { unset($smilies_row_item); } 

?>
<?php

$switch_smilies_extra_count = ( isset($this->_tpldata['switch_smilies_extra.']) ) ? sizeof($this->_tpldata['switch_smilies_extra.']) : 0;
for ($switch_smilies_extra_i = 0; $switch_smilies_extra_i < $switch_smilies_extra_count; $switch_smilies_extra_i++)
{
 $switch_smilies_extra_item = &$this->_tpldata['switch_smilies_extra.'][$switch_smilies_extra_i];
 $switch_smilies_extra_item['S_ROW_COUNT'] = $switch_smilies_extra_i;
 $switch_smilies_extra_item['S_NUM_ROWS'] = $switch_smilies_extra_count;

?>
<tr><td class="cat" colspan="<?php echo isset($this->vars['S_SMILIES_COLSPAN']) ? $this->vars['S_SMILIES_COLSPAN'] : $this->lang('S_SMILIES_COLSPAN'); ?>" align="center"><input type="button" class="liteoption" name="smiles_button" value="<?php echo isset($this->vars['L_MORE_SMILIES']) ? $this->vars['L_MORE_SMILIES'] : $this->lang('L_MORE_SMILIES'); ?>" onclick="openAllSmiles();" /></td></tr>
<tr><td class="cat" colspan="<?php echo isset($this->vars['S_SMILIES_COLSPAN']) ? $this->vars['S_SMILIES_COLSPAN'] : $this->lang('S_SMILIES_COLSPAN'); ?>" align="center"><input type="button" class="liteoption" value="<?php echo isset($this->vars['L_SMILEY_CREATOR']) ? $this->vars['L_SMILEY_CREATOR'] : $this->lang('L_SMILEY_CREATOR'); ?>" style="width: 135px" onclick="window.open('<?php echo isset($this->vars['U_SMILEY_CREATOR']) ? $this->vars['U_SMILEY_CREATOR'] : $this->lang('U_SMILEY_CREATOR'); ?>','_ipcreatesmileys','height=400,width=500,resizable=yes,scrollbars=yes'); return false;" /></td></tr>
<?php

} // END switch_smilies_extra

if(isset($switch_smilies_extra_item)) { unset($switch_smilies_extra_item); } 

?>
</table>

<?php

$switch_sm_pic_upload_count = ( isset($this->_tpldata['switch_sm_pic_upload.']) ) ? sizeof($this->_tpldata['switch_sm_pic_upload.']) : 0;
for ($switch_sm_pic_upload_i = 0; $switch_sm_pic_upload_i < $switch_sm_pic_upload_count; $switch_sm_pic_upload_i++)
{
 $switch_sm_pic_upload_item = &$this->_tpldata['switch_sm_pic_upload.'][$switch_sm_pic_upload_i];
 $switch_sm_pic_upload_item['S_ROW_COUNT'] = $switch_sm_pic_upload_i;
 $switch_sm_pic_upload_item['S_NUM_ROWS'] = $switch_sm_pic_upload_count;

?>
<br clear="all" />
<div class="center-block"><input type="button" class="liteoption" value="<?php echo isset($this->vars['L_UPLOAD_IMAGE']) ? $this->vars['L_UPLOAD_IMAGE'] : $this->lang('L_UPLOAD_IMAGE'); ?>" style="width: 135px" onclick="window.open('<?php echo isset($this->vars['U_UPLOAD_IMAGE']) ? $this->vars['U_UPLOAD_IMAGE'] : $this->lang('U_UPLOAD_IMAGE'); ?>','_upload_image','height=500,width=700,resizable=yes,scrollbars=no'); return false;" /></div>
<?php

} // END switch_sm_pic_upload

if(isset($switch_sm_pic_upload_item)) { unset($switch_sm_pic_upload_item); } 

?>

<!--
<br /><br /><span class="gen"><b><?php echo isset($this->vars['L_OPTIONS']) ? $this->vars['L_OPTIONS'] : $this->lang('L_OPTIONS'); ?></b></span><br /><div class="gensmall"><?php echo isset($this->vars['HTML_STATUS']) ? $this->vars['HTML_STATUS'] : $this->lang('HTML_STATUS'); ?><br /><?php echo isset($this->vars['BBCODE_STATUS']) ? $this->vars['BBCODE_STATUS'] : $this->lang('BBCODE_STATUS'); ?><br /><?php echo isset($this->vars['SMILIES_STATUS']) ? $this->vars['SMILIES_STATUS'] : $this->lang('SMILIES_STATUS'); ?></div><br />
-->
