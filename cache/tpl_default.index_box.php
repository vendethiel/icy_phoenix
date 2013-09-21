<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 11:31:19 +0000 (time = 1379763079)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php
$banner_processed = false;
$catrow_count = (isset($this->_tpldata['catrow.'])) ? count($this->_tpldata['catrow.']) : 0;
for($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
	$catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
	// check for new messages
	$new_msg = false;
	$forumrow_count = isset($catrow_item['forumrow.']) ? count($catrow_item['forumrow.']) : 0;
	for ($forumrow_i = 0; $forumrow_i < $forumrow_count; $forumrow_i++)
	{
		$forumrow_item = &$catrow_item['forumrow.'][$forumrow_i];
		$new_item = strpos($forumrow_item['FORUM_FOLDER_IMG'], '_unread') > 0 ? true : false;
		if($new_item)
		{
			$new_msg = true;
			$forumrow_item['LINK_CLASS'] = '-new';
		}
	}
	// add xs switch
	$catrow_item['LINK_CLASS'] = $new_msg ? '-new' : '';
}
?>
<?php

$catrow_count = ( isset($this->_tpldata['catrow.']) ) ? sizeof($this->_tpldata['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
<?php

$tablehead_count = ( isset($catrow_item['tablehead.']) ) ? sizeof($catrow_item['tablehead.']) : 0;
for ($tablehead_i = 0; $tablehead_i < $tablehead_count; $tablehead_i++)
{
 $tablehead_item = &$catrow_item['tablehead.'][$tablehead_i];
 $tablehead_item['S_ROW_COUNT'] = $tablehead_i;
 $tablehead_item['S_NUM_ROWS'] = $tablehead_count;

?>
<div id="<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f_h" style="display: none;">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MAXIMISE']) ? $this->vars['IMG_MAXIMISE'] : $this->lang('IMG_MAXIMISE'); ?>" onclick="ShowHide('<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f','<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f_h','<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f');" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>" /><span class="forumlink"><?php echo isset($tablehead_item['L_FORUM']) ? $tablehead_item['L_FORUM'] : ''; ?></span><?php echo isset($this->vars['IMG_THR_ALT']) ? $this->vars['IMG_THR_ALT'] : $this->lang('IMG_THR_ALT'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td>&nbsp;</td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<div id="<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f">
<script type="text/javascript">
<!--
tmp = '<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f';
if(GetCookie(tmp) == '2')
{
	ShowHide('<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f', '<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f_h', '<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f');
}
//-->
</script>
<?php echo isset($this->vars['IMG_THL_ALT']) ? $this->vars['IMG_THL_ALT'] : $this->lang('IMG_THL_ALT'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f','<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f_h','<?php echo isset($catrow_item['MAIN_CAT_ID']) ? $catrow_item['MAIN_CAT_ID'] : ''; ?>_f');" alt="<?php echo isset($this->vars['L_HIDE']) ? $this->vars['L_HIDE'] : $this->lang('L_HIDE'); ?>" /><span class="forumlink"><?php echo isset($tablehead_item['L_FORUM']) ? $tablehead_item['L_FORUM'] : ''; ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<?php

$cathead_count = ( isset($tablehead_item['cathead.']) ) ? sizeof($tablehead_item['cathead.']) : 0;
for ($cathead_i = 0; $cathead_i < $cathead_count; $cathead_i++)
{
 $cathead_item = &$tablehead_item['cathead.'][$cathead_i];
 $cathead_item['S_ROW_COUNT'] = $cathead_i;
 $cathead_item['S_NUM_ROWS'] = $cathead_count;

?>
<tr>
	<?php

$inc_count = ( isset($cathead_item['inc.']) ) ? sizeof($cathead_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$cathead_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
	<td width="37" class="<?php echo isset($inc_item['INC_CLASS']) ? $inc_item['INC_CLASS'] : ''; ?>"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="37" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td class="<?php echo isset($cathead_item['CLASS_CAT']) ? $cathead_item['CLASS_CAT'] : ''; ?>" width="100%" colspan="<?php echo isset($cathead_item['INC_SPAN']) ? $cathead_item['INC_SPAN'] : ''; ?>"><span class="cattitle"><a href="<?php echo isset($cathead_item['U_VIEWCAT']) ? $cathead_item['U_VIEWCAT'] : ''; ?>" class="cattitle" title="<?php echo isset($cathead_item['CAT_DESC']) ? $cathead_item['CAT_DESC'] : ''; ?>"><?php echo isset($cathead_item['CAT_TITLE']) ? $cathead_item['CAT_TITLE'] : ''; ?></a></span></td>
	<td class="<?php echo isset($cathead_item['CLASS_ROWPIC']) ? $cathead_item['CLASS_ROWPIC'] : ''; ?>" colspan="3" align="right">&nbsp;</td>
</tr>
<?php

} // END cathead

if(isset($cathead_item)) { unset($cathead_item); } 

?>
<tr>
	<th colspan="<?php echo isset($tablehead_item['INC_SPAN']) ? $tablehead_item['INC_SPAN'] : ''; ?>" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?>&nbsp;</th>
	<!--
	<th width="50">&nbsp;<?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?>&nbsp;</th>
	<th width="50">&nbsp;<?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?>&nbsp;</th>
	-->
	<th width="120" colspan="2">&nbsp;<?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?>&nbsp;/&nbsp;<?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?>&nbsp;</th>
	<th width="180">&nbsp;<?php echo isset($this->vars['L_LASTPOST']) ? $this->vars['L_LASTPOST'] : $this->lang('L_LASTPOST'); ?>&nbsp;</th>
</tr>
<?php

} // END tablehead

if(isset($tablehead_item)) { unset($tablehead_item); } 

?>
<?php
if (ereg("c=", $_SERVER['REQUEST_URI']) || ereg("-vc", $_SERVER['REQUEST_URI']))
{
?>
<?php

$cathead_count = ( isset($catrow_item['cathead.']) ) ? sizeof($catrow_item['cathead.']) : 0;
for ($cathead_i = 0; $cathead_i < $cathead_count; $cathead_i++)
{
 $cathead_item = &$catrow_item['cathead.'][$cathead_i];
 $cathead_item['S_ROW_COUNT'] = $cathead_i;
 $cathead_item['S_NUM_ROWS'] = $cathead_count;

?>
<tr>
	<?php

$inc_count = ( isset($cathead_item['inc.']) ) ? sizeof($cathead_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$cathead_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
	<td width="37" class="<?php echo isset($inc_item['INC_CLASS']) ? $inc_item['INC_CLASS'] : ''; ?>"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="37" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td class="forum-buttons2" colspan="6" align="left"><img src="<?php echo isset($this->vars['CAT_BLOCK_IMG']) ? $this->vars['CAT_BLOCK_IMG'] : $this->lang('CAT_BLOCK_IMG'); ?>" style="vertical-align: middle;" />&nbsp;<a href="<?php echo isset($cathead_item['U_VIEWCAT']) ? $cathead_item['U_VIEWCAT'] : ''; ?>" title="<?php echo isset($cathead_item['CAT_DESC']) ? $cathead_item['CAT_DESC'] : ''; ?>"><?php echo isset($cathead_item['CAT_TITLE']) ? $cathead_item['CAT_TITLE'] : ''; ?></a></td>
</tr>
<?php

} // END cathead

if(isset($cathead_item)) { unset($cathead_item); } 

?>
<?php
}
?>
<?php

$forumrow_count = ( isset($catrow_item['forumrow.']) ) ? sizeof($catrow_item['forumrow.']) : 0;
for ($forumrow_i = 0; $forumrow_i < $forumrow_count; $forumrow_i++)
{
 $forumrow_item = &$catrow_item['forumrow.'][$forumrow_i];
 $forumrow_item['S_ROW_COUNT'] = $forumrow_i;
 $forumrow_item['S_NUM_ROWS'] = $forumrow_count;

?>
<tr>
	<?php

$inc_count = ( isset($forumrow_item['inc.']) ) ? sizeof($forumrow_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$forumrow_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
	<td width="37" class="<?php echo isset($inc_item['INC_CLASS']) ? $inc_item['INC_CLASS'] : ''; ?>"<?php echo isset($forumrow_item['LINKS_ROWSPAN']) ? $forumrow_item['LINKS_ROWSPAN'] : ''; ?>><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="37" height="0" alt="" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td class="<?php echo isset($forumrow_item['INC_CLASS']) ? $forumrow_item['INC_CLASS'] : ''; ?>" style="padding-left: 1px; padding-right: 3px; vertical-align: middle; min-height: 50px;" width="37" height="50"<?php echo isset($forumrow_item['LINKS_ROWSPAN']) ? $forumrow_item['LINKS_ROWSPAN'] : ''; ?>><?php echo isset($forumrow_item['U_MARK_ALWAYS_READ']) ? $forumrow_item['U_MARK_ALWAYS_READ'] : ''; ?></td>
	<td class="row1h<?php echo isset($forumrow_item['LINK_CLASS']) ? $forumrow_item['LINK_CLASS'] : ''; ?> row-forum" width="100%" colspan="<?php echo isset($forumrow_item['INC_SPAN']) ? $forumrow_item['INC_SPAN'] : ''; ?>" data-href="<?php echo isset($forumrow_item['U_VIEWFORUM']) ? $forumrow_item['U_VIEWFORUM'] : ''; ?>">
		<table width="100%" cellspacing="0" cellpadding="2" border="0">
		<tr>
			<?php

$forum_icon_count = ( isset($forumrow_item['forum_icon.']) ) ? sizeof($forumrow_item['forum_icon.']) : 0;
for ($forum_icon_i = 0; $forum_icon_i < $forum_icon_count; $forum_icon_i++)
{
 $forum_icon_item = &$forumrow_item['forum_icon.'][$forum_icon_i];
 $forum_icon_item['S_ROW_COUNT'] = $forum_icon_i;
 $forum_icon_item['S_NUM_ROWS'] = $forum_icon_count;

?>
			<td align="center"><a href="<?php echo isset($forumrow_item['U_VIEWFORUM']) ? $forumrow_item['U_VIEWFORUM'] : ''; ?>"><img src="<?php echo isset($forumrow_item['ICON_IMG']) ? $forumrow_item['ICON_IMG'] : ''; ?>" alt="<?php echo isset($forumrow_item['FORUM_NAME']) ? $forumrow_item['FORUM_NAME'] : ''; ?>" style="padding:3px;" /></a></td>
			<?php

} // END forum_icon

if(isset($forum_icon_item)) { unset($forum_icon_item); } 

?>
			<td width="100%">
				<?php

$forum_link_no_count = ( isset($forumrow_item['forum_link_no.']) ) ? sizeof($forumrow_item['forum_link_no.']) : 0;
for ($forum_link_no_i = 0; $forum_link_no_i < $forum_link_no_count; $forum_link_no_i++)
{
 $forum_link_no_item = &$forumrow_item['forum_link_no.'][$forum_link_no_i];
 $forum_link_no_item['S_ROW_COUNT'] = $forum_link_no_i;
 $forum_link_no_item['S_NUM_ROWS'] = $forum_link_no_count;

?>
				<div style="float: right; padding: 6px; vertical-align: bottom;"><?php echo isset($forumrow_item['RSS_FEED_ICON']) ? $forumrow_item['RSS_FEED_ICON'] : ''; ?></div>
				<?php

} // END forum_link_no

if(isset($forum_link_no_item)) { unset($forum_link_no_item); } 

?>
				<span class="forumlink"><a class="forumlink<?php echo isset($forumrow_item['LINK_CLASS']) ? $forumrow_item['LINK_CLASS'] : ''; ?>" href="<?php echo isset($forumrow_item['U_VIEWFORUM']) ? $forumrow_item['U_VIEWFORUM'] : ''; ?>"><?php echo isset($forumrow_item['FORUM_NAME']) ? $forumrow_item['FORUM_NAME'] : ''; ?></a></span><br />
				<span class="genmed"><?php echo isset($forumrow_item['FORUM_DESC']) ? $forumrow_item['FORUM_DESC'] : ''; ?></span>
				<span class="moderators"><?php echo isset($forumrow_item['L_MODERATOR']) ? $forumrow_item['L_MODERATOR'] : ''; ?><b><?php echo isset($forumrow_item['MODERATORS']) ? $forumrow_item['MODERATORS'] : ''; ?>&nbsp;</b></span>
			</td>
		</tr>
		</table>
	</td>
	<?php

$forum_link_no_count = ( isset($forumrow_item['forum_link_no.']) ) ? sizeof($forumrow_item['forum_link_no.']) : 0;
for ($forum_link_no_i = 0; $forum_link_no_i < $forum_link_no_count; $forum_link_no_i++)
{
 $forum_link_no_item = &$forumrow_item['forum_link_no.'][$forum_link_no_i];
 $forum_link_no_item['S_ROW_COUNT'] = $forum_link_no_i;
 $forum_link_no_item['S_NUM_ROWS'] = $forum_link_no_count;

?>
	<td class="row1 row-center-small" width="120" colspan="2"<?php echo isset($forumrow_item['LINKS_ROWSPAN']) ? $forumrow_item['LINKS_ROWSPAN'] : ''; ?>><div class="gensmall"><?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?>:&nbsp;<?php echo isset($forumrow_item['TOPICS']) ? $forumrow_item['TOPICS'] : ''; ?><br /><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?>:&nbsp;<?php echo isset($forumrow_item['POSTS']) ? $forumrow_item['POSTS'] : ''; ?><?php echo isset($forumrow_item['ONLINE']) ? $forumrow_item['ONLINE'] : ''; ?></div></td>
	<td class="row1 row-center-small" width="180" nowrap="nowrap"<?php echo isset($forumrow_item['LINKS_ROWSPAN']) ? $forumrow_item['LINKS_ROWSPAN'] : ''; ?>><span class="gensmall"><?php if ($this->vars['S_BOT']) {  ?>&nbsp;<?php } else { ?><?php echo isset($forumrow_item['LAST_POST']) ? $forumrow_item['LAST_POST'] : ''; ?><?php } ?></span></td>
	<?php

} // END forum_link_no

if(isset($forum_link_no_item)) { unset($forum_link_no_item); } 

?>
	<?php

$forum_link_count = ( isset($forumrow_item['forum_link.']) ) ? sizeof($forumrow_item['forum_link.']) : 0;
for ($forum_link_i = 0; $forum_link_i < $forum_link_count; $forum_link_i++)
{
 $forum_link_item = &$forumrow_item['forum_link.'][$forum_link_i];
 $forum_link_item['S_ROW_COUNT'] = $forum_link_i;
 $forum_link_item['S_NUM_ROWS'] = $forum_link_count;

?>
	<td class="row1 row-center" align="center" valign="middle" height="50" colspan="3"<?php echo isset($forumrow_item['LINKS_ROWSPAN']) ? $forumrow_item['LINKS_ROWSPAN'] : ''; ?>><span class="gensmall"><?php echo isset($forum_link_item['HIT_COUNT']) ? $forum_link_item['HIT_COUNT'] : ''; ?>&nbsp;</span></td>
	<?php

} // END forum_link

if(isset($forum_link_item)) { unset($forum_link_item); } 

?>
</tr>
<?php if ($forumrow_item['LINKS']) {  ?>
<tr><td class="row1h" style="padding: 0px;"><span class="gensmall"><?php echo isset($forumrow_item['L_LINKS']) ? $forumrow_item['L_LINKS'] : ''; ?>&nbsp;</span><span class="forumlink2<?php echo isset($this->vars['XS_NEW']) ? $this->vars['XS_NEW'] : $this->lang('XS_NEW'); ?>"><?php echo isset($forumrow_item['LINKS']) ? $forumrow_item['LINKS'] : ''; ?>&nbsp;</span></td></tr>
<?php } ?>
<?php
if (!$banner_processed)
{
?>
<?php if ($this->vars['FORUMINDEX_BANNER_ELEMENT']) {  ?>
<tr><td class="row1h-new" colspan="8"><span class="forumlink2-new"><?php echo isset($this->vars['FORUMINDEX_BANNER_ELEMENT']) ? $this->vars['FORUMINDEX_BANNER_ELEMENT'] : $this->lang('FORUMINDEX_BANNER_ELEMENT'); ?>&nbsp;</span></td></tr>
<?php } ?>
<?php
	$banner_processed = true;
}
?>
<?php

} // END forumrow

if(isset($forumrow_item)) { unset($forumrow_item); } 

?>

<?php

$tablefoot_count = ( isset($catrow_item['tablefoot.']) ) ? sizeof($catrow_item['tablefoot.']) : 0;
for ($tablefoot_i = 0; $tablefoot_i < $tablefoot_count; $tablefoot_i++)
{
 $tablefoot_item = &$catrow_item['tablefoot.'][$tablefoot_i];
 $tablefoot_item['S_ROW_COUNT'] = $tablefoot_i;
 $tablefoot_item['S_NUM_ROWS'] = $tablefoot_count;

?>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<?php

} // END tablefoot

if(isset($tablefoot_item)) { unset($tablefoot_item); } 

?>
<?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>