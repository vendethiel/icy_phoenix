<h1>{L_CONTROL_PANEL_TITLE}</h1>
<p>{L_CONTROL_PANEL_EXPLAIN}</p>

<!-- BEGIN switch_user_based -->
<b>{L_STATISTICS_FOR_USER}</b>
<!-- END switch_user_based -->

<script type="text/javascript">
	//
	// Should really check the browser to stop this whining ...
	//
	function select_switch(status)
	{
		for (i = 0; i < document.attach_list.length; i++)
		{
			document.attach_list.elements[i].checked = status;
		}
	}
</script>

<form method="post" name="attach_list" action="{S_MODE_ACTION}">
<table class="s2px p2px">
	<tr>
		<td class="tdalignr tdnw"><span class="genmed">{L_VIEW}:&nbsp;{S_VIEW_SELECT}&nbsp;&nbsp;{L_SELECT_SORT_METHOD}:&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp;
		<input type="submit" name="submit" value="{L_SUBMIT}" class="liteoption" />
		</span>
		</td>
	</tr>
</table>
<table class="forumline">
<tr>
	<th>#</th>
	<th>{L_FILENAME}</th>
	<th>{L_FILECOMMENT}</th>
	<th>{L_EXTENSION}</th>
	<th>{L_SIZE}</th>
	<th>{L_DOWNLOADS}</th>
	<th>{L_POST_TIME}</th>
	<th>{L_POSTED_IN_TOPIC}</th>
	<th>{L_DELETE}</th>
</tr>
<!-- BEGIN attachrow -->
<tr>
	<td class="{attachrow.ROW_CLASS} row-center"><span class="gen">&nbsp;{attachrow.ROW_NUMBER}&nbsp;</span></td>
	<td class="{attachrow.ROW_CLASS} row-center"><span class="gen"><a href="{attachrow.U_VIEW_ATTACHMENT}" class="gen" target="_blank">{attachrow.FILENAME}</a></span></td>
	<td class="{attachrow.ROW_CLASS} row-center"><span class="gen"><input type="text" size="40" maxlength="200" name="attach_comment_list[]" value="{attachrow.COMMENT}" class="post" /></span></td>
	<td class="{attachrow.ROW_CLASS} row-center"><span class="gen">{attachrow.EXTENSION}</span></td>
	<td class="{attachrow.ROW_CLASS} row-center tvalignm"><span class="gen"><b>{attachrow.SIZE}</b></span></td>
	<td class="{attachrow.ROW_CLASS} row-center tvalignm"><span class="gen"><input type="text" size="3" maxlength="10" name="attach_count_list[]" value="{attachrow.DOWNLOAD_COUNT}" class="post" /></span></td>
	<td class="{attachrow.ROW_CLASS} row-center tvalignm"><span class="gensmall">{attachrow.POST_TIME}</span></td>
	<td class="{attachrow.ROW_CLASS} row-center tvalignm"><span class="gen">{attachrow.POST_TITLE}</span></td>
	<td class="{attachrow.ROW_CLASS} row-center">{attachrow.S_DELETE_BOX}</td>
	{attachrow.S_HIDDEN}
</tr>
<!-- END attachrow -->
<tr>
	<td class="cat" colspan="9" height="28" align="right">
	<input type="submit" name="submit_change" value="{L_SUBMIT_CHANGES}" class="mainoption" />
	&nbsp;
	<input type="submit" name="delete" value="{L_DELETE_MARKED}" class="liteoption" />
	</td>
</tr>
</table>

<!-- BEGIN switch_user_based -->
{S_USER_HIDDEN}
<!-- END switch_user_based -->

<table class="s2px p2px">
<tr>
	<td class="tdalignr tdnw"><b><span class="gensmall"><a href="javascript:select_switch(true);" class="gensmall">{L_MARK_ALL}</a>&nbsp;&bull;&nbsp;<a href="javascript:select_switch(false);" class="gensmall">{L_UNMARK_ALL}</a></span></b></td>
</tr>
</table>

<table>
<tr>
	<td><span class="gensmall">{PAGE_NUMBER}</span></td>
	<td class="tdalignr"><span class="pagination">{PAGINATION}</span></td>
</tr>
</table>
</form>

<br />
<div align="center"><span class="copyright">{ATTACH_VERSION}</span></div>
