<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 11:31:22 +0000 (time = 1379763082)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php

$switch_show_news_count = ( isset($this->_tpldata['switch_show_news.']) ) ? sizeof($this->_tpldata['switch_show_news.']) : 0;
for ($switch_show_news_i = 0; $switch_show_news_i < $switch_show_news_count; $switch_show_news_i++)
{
 $switch_show_news_item = &$this->_tpldata['switch_show_news.'][$switch_show_news_i];
 $switch_show_news_item['S_ROW_COUNT'] = $switch_show_news_i;
 $switch_show_news_item['S_NUM_ROWS'] = $switch_show_news_count;

?>
<div align="center"><?php echo isset($this->vars['XS_NEWS']) ? $this->vars['XS_NEWS'] : $this->lang('XS_NEWS'); ?></div>
<?php

} // END switch_show_news

if(isset($switch_show_news_item)) { unset($switch_show_news_item); } 

?>

<?php if (! $this->vars['S_BOT']) {  ?>
<?php echo isset($this->vars['CALENDAR_BOX']) ? $this->vars['CALENDAR_BOX'] : $this->lang('CALENDAR_BOX'); ?>
<?php } ?>

<?php if ($this->vars['FORUMINDEX_BANNER_TOP']) {  ?><div class="center-block-text" style="overflow:auto;"><?php echo isset($this->vars['FORUMINDEX_BANNER_TOP']) ? $this->vars['FORUMINDEX_BANNER_TOP'] : $this->lang('FORUMINDEX_BANNER_TOP'); ?></div><?php } ?>
<?php echo isset($this->vars['BOARD_INDEX']) ? $this->vars['BOARD_INDEX'] : $this->lang('BOARD_INDEX'); ?>
<?php if ($this->vars['FORUMINDEX_BANNER_BOTTOM']) {  ?><div class="center-block-text" style="overflow:auto;"><?php echo isset($this->vars['FORUMINDEX_BANNER_BOTTOM']) ? $this->vars['FORUMINDEX_BANNER_BOTTOM'] : $this->lang('FORUMINDEX_BANNER_BOTTOM'); ?></div><?php } ?>

