<h1>{L_SHADOW_TITLE}</h1>
<p>{L_SHADOW_EXPLAIN}</p>
{ERROR_BOX}

<script type="text/javascript">
// Should really check the browser to stop this whining ...
function select_switch(status)
{
	for (i = 0; i < document.shadow_list.length; i++)
	{
		document.shadow_list.elements[i].checked = status;
	}
}
</script>

<form method="post" name="shadow_list" action="{S_ATTACH_ACTION}">
<table class="forumline">
<tr><th colspan="5">{L_SHADOW_TITLE}</th></tr>
<tr>
	<th>&nbsp;{L_ATTACHMENT}&nbsp;</th>
	<th>&nbsp;{L_COMMENT}&nbsp;</th>
	<th>&nbsp;{L_DELETE}&nbsp;</th>
</tr>
<tr><td class="row1" colspan="5" align="center"><span class="gensmall">{L_EXPLAIN_FILE}</span></td></tr>
<!-- BEGIN file_shadow_row -->
	<tr>
	<td class="row2 row-center tvalignm"><span class="postdetails"><a class="postdetails" href="{file_shadow_row.U_ATTACHMENT}" target="_blank">{file_shadow_row.ATTACH_FILENAME}</a></span></td>
	<td class="row1 row-center tvalignm"><span class="postdetails">{file_shadow_row.ATTACH_COMMENT}</span></td>
	<td class="row2 row-center tvalignm"><input type="checkbox" name="attach_file_list[]" value="{file_shadow_row.ATTACH_ID}" /></td>
</tr>
<!-- END file_shadow_row -->
<tr>
	<th>&nbsp;{L_ATTACHMENT}&nbsp;</th>
	<th>&nbsp;{L_COMMENT}&nbsp;</th>
	<th>&nbsp;{L_DELETE}&nbsp;</th>
</tr>
<tr><td class="row1" colspan="5"><span class="gensmall">{L_EXPLAIN_ROW}</span></td></tr>
<!-- BEGIN table_shadow_row -->
<tr>
	<td class="row2 row-center tvalignm"><span class="postdetails">{table_shadow_row.ATTACH_FILENAME}</span></td>
	<td class="row1 row-center tvalignm"><span class="postdetails">{table_shadow_row.ATTACH_COMMENT}</span></td>
	<td class="row2 row-center tvalignm"><input type="checkbox" name="attach_id_list[]" value="{table_shadow_row.ATTACH_ID}" /></td>
</tr>
<!-- END table_shadow_row -->
<tr>
	<td class="cat" colspan="5"><input type="submit" name="submit" class="liteoption" value="{L_DELETE_MARKED}" /></td>
</tr>
</table>
{S_HIDDEN}

<table class="s2px p2px">
<tr>
	<td class="tdalignr tdnw"><b><span class="gensmall"><a href="javascript:select_switch(true);" class="gensmall">{L_MARK_ALL}</a>&nbsp;&bull;&nbsp;<a href="javascript:select_switch(false);" class="gensmall">{L_UNMARK_ALL}</a></span></b></td>
</tr>
</table>

</form>

<br />
<div align="center"><span class="copyright">{ATTACH_VERSION}</span></div>

<br class="clear" />
