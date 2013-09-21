<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 20:17:52 +0000 (time = 1379794672)

if (!defined('IN_ICYPHOENIX')) exit;

?><script type="text/javascript">
// <![CDATA[
message = new Array();
<?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ? sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
message[<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>] = " user=\"<?php echo isset($postrow_item['POSTER_NAME']) ? $postrow_item['POSTER_NAME'] : ''; ?>\" post=\"<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>\"]<?php echo isset($postrow_item['PLAIN_MESSAGE']) ? $postrow_item['PLAIN_MESSAGE'] : ''; ?>[/";
<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
// ]]>
</script>

<?php

$switch_inline_mode_count = ( isset($this->_tpldata['switch_inline_mode.']) ) ? sizeof($this->_tpldata['switch_inline_mode.']) : 0;
for ($switch_inline_mode_i = 0; $switch_inline_mode_i < $switch_inline_mode_count; $switch_inline_mode_i++)
{
 $switch_inline_mode_item = &$this->_tpldata['switch_inline_mode.'][$switch_inline_mode_i];
 $switch_inline_mode_item['S_ROW_COUNT'] = $switch_inline_mode_i;
 $switch_inline_mode_item['S_NUM_ROWS'] = $switch_inline_mode_count;

?>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['L_TOPIC_REVIEW']) ? $this->vars['L_TOPIC_REVIEW'] : $this->lang('L_TOPIC_REVIEW'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1">
		<iframe frameborder="0" width="100%" height="300" src="<?php echo isset($this->vars['U_REVIEW_TOPIC']) ? $this->vars['U_REVIEW_TOPIC'] : $this->lang('U_REVIEW_TOPIC'); ?>">
<?php

} // END switch_inline_mode

if(isset($switch_inline_mode_item)) { unset($switch_inline_mode_item); } 

?>
		<table cellspacing="0" cellpadding="0" width="100%" class="forumline">
		<tr><td colspan="2" class="row-header"><span><?php echo isset($this->vars['L_Post_review']) ? $this->vars['L_Post_review'] : $this->lang('L_Post_review'); ?></span></td></tr>
		<tr>
			<th><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
			<th><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></th>
		</tr>
		<?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ? sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
		<tr>
			<td class="row-post-author">
				<span class="post-name"><a name="p<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"></a><?php echo isset($postrow_item['POSTER_NAME']) ? $postrow_item['POSTER_NAME'] : ''; ?></span><br />
				<img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="150" height="1" alt="" />
			</td>
			<td class="row-post" width="100%">
				<table width="100%" align="center" cellspacing="2" cellpadding="2" border="0">
					<tr>
						<td align="left"><div class="post-subject"><?php echo isset($postrow_item['POST_SUBJECT']) ? $postrow_item['POST_SUBJECT'] : ''; ?></div></td>
						<td align="right">
							<span class="post-buttons">
								<a href="javascript:addquote(%27<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>%27,%27quote%27,false,true);"><img src="<?php echo isset($this->vars['IMG_QUICK_QUOTE']) ? $this->vars['IMG_QUICK_QUOTE'] : $this->lang('IMG_QUICK_QUOTE'); ?>" alt="<?php echo isset($this->vars['L_QUICK_QUOTE']) ? $this->vars['L_QUICK_QUOTE'] : $this->lang('L_QUICK_QUOTE'); ?>" title="<?php echo isset($this->vars['L_QUICK_QUOTE']) ? $this->vars['L_QUICK_QUOTE'] : $this->lang('L_QUICK_QUOTE'); ?>" /></a>
								<a href="javascript:addquote(%27<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>%27,%27ot%27,false,true);"><img src="<?php echo isset($this->vars['IMG_OFFTOPIC']) ? $this->vars['IMG_OFFTOPIC'] : $this->lang('IMG_OFFTOPIC'); ?>" alt="<?php echo isset($this->vars['L_OFFTOPIC']) ? $this->vars['L_OFFTOPIC'] : $this->lang('L_OFFTOPIC'); ?>" title="<?php echo isset($this->vars['L_OFFTOPIC']) ? $this->vars['L_OFFTOPIC'] : $this->lang('L_OFFTOPIC'); ?>" /></a>
							</span>
						</td>
					</tr>
				</table>
				<div class="post-text post-text-hide-flow"><?php echo isset($postrow_item['MESSAGE']) ? $postrow_item['MESSAGE'] : ''; ?><?php echo isset($postrow_item['ATTACHMENTS']) ? $postrow_item['ATTACHMENTS'] : ''; ?></div>
			</td>
		</tr>
		<tr><td class="spaceRow" colspan="2"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="1" height="3" alt="" /></td></tr>
		<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
		</table>
<?php

$switch_inline_mode_count = ( isset($this->_tpldata['switch_inline_mode.']) ) ? sizeof($this->_tpldata['switch_inline_mode.']) : 0;
for ($switch_inline_mode_i = 0; $switch_inline_mode_i < $switch_inline_mode_count; $switch_inline_mode_i++)
{
 $switch_inline_mode_item = &$this->_tpldata['switch_inline_mode.'][$switch_inline_mode_i];
 $switch_inline_mode_item['S_ROW_COUNT'] = $switch_inline_mode_i;
 $switch_inline_mode_item['S_NUM_ROWS'] = $switch_inline_mode_count;

?>
		</iframe>
	</td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
<?php

} // END switch_inline_mode

if(isset($switch_inline_mode_item)) { unset($switch_inline_mode_item); } 

?>