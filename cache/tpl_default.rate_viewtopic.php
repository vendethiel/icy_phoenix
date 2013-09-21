<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 19:11:34 +0000 (time = 1379790694)

if (!defined('IN_ICYPHOENIX')) exit;

?><tr>
	<td class="row1 row-center" colspan="4">
		<br />
		<?php

$rated_count = ( isset($this->_tpldata['rated.']) ) ? sizeof($this->_tpldata['rated.']) : 0;
for ($rated_i = 0; $rated_i < $rated_count; $rated_i++)
{
 $rated_item = &$this->_tpldata['rated.'][$rated_i];
 $rated_item['S_ROW_COUNT'] = $rated_i;
 $rated_item['S_NUM_ROWS'] = $rated_count;

?>
		<span class="gen">&nbsp;&nbsp;<?php echo isset($rated_item['RATE_TOPIC_USER']) ? $rated_item['RATE_TOPIC_USER'] : ''; ?>&nbsp;&nbsp;<?php echo isset($this->vars['L_RATE_TOPIC_USER_ANON']) ? $this->vars['L_RATE_TOPIC_USER_ANON'] : $this->lang('L_RATE_TOPIC_USER_ANON'); ?></span>
		<?php

} // END rated

if(isset($rated_item)) { unset($rated_item); } 

?>
		<span class="gensmall"><?php echo isset($this->vars['FULL_STATS_URL']) ? $this->vars['FULL_STATS_URL'] : $this->lang('FULL_STATS_URL'); ?>&nbsp;</span><br /><br />

		<div class="gen">
<script type="text/javascript">
function submitform()
{
	document.forms["ratingform"].submit();
}
</script>
			<?php

$rerate_count = ( isset($this->_tpldata['rerate.']) ) ? sizeof($this->_tpldata['rerate.']) : 0;
for ($rerate_i = 0; $rerate_i < $rerate_count; $rerate_i++)
{
 $rerate_item = &$this->_tpldata['rerate.'][$rerate_i];
 $rerate_item['S_ROW_COUNT'] = $rerate_i;
 $rerate_item['S_NUM_ROWS'] = $rerate_count;

?>
			<form id="ratingform" name="ratingform" method="post" action="<?php echo isset($rerate_item['S_RATE_ACTION']) ? $rerate_item['S_RATE_ACTION'] : ''; ?>">
			<?php echo isset($rerate_item['S_HIDDEN_FIELDS']) ? $rerate_item['S_HIDDEN_FIELDS'] : ''; ?><?php echo isset($rerate_item['L_CHANGE_RATING']) ? $rerate_item['L_CHANGE_RATING'] : ''; ?>:&nbsp;
			<?php

} // END rerate

if(isset($rerate_item)) { unset($rerate_item); } 

?>
			<?php

$rerate_link_count = ( isset($this->_tpldata['rerate_link.']) ) ? sizeof($this->_tpldata['rerate_link.']) : 0;
for ($rerate_link_i = 0; $rerate_link_i < $rerate_link_count; $rerate_link_i++)
{
 $rerate_link_item = &$this->_tpldata['rerate_link.'][$rerate_link_i];
 $rerate_link_item['S_ROW_COUNT'] = $rerate_link_i;
 $rerate_link_item['S_NUM_ROWS'] = $rerate_link_count;

?>
			<?php

$rate_row_count = ( isset($rerate_link_item['rate_row.']) ) ? sizeof($rerate_link_item['rate_row.']) : 0;
for ($rate_row_i = 0; $rate_row_i < $rate_row_count; $rate_row_i++)
{
 $rate_row_item = &$rerate_link_item['rate_row.'][$rate_row_i];
 $rate_row_item['S_ROW_COUNT'] = $rate_row_i;
 $rate_row_item['S_NUM_ROWS'] = $rate_row_count;

?>
			<?php echo isset($rate_row_item['RATE_LINK']) ? $rate_row_item['RATE_LINK'] : ''; ?>
			<?php

} // END rate_row

if(isset($rate_row_item)) { unset($rate_row_item); } 

?>
			<?php

} // END rerate_link

