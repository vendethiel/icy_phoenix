<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 11:31:22 +0000 (time = 1379763082)

if (!defined('IN_ICYPHOENIX')) exit;

?><center>
<div id="xs_news_h" style="display: none;">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MAXIMISE']) ? $this->vars['IMG_MAXIMISE'] : $this->lang('IMG_MAXIMISE'); ?>" onclick="ShowHide('xs_news','xs_news_h','xs_news');" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>" /><span class="forumlink"><?php echo isset($this->vars['NEWS_TITLE']) ? $this->vars['NEWS_TITLE'] : $this->lang('NEWS_TITLE'); ?></span><?php echo isset($this->vars['IMG_THR_ALT']) ? $this->vars['IMG_THR_ALT'] : $this->lang('IMG_THR_ALT'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td>&nbsp;</td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<div id="xs_news">
<script type="text/javascript">
<!--
tmp = 'xs_news';
if(GetCookie(tmp) == '2')
{
	ShowHide('xs_news', 'xs_news_h', 'xs_news');
}
//-->
</script>
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('xs_news','xs_news_h','xs_news');" alt="<?php echo isset($this->vars['L_HIDE']) ? $this->vars['L_HIDE'] : $this->lang('L_HIDE'); ?>" /><span class="forumlink"><?php echo isset($this->vars['NEWS_TITLE']) ? $this->vars['NEWS_TITLE'] : $this->lang('NEWS_TITLE'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td>
	<?php

$switch_news_ticker_count = ( isset($this->_tpldata['switch_news_ticker.']) ) ? sizeof($this->_tpldata['switch_news_ticker.']) : 0;
for ($switch_news_ticker_i = 0; $switch_news_ticker_i < $switch_news_ticker_count; $switch_news_ticker_i++)
{
 $switch_news_ticker_item = &$this->_tpldata['switch_news_ticker.'][$switch_news_ticker_i];
 $switch_news_ticker_item['S_ROW_COUNT'] = $switch_news_ticker_i;
 $switch_news_ticker_item['S_NUM_ROWS'] = $switch_news_ticker_count;

?>
		<?php

$switch_ticker_subtitle_count = ( isset($switch_news_ticker_item['switch_ticker_subtitle.']) ) ? sizeof($switch_news_ticker_item['switch_ticker_subtitle.']) : 0;
for ($switch_ticker_subtitle_i = 0; $switch_ticker_subtitle_i < $switch_ticker_subtitle_count; $switch_ticker_subtitle_i++)
{
 $switch_ticker_subtitle_item = &$switch_news_ticker_item['switch_ticker_subtitle.'][$switch_ticker_subtitle_i];
 $switch_ticker_subtitle_item['S_ROW_COUNT'] = $switch_ticker_subtitle_i;
 $switch_ticker_subtitle_item['S_NUM_ROWS'] = $switch_ticker_subtitle_count;

?>
		<p class="subtitle" style="height:18px;"><?php echo isset($this->vars['XS_NEWS_TICKERS_TITLE']) ? $this->vars['XS_NEWS_TICKERS_TITLE'] : $this->lang('XS_NEWS_TICKERS_TITLE'); ?></p>
		<?php

} // END switch_ticker_subtitle

if(isset($switch_ticker_subtitle_item)) { unset($switch_ticker_subtitle_item); } 

?>
		<?php

$news_ticker_row_count = ( isset($switch_news_ticker_item['news_ticker_row.']) ) ? sizeof($switch_news_ticker_item['news_ticker_row.']) : 0;
for ($news_ticker_row_i = 0; $news_ticker_row_i < $news_ticker_row_count; $news_ticker_row_i++)
{
 $news_ticker_row_item = &$switch_news_ticker_item['news_ticker_row.'][$news_ticker_row_i];
 $news_ticker_row_item['S_ROW_COUNT'] = $news_ticker_row_i;
 $news_ticker_row_item['S_NUM_ROWS'] = $news_ticker_row_count;

?>
			<?php

$switch_show_feed_count = ( isset($news_ticker_row_item['switch_show_feed.']) ) ? sizeof($news_ticker_row_item['switch_show_feed.']) : 0;
for ($switch_show_feed_i = 0; $switch_show_feed_i < $switch_show_feed_count; $switch_show_feed_i++)
{
 $switch_show_feed_item = &$news_ticker_row_item['switch_show_feed.'][$switch_show_feed_i];
 $switch_show_feed_item['S_ROW_COUNT'] = $switch_show_feed_i;
 $switch_show_feed_item['S_NUM_ROWS'] = $switch_show_feed_count;

?>
			<p class="forum-buttons2" style="height: 17px; valign: middle;"><span><?php echo isset($news_ticker_row_item['XS_NEWS_TICKER_FROM']) ? $news_ticker_row_item['XS_NEWS_TICKER_FROM'] : ''; ?></span></p>
			<?php

} // END switch_show_feed

if(isset($switch_show_feed_item)) { unset($switch_show_feed_item); } 

?>

			<p class="row1 row-news-tickers">
				<span class="nav-div" <?php echo isset($news_ticker_row_item['XS_NEWS_TICKER_FONTSIZE']) ? $news_ticker_row_item['XS_NEWS_TICKER_FONTSIZE'] : ''; ?>>
					<marquee name="<?php echo isset($news_ticker_row_item['XS_NEWS_TICKER_ID']) ? $news_ticker_row_item['XS_NEWS_TICKER_ID'] : ''; ?>" id="<?php echo isset($news_ticker_row_item['XS_NEWS_TICKER_ID']) ? $news_ticker_row_item['XS_NEWS_TICKER_ID'] : ''; ?>" behavior="scroll" direction="<?php echo isset($news_ticker_row_item['XS_NEWS_TICKER_SCROLL_DIR']) ? $news_ticker_row_item['XS_NEWS_TICKER_SCROLL_DIR'] : ''; ?>" scrollamount="<?php echo isset($news_ticker_row_item['XS_NEWS_TICKER_SPEED']) ? $news_ticker_row_item['XS_NEWS_TICKER_SPEED'] : ''; ?>" loop="true" onmouseover="this.stop()" onmouseout="this.start()"><?php echo isset($news_ticker_row_item['XS_NEWS_TICKER_CONTENTS']) ? $news_ticker_row_item['XS_NEWS_TICKER_CONTENTS'] : ''; ?></marquee>
				</span>
			</p>
		<?php

} // END news_ticker_row

if(isset($news_ticker_row_item)) { unset($news_ticker_row_item); } 

?>
	<?php

} // END switch_news_ticker

