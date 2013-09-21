<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 11:31:22 +0000 (time = 1379763082)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php  $this->set_filename('xs_include_64d476f19016e1b75cdf920b518bb46f', 'overall_header.tpl', true);  $this->pparse('xs_include_64d476f19016e1b75cdf920b518bb46f');  ?>

<?php
$catrow_count = (isset($this->_tpldata['catrow.'])) ? count($this->_tpldata['catrow.']) : 0;
for($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
	$catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
	// check for new messages
	$new_msg = false;
	$forumrow_count = (isset($catrow_item['forumrow.'])) ? count($catrow_item['forumrow.']) : 0;
	for ($forumrow_i = 0; $forumrow_i < $forumrow_count; $forumrow_i++)
	{
		$forumrow_item = &$catrow_item['forumrow.'][$forumrow_i];
		$new_item = strpos($forumrow_item['FORUM_FOLDER_IMG'], '_unread') > 0 ? true : false;
		if($new_item)
		{
			$new_msg = true;
			$forumrow_item['LINK_CLASS'] = '-new';
		}
	}
	// add xs switch
	$catrow_item['LINK_CLASS'] = $new_msg ? '-new' : '';
}

?>
<?php  $this->set_filename('xs_include_8dfdb92b413354cb9317810f9ebfd2d3', 'index_body.tpl', true);  $this->pparse('xs_include_8dfdb92b413354cb9317810f9ebfd2d3');  ?>

<?php  $this->set_filename('xs_include_b34005d44b198bdbffc62f1a60494770', 'overall_footer.tpl', true);  $this->pparse('xs_include_b34005d44b198bdbffc62f1a60494770');  ?>