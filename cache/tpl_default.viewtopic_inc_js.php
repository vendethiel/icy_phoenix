<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 19:11:34 +0000 (time = 1379790694)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php if ($this->vars['S_POSTS_LIKES']) {  ?>
<script type="text/javascript" src="<?php echo isset($this->vars['FULL_SITE_PATH']) ? $this->vars['FULL_SITE_PATH'] : $this->lang('FULL_SITE_PATH'); ?><?php echo isset($this->vars['T_COMMON_TPL_PATH']) ? $this->vars['T_COMMON_TPL_PATH'] : $this->lang('T_COMMON_TPL_PATH'); ?>js/ajax/ajax_topicfunctions.js"></script>
<?php } ?>

<script type="text/javascript">
// <![CDATA[
<?php

$switch_quick_quote_count = ( isset($this->_tpldata['switch_quick_quote.']) ) ? sizeof($this->_tpldata['switch_quick_quote.']) : 0;
for ($switch_quick_quote_i = 0; $switch_quick_quote_i < $switch_quick_quote_count; $switch_quick_quote_i++)
{
 $switch_quick_quote_item = &$this->_tpldata['switch_quick_quote.'][$switch_quick_quote_i];
 $switch_quick_quote_item['S_ROW_COUNT'] = $switch_quick_quote_i;
 $switch_quick_quote_item['S_NUM_ROWS'] = $switch_quick_quote_count;

?>
message = new Array();
<?php

} // END switch_quick_quote

if(isset($switch_quick_quote_item)) { unset($switch_quick_quote_item); } 

?>

post_like = new Array();
post_like_js = new Array();
post_like_js_new = new Array();

<?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ? sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
post_like[<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>] = <?php if ($postrow_item['READER_LIKES']) {  ?>1<?php } else { ?>0<?php } ?>;
post_like_js[<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>] = <?php if ($postrow_item['READER_LIKES']) {  ?>'<?php echo isset($postrow_item['POST_LIKE_TEXT_JS']) ? $postrow_item['POST_LIKE_TEXT_JS'] : ''; ?>'<?php } else { ?>'<?php echo isset($postrow_item['POST_LIKE_TEXT_JS_NEW']) ? $postrow_item['POST_LIKE_TEXT_JS_NEW'] : ''; ?>'<?php } ?>;
post_like_js_new[<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>] = <?php if ($postrow_item['READER_LIKES']) {  ?>'<?php echo isset($postrow_item['POST_LIKE_TEXT_JS_NEW']) ? $postrow_item['POST_LIKE_TEXT_JS_NEW'] : ''; ?>'<?php } else { ?>'<?php echo isset($postrow_item['POST_LIKE_TEXT_JS']) ? $postrow_item['POST_LIKE_TEXT_JS'] : ''; ?>'<?php } ?>;
<?php

$switch_quick_quote_count = ( isset($postrow_item['switch_quick_quote.']) ) ? sizeof($postrow_item['switch_quick_quote.']) : 0;
for ($switch_quick_quote_i = 0; $switch_quick_quote_i < $switch_quick_quote_count; $switch_quick_quote_i++)
{
 $switch_quick_quote_item = &$postrow_item['switch_quick_quote.'][$switch_quick_quote_i];
 $switch_quick_quote_item['S_ROW_COUNT'] = $switch_quick_quote_i;
 $switch_quick_quote_item['S_NUM_ROWS'] = $switch_quick_quote_count;

?>
message[<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>] = " user=\"<?php echo isset($postrow_item['POSTER_NAME_QQ']) ? $postrow_item['POSTER_NAME_QQ'] : ''; ?>\" post=\"<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>\"]<?php echo isset($postrow_item['PLAIN_MESSAGE']) ? $postrow_item['PLAIN_MESSAGE'] : ''; ?>[/";
<?php

} // END switch_quick_quote

if(isset($switch_quick_quote_item)) { unset($switch_quick_quote_item); } 

?>
<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>

function post_like_ajax(topic_id, post_id)
{
	if (post_like[post_id] == 0)
	{
		mode = 'like';
		lang_var_link = '<?php echo isset($this->vars['L_UNLIKE']) ? $this->vars['L_UNLIKE'] : $this->lang('L_UNLIKE'); ?>';
		lang_var_span = post_like_js[post_id];
		post_like[post_id] = 1;
	}
	else
	{
		mode = 'unlike';
		lang_var_link = '<?php echo isset($this->vars['L_LIKE']) ? $this->vars['L_LIKE'] : $this->lang('L_LIKE'); ?>';
		lang_var_span = post_like_js_new[post_id];
		post_like[post_id] = 0;
	}
	AJAXPostLike(mode, topic_id, post_id);

	var post_span_content = getElementById('like_s_p' + post_id);
	var post_url_content = getElementById('like_a_p' + post_id);

	if ((post_span_content == null) || (post_url_content == null))
	{
		return;
	}

	//alert(lang_var_span);
	post_span_content.innerHTML = ((lang_var_span != '') ? (lang_var_span + '&nbsp;&bull;&nbsp;') : '&nbsp;');
	post_url_content.innerHTML = lang_var_link;
}

function post_time_edit(url)
{
	window.open(url, '_postedittime', 'width=600,height=300,resizable=no,scrollbars=no');
}
// ]]>
</script>