if(isset($rerate_link_item)) { unset($rerate_link_item); } 

?>
			<?php

$rerate_count = ( isset($this->_tpldata['rerate.']) ) ? sizeof($this->_tpldata['rerate.']) : 0;
for ($rerate_i = 0; $rerate_i < $rerate_count; $rerate_i++)
{
 $rerate_item = &$this->_tpldata['rerate.'][$rerate_i];
 $rerate_item['S_ROW_COUNT'] = $rerate_i;
 $rerate_item['S_NUM_ROWS'] = $rerate_count;

?>
			<?php echo isset($rerate_item['S_RATE_SELECT']) ? $rerate_item['S_RATE_SELECT'] : ''; ?>&nbsp;<input type="submit" value="<?php echo isset($rerate_item['L_RATE']) ? $rerate_item['L_RATE'] : ''; ?>" class="liteoption" /><?php echo isset($rerate_item['RATE_TOPIC_USER']) ? $rerate_item['RATE_TOPIC_USER'] : ''; ?>
			<?php

} // END rerate

if(isset($rerate_item)) { unset($rerate_item); } 

?>

			<?php

$rate_count = ( isset($this->_tpldata['rate.']) ) ? sizeof($this->_tpldata['rate.']) : 0;
for ($rate_i = 0; $rate_i < $rate_count; $rate_i++)
{
 $rate_item = &$this->_tpldata['rate.'][$rate_i];
 $rate_item['S_ROW_COUNT'] = $rate_i;
 $rate_item['S_NUM_ROWS'] = $rate_count;

?>
			<form id="ratingform" name="ratingform" method="post" action="<?php echo isset($rate_item['S_RATE_ACTION']) ? $rate_item['S_RATE_ACTION'] : ''; ?>">
			<?php echo isset($rate_item['S_HIDDEN_FIELDS']) ? $rate_item['S_HIDDEN_FIELDS'] : ''; ?><?php echo isset($rate_item['L_CHOOSE_RATING']) ? $rate_item['L_CHOOSE_RATING'] : ''; ?>:&nbsp;
			<?php

} // END rate

if(isset($rate_item)) { unset($rate_item); } 

?>
			<?php

$rate_link_count = ( isset($this->_tpldata['rate_link.']) ) ? sizeof($this->_tpldata['rate_link.']) : 0;
for ($rate_link_i = 0; $rate_link_i < $rate_link_count; $rate_link_i++)
{
 $rate_link_item = &$this->_tpldata['rate_link.'][$rate_link_i];
 $rate_link_item['S_ROW_COUNT'] = $rate_link_i;
 $rate_link_item['S_NUM_ROWS'] = $rate_link_count;

?>
			<?php

$rate_row_count = ( isset($rate_link_item['rate_row.']) ) ? sizeof($rate_link_item['rate_row.']) : 0;
for ($rate_row_i = 0; $rate_row_i < $rate_row_count; $rate_row_i++)
{
 $rate_row_item = &$rate_link_item['rate_row.'][$rate_row_i];
 $rate_row_item['S_ROW_COUNT'] = $rate_row_i;
 $rate_row_item['S_NUM_ROWS'] = $rate_row_count;

?>
			<?php echo isset($rate_row_item['RATE_LINK']) ? $rate_row_item['RATE_LINK'] : ''; ?>
			<?php

} // END rate_row

if(isset($rate_row_item)) { unset($rate_row_item); } 

?>
			<?php

} // END rate_link

if(isset($rate_link_item)) { unset($rate_link_item); } 

?>
			<?php

