<?php
/**
 * bs_medal_order for Discuz!
 * v1.0
 *
 * Author: Brownsugar (contact@brownsugar.tw)
 * https://brownsugar.tw
 */
!defined('IN_DISCUZ') && exit('Access Denied');

class plugin_bs_medal_order {
	
}
class plugin_bs_medal_order_home extends plugin_bs_medal_order {
	public static function medal_nav_extra() {
		return '<li><a href="plugin.php?id=bs_medal_order:order">'.lang('plugin/bs_medal_order', 'medal_order').'</a></li>';
	}
}
?>