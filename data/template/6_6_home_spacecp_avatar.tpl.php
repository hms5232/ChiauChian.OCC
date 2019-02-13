<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_avatar');
0
|| checktplrefresh('./template/default/home/spacecp_avatar.htm', './template/default/home/spacecp_header.htm', 1513013545, '6', './data/template/6_6_home_spacecp_avatar.tpl.php', './template/rabbit_occ', 'home/spacecp_avatar')
|| checktplrefresh('./template/default/home/spacecp_avatar.htm', './template/default/home/spacecp_footer.htm', 1513013545, '6', './data/template/6_6_home_spacecp_avatar.tpl.php', './template/rabbit_occ', 'home/spacecp_avatar')
|| checktplrefresh('./template/default/home/spacecp_avatar.htm', './template/default/home/spacecp_header_name.htm', 1513013545, '6', './data/template/6_6_home_spacecp_avatar.tpl.php', './template/rabbit_occ', 'home/spacecp_avatar')
|| checktplrefresh('./template/default/home/spacecp_avatar.htm', './template/default/home/spacecp_header_name.htm', 1513013545, '6', './data/template/6_6_home_spacecp_avatar.tpl.php', './template/rabbit_occ', 'home/spacecp_avatar')
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
<!--don't close the div here--><?php if(!empty($_G['setting']['pluginhooks']['spacecp_avatar_top'])) echo $_G['setting']['pluginhooks']['spacecp_avatar_top'];?>
<script type="text/javascript">
function updateavatar() {
window.location.href = document.location.href.replace('&reload=1', '') + '&reload=1';
}
<?php if(!$reload) { ?>
saveUserdata('avatar_redirect', document.referrer);
<?php } ?>
</script>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=avatar&amp;ref">
<table cellspacing="0" cellpadding="0" class="tfm">
<caption>
<span id="retpre" class="y xi2"></span>
<h2 class="xs2">當前我的頭像</h2>
<p>如果您還沒有設置自己的頭像，系統會顯示為默認頭像，您需要自己上傳一張新照片來作為自己的個人頭像 </p>
</caption>
<tr>
<td><?php echo avatar($space[uid],big);?></td>
</tr>
</table>

<table cellspacing="0" cellpadding="0" class="tfm">
<caption>
<h2 class="xs2">設置我的新頭像</h2>
<p>請選擇一個新照片進行上傳編輯。<br />頭像保存後，您可能需要刷新一下本頁面(按F5鍵)，才能查看最新的頭像效果 </p>
</caption>
<tr>
<td>
<script type="text/javascript">document.write(AC_FL_RunContent('<?php echo implode("','", $uc_avatarflash);; ?>'));</script>
</td>
</tr>
</table>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_avatar_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_avatar_bottom'];?>
</div>
</div>
<script type="text/javascript">
var redirecturl = loadUserdata('avatar_redirect');
if(redirecturl) {
$('retpre').innerHTML = '<a href="' + redirecturl + '">返回上一頁</a>';
}
</script>
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