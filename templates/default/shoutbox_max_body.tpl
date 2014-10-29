<!-- INCLUDE overall_header.tpl -->

{POST_PREVIEW_BOX}
{ERROR_BOX}
<form action="{U_SHOUTBOX}" method="post" name="post" onsubmit="return checkForm(this)">
{IMG_THL}{IMG_THC}<span class="forumlink">{L_SHOUT_TEXT}</span>{IMG_THR}<table class="forumlinenb">
<!-- BEGIN switch_username_select -->
<tr>
	<td class="row1"><span class="gen"><b>{L_USERNAME}</b></span></td>
	<td class="row2"><span class="genmed"><input type="text" class="post" tabindex="1" name="username" size="25" maxlength="25" value="{USERNAME}" /></span></td>
</tr>
<!-- END switch_username_select -->
<tr>
	<td class="row1">
		<table><tr><td class="tdalignc tvalignm"><br />{BBCB_SMILEYS_MG}</td></tr></table>
	</td>
	<td class="row2">
		<table class="p2px tw450px">
		<tr>
			<td colspan="9">
				{BBCB_MG}
				<div class="message-box"><textarea id="message" name="message" rows="15" cols="76" tabindex="3" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{MESSAGE}</textarea></div>
			</td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="row1">
		<span class="gen"><b>{L_OPTIONS}</b></span><br />
		<span class="gensmall">{HTML_STATUS}<br />{BBCODE_STATUS}<br />{SMILIES_STATUS}</span>
	</td>
	<td class="row2">
		<table cellspacing="0" cellpadding="1" border="0">
			<!-- BEGIN switch_html_checkbox -->
			<tr><td><label><input type="checkbox" name="disable_html" {S_HTML_CHECKED} />&nbsp;<span class="gen">{L_DISABLE_HTML}</span></label></td></tr>
			<!-- END switch_html_checkbox -->
			<!-- BEGIN switch_bbcode_checkbox -->
			<tr><td><label><input type="checkbox" name="disable_bbcode" {S_BBCODE_CHECKED} />&nbsp;<span class="genmed">{L_DISABLE_BBCODE}</span></label></td></tr>
			<!-- END switch_bbcode_checkbox -->
		</table>
	</td>
</tr>
<tr>
	<td class="cat" colspan="2">{S_HIDDEN_FORM_FIELDS}
		<input type="submit" tabindex="5" name="refresh" class="liteoption" value="{L_SHOUT_REFRESH}" />&nbsp;
		<input type="submit" tabindex="5" name="preview" class="liteoption" value="{L_SHOUT_PREVIEW}" />&nbsp;
		<input type="submit" accesskey="s" tabindex="6" name="shout" class="mainoption" value="{L_SHOUT_SUBMIT}" />
	</td>
</tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}
</form>

<table>
<tr>
	<td class="tdalignr tvalignb">
		<span class="gensmall">&nbsp;{PAGE_NUMBER}</span><br />
		<span class="pagination">{PAGINATION}</span>
	</td>
</tr>
</table>

<!-- INCLUDE shoutbox_inc.tpl -->

<!-- INCLUDE overall_footer.tpl -->