<?php if (! $this->vars['S_BOT']) {  ?>
<?php if ($this->vars['S_VIEWONLINE']) {  ?>
<div id="viewonline_h" style="display: none;">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MAXIMISE']) ? $this->vars['IMG_MAXIMISE'] : $this->lang('IMG_MAXIMISE'); ?>" onclick="ShowHide('viewonline','viewonline_h','viewonline');" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>" /><a href="<?php echo isset($this->vars['U_VIEWONLINE']) ? $this->vars['U_VIEWONLINE'] : $this->lang('U_VIEWONLINE'); ?>" class="forumlink"><?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?></a><?php echo isset($this->vars['IMG_THR_ALT']) ? $this->vars['IMG_THR_ALT'] : $this->lang('IMG_THR_ALT'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td>&nbsp;</td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<div id="viewonline">
<script type="text/javascript">
<!--
tmp = 'viewonline';
if(GetCookie(tmp) == '2')
{
	ShowHide('viewonline', 'viewonline_h', 'viewonline');
}
//-->
</script>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('viewonline','viewonline_h','viewonline');" alt="<?php echo isset($this->vars['L_HIDE']) ? $this->vars['L_HIDE'] : $this->lang('L_HIDE'); ?>" /><a href="<?php echo isset($this->vars['U_VIEWONLINE']) ? $this->vars['U_VIEWONLINE'] : $this->lang('U_VIEWONLINE'); ?>" class="forumlink"><?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?></a><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1 row-center" rowspan="5" width="95" valign="middle">
		<span class="genmed"><?php echo isset($this->vars['L_WELCOME']) ? $this->vars['L_WELCOME'] : $this->lang('L_WELCOME'); ?><br /><?php echo isset($this->vars['USER_NAME']) ? $this->vars['USER_NAME'] : $this->lang('USER_NAME'); ?></span><br /><br />
		<div class="center-block"><?php echo isset($this->vars['AVATAR_IMG']) ? $this->vars['AVATAR_IMG'] : $this->lang('AVATAR_IMG'); ?></div>
	</td>
</tr>
<tr>
	<td class="row1" valign="middle">
		<span class="gensmall">
		<?php echo isset($this->vars['L_ONLINE_EXPLAIN']) ? $this->vars['L_ONLINE_EXPLAIN'] : $this->lang('L_ONLINE_EXPLAIN'); ?><br />
		<?php echo isset($this->vars['TOTAL_USERS_ONLINE']) ? $this->vars['TOTAL_USERS_ONLINE'] : $this->lang('TOTAL_USERS_ONLINE'); ?><br />
		<?php echo isset($this->vars['LOGGED_IN_USER_LIST']) ? $this->vars['LOGGED_IN_USER_LIST'] : $this->lang('LOGGED_IN_USER_LIST'); ?><br />
		<?php echo isset($this->vars['BOT_LIST']) ? $this->vars['BOT_LIST'] : $this->lang('BOT_LIST'); ?>
		</span>
	</td>
</tr>
<?php

$switch_ac_online_count = ( isset($this->_tpldata['switch_ac_online.']) ) ? sizeof($this->_tpldata['switch_ac_online.']) : 0;
for ($switch_ac_online_i = 0; $switch_ac_online_i < $switch_ac_online_count; $switch_ac_online_i++)
{
 $switch_ac_online_item = &$this->_tpldata['switch_ac_online.'][$switch_ac_online_i];
 $switch_ac_online_item['S_ROW_COUNT'] = $switch_ac_online_i;
 $switch_ac_online_item['S_NUM_ROWS'] = $switch_ac_online_count;

?>
<tr><td class="row1" valign="middle"><span class="gensmall"><?php echo isset($this->vars['AC_LIST_TEXT']) ? $this->vars['AC_LIST_TEXT'] : $this->lang('AC_LIST_TEXT'); ?>&nbsp;<?php echo isset($this->vars['AC_LIST']) ? $this->vars['AC_LIST'] : $this->lang('AC_LIST'); ?>&nbsp;[&nbsp;<a href="<?php echo isset($this->vars['U_AJAX_SHOUTBOX']) ? $this->vars['U_AJAX_SHOUTBOX'] : $this->lang('U_AJAX_SHOUTBOX'); ?>" target="_blank"><?php echo isset($this->vars['L_AJAX_SHOUTBOX']) ? $this->vars['L_AJAX_SHOUTBOX'] : $this->lang('L_AJAX_SHOUTBOX'); ?></a>&nbsp;]</span></td></tr>
<?php

} // END switch_ac_online

if(isset($switch_ac_online_item)) { unset($switch_ac_online_item); } 

?>
<tr>
	<td class="row1">
		<span class="gensmall">
		<?php echo isset($this->vars['L_ONLINE_TODAY']) ? $this->vars['L_ONLINE_TODAY'] : $this->lang('L_ONLINE_TODAY'); ?><br />
		<?php echo isset($this->vars['L_USERS_TODAY']) ? $this->vars['L_USERS_TODAY'] : $this->lang('L_USERS_TODAY'); ?><?php echo isset($this->vars['L_USERS_LASTHOUR']) ? $this->vars['L_USERS_LASTHOUR'] : $this->lang('L_USERS_LASTHOUR'); ?><br />
		<?php echo isset($this->vars['ADMINS_TODAY_LIST']) ? $this->vars['ADMINS_TODAY_LIST'] : $this->lang('ADMINS_TODAY_LIST'); ?><br />
		<?php echo isset($this->vars['MODS_TODAY_LIST']) ? $this->vars['MODS_TODAY_LIST'] : $this->lang('MODS_TODAY_LIST'); ?><br />
		<?php echo isset($this->vars['USERS_TODAY_LIST']) ? $this->vars['USERS_TODAY_LIST'] : $this->lang('USERS_TODAY_LIST'); ?><br />
		</span>
	</td>
</tr>
<tr><td class="row1"><span class="gensmall"><b><?php echo isset($this->vars['L_LEGEND']) ? $this->vars['L_LEGEND'] : $this->lang('L_LEGEND'); ?>:&nbsp;</b><?php echo isset($this->vars['GROUPS_LIST_LEGEND']) ? $this->vars['GROUPS_LIST_LEGEND'] : $this->lang('GROUPS_LIST_LEGEND'); ?></span></td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>

<div id="statistics_h" style="display: none;">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MAXIMISE']) ? $this->vars['IMG_MAXIMISE'] : $this->lang('IMG_MAXIMISE'); ?>" onclick="ShowHide('statistics','statistics_h','statistics');" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>" /><a href="<?php echo isset($this->vars['U_STATISTICS']) ? $this->vars['U_STATISTICS'] : $this->lang('U_STATISTICS'); ?>" class="forumlink"><?php echo isset($this->vars['L_STATISTICS']) ? $this->vars['L_STATISTICS'] : $this->lang('L_STATISTICS'); ?></a><?php echo isset($this->vars['IMG_THR_ALT']) ? $this->vars['IMG_THR_ALT'] : $this->lang('IMG_THR_ALT'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td>&nbsp;</td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<div id="statistics">
<script type="text/javascript">
<!--
tmp = 'statistics';
if(GetCookie(tmp) == '2')
{
	ShowHide('statistics', 'statistics_h', 'statistics');
}
//-->
</script>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('statistics','statistics_h','statistics');" alt="<?php echo isset($this->vars['L_HIDE']) ? $this->vars['L_HIDE'] : $this->lang('L_HIDE'); ?>" /><a href="<?php echo isset($this->vars['U_STATISTICS']) ? $this->vars['U_STATISTICS'] : $this->lang('U_STATISTICS'); ?>" class="forumlink"><?php echo isset($this->vars['L_STATISTICS']) ? $this->vars['L_STATISTICS'] : $this->lang('L_STATISTICS'); ?></a><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td class="row1 row-center" rowspan="5" width="95" valign="middle"><div class="center-block"><img src="<?php echo isset($this->vars['STATS_IMG']) ? $this->vars['STATS_IMG'] : $this->lang('STATS_IMG'); ?>" alt="" /></div></td></tr>
<tr><td class="row1" colspan="2"><span class="gensmall"><?php echo isset($this->vars['TOTAL_POSTS']) ? $this->vars['TOTAL_POSTS'] : $this->lang('TOTAL_POSTS'); ?><br /><?php echo isset($this->vars['TOTAL_USERS']) ? $this->vars['TOTAL_USERS'] : $this->lang('TOTAL_USERS'); ?><br /><?php echo isset($this->vars['NEWEST_USER']) ? $this->vars['NEWEST_USER'] : $this->lang('NEWEST_USER'); ?><br /><?php echo isset($this->vars['RECORD_USERS']) ? $this->vars['RECORD_USERS'] : $this->lang('RECORD_USERS'); ?><br /></span></td></tr>
<?php

$show_recent_count = ( isset($this->_tpldata['show_recent.']) ) ? sizeof($this->_tpldata['show_recent.']) : 0;
for ($show_recent_i = 0; $show_recent_i < $show_recent_count; $show_recent_i++)
{
 $show_recent_item = &$this->_tpldata['show_recent.'][$show_recent_i];
 $show_recent_item['S_ROW_COUNT'] = $show_recent_i;
 $show_recent_item['S_NUM_ROWS'] = $show_recent_count;

?>
<tr>
	<td class="row-recent" nowrap="nowrap" align="left">
		<span class="gensmall">
			<b><?php echo isset($this->vars['L_RECENT_TOPICS']) ? $this->vars['L_RECENT_TOPICS'] : $this->lang('L_RECENT_TOPICS'); ?>:</b>
			<marquee id="recent_topics" behavior="scroll" direction="left" width="90%" height="12" scrolldelay="100" scrollamount="4" loop="true" onmouseover="this.stop()" onmouseout="this.start()">|
				<?php

$recent_topic_row_count = ( isset($show_recent_item['recent_topic_row.']) ) ? sizeof($show_recent_item['recent_topic_row.']) : 0;
for ($recent_topic_row_i = 0; $recent_topic_row_i < $recent_topic_row_count; $recent_topic_row_i++)
{
 $recent_topic_row_item = &$show_recent_item['recent_topic_row.'][$recent_topic_row_i];
 $recent_topic_row_item['S_ROW_COUNT'] = $recent_topic_row_i;
 $recent_topic_row_item['S_NUM_ROWS'] = $recent_topic_row_count;

?>
				<a href="<?php echo isset($recent_topic_row_item['U_TITLE']) ? $recent_topic_row_item['U_TITLE'] : ''; ?>" title ="<?php echo isset($recent_topic_row_item['L_TITLE']) ? $recent_topic_row_item['L_TITLE'] : ''; ?>" onmouseover="document.all.recent_topics.stop()" onmouseout="document.all.recent_topics.start()"><?php echo isset($recent_topic_row_item['L_TITLE']) ? $recent_topic_row_item['L_TITLE'] : ''; ?></a>&nbsp;|&nbsp;
				<?php

} // END recent_topic_row

if(isset($recent_topic_row_item)) { unset($recent_topic_row_item); } 

?>
			</marquee>
		</span>
	</td>
</tr>
<?php

} // END show_recent

if(isset($show_recent_item)) { unset($show_recent_item); } 

?>
<?php

$switch_show_random_quote_count = ( isset($this->_tpldata['switch_show_random_quote.']) ) ? sizeof($this->_tpldata['switch_show_random_quote.']) : 0;
for ($switch_show_random_quote_i = 0; $switch_show_random_quote_i < $switch_show_random_quote_count; $switch_show_random_quote_i++)
{
 $switch_show_random_quote_item = &$this->_tpldata['switch_show_random_quote.'][$switch_show_random_quote_i];
 $switch_show_random_quote_item['S_ROW_COUNT'] = $switch_show_random_quote_i;
 $switch_show_random_quote_item['S_NUM_ROWS'] = $switch_show_random_quote_count;

?>
<tr><td class="row1" colspan="2"><span class="gensmall"><b><?php echo isset($this->vars['L_RANDOMQUOTE']) ? $this->vars['L_RANDOMQUOTE'] : $this->lang('L_RANDOMQUOTE'); ?>: </b><?php echo isset($this->vars['RANDOM_QUOTE']) ? $this->vars['RANDOM_QUOTE'] : $this->lang('RANDOM_QUOTE'); ?></span></td></tr>
<?php

} // END switch_show_random_quote

if(isset($switch_show_random_quote_item)) { unset($switch_show_random_quote_item); } 

?>
<?php

$top_posters_count = ( isset($this->_tpldata['top_posters.']) ) ? sizeof($this->_tpldata['top_posters.']) : 0;
for ($top_posters_i = 0; $top_posters_i < $top_posters_count; $top_posters_i++)
{
 $top_posters_item = &$this->_tpldata['top_posters.'][$top_posters_i];
 $top_posters_item['S_ROW_COUNT'] = $top_posters_i;
 $top_posters_item['S_NUM_ROWS'] = $top_posters_count;

?>
<tr><td class="row1" colspan="2"><span class="gensmall"><b><?php echo isset($this->vars['L_TOP_POSTERS']) ? $this->vars['L_TOP_POSTERS'] : $this->lang('L_TOP_POSTERS'); ?>: </b><?php echo isset($top_posters_item['TOP_POSTERS']) ? $top_posters_item['TOP_POSTERS'] : ''; ?></span></td></tr>
<?php

} // END top_posters

if(isset($top_posters_item)) { unset($top_posters_item); } 

?>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<?php } ?>

<?php if ($this->vars['S_BIRTHDAYS']) {  ?>
<div id="birthday_h" style="display: none;">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MAXIMISE']) ? $this->vars['IMG_MAXIMISE'] : $this->lang('IMG_MAXIMISE'); ?>" onclick="ShowHide('birthday','birthday_h','birthday');" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>" /><a href="<?php echo isset($this->vars['U_CALENDAR']) ? $this->vars['U_CALENDAR'] : $this->lang('U_CALENDAR'); ?>" class="forumlink"><?php echo isset($this->vars['L_BIRTHDAYS']) ? $this->vars['L_BIRTHDAYS'] : $this->lang('L_BIRTHDAYS'); ?></a><?php echo isset($this->vars['IMG_THR_ALT']) ? $this->vars['IMG_THR_ALT'] : $this->lang('IMG_THR_ALT'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td>&nbsp;</td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<div id="birthday">
<script type="text/javascript">
<!--
tmp = 'birthday';
if(GetCookie(tmp) == '2')
{
	ShowHide('birthday', 'birthday_h', 'birthday');
}
//-->
</script>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('birthday','birthday_h','birthday');" alt="<?php echo isset($this->vars['L_HIDE']) ? $this->vars['L_HIDE'] : $this->lang('L_HIDE'); ?>" /><a href="<?php echo isset($this->vars['U_CALENDAR']) ? $this->vars['U_CALENDAR'] : $this->lang('U_CALENDAR'); ?>" class="forumlink"><?php echo isset($this->vars['L_BIRTHDAYS']) ? $this->vars['L_BIRTHDAYS'] : $this->lang('L_BIRTHDAYS'); ?></a><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1 row-center" rowspan="2" width="95" valign="middle"><div class="center-block"><img src="<?php echo isset($this->vars['BIRTHDAY_IMG']) ? $this->vars['BIRTHDAY_IMG'] : $this->lang('BIRTHDAY_IMG'); ?>" alt="" /></div></td>
	<td class="row1"><span class="gensmall"><?php echo isset($this->vars['L_WHOSBIRTHDAY_TODAY']) ? $this->vars['L_WHOSBIRTHDAY_TODAY'] : $this->lang('L_WHOSBIRTHDAY_TODAY'); ?></span><br /><?php if ($this->vars['L_WHOSBIRTHDAY_WEEK']) {  ?><span class="gensmall"><?php echo isset($this->vars['L_WHOSBIRTHDAY_WEEK']) ? $this->vars['L_WHOSBIRTHDAY_WEEK'] : $this->lang('L_WHOSBIRTHDAY_WEEK'); ?></span><br /><?php } ?></td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<?php } ?>

<?php if ($this->vars['S_SHOUTBOX']) {  ?>
<div id="shoutbox_h" style="display: none;">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MAXIMISE']) ? $this->vars['IMG_MAXIMISE'] : $this->lang('IMG_MAXIMISE'); ?>" onclick="ShowHide('shoutbox','shoutbox_h','shoutbox');" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>" /><a href="<?php echo isset($this->vars['U_SHOUTBOX_MAX']) ? $this->vars['U_SHOUTBOX_MAX'] : $this->lang('U_SHOUTBOX_MAX'); ?>" class="forumlink"><?php echo isset($this->vars['L_SHOUTBOX']) ? $this->vars['L_SHOUTBOX'] : $this->lang('L_SHOUTBOX'); ?></a><?php echo isset($this->vars['IMG_THR_ALT']) ? $this->vars['IMG_THR_ALT'] : $this->lang('IMG_THR_ALT'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td>&nbsp;</td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<div id="shoutbox">
<script type="text/javascript">
<!--
tmp = 'shoutbox';
if(GetCookie(tmp) == '2')
{
	ShowHide('shoutbox', 'shoutbox_h', 'shoutbox');
}
//-->
</script>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('shoutbox','shoutbox_h','shoutbox');" alt="<?php echo isset($this->vars['L_HIDE']) ? $this->vars['L_HIDE'] : $this->lang('L_HIDE'); ?>" /><a href="<?php echo isset($this->vars['U_SHOUTBOX_MAX']) ? $this->vars['U_SHOUTBOX_MAX'] : $this->lang('U_SHOUTBOX_MAX'); ?>" class="forumlink"><?php echo isset($this->vars['L_SHOUTBOX']) ? $this->vars['L_SHOUTBOX'] : $this->lang('L_SHOUTBOX'); ?></a><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td><iframe src="<?php echo isset($this->vars['U_SHOUTBOX']) ? $this->vars['U_SHOUTBOX'] : $this->lang('U_SHOUTBOX'); ?>" scrolling="no" width="100%" height="190" frameborder="0" marginheight="0" marginwidth="0"></iframe></td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<?php } ?>

<?php if ($this->vars['S_LINKS']) {  ?>
<div id="links_h" style="display: none;">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MAXIMISE']) ? $this->vars['IMG_MAXIMISE'] : $this->lang('IMG_MAXIMISE'); ?>" onclick="ShowHide('links','links_h','links');" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>" /><a href="<?php echo isset($this->vars['U_LINKS']) ? $this->vars['U_LINKS'] : $this->lang('U_LINKS'); ?>" class="forumlink"><?php echo isset($this->vars['L_LINKS']) ? $this->vars['L_LINKS'] : $this->lang('L_LINKS'); ?></a><?php echo isset($this->vars['IMG_THR_ALT']) ? $this->vars['IMG_THR_ALT'] : $this->lang('IMG_THR_ALT'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td>&nbsp;</td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<div id="links">
<script type="text/javascript">
<!--
tmp = 'links';
if(GetCookie(tmp) == '2')
{
	ShowHide('links', 'links_h', 'links');
}
//-->
</script>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('links','links_h','links');" alt="<?php echo isset($this->vars['L_HIDE']) ? $this->vars['L_HIDE'] : $this->lang('L_HIDE'); ?>" /><a href="<?php echo isset($this->vars['U_LINKS']) ? $this->vars['U_LINKS'] : $this->lang('U_LINKS'); ?>" class="forumlink"><?php echo isset($this->vars['L_LINKS']) ? $this->vars['L_LINKS'] : $this->lang('L_LINKS'); ?></a><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1g" nowrap="nowrap" width="100%"><iframe marginwidth="0" marginheight="0" src="<?php echo isset($this->vars['U_LINKS_JS']) ? $this->vars['U_LINKS_JS'] : $this->lang('U_LINKS_JS'); ?>" frameborder="0" scrolling="no" width="100%" height="<?php echo isset($this->vars['SITE_LOGO_HEIGHT']) ? $this->vars['SITE_LOGO_HEIGHT'] : $this->lang('SITE_LOGO_HEIGHT'); ?>"></iframe></td>
	<td class="row1g" nowrap="nowrap" width="100"><a href="javascript:links_me()"><img src="<?php echo isset($this->vars['U_SITE_LOGO']) ? $this->vars['U_SITE_LOGO'] : $this->lang('U_SITE_LOGO'); ?>" alt="<?php echo isset($this->vars['SITENAME']) ? $this->vars['SITENAME'] : $this->lang('SITENAME'); ?>" width="<?php echo isset($this->vars['SITE_LOGO_WIDTH']) ? $this->vars['SITE_LOGO_WIDTH'] : $this->lang('SITE_LOGO_WIDTH'); ?>" height="<?php echo isset($this->vars['SITE_LOGO_HEIGHT']) ? $this->vars['SITE_LOGO_HEIGHT'] : $this->lang('SITE_LOGO_HEIGHT'); ?>" /></a></td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<?php } ?>
<?php } ?>

<br />
<div class="center-block" style="text-align: center; margin: 30px;">
<?php echo isset($this->vars['IMG_TBL']) ? $this->vars['IMG_TBL'] : $this->lang('IMG_TBL'); ?><table class="forumlinenb" style="padding: 2px; border-top-width: 1px;" width="100%" cellspacing="0" cellpadding="2">
<tr>
	<td class="row-center-small"><img src="<?php echo isset($this->vars['FORUM_NEW_CAT_IMG']) ? $this->vars['FORUM_NEW_CAT_IMG'] : $this->lang('FORUM_NEW_CAT_IMG'); ?>" alt="<?php echo isset($this->vars['L_CAT_NEW_POSTS']) ? $this->vars['L_CAT_NEW_POSTS'] : $this->lang('L_CAT_NEW_POSTS'); ?>" title="<?php echo isset($this->vars['L_CAT_NEW_POSTS']) ? $this->vars['L_CAT_NEW_POSTS'] : $this->lang('L_CAT_NEW_POSTS'); ?>" /></td>
	<td class="row-center-small" width="11%"><?php echo isset($this->vars['L_CAT_NEW_POSTS']) ? $this->vars['L_CAT_NEW_POSTS'] : $this->lang('L_CAT_NEW_POSTS'); ?></td>
	<td class="row-center-small"><img src="<?php echo isset($this->vars['FORUM_CAT_IMG']) ? $this->vars['FORUM_CAT_IMG'] : $this->lang('FORUM_CAT_IMG'); ?>" alt="<?php echo isset($this->vars['L_CAT_NO_NEW_POSTS']) ? $this->vars['L_CAT_NO_NEW_POSTS'] : $this->lang('L_CAT_NO_NEW_POSTS'); ?>" title="<?php echo isset($this->vars['L_CAT_NO_NEW_POSTS']) ? $this->vars['L_CAT_NO_NEW_POSTS'] : $this->lang('L_CAT_NO_NEW_POSTS'); ?>" /></td>
	<td class="row-center-small" width="11%"><?php echo isset($this->vars['L_CAT_NO_NEW_POSTS']) ? $this->vars['L_CAT_NO_NEW_POSTS'] : $this->lang('L_CAT_NO_NEW_POSTS'); ?></td>
	<td class="row-center-small"><img src="<?php echo isset($this->vars['FORUM_NEW_IMG']) ? $this->vars['FORUM_NEW_IMG'] : $this->lang('FORUM_NEW_IMG'); ?>" alt="<?php echo isset($this->vars['L_FORUM_NEW_POSTS']) ? $this->vars['L_FORUM_NEW_POSTS'] : $this->lang('L_FORUM_NEW_POSTS'); ?>" title="<?php echo isset($this->vars['L_FORUM_NEW_POSTS']) ? $this->vars['L_FORUM_NEW_POSTS'] : $this->lang('L_FORUM_NEW_POSTS'); ?>" /></td>
	<td class="row-center-small" width="11%"><?php echo isset($this->vars['L_FORUM_NEW_POSTS']) ? $this->vars['L_FORUM_NEW_POSTS'] : $this->lang('L_FORUM_NEW_POSTS'); ?></td>
	<td class="row-center-small"><img src="<?php echo isset($this->vars['FORUM_IMG']) ? $this->vars['FORUM_IMG'] : $this->lang('FORUM_IMG'); ?>" alt="<?php echo isset($this->vars['L_FORUM_NO_NEW_POSTS']) ? $this->vars['L_FORUM_NO_NEW_POSTS'] : $this->lang('L_FORUM_NO_NEW_POSTS'); ?>" title="<?php echo isset($this->vars['L_FORUM_NO_NEW_POSTS']) ? $this->vars['L_FORUM_NO_NEW_POSTS'] : $this->lang('L_FORUM_NO_NEW_POSTS'); ?>" /></td>
	<td class="row-center-small" width="11%"><?php echo isset($this->vars['L_FORUM_NO_NEW_POSTS']) ? $this->vars['L_FORUM_NO_NEW_POSTS'] : $this->lang('L_FORUM_NO_NEW_POSTS'); ?></td>
	<!--
	<td class="row-center-small"><img src="<?php echo isset($this->vars['FOLDER_AR_BIG']) ? $this->vars['FOLDER_AR_BIG'] : $this->lang('FOLDER_AR_BIG'); ?>" alt="<?php echo isset($this->vars['L_FORUM_AR']) ? $this->vars['L_FORUM_AR'] : $this->lang('L_FORUM_AR'); ?>" title="<?php echo isset($this->vars['L_FORUM_AR']) ? $this->vars['L_FORUM_AR'] : $this->lang('L_FORUM_AR'); ?>" /></td>
	<td class="row-center-small"><?php echo isset($this->vars['L_FORUM_AR']) ? $this->vars['L_FORUM_AR'] : $this->lang('L_FORUM_AR'); ?></td>
	-->
	<td class="row-center-small"><img src="<?php echo isset($this->vars['FORUM_LINK_IMG']) ? $this->vars['FORUM_LINK_IMG'] : $this->lang('FORUM_LINK_IMG'); ?>" alt="<?php echo isset($this->vars['L_LINKS']) ? $this->vars['L_LINKS'] : $this->lang('L_LINKS'); ?>" title="<?php echo isset($this->vars['L_LINKS']) ? $this->vars['L_LINKS'] : $this->lang('L_LINKS'); ?>" /></td>
	<td class="row-center-small" width="11%"><?php echo isset($this->vars['L_LINKS']) ? $this->vars['L_LINKS'] : $this->lang('L_LINKS'); ?></td>
	<td class="row-center-small"><img src="<?php echo isset($this->vars['FORUM_LOCKED_IMG']) ? $this->vars['FORUM_LOCKED_IMG'] : $this->lang('FORUM_LOCKED_IMG'); ?>" alt="<?php echo isset($this->vars['L_FORUM_LOCKED']) ? $this->vars['L_FORUM_LOCKED'] : $this->lang('L_FORUM_LOCKED'); ?>" title="<?php echo isset($this->vars['L_FORUM_LOCKED']) ? $this->vars['L_FORUM_LOCKED'] : $this->lang('L_FORUM_LOCKED'); ?>" /></td>
	<td class="row-center-small" width="11%"><?php echo isset($this->vars['L_FORUM_LOCKED']) ? $this->vars['L_FORUM_LOCKED'] : $this->lang('L_FORUM_LOCKED'); ?></td>
</tr>
</table><?php echo isset($this->vars['IMG_TBR']) ? $this->vars['IMG_TBR'] : $this->lang('IMG_TBR'); ?>
</div>