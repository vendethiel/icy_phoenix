<!-- INCLUDE simple_header.tpl -->

<script type="text/javascript">
<!--
function open_postreview(ref)
{
	height = screen.height / 3;
	width = screen.width / 2;
	window.open(ref,'_ippostreview','height=' + height + ',width=' + width + ',resizable=yes,scrollbars=yes');
}
//-->
</script>
{IMG_THL}{IMG_THC}<span class="forumlink"><!-- BEGIN postrow -->{postrow.POST_SUBJECT}<!-- END postrow --></span>{IMG_THR}<table class="forumlinenb">
<tr>
	<th class="tdnw">{L_AUTHOR}</th>
	<th class="tdnw">{L_MESSAGE}</th>
</tr>
<!-- BEGIN postrow -->
<tr>
	<td class="row-post-author tdnw">
		<span class="post-name"><a name="p{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</span><br />
		<!-- IF not S_BOT -->
		<div class="post-rank">
			<div class="center-block-text"><b>{postrow.USER_RANK_01}{postrow.USER_RANK_01_IMG}{postrow.USER_RANK_02}{postrow.USER_RANK_02_IMG}{postrow.USER_RANK_03}{postrow.USER_RANK_03_IMG}{postrow.USER_RANK_04}{postrow.USER_RANK_04_IMG}{postrow.USER_RANK_05}{postrow.USER_RANK_05_IMG}</b></div>
		</div>
		<!-- ENDIF -->
		<span class="post-images">{postrow.POSTER_AVATAR}</span>
		<div class="post-details">
			{postrow.ONLINE_STATUS_IMG} {postrow.AIM_IMG} {postrow.ICQ_IMG} {postrow.MSN_IMG} {postrow.SKYPE_IMG} {postrow.YIM_IMG}<br />
			{postrow.POSTER_JOINED}<br />
			{postrow.POSTER_POSTS}<br />
			{postrow.POSTER_FROM}<br />
			{postrow.POSTER_GENDER}
		</div><br />
		<img src="{SPACER}" width="150" height="3" alt="" />
	</td>
	<td class="row-post tw100pct th100pct">
		<div class="post-buttons-top post-buttons">{postrow.QUOTE_IMG} <a href="{postrow.DOWNLOAD_POST}" class="genmed" rel="nofollow"><img src="{postrow.DOWNLOAD_IMG}" alt="{L_DOWNLOAD_POST}" title="{L_DOWNLOAD_POST}" /></a></div>
		<div class="post-subject"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" /></a> {postrow.POST_SUBJECT}&nbsp;</div>
		<div class="post-text post-text-hide-flow">
			{postrow.MESSAGE}<br />
			{postrow.ATTACHMENTS}
		</div>
		<div class="align-spacer">&nbsp;</div>
		<div class="post-text post-text-hide-flow">
			<br /><br /><br />
			<!-- BEGIN above_sig -->
			<span class="post-details"><br />{postrow.above_sig.ABOVE_VAL}</span>
			<!-- END above_sig -->
			<!-- BEGIN switch_showsignatures -->
			{postrow.SIGNATURE}
			<!-- END switch_showsignatures -->
			<!-- BEGIN below_sig -->
			<span class="post-details"><br />{postrow.below_sig.BELOW_VAL}</span>
			<!-- END below_sig -->
		</div>
		<div class="align-spacer">&nbsp;</div>
		<!-- IF S_EDIT_NOTES -->
		<!-- IF postrow.EDITED_MESSAGE -->
		<div class="post-notes"><div class="post-note"><span class="gensmall">{postrow.EDITED_MESSAGE}&nbsp;</span></div></div>
		<!-- ENDIF -->
		<!-- ENDIF -->
	</td>
</tr>
<tr>
	<td class="row-post-date">{postrow.POST_DATE}</td>
	<td class="row-post-buttons post-buttons">{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.WWW_IMG}</td>
</tr>
<!-- END postrow -->
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}
<a href="javascript:window.close()">{CLOSE_WINDOW}</a>

<!-- INCLUDE simple_footer.tpl -->