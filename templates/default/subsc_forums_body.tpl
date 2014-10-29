<!-- INCLUDE overall_header.tpl -->

<!-- INCLUDE profile_cpl_menu_inc_start.tpl -->
{IMG_THL}{IMG_THC}<span class="forumlink">{L_SUBSCFORUMS}</span>{IMG_THR}<table class="forumlinenb">
<!-- BEGIN subsc_forums -->
<tr>
	<th width="100%" nowrap="nowrap" colspan="2">{L_SUBSCFORUMS_FORUM}</th>
	<th class="tw50px tdnw">{L_SUBSCFORUMS_TOPICS}</th>
	<th class="tw50px tdnw">{L_SUBSCFORUMS_POSTS}</th>
	<th width="165" nowrap="nowrap">{L_SUBSCFORUMS_LASTPOST}</th>
</tr>
<!-- END subsc_forums -->
<!-- BEGIN subsc_no_forums -->
<tr>
	<th width="100%" nowrap="nowrap" colspan="2">{L_SUBSCFORUMS_FORUM}</th>
	<th class="tw50px tdnw">{L_SUBSCFORUMS_TOPICS}</th>
	<th class="tw50px tdnw">{L_SUBSCFORUMS_POSTS}</th>
	<th width="165" nowrap="nowrap">{L_SUBSCFORUMS_LASTPOST}</th>
</tr>
<tr>
	<td class="row1 row-center" colspan="5">
		<span class="topiclink">{L_NO_SUBSCRIBED_FORUMS}</span>
	</td>
</tr>
<!-- END subsc_no_forums -->
<!-- BEGIN subsc_forums_row -->
<tr>
	<td class="row1 row-center tw30px">
		<img src="{subsc_forums_row.FORUM_FOLDER_IMG}" width="25" height="25" alt="{subsc_forums_row.L_FORUM_FOLDER_ALT}" title="{subsc_forums_row.L_FORUM_FOLDER_ALT}" />
	</td>
	<td class="row1 tw100pct">
		<span class="forumlink">
			<a href="{subsc_forums_row.U_FORUM}">{subsc_forums_row.S_FORUM_NAME}</a>
		</span><br />
		<span class="name">
			<a href="{subsc_forums_row.U_NEWTOPIC}">{L_SUBSCFORUMS_NEWTOPIC}</a>&nbsp;|&nbsp;
			<a href="{subsc_forums_row.U_UNSUBSCRIBE}">{L_SUBSCFORUMS_UNSUBSCRIBE}</a>
		</span>
	</td>
	<td class="row2 row-center">
		<span class="name">{subsc_forums_row.S_TOPICS}</span>
	</td>
	<td class="row2 row-center">
		<span class="name">{subsc_forums_row.S_POSTS}</span>
	</td>
	<td class="row2 row-center tdnw">
		<span class="postdetails">
			{subsc_forums_row.S_LAST_POST_TIME}<br />
			{subsc_forums_row.S_LAST_POST}
		</span>
	</td>
</tr>
<!-- END subsc_forums_row -->
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}

<!-- INCLUDE profile_cpl_menu_inc_end.tpl -->

<!-- INCLUDE overall_footer.tpl -->