<table>
<tr>
	<td class="nav"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> {ALBUM_NAVIGATION_ARROW} <a href="{U_ALBUM}" class="nav">{L_ALBUM}</a> {ALBUM_NAVIGATION_ARROW} <a href="{U_PERSONAL_ALBUM}" class="nav">{L_PERSONAL_ALBUM}</a> {ALBUM_NAVIGATION_ARROW} <a href="{U_PERSONAL_CAT_ADMIN}" class="nav">{L_PERSONAL_CAT_ADMIN}</a></span></td>
</tr>
</table>

<form action="{S_ALBUM_ACTION}" method="post">
<table class="forumline">
<tr><th colspan="2">{L_PERSONAL_CAT_ADMIN}</th></tr>
<tr>
	<td class="row1" colspan="2"><br />
		<table class="forumline">
		<tr><th colspan="2">{L_CAT_DELETE}</th></tr>
		<tr>
			<td class="row1 tw25pct"><span class="gen">{L_CAT_TITLE}</span></td>
			<td class="row1"><span class="genmed">{S_CAT_TITLE}</span></td>
		</tr>
		<tr>
			<td class="row1 tw25pct"><span class="genmed">{L_MOVE_CONTENTS}</span></td>
			<td class="row1">{S_SELECT_TO}</td>
		</tr>
		<tr>
			<td class="cat tdalignc" colspan="2"><input type="hidden" name="mode" value="delete" /><input type="submit" name="submit" value="{L_MOVE_DELETE}" class="mainoption" /></td>
		</tr>
		</table>
	</td>
</tr>
</table>
</form>

<br />
