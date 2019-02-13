<?php
/**
 * bs_medal_order for Discuz!
 * v1.0
 *
 * Author: Brownsugar (contact@brownsugar.tw)
 * https://brownsugar.tw
 */
!defined('IN_DISCUZ') && exit('Access Denied');

$uid = $_G['uid'];
!$uid && showmessage('not_loggedin', 'member.php?mod=logging&action=login');

$lang = lang('home/template');
$setting = $_G['cache']['plugin']['bs_medal_order'];
$prize = $setting['prize'] ? $setting['prize'] : 0;
$prize_type = $setting['prize_type'] ? $setting['prize_type'] : '2';

$query = DB::query("SELECT medalid, name, image FROM ".DB::table("forum_medal"));
while($fetch = DB::fetch($query)) {
	$medals[$fetch['medalid']] = $fetch;
}
$fetch = DB::fetch_first("SELECT medals FROM ".DB::table("common_member_field_forum")." WHERE uid='$uid'");
$myMedals = $fetch['medals'] ? explode("\t", $fetch['medals']) : null;

foreach($myMedals as $medal) {
	if(strpos($medal, '|')) {
		$item = explode('|', $medal);
		$medalid = $item[0];
		$medalexpire = $item[1];
		$medals[$medalid]['expire'] = $medalexpire;
	}
	else {
		$medalid = $medal;
	}
	if($medals[$medalid]) {
		$medalList[] = $medals[$medalid];
	}
}

$ordered = addslashes(trim($_POST['ordered']));
$formhash = $_POST['formhash'];
if(submitcheck('ordersubmit')) {
	if($ordered && $formhash == FORMHASH) {
		$ordered = explode(',', $ordered);
		
		foreach($ordered as $medalid) {
			$check = $medalid.($medals[$medalid]['expire'] ? '|'.$medals[$medalid]['expire'] : '');
			if(in_array($check, $myMedals)) {
				$result[] = $check;
			}
		}
		
		$diff = array_diff($myMedals, $result);
		foreach($diff as $medal) {
			if(in_array($medal, $myMedals)) {
				$result[] = $medal;
			}
		}
		
		$data = implode("\t", $result);
		DB::query("UPDATE ".DB::table('common_member_field_forum')." SET medals='$data' WHERE uid='$uid'");
		updatemembercount($uid, array('extcredits'.$prize_type => -$prize), true, 'BMO', null, i18n('medal_order'));
		
		showsuccess(i18n('update_success'));
	}
	else {
		showerror(i18n('update_none'));
	}
}

$navtitle = i18n('medal_order');
include template('bs_medal_order:order');

function i18n($key) {
	return lang('plugin/bs_medal_order', $key);
}
function showsuccess($message = '') {
	echo '<script type="text/javascript">';
	echo "parent.show_success('$message');";
	echo '</script>';
	exit();
}
function showerror($message = '') {
	echo '<script type="text/javascript">';
	echo "parent.show_error('$message');";
	echo '</script>';
	exit();
}
?>