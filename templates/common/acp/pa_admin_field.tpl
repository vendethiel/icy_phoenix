<h1>{L_FIELD_TITLE}</h1>
<p>{L_FIELD_EXPLAIN}</p>

<form action="{S_FIELD_ACTION}" method="post">
<table class="forumline">
<tr><th >{L_FIELD_TITLE}</b></th></tr>
<!-- BEGIN field_row -->
<tr><td class="row1 row-center"><b>{field_row.FIELD_NAME}</b><br /><span class="gensmall">{field_row.FIELD_DESC}</span></td></tr>
<!-- END field_row -->
<tr>
	<td align="center" class="cat" >
		<input class="liteoption" type="submit" value="add" name="mode" />&nbsp;
		<input class="liteoption" type="submit" value="edit" name="mode" />&nbsp;
		<input class="liteoption" type="submit" value="delete" name="mode" />
	</td>
</tr>
</table>
</form>
