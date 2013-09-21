<?php
if (!defined('IN_ICYPHOENIX'))
{
	exit('Hacking attempt');
}

// BEGIN RPG
if ( ( time() - $config['adr_seasons_last_time'] ) > $config['adr_seasons_time'] ) 
{ 
   include_once(IP_ROOT_PATH . 'adr/includes/functions_adr_seasons_cron.'.PHP_EXT); 
} 

if ( ( time() - $config['adr_time_last_time'] ) > $config['adr_time'] )
{
	include_once(IP_ROOT_PATH . 'adr/includes/functions_adr_time_cron.'.PHP_EXT);
}

if ( $config['rabbitoshi_enable_cron'] && ( ( time() - $config['rabbitoshi_cron_last_time'] ) > $config['rabbitoshi_cron_time'] )) 
{ 
   include_once(IP_ROOT_PATH . 'rabbitoshi/includes/functions_rabbitoshi_cron.'.PHP_EXT); 
} 
// END RPG

page_footer(true, '');
