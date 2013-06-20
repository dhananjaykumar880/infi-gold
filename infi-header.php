<?php
	include_once "site-config.php";
	include_once "infi.functions.php";
	define('SITE_ABSPATH', dirname(__FILE__).'/');
	
	$theme = getSmartyTemplate(SITE_THEME_DIR.THEME_NAME);
	if(defined("SITE_THEME_ABSPATH")){$theme->template_dir = array(SITE_THEME_ABSPATH.SITE_THEME_DIR.THEME_NAME,SITE_THEME_ABSPATH.SITE_THEME_DIR.'desktop');}
	$theme->compile_id = THEME_NAME;
?>