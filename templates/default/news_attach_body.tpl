<!-- BEGIN attach -->
<br /><br />

<!-- BEGIN denyrow -->
<table class="forumline tw95pct talignc">
<tr><th class="tw100pct tdalignc"><b><span class="gen">{articles.attach.denyrow.L_DENIED}</span></b></th></tr>
</table>
<!-- END denyrow -->
<!-- BEGIN cat_stream -->
<table class="forumline tw95pct talignc">
<tr><th colspan="3"><b><span class="gen">{articles.attach.cat_stream.DOWNLOAD_NAME}</span></b></th></tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{L_DESCRIPTION}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.cat_stream.COMMENT}</span></td>
</tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{L_FILESIZE}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.cat_stream.FILESIZE} {articles.attach.cat_stream.SIZE_VAR}</span></td>
</tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{articles.attach.cat_stream.L_DOWNLOADED_VIEWED}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.cat_stream.L_DOWNLOAD_COUNT}</span></td>
</tr>
<tr>
	<td class="tdalignc" colspan="2"><br />
	<object id="wmp" classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,0,0,0" standby="Loading Microsoft Windows Media Player components..." type="application/x-oleobject">
	<param name="FileName" value="{articles.attach.cat_stream.U_DOWNLOAD_LINK}">
	<param name="ShowControls" value="1">
	<param name="ShowDisplay" value="0">
	<param name="ShowStatusBar" value="1">
	<param name="AutoSize" value="1">
	<param name="AutoStart" value="0">
	<param name="Visible" value="1">
	<param name="AnimationStart" value="0">
	<param name="Loop" value="0">
	<embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/windows95/downloads/contents/wurecommended/s_wufeatured/mediaplayer/default.asp" src="{articles.attach.cat_stream.U_DOWNLOAD_LINK}" name="MediaPlayer2" showcontrols="1" showdisplay="0" showstatusbar="1" autosize="1" autostart="0" visible="1" animationatstart="0" loop="0"></embed>
	</object><br /><br />
	</td>
</tr>
</table>
<!-- END cat_stream -->
<!-- BEGIN cat_swf -->
<table class="forumline tw95pct talignc">
<tr><th colspan="3"><b><span class="gen">{articles.attach.cat_swf.DOWNLOAD_NAME}</span></b></th></tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{L_DESCRIPTION}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.cat_swf.COMMENT}</span></td>
</tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{L_FILESIZE}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.cat_swf.FILESIZE} {articles.attach.cat_swf.SIZE_VAR}</span></td>
</tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{articles.attach.cat_swf.L_DOWNLOADED_VIEWED}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.cat_swf.L_DOWNLOAD_COUNT}</span></td>
</tr>
<tr>
	<td class="tdalignc" colspan="2"><br />
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="{articles.attach.cat_swf.WIDTH}" height="{articles.attach.cat_swf.HEIGHT}">
	<param name="movie" value="{articles.attach.cat_swf.U_DOWNLOAD_LINK}">
	<param name="loop" value="1">
	<param name="quality" value="high">
	<param name="scale" value="noborder">
	<param name="wmode" value="transparent">
	<param name="bgcolor" value="#000000">
	<embed src="{articles.attach.cat_swf.U_DOWNLOAD_LINK}" loop="1" quality="high" scale="noborder" wmode="transparent" bgcolor="#000000" width="{articles.attach.cat_swf.WIDTH}" height="{articles.attach.cat_swf.HEIGHT}" type="application/x-shockwave-flash" pluginspace="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
	</object><br /><br />
	</td>
</tr>
</table>
<!-- END cat_swf -->
<!-- BEGIN cat_images -->
<table class="forumline tw95pct talignc">
<tr><th colspan="2" align="center"><b><span class="gen">{articles.attach.cat_images.DOWNLOAD_NAME}</span></b></th></tr>
<tr>
	<td class="row2 tw25pct"><span class="genmed">&nbsp;{L_DESCRIPTION}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.cat_images.COMMENT}</span></td>
</tr>
<tr>
	<td class="row2"><span class="genmed">&nbsp;{L_FILESIZE}:</span></td>
	<td class="row3"><span class="genmed">&nbsp;{articles.attach.cat_images.FILESIZE} {articles.attach.cat_images.SIZE_VAR}</span></td>
</tr>
<tr>
	<td class="row2"><span class="genmed">&nbsp;{articles.attach.cat_images.L_DOWNLOADED_VIEWED}:</span></td>
	<td class="row3"><span class="genmed">&nbsp;{articles.attach.cat_images.L_DOWNLOAD_COUNT}</span></td>
</tr>
<tr><td class="tdalignc" colspan="2"><br />{articles.attach.cat_images.IMG_CODE}<br /><br /></td></tr>
</table>
<!-- END cat_images -->
<!-- BEGIN cat_thumb_images -->
<table class="forumline tw95pct talignc">
<tr><th class="tdalignc" colspan="2"><b><span class="gen">{articles.attach.cat_thumb_images.DOWNLOAD_NAME}</span></b></th></tr>
<tr>
	<td class="row2 tw25pct"><span class="genmed">&nbsp;{L_DESCRIPTION}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.cat_thumb_images.COMMENT}</span></td>
</tr>
<tr>
	<td class="row2"><span class="genmed">&nbsp;{L_FILESIZE}:</span></td>
	<td class="row3"><span class="genmed">&nbsp;{articles.attach.cat_thumb_images.FILESIZE} {articles.attach.cat_thumb_images.SIZE_VAR}</span></td>
</tr>
<tr>
	<td class="row2"><span class="genmed">&nbsp;{articles.attach.cat_thumb_images.L_DOWNLOADED_VIEWED}:</span></td>
	<td class="row3"><span class="genmed">&nbsp;{articles.attach.cat_thumb_images.L_DOWNLOAD_COUNT}</span></td>
</tr>
<tr>
	<td class="tdalignc" colspan="2"><br /><a href="{articles.attach.cat_thumb_images.IMG_SRC}" target="_blank"><img src="{articles.attach.cat_thumb_images.IMG_THUMB_SRC}" alt="{articles.attach.cat_thumb_images.DOWNLOAD_NAME}" /></a><br /><br /></td>
</tr>
</table>
<!-- END cat_thumb_images -->
<!-- BEGIN attachrow -->
<table class="forumline tw95pct talignc">
<tr><th colspan="3"><b><span class="gen">{articles.attach.attachrow.DOWNLOAD_NAME}</span></b></th></tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{L_DESCRIPTION}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.attachrow.COMMENT}</span></td>
	<td class="row2 row-center tw10pct" rowspan="4">{articles.attach.attachrow.S_UPLOAD_IMAGE}<br /><a href="{articles.attach.attachrow.U_DOWNLOAD_LINK}" {articles.attach.attachrow.TARGET_BLANK} class="genmed"><b>{L_DOWNLOAD}</b></a></td>
</tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{L_FILENAME}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.attachrow.DOWNLOAD_NAME}</span></td>
</tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{L_FILESIZE}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.attachrow.FILESIZE} {articles.attach.attachrow.SIZE_VAR}</span></td>
</tr>
<tr>
	<td class="row2 tw15pct"><span class="genmed">&nbsp;{articles.attach.attachrow.L_DOWNLOADED_VIEWED}:</span></td>
	<td class="row3 tw75pct"><span class="genmed">&nbsp;{articles.attach.attachrow.L_DOWNLOAD_COUNT}</span></td>
</tr>
</table>
<!-- END attachrow -->
<!-- END attach -->