<?php

	if(!defined('IN_DISCUZ')) {
		exit('Access Denied');
	}

	header("content-type:image/png");

	error_reporting(E_ERROR);
	require_once 'phpqrcode/phpqrcode.php';

	$eurl = trim($_GET["data"]);
	$code = trim($_GET["code"]);
	
	$formHash = formhash();

	if($eurl && $code == $formHash)
	{
		$url  = urldecode($eurl);

		/**
		*	QR_ECLEVEL_L & QR_ECLEVEL_M & QR_ECLEVEL_Q & QR_ECLEVEL_H 二维码密度
		*	$size NUM 图片尺码
		*	$margin NUM 图片边距
		*	$outfile	true&false 是否生成图片
		*/
		QRcode::png($url, $outfile = false, QR_ECLEVEL_H, $size = 5, $margin = 2, $saveandprint=false);
	}



