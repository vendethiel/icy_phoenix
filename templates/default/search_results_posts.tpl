<!-- INCLUDE overall_header.tpl -->

{IMG_THL}{IMG_THC}<span class="forumlink">{L_SEARCH_MATCHES}</span>{IMG_THR}<table class="forumlinenb">
<tr>
	<th class="tw150px">{L_AUTHOR}</th>
	<th class="tw100pct">{L_MESSAGE}</th>
	<!-- BEGIN switch_upi2db_on -->
	<th>{L_MAR}</th>
	<!-- END switch_upi2db_on -->
</tr>
<!-- BEGIN searchresults -->
<tr>
	<td class="row-post-author">
		<span class="post-name">{searchresults.POSTER_NAME}</span><br />
		<div class="post-details">
			{L_REPLIES}: {searchresults.TOPIC_REPLIES}<br />
			{L_VIEWS}: {searchresults.TOPIC_VIEWS}
		</div><br />
		<img src="{SPACER}" width="150" height="3" alt="" />
	</td>
	<td class="row-post tw100pct">
		<div class="{searchresults.UNREAD_COLOR}">
			<a href="{searchresults.U_POST}"><img src="{searchresults.MINI_POST_IMG}" alt="{searchresults.L_MINI_POST_ALT}" title="{searchresults.L_MINI_POST_ALT}" /></a>
			<span class="post-details">{L_FORUM}:&nbsp;<b><a href="{searchresults.U_FORUM}">{searchresults.FORUM_NAME}</a></b>&nbsp; &nbsp;{L_POSTED}: {searchresults.POST_DATE}&nbsp; &nbsp;{L_SUBJECT}: <b><a href="{searchresults.U_POST}">{searchresults.POST_SUBJECT}</a></b></span>
		</div>
		<div class="post-text post-text-hide-flow"><br />{searchresults.MESSAGE}</div>
	</td>
	<!-- BEGIN switch_upi2db_on -->
	<!-- IF searchresults.UPI2DB_UNMARK_POST --><td class="row-post"><a href="{searchresults.UPI2DB_UNMARK_POST_URL}"><img src="{searchresults.UPI2DB_UNMARK_POST_IMG}" alt="{searchresults.L_UPI2DB_UNMARK_POST}" title="{searchresults.L_UPI2DB_UNMARK_POST}" /></a></td><!-- ENDIF -->
	<!-- END switch_upi2db_on -->
</tr>
<tr><td class="spaceRow" colspan="3"><img src="{SPACER}" width="1" height="3" alt="" /></td></tr>
<!-- END searchresults -->
<tr><td class="catBottom" colspan="3">&nbsp;</td></tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}

<table>
<tr>
	<td><span class="gensmall">{PAGE_NUMBER}</span></td>
	<td class="tdalignr tdnw"><span class="pagination">{PAGINATION}</span><br /><span class="gensmall">{S_TIMEZONE}</span></td>
</tr>
</table>

<div align="right">{JUMPBOX}</div>

<!-- INCLUDE overall_footer.tpl -->