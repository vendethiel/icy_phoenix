{IMG_TBL}<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_PORTAL}">{L_HOME}</a>{NAV_SEP}<a href="{U_PROFILE}">{L_CPL_NAV}</a>{NAV_SEP}<a href="#" class="nav-current">{SIG_EDIT}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left">{CURRENT_TIME}</div>
		&nbsp;
	</div>
</div>{IMG_TBR}

<!-- INCLUDE profile_cpl_menu_inc_start.tpl -->

<!-- BEGIN switch_current_sig -->
<form method="post" action="{SIG_LINK}" name="post">
{IMG_THL}{IMG_THC}<span class="forumlink">{SIG_CURRENT}</span>{IMG_THR}<table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td class="row2" width="100%" valign="bottom"><span class="gen">{CURRENT_PREVIEW}</span></td></tr>
<tr>
	<td class="row-post-buttons post-buttons">
		<a href="#">{PROFIL_IMG}</a>
		<a href="#"> {EMAIL_IMG}</a>
		<a href="#"> {PM_IMG}</a>
		<a href="#"> {WWW_IMG}</a>
		<a href="#"> {AIM_IMG}</a>
		<a href="#"> {YIM_IMG}</a>
		<a href="#"> {MSN_IMG}</a>
		<a href="#"> {SKYPE_IMG}</a>
		<a href="#"> {ICQ_IMG}</a>
	</td>
</tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}

<br />

{IMG_THL}{IMG_THC}<span class="forumlink">{SIG_EDIT}</span>{IMG_THR}<table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1" width="130" height="150">
		<span class="gen">{L_SIGNATURE}:</span><br />
		<span class="gensmall">{L_SIGNATURE_EXPLAIN}</span><br /><br />
		<table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td align="center" valign="middle"><br />{BBCB_SMILEYS_MG}</td></tr></table>
	</td>
	<td class="row2" width="530" align="middle">
		<table width="450" border="0" cellspacing="0" cellpadding="2">
			<tr>
				<td colspan="9">
					{BBCB_MG}
					<textarea name="message" rows="15" cols="35" wrap="virtual" style="width:98%" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{SIGNATURE}</textarea>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="row1" width="130" height="20">&nbsp;</td>
	<td class="row2" width="530" align="middle">
		<input type="button" class="button" value="{L_PROFILE}" onclick="location='{U_PROFILE}'">
		<input type="button" class="button" value="{SIG_CURRENT}" onclick="location='{SIG_LINK}'">
		<input type="submit" class="button" value="{SIG_PREVIEW}" name="preview">
		<input type="submit" class="button" value="{SIG_SAVE}" name="save">
		<input type="submit" class="button" value="{SIG_CANCEL}" name="cancel">
	</td>
</tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}
</form>
<!-- END switch_current_sig -->

<!-- BEGIN switch_preview_sig -->
<form method="post" action="{SIG_LINK}" name="post">
{IMG_THL}{IMG_THC}<span class="forumlink">{SIG_PREVIEW}</span>{IMG_THR}<table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1" width="140" height="140"><span class="gen">{L_SIGNATURE}:</span></td>
	<td class="row2" width="520" valign="bottom"><span class="gen">{REAL_PREVIEW}</span></td>
</tr>
<tr>
	<td class="row1" width="140" height="20">&nbsp;</td>
	<td class="row-post-buttons post-buttons">
		<a href="#">{PROFIL_IMG}</a>
		<a href="#"> {EMAIL_IMG}</a>
		<a href="#"> {PM_IMG}</a>
		<a href="#"> {WWW_IMG}</a>
		<a href="#"> {AIM_IMG}</a>
		<a href="#"> {YIM_IMG}</a>
		<a href="#"> {MSN_IMG}</a>
		<a href="#"> {SKYPE_IMG}</a>
		<a href="#"> {ICQ_IMG}</a>
	</td>
</tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}

<br />
{IMG_THL}{IMG_THC}<span class="forumlink">{SIG_EDIT}</span>{IMG_THR}<table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1" width="130" height="150">
		<span class="gen">{L_SIGNATURE}:</span><br />
		<span class="gensmall">{L_SIGNATURE_EXPLAIN}</span><br /><br />
		<table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td align="center" valign="middle"><br />{BBCB_SMILEYS_MG}</td></tr></table>
	</td>
	<td class="row2" width="530" align="middle">
		<table width="450" border="0" cellspacing="0" cellpadding="2">
			<tr>
				<td colspan="9">
					{BBCB_MG}
					<textarea name="message" rows="15" cols="35" wrap="virtual" style="width:98%" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{SIGNATURE}</textarea>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="row1" width="130" height="20">&nbsp;</td>
	<td class="row2" width="530" align="middle">
		<input type="button" class="button" value="{L_PROFILE}" onclick="location='{U_PROFILE}'" />
		<input type="button" class="button" value="{SIG_CURRENT}" onclick="location='{SIG_LINK}'" />
		<input type="submit" class="button" value="{SIG_PREVIEW}" name="preview" />
		<input type="submit" class="button" value="{SIG_SAVE}" name="save" />
		<input type="submit" class="button" value="{SIG_CANCEL}" name="cancel" />
	</td>
</tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}
</form>
<!-- END switch_preview_sig -->

<!-- BEGIN switch_save_sig -->
<form method="post" action="{SIG_LINK}" name="preview">
{IMG_THL}{IMG_THC}<span class="forumlink">{SIG_SAVE}</span>{IMG_THR}<table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td class="row1 row-center" valign="middle" height="100"><span class="gen">{SAVE_MESSAGE}</span></td></tr>
<tr>
	<td class="row2 row-center">
		<input type="button" class="button" value="{L_PROFILE}" onclick="location='{U_PROFILE}'" />
		<input type="button" class="button" value="{SIG_CURRENT}" onclick="location='{SIG_LINK}'" />
		<input type="submit" class="button" value="{SIG_CANCEL}" name="cancel" />
	</td>
</tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}
</form>
<!-- END switch_save_sig -->

<!-- INCLUDE profile_cpl_menu_inc_end.tpl -->