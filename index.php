<?php
	$data['timer_not_allowed'] = 0;
	include_once "infi-header.php";
	$action = strtolower($data['action']);

	if($action=="")
	{
		$action = strtolower($data['useraction']);
	}
	$action = trim(strip_tags($action));
	
	$data = getUserRequest($data);
	
	$theme->display("index.tpl");
?>