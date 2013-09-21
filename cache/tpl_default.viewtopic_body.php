<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 19:40:51 +0000 (time = 1379792451)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php  $this->set_filename('xs_include_d9bb1bb177244c447afb002873b1efd5', 'viewtopic_inc_js.tpl', true);  $this->pparse('xs_include_d9bb1bb177244c447afb002873b1efd5');  ?>

<?php  $this->set_filename('xs_include_d37b92b15c5510e064aef05c1b141365', 'breadcrumbs_vt.tpl', true);  $this->pparse('xs_include_d37b92b15c5510e064aef05c1b141365');  ?>
<br clear="all" />

<?php if ($this->vars['S_FORUM_RULES']) {  ?>
<table class="forumline" width="100%" cellspacing="0">
<tr><td class="row-header"><span><?php if ($this->vars['S_FORUM_RULES_TITLE']) {  ?><?php echo isset($this->vars['L_FORUM_RULES']) ? $this->vars['L_FORUM_RULES'] : $this->lang('L_FORUM_RULES'); ?><?php } ?>&nbsp;</span></td></tr>
<tr><td class="row1g-left" width="100%"><div class="post-text"><?php echo isset($this->vars['FORUM_RULES']) ? $this->vars['FORUM_RULES'] : $this->lang('FORUM_RULES'); ?></div></td></tr>
</table>
<br />
<?php } ?>

<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td align="left" valign="bottom">
		<div class="topic-title-hide-flow-header"><h2><a href="<?php echo isset($this->vars['U_VIEW_TOPIC_BASE']) ? $this->vars['U_VIEW_TOPIC_BASE'] : $this->lang('U_VIEW_TOPIC_BASE'); ?>" style="text-decoration: none;"><?php echo isset($this->vars['TOPIC_TITLE']) ? $this->vars['TOPIC_TITLE'] : $this->lang('TOPIC_TITLE'); ?></a></h2></div><br />
		<?php if ($this->vars['S_TOPIC_TAGS'] && $this->vars['TOPIC_TAGS']) {  ?>
		<div><span class="gensmall"><b><?php echo isset($this->vars['L_TOPIC_TAGS']) ? $this->vars['L_TOPIC_TAGS'] : $this->lang('L_TOPIC_TAGS'); ?></b>:&nbsp;<?php echo isset($this->vars['TOPIC_TAGS']) ? $this->vars['TOPIC_TAGS'] : $this->lang('TOPIC_TAGS'); ?></span></div><br />
		<?php } ?>
		<?php if (! $this->vars['S_BOT']) {  ?>
		<span class="img-btn"><a href="<?php echo isset($this->vars['U_POST_NEW_TOPIC']) ? $this->vars['U_POST_NEW_TOPIC'] : $this->lang('U_POST_NEW_TOPIC'); ?>"><img src="<?php echo isset($this->vars['POST_IMG']) ? $this->vars['POST_IMG'] : $this->lang('POST_IMG'); ?>" alt="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" title="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" /></a></span>&nbsp;
		<span class="img-btn"><a href="<?php echo isset($this->vars['U_POST_REPLY_TOPIC']) ? $this->vars['U_POST_REPLY_TOPIC'] : $this->lang('U_POST_REPLY_TOPIC'); ?>"><img src="<?php echo isset($this->vars['REPLY_IMG']) ? $this->vars['REPLY_IMG'] : $this->lang('REPLY_IMG'); ?>" alt="<?php echo isset($this->vars['L_POST_REPLY_TOPIC']) ? $this->vars['L_POST_REPLY_TOPIC'] : $this->lang('L_POST_REPLY_TOPIC'); ?>" title="<?php echo isset($this->vars['L_POST_REPLY_TOPIC']) ? $this->vars['L_POST_REPLY_TOPIC'] : $this->lang('L_POST_REPLY_TOPIC'); ?>" /></a></span>&nbsp;
		<?php if ($this->vars['S_THANKS']) {  ?><span class="img-btn"><a href="<?php echo isset($this->vars['U_THANKS']) ? $this->vars['U_THANKS'] : $this->lang('U_THANKS'); ?>" rel="nofollow"><img src="<?php echo isset($this->vars['THANKS_IMG']) ? $this->vars['THANKS_IMG'] : $this->lang('THANKS_IMG'); ?>" alt="<?php echo isset($this->vars['L_THANKS']) ? $this->vars['L_THANKS'] : $this->lang('L_THANKS'); ?>" title="<?php echo isset($this->vars['L_THANKS']) ? $this->vars['L_THANKS'] : $this->lang('L_THANKS'); ?>" /></a></span><?php } ?>
		<?php } else { ?>
		&nbsp;
		<?php } ?>
	</td>
	<td align="right" valign="bottom">
		<span class="gen"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span><br />
		<span class="pagination"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span><br />
		<?php if ($this->vars['S_EXTENDED_PAGINATION']) {  ?>
		<div style="margin-top: 3px;"><form method="post" action="<?php echo isset($this->vars['U_VIEW_TOPIC']) ? $this->vars['U_VIEW_TOPIC'] : $this->lang('U_VIEW_TOPIC'); ?>"><span class="gen"><b><?php echo isset($this->vars['L_GO_TO_PAGE_NUMBER']) ? $this->vars['L_GO_TO_PAGE_NUMBER'] : $this->lang('L_GO_TO_PAGE_NUMBER'); ?></b>&nbsp;<input type="text" name="page_number" value="" size="3" class="post" />&nbsp;&nbsp;<input type="submit" name="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" class="mainoption" /></span></form></div>
		<?php } ?>
		<?php if (! $this->vars['S_BOT']) {  ?><div style="margin-top: 3px; white-space: nowrap;"><form action="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['U_SEARCH']) ? $this->vars['U_SEARCH'] : $this->lang('U_SEARCH'); ?>" method="post"><input name="search_keywords" type="text" class="post search" style="width: 160px;" value="<?php echo isset($this->vars['L_SEARCH_THIS_TOPIC']) ? $this->vars['L_SEARCH_THIS_TOPIC'] : $this->lang('L_SEARCH_THIS_TOPIC'); ?>" onclick="if(this.value=='<?php echo isset($this->vars['L_SEARCH_THIS_TOPIC']) ? $this->vars['L_SEARCH_THIS_TOPIC'] : $this->lang('L_SEARCH_THIS_TOPIC'); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo isset($this->vars['L_SEARCH_THIS_TOPIC']) ? $this->vars['L_SEARCH_THIS_TOPIC'] : $this->lang('L_SEARCH_THIS_TOPIC'); ?>';" /><input type="hidden" name="search_where" value="<?php echo isset($this->vars['FORUM_ID_FULL']) ? $this->vars['FORUM_ID_FULL'] : $this->lang('FORUM_ID_FULL'); ?>" /><input type="hidden" name="search_where_topic" value="<?php echo isset($this->vars['TOPIC_ID_FULL']) ? $this->vars['TOPIC_ID_FULL'] : $this->lang('TOPIC_ID_FULL'); ?>" />&nbsp;<input type="submit" class="mainoption" value="<?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?>" /></form></div><?php } ?>
	</td>
</tr>
</table>

