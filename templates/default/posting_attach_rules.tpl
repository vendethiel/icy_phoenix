<!-- INCLUDE simple_header.tpl -->

{IMG_THL}{IMG_THC}<span class="forumlink">{L_RULES_TITLE}</span>{IMG_THR}<table class="forumlinenb">
<!-- BEGIN switch_nothing -->
<tr><td class="row1 row-center tw100pct"><span class="gen">{L_EMPTY_GROUP_PERMS}</span></td></tr>
<!-- END switch_nothing -->
<!-- BEGIN group_row -->
<tr>
	<td class="row1 row-center tw100pct">
		<table class="forumline">
			<tr><th>{group_row.GROUP_RULE_HEADER}</th></tr>
			<tr>
				<td class="row1 row-center">
					<span class="gen">
						<!-- BEGIN extension_row -->
						{group_row.extension_row.EXTENSION}&nbsp;
						<!-- END extension_row -->
					</span>
				</td>
			</tr>
		</table>
	</td>
</tr>
<!-- END group_row -->
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}
<span class="genmed"><a href="javascript:window.close();" class="genmed">{L_CLOSE_WINDOW}</a></span>

<!-- INCLUDE simple_footer.tpl -->

