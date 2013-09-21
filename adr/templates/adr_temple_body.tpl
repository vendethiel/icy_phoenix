<form method="post" action="{S_CHARACTER_ACTION}">
<br />
<table width="100%" align="center" border="1">
	<tr>
		<th align="center" colspan="3" >{L_ADR_SACRED_TEMPLE}</td>
	</tr>
	<tr>
		<td align="center" class="row1" width="20%" rowspan="2" ><span class="gen"><br />{L_TEMPLEENTREE}<br /><br /><img src="adr/images/TownMap/templepic.jpg "/><br /><br />{L_TEMPLEPRESENTATION} :<br /><br /><input type="submit" name="InfoTemple" value="{L_TOWNBOUTONINFO}" class="mainoption" /><br /><br /></span></td>
            <td align="center" class="row2"><span class="gen"><img src="adr/images/TownMap/temple1.gif " /><br /><br />{L_ADR_WELCOME_HEALPRIEST}<br/><br/><br /><br /><br /><img src="adr/images/TownMap/pretresse1.gif " alt="{L_PRETRESSE1}" /><br /><br />{L_TEMPLE_PRIXGUERISON} : {HEAL_COST} {L_POINTS}<br /><br /><input type="submit" name="heal" value="{L_GUERIR}" class="mainoption" /><br /><br /></span></td>
            <td align="center" class="row2"><span class="gen"><img src="adr/images/TownMap/temple2.gif " /><br /><br />{L_ADR_WELCOME_RESPRIEST}<br/><br/><br /><br /><br /><img src="adr/images/TownMap/pretresse2.gif " alt="{L_PRETRESSE2}" /><br /><br />{L_TEMPLE_PRIXRESURRECTION} : {RESURRECT_COST} {L_POINTS}<br /><br /><input type="submit" name="resurrect" value="{L_RESUSSITER}" class="mainoption" /><br /><br /></span></td>
	</tr>
	<tr>
            <td align="center" class="row2" colspan="2">
				<table border="1" align="center" width="100%">
				<th align="center">{L_ADR_GIVE_TO_TEMPLE}</th>
				<tr>
					<td align="center" class="row2" width="100%">
					<span class="gen"><br /><br /><img src="adr/images/TownMap/donate.gif " alt="Selena, Priestess of Greed !!!" /><br /><br />{L_DONATION} </span><input type="text" name="donation_amount" size="10" maxlength="10" /><span class="gen"> {L_POINTS}<br /><br /><input type="submit" name="donation" value="{L_DONATE}" class="mainoption" /><br /><br /></span></td>
				</tr>
			</table>
            </td>
	</tr>
</table>

</form>


<br clear="all" />
