<h1>{L_RACES_TITLE}</h1>

<P>{L_RACES_TEXT}</p>

<form method="post" action="{S_RACES_ACTION}">

<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline" width="100%">
	<tr>
		<th class="thCornerL">{L_NAME}</th>
		<th class="thTop">{L_IMG}</th>
		<th class="thTop">{L_DESC}</th>
		<th class="thTop">{L_LEVEL}</th>

		<th class="thTop">{L_ZONE}</th>

		<th colspan="3" class="thCornerR">{L_ACTION}</th>
	</tr>
	<!-- BEGIN races -->
	<tr>
		<td class="{races.ROW_CLASS}" align="center">{races.NAME}</td>
		<td class="{races.ROW_CLASS}" align="center"><img src="../adr/images/races/{races.IMG}" alt="{races.NAME}" /></td>
		<td class="{races.ROW_CLASS}" align="center">{races.DESC}</td>
		<td class="{races.ROW_CLASS}" align="center">{races.LEVEL}</td>

		<td class="{races.ROW_CLASS}" align="center">{races.ZONE}</td>

		<td class="{races.ROW_CLASS}" align="center"><a href="{races.U_RACES_EDIT}">{L_EDIT}</a></td>
		<td class="{races.ROW_CLASS}" align="center"><a href="{races.U_RACES_DELETE}">{L_DELETE}</a></td>
	</tr>
	<!-- END races -->
	<tr>

		<td class="catBottom" colspan="13"


	</tr>
</table>
</form>

<br clear="all" />