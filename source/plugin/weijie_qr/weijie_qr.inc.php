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
		*	QR_ECLEVEL_L & QR_ECLEVEL_M & QR_ECLEVEL_Q & QR_ECLEVEL_H ��ά���ܶ�
		*	$size NUM ͼƬ����
		*	$margin NUM ͼƬ�߾�
		*	$outfile	true&false �Ƿ�����ͼƬ
		*/
		QRcode::png($url, $outfile = false, QR_ECLEVEL_H, $size = 5, $margin = 2, $saveandprint=false);
	}