$rate_count = ( isset($this->_tpldata['rate.']) ) ? sizeof($this->_tpldata['rate.']) : 0;
for ($rate_i = 0; $rate_i < $rate_count; $rate_i++)
{
 $rate_item = &$this->_tpldata['rate.'][$rate_i];
 $rate_item['S_ROW_COUNT'] = $rate_i;
 $rate_item['S_NUM_ROWS'] = $rate_count;

?>
			<?php echo isset($rate_item['S_RATE_SELECT']) ? $rate_item['S_RATE_SELECT'] : ''; ?>&nbsp;<input type="submit" value="<?php echo isset($rate_item['L_RATE']) ? $rate_item['L_RATE'] : ''; ?>" class="liteoption" />
			<?php echo isset($rate_item['RATE_TOPIC_USER']) ? $rate_item['RATE_TOPIC_USER'] : ''; ?>
			<?php

} // END rate

if(isset($rate_item)) { unset($rate_item); } 

?>

			<?php if ($this->vars['S_THANKS']) {  ?><br /><br /><input type="checkbox" name="thanks_user" value="1" />&nbsp;<?php echo isset($this->vars['L_THANKS_ADD_RATE']) ? $this->vars['L_THANKS_ADD_RATE'] : $this->lang('L_THANKS_ADD_RATE'); ?><br /><br /><?php } ?>

			<?php

$noauth_count = ( isset($this->_tpldata['noauth.']) ) ? sizeof($this->_tpldata['noauth.']) : 0;
for ($noauth_i = 0; $noauth_i < $noauth_count; $noauth_i++)
{
 $noauth_item = &$this->_tpldata['noauth.'][$noauth_i];
 $noauth_item['S_ROW_COUNT'] = $noauth_i;
 $noauth_item['S_NUM_ROWS'] = $noauth_count;

?>
			<?php echo isset($noauth_item['RATE_TOPIC_USER']) ? $noauth_item['RATE_TOPIC_USER'] : ''; ?>
			<?php

} // END noauth

if(isset($noauth_item)) { unset($noauth_item); } 

?>
			<br /><br />
			</form>
		</div>
	</td>
</tr>
<tr>
	<th width="25%"><?php echo isset($this->vars['L_RATE_AVERAGE']) ? $this->vars['L_RATE_AVERAGE'] : $this->lang('L_RATE_AVERAGE'); ?></th>
	<th width="25%"><?php echo isset($this->vars['L_RATE_MINIMUM']) ? $this->vars['L_RATE_MINIMUM'] : $this->lang('L_RATE_MINIMUM'); ?></th>
	<th width="25%"><?php echo isset($this->vars['L_RATE_MAXIMUM']) ? $this->vars['L_RATE_MAXIMUM'] : $this->lang('L_RATE_MAXIMUM'); ?></th>
	<th width="25%"><?php echo isset($this->vars['L_Number_of_Rates']) ? $this->vars['L_Number_of_Rates'] : $this->lang('L_Number_of_Rates'); ?></th>
</tr>
<tr>
	<td class="row1 row-center"><span class="gen"><?php echo isset($this->vars['RATE_TOPIC_STATS']) ? $this->vars['RATE_TOPIC_STATS'] : $this->lang('RATE_TOPIC_STATS'); ?></span></td>
	<td class="row1 row-center"><span class="gen"><b><?php echo isset($this->vars['RATE_MINIMUM']) ? $this->vars['RATE_MINIMUM'] : $this->lang('RATE_MINIMUM'); ?></b></span></td>
	<td class="row1 row-center"><span class="gen"><b><?php echo isset($this->vars['RATE_MAXIMUM']) ? $this->vars['RATE_MAXIMUM'] : $this->lang('RATE_MAXIMUM'); ?></b></span></td>
	<td class="row1 row-center"><span class="gen"><b><?php echo isset($this->vars['NUMBER_OF_RATES']) ? $this->vars['NUMBER_OF_RATES'] : $this->lang('NUMBER_OF_RATES'); ?></b></span></td>
</tr>
<tr><td class="spaceRow" colspan="4"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="1" height="3" alt="" /></td></tr>