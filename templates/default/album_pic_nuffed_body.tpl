<!-- INCLUDE overall_header.tpl -->

<a name="TopPic"></a>

{IMG_THL}{IMG_THC}<span class="forumlink">{NEXT_PIC}&nbsp;&nbsp;{PIC_TITLE}&nbsp;&nbsp;{PREV_PIC}</span>{IMG_THR}<table class="forumlinenb">
<tr>
	<td class="row1 row-center tw100pct">
		<span class="genmed"><br /><b>{PIC_COUNT}</b></span><br />
		{U_PIC_L1}<img class="vs10px" src="{U_PIC}" border="0" alt="{PIC_TITLE}" title="{PIC_TITLE}" />{U_PIC_L2}<br />
		<!-- IF U_PIC_CLICK --><span class="genmed">{U_PIC_CLICK}</span><br /><!-- ENDIF -->
		<!-- BEGIN disable_pic_nuffed -->
		<span class="genmed"><a href="{disable_pic_nuffed.U_PIC_UNNUFFED_CLICK}" class="genmed">{disable_pic_nuffed.L_PIC_UNNUFFED_CLICK}</a></span><br />
		<!-- END disable_pic_nuffed -->
	</td>
</tr>
<tr>
	<td class="row2 tw100pct">
		<table class="s2px p2px">
			<tr>
				<td class="tw50pct tdalignr"><span class="genmed">{L_POSTER}:</span></td>
				<td class="tw50pct"><span class="genmed"><b>{POSTER}</b></span></td>
			</tr>
			<tr>
				<td class="tdalignr"><span class="genmed">{L_PIC_TITLE}:</span></td>
				<td><b><span class="genmed">{PIC_TITLE}</span></b></td>
			</tr>
			<tr>
				<td class="tdalignr"><span class="genmed">{L_PIC_DETAILS}:</span></td>
				<td><b><span class="genmed">{L_PIC_ID}:&nbsp;{PIC_ID}&nbsp;-&nbsp;{L_PIC_TYPE}:&nbsp;{PIC_TYPE}&nbsp;-&nbsp;{L_PIC_SIZE}:&nbsp;{PIC_SIZE}</span></b></td>
			</tr>
			<tr>
				<td class="tdalignr"><span class="genmed">{L_PIC_BBCODE}:</span></td>
				<td><form name="select_all" action=""><input class="post" name="BBCode" size="50" maxlength="200" value="{PIC_BBCODE}" type="text" readonly="readonly" onclick="this.form.BBCode.focus();this.form.BBCode.select();" /></form></td>
			</tr>
			<tr>
				<td class="tdalignr"><span class="genmed">{L_POSTED}:</span></td>
				<td><b><span class="genmed">{PIC_TIME}</span></b></td>
			</tr>
			<tr>
				<td class="tdalignr"><span class="genmed">{L_VIEW}:</span></td>
				<td><b><span class="genmed">{PIC_VIEW}</span></b></td>
			</tr>
			<tr>
				<td class="tdalignr"><span class="genmed">{L_PIC_DESC}:</span></td>
				<td><b><span class="genmed">{PIC_DESC}</span></b></td>
			</tr>
		</table>
	</td>
</tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}
{NUFFIMAGE_BOX}
<!-- BEGIN pics_nav -->

{IMG_THL}{IMG_THC}<span class="forumlink">{pics_nav.L_PICS_NAV}</span>{IMG_THR}<table class="forumlinenb">
<tr>
	<!-- BEGIN next -->
	<td class="tw20pct tdalignc">
		<a href="{pics_nav.next.U_PICS_LINK}"><img class="vs10px" src="{pics_nav.next.U_PICS_THUMB}" {THUMB_SIZE} alt="{pics_nav.L_PICS_NAV_NEXT}" title="{pics_nav.L_PICS_NAV_NEXT}" /></a>
	</td>
	<!-- END next -->
	<td class="tw20pct tdalignc">
		<img class="vs10px" src="{U_PIC_THUMB}" {THUMB_SIZE} border="5px" alt="{PIC_TITLE}" title="{PIC_TITLE}" style="color: #ff8866;" />
	</td>
	<!-- BEGIN prev -->
	<td class="tw20pct tdalignc">
		<a href="{pics_nav.prev.U_PICS_LINK}"><img class="vs10px" src="{pics_nav.prev.U_PICS_THUMB}" {THUMB_SIZE} alt="{pics_nav.L_PICS_NAV_PREV}" title="{pics_nav.L_PICS_NAV_PREV}" /></a>
	</td>
	<!-- END prev -->
</tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}
<br />
<!-- END pics_nav -->
<!-- You must keep my copyright notice visible with its original content -->
{ALBUM_COPYRIGHT}

<!-- INCLUDE overall_footer.tpl -->