<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['TOPIC_TITLE_SHORT']) ? $this->vars['TOPIC_TITLE_SHORT'] : $this->lang('TOPIC_TITLE_SHORT'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<?php if ($this->vars['VIEWTOPIC_BANNER_TOP']) {  ?>
<tr><td class="row-post" colspan="2" align="center" style="text-align: center; vertical-align: middle !important;"><div class="center-block-text" style="overflow:auto;"><?php echo isset($this->vars['VIEWTOPIC_BANNER_TOP']) ? $this->vars['VIEWTOPIC_BANNER_TOP'] : $this->lang('VIEWTOPIC_BANNER_TOP'); ?></div></td></tr>
<?php } ?>
<?php echo isset($this->vars['POLL_DISPLAY']) ? $this->vars['POLL_DISPLAY'] : $this->lang('POLL_DISPLAY'); ?>
<?php echo isset($this->vars['REG_DISPLAY']) ? $this->vars['REG_DISPLAY'] : $this->lang('REG_DISPLAY'); ?>
<tr>
	<th width="150"><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
	<th width="100%"><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></th>
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
		<span class="post-name">
			<a id="p<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"></a><a href="<?php echo isset($postrow_item['U_USER_ONLINE_STATUS']) ? $postrow_item['U_USER_ONLINE_STATUS'] : ''; ?>"><img src="<?php if ($postrow_item['S_USER_ONLINE']) {  ?><?php echo isset($postrow_item['IMG_USER_ONLINE']) ? $postrow_item['IMG_USER_ONLINE'] : ''; ?><?php } elseif ($postrow_item['S_USER_HIDDEN']) {  ?><?php echo isset($postrow_item['IMG_USER_HIDDEN']) ? $postrow_item['IMG_USER_HIDDEN'] : ''; ?><?php } else { ?><?php echo isset($postrow_item['IMG_USER_OFFLINE']) ? $postrow_item['IMG_USER_OFFLINE'] : ''; ?><?php } ?>" alt="<?php echo isset($postrow_item['L_POSTER_ONLINE_STATUS']) ? $postrow_item['L_POSTER_ONLINE_STATUS'] : ''; ?>" title="<?php echo isset($postrow_item['L_POSTER_ONLINE_STATUS']) ? $postrow_item['L_POSTER_ONLINE_STATUS'] : ''; ?>" /></a>&nbsp;<?php echo isset($postrow_item['POSTER_NAME']) ? $postrow_item['POSTER_NAME'] : ''; ?>&nbsp;<?php if ($postrow_item['S_GENDER_MALE']) {  ?><a href="#"><img src="<?php echo isset($postrow_item['IMG_GENDER_MALE']) ? $postrow_item['IMG_GENDER_MALE'] : ''; ?>" alt="<?php echo isset($postrow_item['L_GENDER_MALE']) ? $postrow_item['L_GENDER_MALE'] : ''; ?>" title="<?php echo isset($postrow_item['L_GENDER_MALE']) ? $postrow_item['L_GENDER_MALE'] : ''; ?>" /></a><?php } elseif ($postrow_item['S_GENDER_FEMALE']) {  ?><a href="#"><img src="<?php echo isset($postrow_item['IMG_GENDER_FEMALE']) ? $postrow_item['IMG_GENDER_FEMALE'] : ''; ?>" alt="<?php echo isset($postrow_item['L_GENDER_FEMALE']) ? $postrow_item['L_GENDER_FEMALE'] : ''; ?>" title="<?php echo isset($postrow_item['L_GENDER_FEMALE']) ? $postrow_item['L_GENDER_FEMALE'] : ''; ?>" /></a><?php } ?>
		</span><br />
		<?php if ($postrow_item['POSTER_FULL_NAME']) {  ?><span class="post-details"><?php echo isset($postrow_item['POSTER_FULL_NAME']) ? $postrow_item['POSTER_FULL_NAME'] : ''; ?></span><br /><?php } ?>
		<?php if (! $this->vars['S_BOT']) {  ?>
		<div class="center-block-text">
			<div class="post-rank">
			<b>
			<?php echo isset($postrow_item['USER_RANK_01']) ? $postrow_item['USER_RANK_01'] : ''; ?><?php echo isset($postrow_item['USER_RANK_01_IMG']) ? $postrow_item['USER_RANK_01_IMG'] : ''; ?>
			<?php echo isset($postrow_item['USER_RANK_02']) ? $postrow_item['USER_RANK_02'] : ''; ?><?php echo isset($postrow_item['USER_RANK_02_IMG']) ? $postrow_item['USER_RANK_02_IMG'] : ''; ?>
			<?php echo isset($postrow_item['USER_RANK_03']) ? $postrow_item['USER_RANK_03'] : ''; ?><?php echo isset($postrow_item['USER_RANK_03_IMG']) ? $postrow_item['USER_RANK_03_IMG'] : ''; ?>
			<?php echo isset($postrow_item['USER_RANK_04']) ? $postrow_item['USER_RANK_04'] : ''; ?><?php echo isset($postrow_item['USER_RANK_04_IMG']) ? $postrow_item['USER_RANK_04_IMG'] : ''; ?>
			<?php echo isset($postrow_item['USER_RANK_05']) ? $postrow_item['USER_RANK_05'] : ''; ?><?php echo isset($postrow_item['USER_RANK_05_IMG']) ? $postrow_item['USER_RANK_05_IMG'] : ''; ?>
			</b>
			</div>
		</div>
		<br/>

		<?php if ($postrow_item['S_CARD_SWITCH_Y_R_A']) {  ?>
			<?php if ($postrow_item['S_CARD_SWITCH_R_A']) {  ?>
				<img src="<?php echo isset($postrow_item['IMG_CARD_R_A']) ? $postrow_item['IMG_CARD_R_A'] : ''; ?>" alt="<?php echo isset($postrow_item['L_CARD_R_A']) ? $postrow_item['L_CARD_R_A'] : ''; ?>" title="<?php echo isset($postrow_item['L_CARD_R_A']) ? $postrow_item['L_CARD_R_A'] : ''; ?>" />
			<?php } else { ?>
				<?php

$cards_y_count = ( isset($postrow_item['cards_y.']) ) ? sizeof($postrow_item['cards_y.']) : 0;
for ($cards_y_i = 0; $cards_y_i < $cards_y_count; $cards_y_i++)
{
 $cards_y_item = &$postrow_item['cards_y.'][$cards_y_i];
 $cards_y_item['S_ROW_COUNT'] = $cards_y_i;
 $cards_y_item['S_NUM_ROWS'] = $cards_y_count;

?>
					<img src="<?php echo isset($postrow_item['IMG_CARD_Y_A']) ? $postrow_item['IMG_CARD_Y_A'] : ''; ?>" alt="<?php echo isset($postrow_item['L_CARD_Y_A']) ? $postrow_item['L_CARD_Y_A'] : ''; ?>" title="<?php echo isset($postrow_item['L_CARD_Y_A']) ? $postrow_item['L_CARD_Y_A'] : ''; ?>" />
				<?php

} // END cards_y

if(isset($cards_y_item)) { unset($cards_y_item); } 

?>
			<?php } ?>
		<?php } ?>

		<?php } ?>
		<?php

$switch_showavatars_count = ( isset($postrow_item['switch_showavatars.']) ) ? sizeof($postrow_item['switch_showavatars.']) : 0;
for ($switch_showavatars_i = 0; $switch_showavatars_i < $switch_showavatars_count; $switch_showavatars_i++)
{
 $switch_showavatars_item = &$postrow_item['switch_showavatars.'][$switch_showavatars_i];
 $switch_showavatars_item['S_ROW_COUNT'] = $switch_showavatars_i;
 $switch_showavatars_item['S_NUM_ROWS'] = $switch_showavatars_count;

?>
		<span class="post-images"><a href="javascript:quotename(%27[b]<?php echo isset($postrow_item['POSTER_NAME_QR']) ? $postrow_item['POSTER_NAME_QR'] : ''; ?>[/b],%27);"><?php echo isset($postrow_item['POSTER_AVATAR']) ? $postrow_item['POSTER_AVATAR'] : ''; ?></a></span>
		<?php

} // END switch_showavatars

if(isset($switch_showavatars_item)) { unset($switch_showavatars_item); } 

?>
		<div class="post-details">
			<?php if (! $this->vars['S_BOT']) {  ?>
			<?php } ?>
			<!-- <?php echo isset($postrow_item['POSTER_NO']) ? $postrow_item['POSTER_NO'] : ''; ?><br /> -->
			<?php echo isset($postrow_item['POSTER_JOINED']) ? $postrow_item['POSTER_JOINED'] : ''; ?><br />
			<?php if (! $this->vars['S_BOT']) {  ?>
			<?php echo isset($postrow_item['POSTER_POSTS']) ? $postrow_item['POSTER_POSTS'] : ''; ?><br />
			<?php echo isset($postrow_item['POSTER_THANKS_RECEIVED']) ? $postrow_item['POSTER_THANKS_RECEIVED'] : ''; ?>
			<?php } ?>
			<?php echo isset($postrow_item['POSTER_AGE']) ? $postrow_item['POSTER_AGE'] : ''; ?>
			<?php echo isset($postrow_item['POSTER_FROM_FULL']) ? $postrow_item['POSTER_FROM_FULL'] : ''; ?><br />
			<?php if ($postrow_item['FEEDBACK']) {  ?><?php echo isset($postrow_item['FEEDBACK']) ? $postrow_item['FEEDBACK'] : ''; ?><?php } ?>
			<?php if (! $this->vars['S_BOT']) {  ?>
			<?php

$switch_poster_info_count = ( isset($postrow_item['switch_poster_info.']) ) ? sizeof($postrow_item['switch_poster_info.']) : 0;
for ($switch_poster_info_i = 0; $switch_poster_info_i < $switch_poster_info_count; $switch_poster_info_i++)
{
 $switch_poster_info_item = &$postrow_item['switch_poster_info.'][$switch_poster_info_i];
 $switch_poster_info_item['S_ROW_COUNT'] = $switch_poster_info_i;
 $switch_poster_info_item['S_NUM_ROWS'] = $switch_poster_info_count;

?>
			<?php echo isset($postrow_item['CASH']) ? $postrow_item['CASH'] : ''; ?><br />
			<?php echo isset($postrow_item['ADR_TOPIC_BOX']) ? $postrow_item['ADR_TOPIC_BOX'] : ''; ?><a href="<?php echo isset($postrow_item['RABBITOSHI_LINK']) ? $postrow_item['RABBITOSHI_LINK'] : ''; ?>" ><?php echo isset($this->vars['L_RABBITOSHI_TOPIC']) ? $this->vars['L_RABBITOSHI_TOPIC'] : $this->lang('L_RABBITOSHI_TOPIC'); ?></a><br/>
			<?php echo isset($postrow_item['POSTER_NO']) ? $postrow_item['POSTER_NO'] : ''; ?><br />
			<?php echo isset($postrow_item['POSTER_LANG']) ? $postrow_item['POSTER_LANG'] : ''; ?>
			<?php echo isset($postrow_item['POSTER_STYLE']) ? $postrow_item['POSTER_STYLE'] : ''; ?>
			<?php

} // END switch_poster_info

if(isset($switch_poster_info_item)) { unset($switch_poster_info_item); } 

?>
			<?php } ?>
			<?php

$author_profile_count = ( isset($postrow_item['author_profile.']) ) ? sizeof($postrow_item['author_profile.']) : 0;
for ($author_profile_i = 0; $author_profile_i < $author_profile_count; $author_profile_i++)
{
 $author_profile_item = &$postrow_item['author_profile.'][$author_profile_i];
 $author_profile_item['S_ROW_COUNT'] = $author_profile_i;
 $author_profile_item['S_NUM_ROWS'] = $author_profile_count;

?>
			<?php echo isset($author_profile_item['AUTHOR_VAL']) ? $author_profile_item['AUTHOR_VAL'] : ''; ?><br />
			<?php

} // END author_profile

if(isset($author_profile_item)) { unset($author_profile_item); } 

?>
			<div class="center-block-text">&nbsp;<?php echo isset($postrow_item['HAPPY_BIRTHDAY']) ? $postrow_item['HAPPY_BIRTHDAY'] : ''; ?></div>
		</div>
		&nbsp;<br />
	</td>
	<!-- <td class="row-post" width="100%" height="100%" style="overflow: hidden;"> -->
	<td class="row-post" height="100%">
		<div class="post-buttons-top post-buttons">
			<?php if (! $this->vars['S_BOT']) {  ?>
			<a href="<?php echo isset($postrow_item['U_POST_QUOTE']) ? $postrow_item['U_POST_QUOTE'] : ''; ?>"><img src="<?php echo isset($postrow_item['IMG_POST_QUOTE']) ? $postrow_item['IMG_POST_QUOTE'] : ''; ?>" alt="<?php echo isset($postrow_item['L_POST_QUOTE']) ? $postrow_item['L_POST_QUOTE'] : ''; ?>" title="<?php echo isset($postrow_item['L_POST_QUOTE']) ? $postrow_item['L_POST_QUOTE'] : ''; ?>" /></a>
			<?php if ($postrow_item['S_POST_EDIT']) {  ?>
			&nbsp;<a href="<?php echo isset($postrow_item['U_POST_EDIT']) ? $postrow_item['U_POST_EDIT'] : ''; ?>"><img src="<?php echo isset($postrow_item['IMG_POST_EDIT']) ? $postrow_item['IMG_POST_EDIT'] : ''; ?>" alt="<?php echo isset($postrow_item['L_POST_EDIT']) ? $postrow_item['L_POST_EDIT'] : ''; ?>" title="<?php echo isset($postrow_item['L_POST_EDIT']) ? $postrow_item['L_POST_EDIT'] : ''; ?>" /></a>
			<?php } ?>
			<?php if ($postrow_item['S_POST_DELETE']) {  ?>
			&nbsp;<a href="<?php echo isset($postrow_item['U_POST_DELETE']) ? $postrow_item['U_POST_DELETE'] : ''; ?>"><img src="<?php echo isset($postrow_item['IMG_POST_DELETE']) ? $postrow_item['IMG_POST_DELETE'] : ''; ?>" alt="<?php echo isset($postrow_item['L_POST_DELETE']) ? $postrow_item['L_POST_DELETE'] : ''; ?>" title="<?php echo isset($postrow_item['L_POST_DELETE']) ? $postrow_item['L_POST_DELETE'] : ''; ?>" /></a>
			<?php } ?>
			<?php echo isset($postrow_item['UNREAD_IMG']) ? $postrow_item['UNREAD_IMG'] : ''; ?>

			<?php if ($postrow_item['S_CARD_SWITCH']) {  ?>
			<?php if ($postrow_item['S_CARD_SWITCH_B']) {  ?><?php if ($postrow_item['S_CARD_CLASS']) {  ?><span class="img-report"><?php } ?><a href="<?php echo isset($postrow_item['U_CARD_B']) ? $postrow_item['U_CARD_B'] : ''; ?>" onclick="return confirm('<?php echo isset($postrow_item['L_CARD_B_JS']) ? $postrow_item['L_CARD_B_JS'] : ''; ?>')"><img src="<?php echo isset($postrow_item['IMG_CARD_B']) ? $postrow_item['IMG_CARD_B'] : ''; ?>" alt="<?php echo isset($postrow_item['L_CARD_B']) ? $postrow_item['L_CARD_B'] : ''; ?>" title="<?php echo isset($postrow_item['L_CARD_B']) ? $postrow_item['L_CARD_B'] : ''; ?>" /></a><?php if ($postrow_item['S_CARD_CLASS']) {  ?></span><?php } ?><?php } ?>
			<?php if ($postrow_item['S_CARD_SWITCH_P']) {  ?><?php if ($postrow_item['S_CARD_CLASS']) {  ?><span class="img-clear"><?php } ?><a href="<?php echo isset($postrow_item['U_CARD_P']) ? $postrow_item['U_CARD_P'] : ''; ?>" onclick="return confirm('<?php echo isset($postrow_item['L_CARD_P_JS']) ? $postrow_item['L_CARD_P_JS'] : ''; ?>')"><img src="<?php echo isset($postrow_item['IMG_CARD_P']) ? $postrow_item['IMG_CARD_P'] : ''; ?>" alt="<?php echo isset($postrow_item['L_CARD_P']) ? $postrow_item['L_CARD_P'] : ''; ?>" title="<?php echo isset($postrow_item['L_CARD_P']) ? $postrow_item['L_CARD_P'] : ''; ?>" /></a><?php if ($postrow_item['S_CARD_CLASS']) {  ?></span><?php } ?><?php } ?>
			<?php if ($postrow_item['S_CARD_SWITCH_G']) {  ?><?php if ($postrow_item['S_CARD_CLASS']) {  ?><span class="img-green"><?php } ?><a href="<?php echo isset($postrow_item['U_CARD_G']) ? $postrow_item['U_CARD_G'] : ''; ?>" onclick="return confirm('<?php echo isset($postrow_item['L_CARD_G_JS']) ? $postrow_item['L_CARD_G_JS'] : ''; ?>')"><img src="<?php echo isset($postrow_item['IMG_CARD_G']) ? $postrow_item['IMG_CARD_G'] : ''; ?>" alt="<?php echo isset($postrow_item['L_CARD_G']) ? $postrow_item['L_CARD_G'] : ''; ?>" title="<?php echo isset($postrow_item['L_CARD_G']) ? $postrow_item['L_CARD_G'] : ''; ?>" /></a><?php if ($postrow_item['S_CARD_CLASS']) {  ?></span><?php } ?><?php } ?>
			<?php if ($postrow_item['S_CARD_SWITCH_Y']) {  ?><?php if ($postrow_item['S_CARD_CLASS']) {  ?><span class="img-warn"><?php } ?><a href="<?php echo isset($postrow_item['U_CARD_Y']) ? $postrow_item['U_CARD_Y'] : ''; ?>" onclick="return confirm('<?php echo isset($postrow_item['L_CARD_Y_JS']) ? $postrow_item['L_CARD_Y_JS'] : ''; ?>')"><img src="<?php echo isset($postrow_item['IMG_CARD_Y']) ? $postrow_item['IMG_CARD_Y'] : ''; ?>" alt="<?php echo isset($postrow_item['L_CARD_Y']) ? $postrow_item['L_CARD_Y'] : ''; ?>" title="<?php echo isset($postrow_item['L_CARD_Y']) ? $postrow_item['L_CARD_Y'] : ''; ?>" /></a><?php if ($postrow_item['S_CARD_CLASS']) {  ?></span><?php } ?><?php } ?>
			<?php if ($postrow_item['S_CARD_SWITCH_R']) {  ?><?php if ($postrow_item['S_CARD_CLASS']) {  ?><span class="img-ban"><?php } ?><a href="<?php echo isset($postrow_item['U_CARD_R']) ? $postrow_item['U_CARD_R'] : ''; ?>" onclick="return confirm('<?php echo isset($postrow_item['L_CARD_R_JS']) ? $postrow_item['L_CARD_R_JS'] : ''; ?>')"><img src="<?php echo isset($postrow_item['IMG_CARD_R']) ? $postrow_item['IMG_CARD_R'] : ''; ?>" alt="<?php echo isset($postrow_item['L_CARD_R']) ? $postrow_item['L_CARD_R'] : ''; ?>" title="<?php echo isset($postrow_item['L_CARD_R']) ? $postrow_item['L_CARD_R'] : ''; ?>" /></a><?php if ($postrow_item['S_CARD_CLASS']) {  ?></span><?php } ?><?php } ?>
			<?php } ?>

			&nbsp;<?php if ($this->vars['IS_APHRODITE']) {  ?><?php echo isset($postrow_item['IP_IMG']) ? $postrow_item['IP_IMG'] : ''; ?>&nbsp;<a href="<?php echo isset($postrow_item['DOWNLOAD_POST']) ? $postrow_item['DOWNLOAD_POST'] : ''; ?>" class="genmed" rel="nofollow"><img src="<?php echo isset($postrow_item['DOWNLOAD_IMG']) ? $postrow_item['DOWNLOAD_IMG'] : ''; ?>" alt="<?php echo isset($this->vars['L_DOWNLOAD_POST']) ? $this->vars['L_DOWNLOAD_POST'] : $this->lang('L_DOWNLOAD_POST'); ?>" title="<?php echo isset($this->vars['L_DOWNLOAD_POST']) ? $this->vars['L_DOWNLOAD_POST'] : $this->lang('L_DOWNLOAD_POST'); ?>" /></a><?php } else { ?><?php echo isset($postrow_item['IP_IMG_ICON']) ? $postrow_item['IP_IMG_ICON'] : ''; ?>&nbsp;<a href="<?php echo isset($postrow_item['DOWNLOAD_POST']) ? $postrow_item['DOWNLOAD_POST'] : ''; ?>" class="genmed" rel="nofollow"><img src="<?php echo isset($postrow_item['DOWNLOAD_IMG_ICON']) ? $postrow_item['DOWNLOAD_IMG_ICON'] : ''; ?>" alt="<?php echo isset($this->vars['L_DOWNLOAD_POST']) ? $this->vars['L_DOWNLOAD_POST'] : $this->lang('L_DOWNLOAD_POST'); ?>" title="<?php echo isset($this->vars['L_DOWNLOAD_POST']) ? $this->vars['L_DOWNLOAD_POST'] : $this->lang('L_DOWNLOAD_POST'); ?>" /></a><?php } ?>&nbsp;<?php echo isset($postrow_item['ARROWS']) ? $postrow_item['ARROWS'] : ''; ?>
			<?php } else { ?>
			&nbsp;
			<?php } ?>
		</div>
		<div class="post-subject <?php echo isset($postrow_item['UNREAD_COLOR']) ? $postrow_item['UNREAD_COLOR'] : ''; ?>"><a href="<?php echo isset($postrow_item['U_MINI_POST']) ? $postrow_item['U_MINI_POST'] : ''; ?>"><img src="<?php echo isset($postrow_item['MINI_POST_IMG']) ? $postrow_item['MINI_POST_IMG'] : ''; ?>" alt="<?php echo isset($postrow_item['L_MINI_POST_ALT']) ? $postrow_item['L_MINI_POST_ALT'] : ''; ?>" title="<?php echo isset($postrow_item['L_MINI_POST_ALT']) ? $postrow_item['L_MINI_POST_ALT'] : ''; ?>" /></a> <?php echo isset($postrow_item['POST_SUBJECT']) ? $postrow_item['POST_SUBJECT'] : ''; ?>&nbsp;</div>
		&nbsp;
		<div class="post-text post-text-hide-flow">
			<?php echo isset($postrow_item['MESSAGE']) ? $postrow_item['MESSAGE'] : ''; ?><br />
			<?php echo isset($postrow_item['ATTACHMENTS']) ? $postrow_item['ATTACHMENTS'] : ''; ?>
		</div>
		<div class="align-spacer">&nbsp;</div>
		<div class="post-text post-text-hide-flow">
			<br /><br /><br />
			<?php

$above_sig_count = ( isset($postrow_item['above_sig.']) ) ? sizeof($postrow_item['above_sig.']) : 0;
for ($above_sig_i = 0; $above_sig_i < $above_sig_count; $above_sig_i++)
{
 $above_sig_item = &$postrow_item['above_sig.'][$above_sig_i];
 $above_sig_item['S_ROW_COUNT'] = $above_sig_i;
 $above_sig_item['S_NUM_ROWS'] = $above_sig_count;

?>
			<span class="post-details"><br /><?php echo isset($above_sig_item['ABOVE_VAL']) ? $above_sig_item['ABOVE_VAL'] : ''; ?></span>
			<?php

} // END above_sig

if(isset($above_sig_item)) { unset($above_sig_item); } 

?>
			<?php

$switch_showsignatures_count = ( isset($postrow_item['switch_showsignatures.']) ) ? sizeof($postrow_item['switch_showsignatures.']) : 0;
for ($switch_showsignatures_i = 0; $switch_showsignatures_i < $switch_showsignatures_count; $switch_showsignatures_i++)
{
 $switch_showsignatures_item = &$postrow_item['switch_showsignatures.'][$switch_showsignatures_i];
 $switch_showsignatures_item['S_ROW_COUNT'] = $switch_showsignatures_i;
 $switch_showsignatures_item['S_NUM_ROWS'] = $switch_showsignatures_count;

?>
			<?php echo isset($postrow_item['SIGNATURE']) ? $postrow_item['SIGNATURE'] : ''; ?>
			<?php

} // END switch_showsignatures

if(isset($switch_showsignatures_item)) { unset($switch_showsignatures_item); } 

?>
			<?php

$below_sig_count = ( isset($postrow_item['below_sig.']) ) ? sizeof($postrow_item['below_sig.']) : 0;
for ($below_sig_i = 0; $below_sig_i < $below_sig_count; $below_sig_i++)
{
 $below_sig_item = &$postrow_item['below_sig.'][$below_sig_i];
 $below_sig_item['S_ROW_COUNT'] = $below_sig_i;
 $below_sig_item['S_NUM_ROWS'] = $below_sig_count;

?>
			<span class="post-details"><br /><?php echo isset($below_sig_item['BELOW_VAL']) ? $below_sig_item['BELOW_VAL'] : ''; ?></span>
			<?php

} // END below_sig

if(isset($below_sig_item)) { unset($below_sig_item); } 

?>
		</div>
		<div class="align-spacer">&nbsp;</div>
		<?php if ($this->vars['S_EDIT_NOTES']) {  ?>
		<?php if ($postrow_item['EDITED_MESSAGE']) {  ?>
		<div class="post-notes"><div class="post-note"><span class="gensmall"><?php echo isset($postrow_item['EDITED_MESSAGE']) ? $postrow_item['EDITED_MESSAGE'] : ''; ?>&nbsp;</span></div></div>
		<?php } ?>
		<?php if ($postrow_item['NOTES_COUNT']) {  ?>
		<div class="post-notes">
		<?php

$notes_count = ( isset($postrow_item['notes.']) ) ? sizeof($postrow_item['notes.']) : 0;
for ($notes_i = 0; $notes_i < $notes_count; $notes_i++)
{
 $notes_item = &$postrow_item['notes.'][$notes_i];
 $notes_item['S_ROW_COUNT'] = $notes_i;
 $notes_item['S_NUM_ROWS'] = $notes_count;

?>
		<div class="post-note">
			<?php if ($notes_item['U_DELETE']) {  ?>
			<div class="post-note-delete">[<a href="<?php echo isset($notes_item['U_DELETE']) ? $notes_item['U_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE_NOTE']) ? $this->vars['L_DELETE_NOTE'] : $this->lang('L_DELETE_NOTE'); ?></a>]</div>
			<?php } ?>
			<?php echo isset($this->vars['L_EDITED_BY']) ? $this->vars['L_EDITED_BY'] : $this->lang('L_EDITED_BY'); ?> <?php echo isset($notes_item['POSTER_NAME']) ? $notes_item['POSTER_NAME'] : ''; ?>, <?php echo isset($notes_item['TIME']) ? $notes_item['TIME'] : ''; ?>: <?php echo isset($notes_item['TEXT']) ? $notes_item['TEXT'] : ''; ?>
		</div>
		<?php

} // END notes

if(isset($notes_item)) { unset($notes_item); } 

?>
		</div>
		<?php } ?>
		<?php } ?>
	</td>
</tr>
<?php if ($this->vars['S_POSTS_LIKES']) {  ?>
<tr><td class="row-post-date" colspan="2"><span class="gensmall"><span id="like_s_p<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"><?php if ($postrow_item['POST_LIKE_TEXT']) {  ?><?php echo isset($postrow_item['POST_LIKE_TEXT']) ? $postrow_item['POST_LIKE_TEXT'] : ''; ?>&nbsp;&bull;<?php } ?>&nbsp;</span><?php if ($this->vars['S_LOGGED_IN']) {  ?><a href="#" id="like_a_p<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" style="text-decoration: none;" onclick="post_like_ajax(<?php echo isset($postrow_item['U_TOPIC_ID']) ? $postrow_item['U_TOPIC_ID'] : ''; ?>, <?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>); return false;"><?php if ($postrow_item['READER_LIKES']) {  ?><?php echo isset($this->vars['L_UNLIKE']) ? $this->vars['L_UNLIKE'] : $this->lang('L_UNLIKE'); ?><?php } else { ?><?php echo isset($this->vars['L_LIKE']) ? $this->vars['L_LIKE'] : $this->lang('L_LIKE'); ?><?php } ?></a>&nbsp;&bull;<?php } ?>&nbsp;<?php echo isset($postrow_item['SINGLE_POST_SHARE']) ? $postrow_item['SINGLE_POST_SHARE'] : ''; ?></span></td></tr>
<?php } ?>
<tr>
	<td class="row-post-date"><div style="text-align: center;"><b><?php echo isset($postrow_item['SINGLE_POST']) ? $postrow_item['SINGLE_POST'] : ''; ?></b>&nbsp;&nbsp;<?php if ($this->vars['S_ADMIN']) {  ?><?php echo isset($postrow_item['POST_EDIT_STRING_SHORT']) ? $postrow_item['POST_EDIT_STRING_SHORT'] : ''; ?><?php } else { ?><?php echo isset($postrow_item['POST_DATE']) ? $postrow_item['POST_DATE'] : ''; ?><?php } ?></div></td>
	<td class="row-post-buttons post-buttons">
		<div style="text-align: right; vertical-align: middle;">
			<div class="extra-top-padding" style="position: relative; float: left; text-align: left; vertical-align: middle;">
				<a href="<?php echo isset($postrow_item['U_VIEW_PROFILE']) ? $postrow_item['U_VIEW_PROFILE'] : ''; ?>"><img src="<?php echo isset($postrow_item['IMG_VIEW_PROFILE']) ? $postrow_item['IMG_VIEW_PROFILE'] : ''; ?>" alt="<?php echo isset($postrow_item['POSTER_NAME_QQ']) ? $postrow_item['POSTER_NAME_QQ'] : ''; ?>" title="<?php echo isset($postrow_item['POSTER_NAME_QQ']) ? $postrow_item['POSTER_NAME_QQ'] : ''; ?>" /></a>
				<a href="<?php echo isset($postrow_item['U_SEND_PRIVMSG']) ? $postrow_item['U_SEND_PRIVMSG'] : ''; ?>"><img src="<?php echo isset($postrow_item['IMG_SEND_PRIVMSG']) ? $postrow_item['IMG_SEND_PRIVMSG'] : ''; ?>" alt="<?php echo isset($postrow_item['L_SEND_PRIVMSG']) ? $postrow_item['L_SEND_PRIVMSG'] : ''; ?>" title="<?php echo isset($postrow_item['L_SEND_PRIVMSG']) ? $postrow_item['L_SEND_PRIVMSG'] : ''; ?>" /></a>
				<?php if ($postrow_item['S_USER_ALLOW_VIEWEMAIL']) {  ?>
				<a href="<?php echo isset($postrow_item['U_SEND_EMAIL']) ? $postrow_item['U_SEND_EMAIL'] : ''; ?>"><img src="<?php echo isset($postrow_item['IMG_SEND_EMAIL']) ? $postrow_item['IMG_SEND_EMAIL'] : ''; ?>" alt="<?php echo isset($postrow_item['L_SEND_EMAIL']) ? $postrow_item['L_SEND_EMAIL'] : ''; ?>" title="<?php echo isset($postrow_item['L_SEND_EMAIL']) ? $postrow_item['L_SEND_EMAIL'] : ''; ?>" /></a>
				<?php } ?>
				<?php if ($postrow_item['S_USER_WEBSITE']) {  ?>
				<a href="<?php echo isset($postrow_item['U_USER_WEBSITE']) ? $postrow_item['U_USER_WEBSITE'] : ''; ?>" target="_blank"><img src="<?php echo isset($postrow_item['IMG_USER_WEBSITE']) ? $postrow_item['IMG_USER_WEBSITE'] : ''; ?>" alt="<?php echo isset($postrow_item['L_USER_WEBSITE']) ? $postrow_item['L_USER_WEBSITE'] : ''; ?>" title="<?php echo isset($postrow_item['L_USER_WEBSITE']) ? $postrow_item['L_USER_WEBSITE'] : ''; ?>" /></a>
				<?php } ?>
				<?php if ($postrow_item['S_USER_ALBUM']) {  ?>
				<a href="<?php echo isset($postrow_item['U_USER_ALBUM']) ? $postrow_item['U_USER_ALBUM'] : ''; ?>"><img src="<?php echo isset($postrow_item['IMG_USER_ALBUM']) ? $postrow_item['IMG_USER_ALBUM'] : ''; ?>" alt="<?php echo isset($postrow_item['L_S_USER_ALBUM']) ? $postrow_item['L_S_USER_ALBUM'] : ''; ?>: <?php echo isset($postrow_item['POSTER_NAME_QQ']) ? $postrow_item['POSTER_NAME_QQ'] : ''; ?>" title="<?php echo isset($postrow_item['L_S_USER_ALBUM']) ? $postrow_item['L_S_USER_ALBUM'] : ''; ?>: <?php echo isset($postrow_item['POSTER_NAME_QQ']) ? $postrow_item['POSTER_NAME_QQ'] : ''; ?>" /></a>&nbsp;
				<?php } ?>
			</div>
			<?php if (! $this->vars['S_BOT']) {  ?>
			<?php

$switch_quick_quote_count = ( isset($postrow_item['switch_quick_quote.']) ) ? sizeof($postrow_item['switch_quick_quote.']) : 0;
for ($switch_quick_quote_i = 0; $switch_quick_quote_i < $switch_quick_quote_count; $switch_quick_quote_i++)
{
 $switch_quick_quote_item = &$postrow_item['switch_quick_quote.'][$switch_quick_quote_i];
 $switch_quick_quote_item['S_ROW_COUNT'] = $switch_quick_quote_i;
 $switch_quick_quote_item['S_NUM_ROWS'] = $switch_quick_quote_count;

?>
			<a href="javascript:addquote(%27<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>%27,%27quote%27,true,false);"><img src="<?php echo isset($this->vars['IMG_QUICK_QUOTE']) ? $this->vars['IMG_QUICK_QUOTE'] : $this->lang('IMG_QUICK_QUOTE'); ?>" alt="<?php echo isset($this->vars['L_QUICK_QUOTE']) ? $this->vars['L_QUICK_QUOTE'] : $this->lang('L_QUICK_QUOTE'); ?>" title="<?php echo isset($this->vars['L_QUICK_QUOTE']) ? $this->vars['L_QUICK_QUOTE'] : $this->lang('L_QUICK_QUOTE'); ?>" /></a><a href="javascript:addquote(%27<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>%27,%27ot%27,true,false);"><img src="<?php echo isset($this->vars['IMG_OFFTOPIC']) ? $this->vars['IMG_OFFTOPIC'] : $this->lang('IMG_OFFTOPIC'); ?>" alt="<?php echo isset($this->vars['L_OFFTOPIC']) ? $this->vars['L_OFFTOPIC'] : $this->lang('L_OFFTOPIC'); ?>" title="<?php echo isset($this->vars['L_OFFTOPIC']) ? $this->vars['L_OFFTOPIC'] : $this->lang('L_OFFTOPIC'); ?>" /></a>
			<?php

} // END switch_quick_quote

if(isset($switch_quick_quote_item)) { unset($switch_quick_quote_item); } 

?>
			<?php } ?>
			<a href="<?php echo isset($this->vars['U_BACK_TOP']) ? $this->vars['U_BACK_TOP'] : $this->lang('U_BACK_TOP'); ?>"><img src="<?php echo isset($this->vars['IMG_ARU']) ? $this->vars['IMG_ARU'] : $this->lang('IMG_ARU'); ?>" alt="<?php echo isset($this->vars['L_BACK_TOP']) ? $this->vars['L_BACK_TOP'] : $this->lang('L_BACK_TOP'); ?>" title="<?php echo isset($this->vars['L_BACK_TOP']) ? $this->vars['L_BACK_TOP'] : $this->lang('L_BACK_TOP'); ?>" /></a><a href="<?php echo isset($this->vars['U_BACK_BOTTOM']) ? $this->vars['U_BACK_BOTTOM'] : $this->lang('U_BACK_BOTTOM'); ?>"><img src="<?php echo isset($this->vars['IMG_ARD']) ? $this->vars['IMG_ARD'] : $this->lang('IMG_ARD'); ?>" alt="<?php echo isset($this->vars['L_BACK_BOTTOM']) ? $this->vars['L_BACK_BOTTOM'] : $this->lang('L_BACK_BOTTOM'); ?>" title="<?php echo isset($this->vars['L_BACK_BOTTOM']) ? $this->vars['L_BACK_BOTTOM'] : $this->lang('L_BACK_BOTTOM'); ?>" /></a>
		</div>
	</td>
</tr>
<tr><td class="spaceRow" colspan="2"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="1" height="3" alt="" /></td></tr>
<?php

$thanks_count = ( isset($postrow_item['thanks.']) ) ? sizeof($postrow_item['thanks.']) : 0;
for ($thanks_i = 0; $thanks_i < $thanks_count; $thanks_i++)
{
 $thanks_item = &$postrow_item['thanks.'][$thanks_i];
 $thanks_item['S_ROW_COUNT'] = $thanks_i;
 $thanks_item['S_NUM_ROWS'] = $thanks_count;

?>
<tr><th colspan="3" align="left"><?php echo isset($thanks_item['THANKS3']) ? $thanks_item['THANKS3'] : ''; ?></th></tr>
<tr><td colspan="3" class="row-post" valign="top" align="left"><span class="gensmall"><?php echo isset($thanks_item['THANKS']) ? $thanks_item['THANKS'] : ''; ?>&nbsp;</span></td></tr>
<tr><td class="spaceRow" colspan="2"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="1" height="3" alt="" /></td></tr>
<?php

} // END thanks

if(isset($thanks_item)) { unset($thanks_item); } 

?>
<?php if (! $this->vars['S_BOT']) {  ?>
<?php

$switch_viewtopic_banner_count = ( isset($postrow_item['switch_viewtopic_banner.']) ) ? sizeof($postrow_item['switch_viewtopic_banner.']) : 0;
for ($switch_viewtopic_banner_i = 0; $switch_viewtopic_banner_i < $switch_viewtopic_banner_count; $switch_viewtopic_banner_i++)
{
 $switch_viewtopic_banner_item = &$postrow_item['switch_viewtopic_banner.'][$switch_viewtopic_banner_i];
 $switch_viewtopic_banner_item['S_ROW_COUNT'] = $switch_viewtopic_banner_i;
 $switch_viewtopic_banner_item['S_NUM_ROWS'] = $switch_viewtopic_banner_count;

?>
<tr>
	<td align="center" class="row-post-author">
		<span class="post-name"><a href="#" style="font-weight:bold;text-decoration:none;"><?php echo isset($this->vars['L_SPONSORS_LINKS']) ? $this->vars['L_SPONSORS_LINKS'] : $this->lang('L_SPONSORS_LINKS'); ?></a></span><br />
		<img src="images/ranks/rank_sponsor.png" alt="" style="margin-bottom: 3px;" /><br />
		<img src="images/avatars/default_avatars/sponsor.gif" alt="" />
	</td>
	<td class="row-post" align="center" style="text-align: center; vertical-align: middle !important;"><div class="center-block-text" style="overflow:auto;"><?php echo isset($this->vars['VIEWTOPIC_BANNER_CODE']) ? $this->vars['VIEWTOPIC_BANNER_CODE'] : $this->lang('VIEWTOPIC_BANNER_CODE'); ?></div></td>
</tr>
<tr><td class="spaceRow" colspan="2"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="1" height="3" alt="" /></td></tr>
<?php

} // END switch_viewtopic_banner

if(isset($switch_viewtopic_banner_item)) { unset($switch_viewtopic_banner_item); } 

?>
<?php } ?>
<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>

<?php if ($this->vars['VIEWTOPIC_BANNER_BOTTOM']) {  ?>
<tr><td class="row-post" colspan="2" align="center" style="text-align: center; vertical-align: middle !important;"><div class="center-block-text" style="overflow:auto;"><?php echo isset($this->vars['VIEWTOPIC_BANNER_BOTTOM']) ? $this->vars['VIEWTOPIC_BANNER_BOTTOM'] : $this->lang('VIEWTOPIC_BANNER_BOTTOM'); ?></div></td></tr>
<?php } ?>
<tr>
	<td class="cat" colspan="2">
		<form method="post" action="<?php echo isset($this->vars['S_POST_DAYS_ACTION']) ? $this->vars['S_POST_DAYS_ACTION'] : $this->lang('S_POST_DAYS_ACTION'); ?>" style="display: inline;">
		<span class="genmed"><?php echo isset($this->vars['L_DISPLAY_POSTS']) ? $this->vars['L_DISPLAY_POSTS'] : $this->lang('L_DISPLAY_POSTS'); ?>:</span>&nbsp;<?php echo isset($this->vars['S_SELECT_SORT_DAYS']) ? $this->vars['S_SELECT_SORT_DAYS'] : $this->lang('S_SELECT_SORT_DAYS'); ?>&nbsp;<?php echo isset($this->vars['S_SELECT_SORT_KEY']) ? $this->vars['S_SELECT_SORT_KEY'] : $this->lang('S_SELECT_SORT_KEY'); ?>&nbsp;<?php echo isset($this->vars['S_SELECT_SORT_DIR']) ? $this->vars['S_SELECT_SORT_DIR'] : $this->lang('S_SELECT_SORT_DIR'); ?>&nbsp;<input type="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" class="liteoption jumpbox" name="submit" />
		</form>
	</td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>

<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td align="left" valign="top">
		<?php if (! $this->vars['S_BOT']) {  ?>
		<span class="img-btn"><a href="<?php echo isset($this->vars['U_POST_NEW_TOPIC']) ? $this->vars['U_POST_NEW_TOPIC'] : $this->lang('U_POST_NEW_TOPIC'); ?>"><img src="<?php echo isset($this->vars['POST_IMG']) ? $this->vars['POST_IMG'] : $this->lang('POST_IMG'); ?>" alt="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" title="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>"/></a></span>&nbsp;
		<span class="img-btn"><a href="<?php echo isset($this->vars['U_POST_REPLY_TOPIC']) ? $this->vars['U_POST_REPLY_TOPIC'] : $this->lang('U_POST_REPLY_TOPIC'); ?>"><img src="<?php echo isset($this->vars['REPLY_IMG']) ? $this->vars['REPLY_IMG'] : $this->lang('REPLY_IMG'); ?>" alt="<?php echo isset($this->vars['L_POST_REPLY_TOPIC']) ? $this->vars['L_POST_REPLY_TOPIC'] : $this->lang('L_POST_REPLY_TOPIC'); ?>" title="<?php echo isset($this->vars['L_POST_REPLY_TOPIC']) ? $this->vars['L_POST_REPLY_TOPIC'] : $this->lang('L_POST_REPLY_TOPIC'); ?>"/></a></span>&nbsp;
		<?php if ($this->vars['S_THANKS']) {  ?><span class="img-btn"><a href="<?php echo isset($this->vars['U_THANKS']) ? $this->vars['U_THANKS'] : $this->lang('U_THANKS'); ?>"><img src="<?php echo isset($this->vars['THANKS_IMG']) ? $this->vars['THANKS_IMG'] : $this->lang('THANKS_IMG'); ?>" alt="<?php echo isset($this->vars['L_THANKS']) ? $this->vars['L_THANKS'] : $this->lang('L_THANKS'); ?>" title="<?php echo isset($this->vars['L_THANKS']) ? $this->vars['L_THANKS'] : $this->lang('L_THANKS'); ?>" /></a></span>&nbsp;<?php } ?>
		<?php if ($this->vars['S_CAN_REPLY']) {  ?><span class="img-btn"><?php echo isset($this->vars['CA_QUICK_REPLY_BUTTON']) ? $this->vars['CA_QUICK_REPLY_BUTTON'] : $this->lang('CA_QUICK_REPLY_BUTTON'); ?></span>&nbsp;<?php } ?>
		<?php } else { ?>
		&nbsp;
		<?php } ?>
	</td>
	<td align="right" valign="top">
		<span class="gen"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span><br />
		<span class="pagination"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span>
	</td>
</tr>
</table>

<br clear="all" />

<?php if (! $this->vars['S_BOT']) {  ?>
<?php echo isset($this->vars['CA_QUICK_REPLY_FORM']) ? $this->vars['CA_QUICK_REPLY_FORM'] : $this->lang('CA_QUICK_REPLY_FORM'); ?>
<?php } ?>

<br clear="all" />

<?php if (! $this->vars['S_BOT']) {  ?>
<?php

$switch_topic_useful_count = ( isset($this->_tpldata['switch_topic_useful.']) ) ? sizeof($this->_tpldata['switch_topic_useful.']) : 0;
for ($switch_topic_useful_i = 0; $switch_topic_useful_i < $switch_topic_useful_count; $switch_topic_useful_i++)
{
 $switch_topic_useful_item = &$this->_tpldata['switch_topic_useful.'][$switch_topic_useful_i];
 $switch_topic_useful_item['S_ROW_COUNT'] = $switch_topic_useful_i;
 $switch_topic_useful_item['S_NUM_ROWS'] = $switch_topic_useful_count;

?>
<a id="ratingblock"></a>
<div id="rate_block_h" style="display: none;">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MAXIMISE']) ? $this->vars['IMG_MAXIMISE'] : $this->lang('IMG_MAXIMISE'); ?>" onclick="ShowHide('rate_block','rate_block_h','rate_block');" alt="<?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>" /><span class="forumlink"><?php echo isset($this->vars['L_TOPIC_RATING']) ? $this->vars['L_TOPIC_RATING'] : $this->lang('L_TOPIC_RATING'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td class="row1g row-center">&nbsp;</td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>

<div id="rate_block">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><img class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>" src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('rate_block','rate_block_h','rate_block');" alt="<?php echo isset($this->vars['L_HIDE']) ? $this->vars['L_HIDE'] : $this->lang('L_HIDE'); ?>" /><span class="forumlink"><?php echo isset($this->vars['L_TOPIC_RATING']) ? $this->vars['L_TOPIC_RATING'] : $this->lang('L_TOPIC_RATING'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<?php echo isset($this->vars['RATING_VIEWTOPIC']) ? $this->vars['RATING_VIEWTOPIC'] : $this->lang('RATING_VIEWTOPIC'); ?>
<?php

$social_bookmarks_count = ( isset($switch_topic_useful_item['social_bookmarks.']) ) ? sizeof($switch_topic_useful_item['social_bookmarks.']) : 0;
for ($social_bookmarks_i = 0; $social_bookmarks_i < $social_bookmarks_count; $social_bookmarks_i++)
{
 $social_bookmarks_item = &$switch_topic_useful_item['social_bookmarks.'][$social_bookmarks_i];
 $social_bookmarks_item['S_ROW_COUNT'] = $social_bookmarks_i;
 $social_bookmarks_item['S_NUM_ROWS'] = $social_bookmarks_count;

?>
<tr><th colspan="4"><?php echo isset($this->vars['L_SHARE_TOPIC']) ? $this->vars['L_SHARE_TOPIC'] : $this->lang('L_SHARE_TOPIC'); ?></th></tr>
<?php  $this->set_filename('xs_include_5322f7286876a384d1abc5aea4643d3c', 'social_bookmarks.tpl', true);  $this->pparse('xs_include_5322f7286876a384d1abc5aea4643d3c');  ?>
<?php

} // END social_bookmarks

if(isset($social_bookmarks_item)) { unset($social_bookmarks_item); } 

?>
<?php

$link_this_topic_count = ( isset($switch_topic_useful_item['link_this_topic.']) ) ? sizeof($switch_topic_useful_item['link_this_topic.']) : 0;
for ($link_this_topic_i = 0; $link_this_topic_i < $link_this_topic_count; $link_this_topic_i++)
{
 $link_this_topic_item = &$switch_topic_useful_item['link_this_topic.'][$link_this_topic_i];
 $link_this_topic_item['S_ROW_COUNT'] = $link_this_topic_i;
 $link_this_topic_item['S_NUM_ROWS'] = $link_this_topic_count;

?>
<?php  $this->set_filename('xs_include_155c9df0d1c3edd9a12630d1bee9e809', 'link_this_topic.tpl', true);  $this->pparse('xs_include_155c9df0d1c3edd9a12630d1bee9e809');  ?>
<?php

} // END link_this_topic

if(isset($link_this_topic_item)) { unset($link_this_topic_item); } 

?>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</div>
<script type="text/javascript">
<!--
tmp = 'rate_block';
if(GetCookie(tmp) == '2')
{
	ShowHide('rate_block', 'rate_block_h', 'rate_block');
}
//-->
</script>
<?php

} // END switch_topic_useful

if(isset($switch_topic_useful_item)) { unset($switch_topic_useful_item); } 

?>
<?php } ?>

<?php echo isset($this->vars['SIMILAR_VIEWTOPIC']) ? $this->vars['SIMILAR_VIEWTOPIC'] : $this->lang('SIMILAR_VIEWTOPIC'); ?>

<?php  $this->set_filename('xs_include_404d621d288f7278ccf717842ff27bd4', 'breadcrumbs_vt.tpl', true);  $this->pparse('xs_include_404d621d288f7278ccf717842ff27bd4');  ?>

<?php if (! $this->vars['S_BOT']) {  ?>
<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr><td align="left" valign="top" class="gensmall" width="100%"><span class="gensmall"><br /><?php echo isset($this->vars['TOTAL_USERS_ONLINE']) ? $this->vars['TOTAL_USERS_ONLINE'] : $this->lang('TOTAL_USERS_ONLINE'); ?><br /><?php echo isset($this->vars['LOGGED_IN_USER_LIST']) ? $this->vars['LOGGED_IN_USER_LIST'] : $this->lang('LOGGED_IN_USER_LIST'); ?></span><br /><br /></td></tr>
</table>
<?php } ?>

<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td align="left" valign="top" class="gensmall" width="40%">
		<?php echo isset($this->vars['IMG_TBL']) ? $this->vars['IMG_TBL'] : $this->lang('IMG_TBL'); ?><div id="topic_auth_list_h" style="display: none;">
			<table class="forumline" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td class="row-header">
					<div class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>"><img src="<?php echo isset($this->vars['IMG_MAXIMISE']) ? $this->vars['IMG_MAXIMISE'] : $this->lang('IMG_MAXIMISE'); ?>" onclick="ShowHide('topic_auth_list','topic_auth_list_h','topic_auth_list');" alt="" />&nbsp;</div><span><?php echo isset($this->vars['L_PERMISSIONS_LIST']) ? $this->vars['L_PERMISSIONS_LIST'] : $this->lang('L_PERMISSIONS_LIST'); ?></span>
				</td>
			</tr>
			</table>
		</div>
		<div id="topic_auth_list">
			<table class="forumline" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td class="row-header">
					<div class="max-min-right" style="<?php echo isset($this->vars['SHOW_HIDE_PADDING']) ? $this->vars['SHOW_HIDE_PADDING'] : $this->lang('SHOW_HIDE_PADDING'); ?>"><img src="<?php echo isset($this->vars['IMG_MINIMISE']) ? $this->vars['IMG_MINIMISE'] : $this->lang('IMG_MINIMISE'); ?>" onclick="ShowHide('topic_auth_list','topic_auth_list_h','topic_auth_list');" alt="" />&nbsp;</div><span><?php echo isset($this->vars['L_PERMISSIONS_LIST']) ? $this->vars['L_PERMISSIONS_LIST'] : $this->lang('L_PERMISSIONS_LIST'); ?></span>
				</td>
			</tr>
			<tr><td class="row1"><?php echo isset($this->vars['S_AUTH_LIST']) ? $this->vars['S_AUTH_LIST'] : $this->lang('S_AUTH_LIST'); ?></td></tr>
			</table>
		</div><?php echo isset($this->vars['IMG_TBR']) ? $this->vars['IMG_TBR'] : $this->lang('IMG_TBR'); ?>
		<script type="text/javascript">
		<!--
		tmp = 'topic_auth_list';
		if(GetCookie(tmp) == '2')
		{
			ShowHide('topic_auth_list', 'topic_auth_list_h', 'topic_auth_list');
		}
		//-->
		</script>
	</td>
	<td align="right" valign="top">
		<?php if (! $this->vars['S_BOT'] && $this->vars['S_TMOD_BUTTONS']) {  ?>
		<?php  $this->set_filename('xs_include_09f8c3528265ccc81bc63b36066e9cf9', 'viewtopic_admin.tpl', true);  $this->pparse('xs_include_09f8c3528265ccc81bc63b36066e9cf9');  ?>
		<?php } ?>
		<?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?>
	</td>
</tr>
</table>