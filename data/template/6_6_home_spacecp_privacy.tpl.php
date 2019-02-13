<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_privacy');
0
|| checktplrefresh('./template/default/home/spacecp_privacy.htm', './template/default/home/spacecp_header.htm', 1536844302, '6', './data/template/6_6_home_spacecp_privacy.tpl.php', './template/rabbit_occ', 'home/spacecp_privacy')
|| checktplrefresh('./template/default/home/spacecp_privacy.htm', './template/default/home/spacecp_footer.htm', 1536844302, '6', './data/template/6_6_home_spacecp_privacy.tpl.php', './template/rabbit_occ', 'home/spacecp_privacy')
|| checktplrefresh('./template/default/home/spacecp_privacy.htm', './template/default/home/spacecp_header_name.htm', 1536844302, '6', './data/template/6_6_home_spacecp_privacy.tpl.php', './template/rabbit_occ', 'home/spacecp_privacy')
|| checktplrefresh('./template/default/home/spacecp_privacy.htm', './template/default/home/spacecp_header_name.htm', 1536844302, '6', './data/template/6_6_home_spacecp_privacy.tpl.php', './template/rabbit_occ', 'home/spacecp_privacy')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首頁"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=spacecp">設置</a> <em>&rsaquo;</em><?php if($actives['profile']) { ?>
個人資料
<?php } elseif($actives['verify']) { ?>
認證
<?php } elseif($actives['avatar']) { ?>
修改頭像
<?php } elseif($actives['credit']) { ?>
積分
<?php } elseif($actives['usergroup']) { ?>
用戶組
<?php } elseif($actives['privacy']) { ?>
隱私篩選
<?php } elseif($actives['sendmail']) { ?>
郵件提醒
<?php } elseif($actives['password']) { ?>
密碼安全
<?php } elseif($actives['promotion']) { ?>
訪問推廣
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt"><?php if($actives['profile']) { ?>
個人資料
<?php } elseif($actives['verify']) { ?>
認證
<?php } elseif($actives['avatar']) { ?>
修改頭像
<?php } elseif($actives['credit']) { ?>
積分
<?php } elseif($actives['usergroup']) { ?>
用戶組
<?php } elseif($actives['privacy']) { ?>
隱私篩選
<?php } elseif($actives['sendmail']) { ?>
郵件提醒
<?php } elseif($actives['password']) { ?>
密碼安全
<?php } elseif($actives['promotion']) { ?>
訪問推廣
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></h1>
<!--don't close the div here--><?php if(!empty($_G['setting']['pluginhooks']['spacecp_privacy_top'])) echo $_G['setting']['pluginhooks']['spacecp_privacy_top'];?>
<ul class="tb cl">
<li<?php echo $opactives['base'];?>><a href="home.php?mod=spacecp&amp;ac=privacy&amp;op=base">個人隱私設置</a></li>
<?php if(helper_access::check_module('feed')) { ?>
<li<?php echo $opactives['feed'];?>><a href="home.php?mod=spacecp&amp;ac=privacy&amp;op=feed">個人動態發佈設置</a></li>
<li<?php echo $opactives['filter'];?>><a href="home.php?mod=spacecp&amp;ac=privacy&amp;op=filter">動態篩選</a></li>
<?php } ?>
</ul>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=privacy&amp;op=<?php echo $operation;?>">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />

<?php if($operation == 'base') { ?>
<p class="tbmu mbm">您可以完全控制哪些人可以看到您的主頁上面的內容</p>
<table cellspacing="0" cellpadding="0" class="tfm">

<tr>
<th>好友列表</th>
<td>
<select name="privacy[view][friend]">
<option value="0"<?php echo $sels['view']['friend']['0'];?>>公開</option>
<option value="1"<?php echo $sels['view']['friend']['1'];?>>好友可見</option>
<option value="2"<?php echo $sels['view']['friend']['2'];?>>保密</option>
<option value="3"<?php echo $sels['view']['friend']['3'];?>>僅註冊用戶可見</option>
</select>
</td>
</tr>
<?php if(helper_access::check_module('wall')) { ?>
<tr>
<th>留言板</th>
<td>
<select name="privacy[view][wall]">
<option value="0"<?php echo $sels['view']['wall']['0'];?>>公開</option>
<option value="1"<?php echo $sels['view']['wall']['1'];?>>好友可見</option>
<option value="2"<?php echo $sels['view']['wall']['2'];?>>保密</option>
<option value="3"<?php echo $sels['view']['wall']['3'];?>>僅註冊用戶可見</option>
</select>
</td>
</tr>
<?php } if(helper_access::check_module('feed')) { ?>
<tr>
<th>動態</th>
<td>
<select name="privacy[view][home]">
<option value="0"<?php echo $sels['view']['home']['0'];?>>公開</option>
<option value="1"<?php echo $sels['view']['home']['1'];?>>好友可見</option>
<option value="3"<?php echo $sels['view']['home']['3'];?>>僅註冊用戶可見</option>
</select>
</td>
</tr>
<?php } if(helper_access::check_module('doing')) { ?>
<tr>
<th>記錄</th>
<td>
<select name="privacy[view][doing]">
<option value="0"<?php echo $sels['view']['doing']['0'];?>>公開</option>
<option value="1"<?php echo $sels['view']['doing']['1'];?>>好友可見</option>
<option value="3"<?php echo $sels['view']['doing']['3'];?>>僅註冊用戶可見</option>
</select>
<p class="d">本隱私設置僅在其他用戶查看您主頁時有效<br />在全站的記錄列表中可能會出現您的記錄</p>
</td>
</tr>
<?php } if(helper_access::check_module('blog')) { ?>
<tr>
<th>日誌</th>
<td>
<select name="privacy[view][blog]">
<option value="0"<?php echo $sels['view']['blog']['0'];?>>公開</option>
<option value="1"<?php echo $sels['view']['blog']['1'];?>>好友可見</option>
<option value="3"<?php echo $sels['view']['blog']['3'];?>>僅註冊用戶可見</option>
</select>
<p class="d">本隱私設置僅在其他用戶查看您主頁時有效<br />相關瀏覽權限需要在發表時單獨設置方可完全生效</p>
</td>
</tr>
<?php } if(helper_access::check_module('album')) { ?>
<tr>
<th>相冊</th>
<td>
<select name="privacy[view][album]">
<option value="0"<?php echo $sels['view']['album']['0'];?>>公開</option>
<option value="1"<?php echo $sels['view']['album']['1'];?>>好友可見</option>
<option value="3"<?php echo $sels['view']['album']['3'];?>>僅註冊用戶可見</option>
</select>
<p class="d">本隱私設置僅在其他用戶查看您主頁時有效<br />相關瀏覽權限需要在發表時單獨設置方可完全生效</p>
</td>
</tr>
<?php } if(helper_access::check_module('share')) { ?>
<tr>
<th>分享</th>
<td>
<select name="privacy[view][share]">
<option value="0"<?php echo $sels['view']['share']['0'];?>>公開</option>
<option value="1"<?php echo $sels['view']['share']['1'];?>>好友可見</option>
<option value="3"<?php echo $sels['view']['share']['3'];?>>僅註冊用戶可見</option>
</select>
<p class="d">本隱私設置僅在其他用戶查看您主頁時有效<br />相關瀏覽權限需要在發表時單獨設置方可完全生效</p>
</td>
</tr>
<?php } if($_G['setting']['videophoto'] && $space['videophotostatus']) { ?>
<tr>
<th>&nbsp;</th>
<td><img src="<?php echo IMGDIR;?>/videophoto.gif" alt="" class="vm" /> 您已經通過視頻認證，對於沒有通過視頻認證的用戶，您可以設置以下權限 :</td>
</tr>
<tr>
<th>查看認證照片</th>
<td>
<select name="privacy[view][videoviewphoto]">
<option value="0"<?php echo $sels['view']['videoviewphoto']['0'];?>>站點默認設置</option>
<option value="1"<?php echo $sels['view']['videoviewphoto']['1'];?>>允許 </option>
<option value="2"<?php echo $sels['view']['videoviewphoto']['2'];?>>禁止</option>
</select>
</td>
</tr>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_privacy_base_extra'])) echo $_G['setting']['pluginhooks']['spacecp_privacy_base_extra'];?>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="privacysubmit" value="true" class="pn pnc" /><strong>保存</strong></button></td>
</tr>
</table>

<?php } elseif($operation == 'feed') { ?>
<p class="tbmu mbm">系統會將您的各項動作反映到個人動態裡，方便朋友瞭解您的動態。<br />您可以控制是否在下列動作發生時，在個人動態裡發佈相關信息 </p>
<table cellspacing="0" cellpadding="0" id="feed" class="tfm">
<tr>
<th>&nbsp;</th>
<td class="pcl">
<label><input type="checkbox" class="pc" name="privacy[feed][doing]" value="1"<?php echo $sels['feed']['doing'];?> />記錄</label>
<label><input type="checkbox" class="pc" name="privacy[feed][blog]" value="1"<?php echo $sels['feed']['blog'];?> />撰寫日誌</label>
<label><input type="checkbox" class="pc" name="privacy[feed][upload]" value="1"<?php echo $sels['feed']['upload'];?> />上傳圖片</label>
<label><input type="checkbox" class="pc" name="privacy[feed][share]" value="1"<?php echo $sels['feed']['share'];?> />添加分享</label>
<label><input type="checkbox" class="pc" name="privacy[feed][friend]" value="1"<?php echo $sels['feed']['friend'];?> />添加好友</label>
<label><input type="checkbox" class="pc" name="privacy[feed][comment]" value="1"<?php echo $sels['feed']['comment'];?> />發表評論/留言</label>
<label><input type="checkbox" class="pc" name="privacy[feed][show]" value="1"<?php echo $sels['feed']['show'];?> />競價排名</label>
<label><input type="checkbox" class="pc" name="privacy[feed][credit]" value="1"<?php echo $sels['feed']['credit'];?> />積分消費</label>
<label><input type="checkbox" class="pc" name="privacy[feed][invite]" value="1"<?php echo $sels['feed']['invite'];?> />邀請好友</label>
<label><input type="checkbox" class="pc" name="privacy[feed][task]" value="1"<?php echo $sels['feed']['task'];?> />完成任務</label>
<label><input type="checkbox" class="pc" name="privacy[feed][profile]" value="1"<?php echo $sels['feed']['profile'];?> />更新個人資料</label>
<label><input type="checkbox" class="pc" name="privacy[feed][click]" value="1"<?php echo $sels['feed']['click'];?> />對日誌/圖片表態</label>
<label><input type="checkbox" class="pc" name="privacy[feed][newthread]" value="1"<?php echo $sels['feed']['newthread'];?> />論壇發帖</label>
<label><input type="checkbox" class="pc" name="privacy[feed][newreply]" value="1"<?php echo $sels['feed']['newreply'];?> />論壇回帖</label>
</td>
</tr>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_privacy_feed_extra'])) echo $_G['setting']['pluginhooks']['spacecp_privacy_feed_extra'];?>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="privacysubmit" value="true" class="pn pnc" /><strong>保存</strong></button></td>
</tr>
</table>

<?php } else { $iconnames['wall'] = '留言板';
$iconnames['piccomment'] = '圖片評論';
$iconnames['blogcomment'] = '日誌評論';
$iconnames['sharecomment'] = '分享評論';
$iconnames['magic'] = '道具';
$iconnames['sharenotice'] = '分享通知';
$iconnames['clickblog'] = '日誌表態';
$iconnames['clickpic'] = '圖片表態';
$iconnames['credit'] = '積分';
$iconnames['doing'] = '記錄';
$iconnames['pcomment'] = '話題點評';
$iconnames['post'] = '話題回復';
$iconnames['show'] = '排行榜';
$iconnames['task'] = '任務';
$iconnames['goods'] = '商品';
$iconnames['group'] = $_G[setting][navs][3][navname];
$iconnames['thread'] = '話題';
$iconnames['system'] = '系統';
$iconnames['friend'] = '好友';
$iconnames['debate'] = '辯論';
$iconnames['album'] = '相冊';
$iconnames['blog'] = '日誌';
$iconnames['poll'] = '投票';
$iconnames['activity'] = '活動';
$iconnames['reward'] = '懸賞';
$iconnames['share'] = '分享';
$iconnames['profile'] = '更新個人資料';
$iconnames['pusearticle'] = '生成文章';?><table cellspacing="0" cellpadding="0" class="tfm bbda">
<caption>
<h2 class="ptw pbn xs2">篩選規則一：屏蔽指定用戶組的動態</h2>
<p class="xg1">您可以決定屏蔽哪些用戶組的動態，屏蔽用戶組內的組員所發佈的動態都將被屏蔽掉(僅限查看好友的動態時生效) </p>
</caption>
<tr>
<th>&nbsp;</th>
<td class="pcl"><?php if(is_array($groups)) foreach($groups as $key => $value) { ?><label><input type="checkbox" class="pc" name="privacy[filter_gid][<?php echo $key;?>]" value="<?php echo $key;?>"<?php if(isset($space['privacy']['filter_gid'][$key])) { ?> checked="checked"<?php } ?> /><?php echo $value;?></label>
<?php } ?>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td>
<button type="submit" name="privacy2submit" value="true" class="pn pnc" /><strong>保存</strong></button>
<p class="d">您可以在自己的<a href="home.php?mod=space&amp;do=friend">好友列表</a>中，對好友進行分組，並可以對用戶組進行改名 </span>
</td>
</tr>
</table>

<table cellspacing="0" cellpadding="0" class="tfm bbda">
<caption>
<h2 class="ptw pbn xs2">篩選規則二：屏蔽指定好友指定類型的動態</h2>
<p class="xg1">點擊一下首頁好友動態列表後面的屏蔽標誌，就可以屏蔽指定好友指定類型的動態了。<br />下面列出的是您已經屏蔽的動態類型識別名和好友名，您可以選擇是否取消屏蔽 </p>
</caption>
<?php if($icons) { ?>
<tr>
<th>&nbsp;</th>
<td class="pcl"><?php if(is_array($icons)) foreach($icons as $key => $icon) { $uid = $uids[$key];$icon_uid="$icon|$uid";?><label>
<?php if(is_numeric($icon)) { ?>
<img src="http://appicon.manyou.com/icons/<?php echo $icon;?>" alt="" class="vm" />
<?php } else { ?>
<img src="<?php echo STATICURL;?>image/feed/<?php echo $icon;?>.gif" alt="" class="vm" />
<?php } ?>
<input type="checkbox" class="pc" name="privacy[filter_icon][<?php echo $icon_uid;?>]" value="1" checked="checked" /> 
<?php if(isset($iconnames[$icon])) { ?><?php echo $iconnames[$icon];?><?php } else { ?><?php echo $icon;?><?php } ?> (<?php if($users[$uid]) { ?><a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo $users[$uid];?></a><?php } else { ?>全部好友<?php } ?>)
</label>
<?php } ?>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="privacy2submit" value="true" class="pn pnc" /><strong>保存</strong></button></td>
</tr>
<?php } else { ?>
<tr>
<th>&nbsp;</th>
<td class="d">現在還沒有屏蔽的動態類型</td>
</tr>
<?php } ?>
</table>

<table cellspacing="0" cellpadding="0" class="tfm">
<caption>
<h2 class="ptw pbn xs2">篩選規則三：屏蔽指定好友指定類型的提醒</h2>
<p class="xg1">點擊一下通知列表後面的屏蔽標誌，就可以屏蔽指定好友指定類型的通知了。<br />下面列出的是您已經屏蔽的通知類型和好友名，您可以選擇是否取消屏蔽 </p>
</caption>
<?php if($types) { ?>
<tr>
<th>&nbsp;</th>
<td><?php if(is_array($types)) foreach($types as $key => $type) { $uid = $uids[$key];$type_uid="$type|$uid";?><label>
<input type="checkbox" class="pc" name="privacy[filter_note][<?php echo $type_uid;?>]" value="1" checked="checked" />
<?php if(isset($iconnames[$type])) { ?><?php echo $iconnames[$type];?><?php } else { ?><?php echo $type;?><?php } ?> (<?php if($users[$uid]) { ?><a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo $users[$uid];?></a><?php } else { ?>全部好友<?php } ?>)
</label>
<?php } ?>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="privacy2submit" value="true" class="pn pnc" /><strong>保存</strong></button></td>
</tr>
<?php } else { ?>
<tr>
<th>&nbsp;</th>
<td class="d">現在還沒有屏蔽的動態類型</td>
</tr>
<?php } ?>
</table>
<?php } ?>
</form>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_privacy_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_privacy_bottom'];?>
</div>
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">設置</h2>
<ul>
<li<?php echo $actives['avatar'];?>><a href="home.php?mod=spacecp&amp;ac=avatar">修改頭像</a></li>
<li<?php echo $actives['profile'];?>><a href="home.php?mod=spacecp&amp;ac=profile">個人資料</a></li>
<?php if($_G['setting']['verify']['enabled'] && allowverify() || $_G['setting']['my_app_status'] && $_G['setting']['videophoto']) { ?>
<li<?php echo $actives['verify'];?>><a href="<?php if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<?php } else { ?>home.php?mod=spacecp&ac=videophoto<?php } ?>">認證</a></li>
<?php } ?>
<li<?php echo $actives['credit'];?>><a href="home.php?mod=spacecp&amp;ac=credit">積分</a></li>
<li<?php echo $actives['usergroup'];?>><a href="home.php?mod=spacecp&amp;ac=usergroup">用戶組</a></li>
<li<?php echo $actives['privacy'];?>><a href="home.php?mod=spacecp&amp;ac=privacy">隱私篩選</a></li>

<?php if($_G['setting']['sendmailday']) { ?><li<?php echo $actives['sendmail'];?>><a href="home.php?mod=spacecp&amp;ac=sendmail">郵件提醒</a></li><?php } ?>
<li<?php echo $actives['password'];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">密碼安全</a></li>

<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<li<?php echo $actives['promotion'];?>><a href="home.php?mod=spacecp&amp;ac=promotion">訪問推廣</a></li>
<?php } if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div></div>
</div><?php include template('common/footer'); ?>