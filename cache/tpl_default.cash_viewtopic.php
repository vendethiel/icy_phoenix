<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 19:11:34 +0000 (time = 1379790694)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php

$cashrow_count = ( isset($this->_tpldata['cashrow.']) ) ? sizeof($this->_tpldata['cashrow.']) : 0;
for ($cashrow_i = 0; $cashrow_i < $cashrow_count; $cashrow_i++)
{
 $cashrow_item = &$this->_tpldata['cashrow.'][$cashrow_i];
 $cashrow_item['S_ROW_COUNT'] = $cashrow_i;
 $cashrow_item['S_NUM_ROWS'] = $cashrow_count;

?>
<?php echo isset($cashrow_item['CASH_DISPLAY']) ? $cashrow_item['CASH_DISPLAY'] : ''; ?><br />
<?php

} // END cashrow

if(isset($cashrow_item)) { unset($cashrow_item); } 

?>
<?php

$cashlinks_count = ( isset($this->_tpldata['cashlinks.']) ) ? sizeof($this->_tpldata['cashlinks.']) : 0;
for ($cashlinks_i = 0; $cashlinks_i < $cashlinks_count; $cashlinks_i++)
{
 $cashlinks_item = &$this->_tpldata['cashlinks.'][$cashlinks_i];
 $cashlinks_item['S_ROW_COUNT'] = $cashlinks_i;
 $cashlinks_item['S_NUM_ROWS'] = $cashlinks_count;

?>
[ <a href="<?php echo isset($cashlinks_item['U_LINK']) ? $cashlinks_item['U_LINK'] : ''; ?>" class="genmed"><?php echo isset($cashlinks_item['L_NAME']) ? $cashlinks_item['L_NAME'] : ''; ?></a> ]<br />
<?php

} // END cashlinks

if(isset($cashlinks_item)) { unset($cashlinks_item); } 

?>
