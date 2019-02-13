<?php

if(!defined('IN_DISCUZ') || $_G['adminid']<=0) {
	exit('Access Denied');
}

require_once 'common.php';
require_once DISCUZ_ROOT.'./config/config_ucenter.php';
require_once 'postdata.php';

//get param
$op = isset($_GET['op'])? $_GET['op'] : '';

//main
if($op=='check0') {
	echo function_exists('curl_init')? 'OK' : 'FAIL';
}
else if($op=='check1') {
	echo postdata($CHECKEU, array('op'=>$op, 'siteurl'=>$_G['siteurl']));
}
else if($op=='check2') {
	echo postdata($CHECKEU, array('op'=>$op, 'siteurl'=>$_G['siteurl']));
}
else if($op=='check3') {
	echo postdata($CHECKEU, array('op'=>$op, 'siteurl'=>$_G['siteurl'], 'ucapi'=>UC_API));
}
else if($op=='check4' || $op=='check5') {
	echo postdata($CHECKEU, array('op'=>$op, 'siteurl'=>$_G['siteurl'], 'ucapi'=>UC_API, 'uckey'=>UC_KEY, 'appid'=>UC_APPID, 'uid'=>$_G['uid']));
}
else {
	echo 'FAIL:op';
}

?>