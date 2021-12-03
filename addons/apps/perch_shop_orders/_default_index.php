<?php
	
	# include the API
	include(__DIR__.'/../../../core/inc/api.php');
	
	$API  = new PerchAPI(1.0, 'perch_shop');
	$Lang = $API->get('Lang');
	$HTML = $API->get('HTML');

	# Set the page title
	$Perch->page_title = $Lang->get($title);

	# Do anything you want to do before output is started
	include('modes/'.$mode.'.pre.php');
	
	# Top layout
	include(PERCH_CORE . '/inc/top.php');
	
	# Display your page
	include('modes/'.$mode.'.post.php');
	
	# Bottom layout
	include(PERCH_CORE . '/inc/btm.php');
