<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_weijie_qr {

}

class plugin_weijie_qr_forum extends plugin_weijie_qr {
	
	//生成二维码链接
	function weijie_qr($qr_width=225, $qr_height=225, $qr_tips='') {

		error_reporting(E_ERROR);
		require_once 'phpqrcode/phpqrcode.php';

		$formHash = formhash();

		$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

		return "<center><img src='plugin.php?id=weijie_qr&data=".urlencode($url)."&code=".$formHash."' width='$qr_width' height='$qr_height' /><br/>".$qr_tips."</center>";
	}
	
	//钩子输出
	function viewthread_postbottom_output() {
		global $_G;
		$is_on 		= $_G['cache']['plugin']['weijie_qr']['is_on'];  	//是否开启
		$qr_width 	= $_G['cache']['plugin']['weijie_qr']['qr_width'];  //二维码宽度
		$qr_height 	= $_G['cache']['plugin']['weijie_qr']['qr_height'];	//二维码高度
		$qr_tips 	= $_G['cache']['plugin']['weijie_qr']['qr_tips'];	//二维码高度

		if($is_on == '1' && ! $this->is_mobile() )
		{
			return array($this->weijie_qr($qr_width, $qr_height, $qr_tips));
		}
	}

	//检测手机版
	function is_mobile()
	{ 
		$user_agent = $_SERVER['HTTP_USER_AGENT']; 
		$mobile_agents = Array(
			"240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","applewebkit/525","applewebkit/532",
			"asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad",
			"danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier",
			"hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2",
			"lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini",
			"mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook",
			"novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover",
			"sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony",
			"spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser",
			"utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless",
			"xda","xde","zte"); 
		$is_mobile = false; 

		foreach ($mobile_agents as $device) { 
			if (stristr($user_agent, $device)) { 
				$is_mobile = true; 
				break; 
			} 
		} 

		return $is_mobile; 
	}
}