if(isset($switch_news_ticker_item)) { unset($switch_news_ticker_item); } 

?>

	<?php if ($this->vars['XS_HAS_NEWS_ITEMS']) {  ?>
	<?php

$switch_news_subtitle_count = ( isset($this->_tpldata['switch_news_subtitle.']) ) ? sizeof($this->_tpldata['switch_news_subtitle.']) : 0;
for ($switch_news_subtitle_i = 0; $switch_news_subtitle_i < $switch_news_subtitle_count; $switch_news_subtitle_i++)
{
 $switch_news_subtitle_item = &$this->_tpldata['switch_news_subtitle.'][$switch_news_subtitle_i];
 $switch_news_subtitle_item['S_ROW_COUNT'] = $switch_news_subtitle_i;
 $switch_news_subtitle_item['S_NUM_ROWS'] = $switch_news_subtitle_count;

?>
	<p class="forum-buttons2" style="height: 17px; valign: middle;"><?php echo isset($this->vars['XS_NEWS_ITEMS_TITLE']) ? $this->vars['XS_NEWS_ITEMS_TITLE'] : $this->lang('XS_NEWS_ITEMS_TITLE'); ?></p>
	<?php

} // END switch_news_subtitle

if(isset($switch_news_subtitle_item)) { unset($switch_news_subtitle_item); } 

?>
	<p class="row1 row-news-tickers">
		<?php

$newsitem_count = ( isset($this->_tpldata['newsitem.']) ) ? sizeof($this->_tpldata['newsitem.']) : 0;
for ($newsitem_i = 0; $newsitem_i < $newsitem_count; $newsitem_i++)
{
 $newsitem_item = &$this->_tpldata['newsitem.'][$newsitem_i];
 $newsitem_item['S_ROW_COUNT'] = $newsitem_i;
 $newsitem_item['S_NUM_ROWS'] = $newsitem_count;

?>
		<b><?php echo isset($newsitem_item['NEWS_ITEM_DATE']) ? $newsitem_item['NEWS_ITEM_DATE'] : ''; ?>:</b> <?php echo isset($newsitem_item['NEWS_ITEM']) ? $newsitem_item['NEWS_ITEM'] : ''; ?><br />
		<?php

} // END newsitem

if(isset($newsitem_item)) { unset($newsitem_item); } 

?>
	</p>
	<?php } ?>

	</td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
</center>
