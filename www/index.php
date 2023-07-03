<?php

	require_once('../_.php');
	
	$path = $_REQUEST['path']??'index.html';
	$twig->put($path);
	