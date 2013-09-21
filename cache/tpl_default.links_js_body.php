<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Sep 2013 11:31:30 +0000 (time = 1379763090)

if (!defined('IN_ICYPHOENIX')) exit;

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo isset($this->vars['S_CONTENT_DIRECTION']) ? $this->vars['S_CONTENT_DIRECTION'] : $this->lang('S_CONTENT_DIRECTION'); ?>">
<head>
<title>Links</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>" />
<!-- <link rel="stylesheet" href="<?php echo isset($this->vars['T_TPL_PATH']) ? $this->vars['T_TPL_PATH'] : $this->lang('T_TPL_PATH'); ?>style_<?php echo isset($this->vars['CSS_COLOR']) ? $this->vars['CSS_COLOR'] : $this->lang('CSS_COLOR'); ?>.css" type="text/css" /> -->
</head>
<body style="margin-top:0px;margin-left:0px;">
<script type="text/javascript">
// <![CDATA[
var linkrow = new Array(<?php echo isset($this->vars['LINKS_LOGO']) ? $this->vars['LINKS_LOGO'] : $this->lang('LINKS_LOGO'); ?>);
var interval = <?php echo isset($this->vars['DISPLAY_INTERVAL']) ? $this->vars['DISPLAY_INTERVAL'] : $this->lang('DISPLAY_INTERVAL'); ?>;
var link_start = 0;
var link_num = <?php echo isset($this->vars['DISPLAY_LOGO_NUM']) ? $this->vars['DISPLAY_LOGO_NUM'] : $this->lang('DISPLAY_LOGO_NUM'); ?>;
document.write('<table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td><div id="links"><\/div><\/td><\/tr><\/table>');
function writeDiv()
{
	var link_innerHTML = '';
	if(linkrow.length > link_num)
	{
		for(var i=0; i<link_num; i++)
		{
			link_innerHTML += linkrow[(i + link_start) % linkrow.length];
		}
		//document.all.links.innerHTML=link_innerHTML;
		document.getElementById('links').innerHTML = link_innerHTML;
		(link_start < linkrow.length - 1) ? link_start ++ : link_start = 0;
		setTimeout("writeDiv()",interval);
	}
	else
	{
		for(var j = 0; j < linkrow.length; j++)
		{
			link_innerHTML += linkrow[j];
		}
		document.getElementById('links').innerHTML = link_innerHTML;
	}
}

writeDiv();
// ]]>
</script>
</body>
</html>