<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 19:55:40 +0000 (time = 1379793340)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php

$cashrow_count = ( isset($this->_tpldata['cashrow.']) ) ? sizeof($this->_tpldata['cashrow.']) : 0;
for ($cashrow_i = 0; $cashrow_i < $cashrow_count; $cashrow_i++)
{
 $cashrow_item = &$this->_tpldata['cashrow.'][$cashrow_i];
 $cashrow_item['S_ROW_COUNT'] = $cashrow_i;
 $cashrow_item['S_NUM_ROWS'] = $cashrow_count;

?>
<tr>
	<td class="row2" valign="top"><b><span class="genmed"><?php echo isset($cashrow_item['CASH_NAME']) ? $cashrow_item['CASH_NAME'] : ''; ?>:</span></b></td>
	<td class="row1"><span class="genmed"><b><?php echo isset($cashrow_item['CASH_AMOUNT']) ? $cashrow_item['CASH_AMOUNT'] : ''; ?></b></span></td>
</tr>
<?php

} // END cashrow

if(isset($cashrow_item)) { unset($cashrow_item); } 

?>
<?php

$switch_cashlinkson_count = ( isset($this->_tpldata['switch_cashlinkson.']) ) ? sizeof($this->_tpldata['switch_cashlinkson.']) : 0;
for ($switch_cashlinkson_i = 0; $switch_cashlinkson_i < $switch_cashlinkson_count; $switch_cashlinkson_i++)
{
 $switch_cashlinkson_item = &$this->_tpldata['switch_cashlinkson.'][$switch_cashlinkson_i];
 $switch_cashlinkson_item['S_ROW_COUNT'] = $switch_cashlinkson_i;
 $switch_cashlinkson_item['S_NUM_ROWS'] = $switch_cashlinkson_count;

?>
<tr>
	<td class="row2" valign="top">&nbsp;</td>
	<td class="row1">
		<span class="genmed">
		<?php if ($cashrow_item['CASH_AMOUNT']) {  ?><b><?php echo isset($cashrow_item['CASH_AMOUNT']) ? $cashrow_item['CASH_AMOUNT'] : ''; ?></b><?php } ?>
		<?php

$cashlinks_count = ( isset($switch_cashlinkson_item['cashlinks.']) ) ? sizeof($switch_cashlinkson_item['cashlinks.']) : 0;
for ($cashlinks_i = 0; $cashlinks_i < $cashlinks_count; $cashlinks_i++)
{
 $cashlinks_item = &$switch_cashlinkson_item['cashlinks.'][$cashlinks_i];
 $cashlinks_item['S_ROW_COUNT'] = $cashlinks_i;
 $cashlinks_item['S_NUM_ROWS'] = $cashlinks_count;

?>
		[ <a href="<?php echo isset($cashlinks_item['U_LINK']) ? $cashlinks_item['U_LINK'] : ''; ?>"><?php echo isset($cashlinks_item['L_NAME']) ? $cashlinks_item['L_NAME'] : ''; ?></a> ]
		<?php

} // END cashlinks

if(isset($cashlinks_item)) { unset($cashlinks_item); } 

?>
		</span>
	</td>
</tr>
<?php

} // END switch_cashlinkson

if(isset($switch_cashlinkson_item)) { unset($switch_cashlinkson_item); } 

?>