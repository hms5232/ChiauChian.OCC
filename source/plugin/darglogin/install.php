<?php

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

require_once 'common.php';
require_once DISCUZ_ROOT.'./config/config_ucenter.php';
require_once 'postdata.php';

if(!function_exists('curl_init')) {
	echo('<div style="margin:15px">安裝失敗：您的PHP不支援curl模組，請洽Server管理者！</div>');
	echo('<div style="margin:15px">排除此問題後，請移除插件再重新安裝即可。</div>');
	exit;
}
 
$result = postdata($APPLYEU, array('siteurl'=>$_G['siteurl'], 'ucapi'=>UC_API, 'uckey'=>UC_KEY, 'appid'=>UC_APPID));

if(!$result) {
	echo '<div style="margin:15px">安裝失敗：您的Server暫時無法和APP Server連線！ <a href="#" onclick="location.reload();return(false);"><u>再試一次</u></a></div>';
	echo '<div style="margin:15px">若您重試多次仍無法安裝成功，請檢查您的伺服器是否封鎖對外的連線。</div>';
} else if(strpos($result, "OK\t")!==false) {
	list($status, $siteid) = explode("\t", $result);
	C::t('common_pluginvar')->update_by_variable($_GET['pluginid'], 'siteid', array('value' => $siteid));
	updatecache(array('plugin', 'setting'));
	$finish = TRUE;
} else if(strpos($result, "ERR\t")!==false) {
	list($status, $reason) = explode("\t", $result);
	echo "安裝失敗，錯誤代碼($reason)，請洽系統管理者！";
} else {
	echo "不明原因安裝失敗：($result)，請洽系統管理者！";
}

?>