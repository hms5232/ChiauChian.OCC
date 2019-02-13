<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('stat_memberlist');
0
|| checktplrefresh('./template/default/forum/stat_memberlist.htm', './template/default/common/stat.htm', 1511241384, '6', './data/template/6_6_forum_stat_memberlist.tpl.php', './template/rabbit_occ', 'forum/stat_memberlist')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首頁"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em>
<a href="misc.php?mod=stat">站點統計</a><em>&rsaquo;</em>
會員列表
</div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<div class="cl">
<form method="post" action="misc.php?mod=stat&amp;op=memberlist" class="mbm y">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="text" name="srchmem" class="px vm" size="15" />
&nbsp;<button type="submit" class="pn vm"><em>搜索</em></button>
</form>
<h1 class="mt">會員列表</h1>
</div>
<table summary="會員列表" class="dt bm">
<tr>
<th><a href="misc.php?mod=stat&amp;op=memberlist&amp;order=username<?php if(!$_GET['asc']) { ?>&amp;asc=1<?php } ?>" class="showmenu">用戶名</a></th>
<th><a href="misc.php?mod=stat&amp;op=memberlist&amp;order=uid<?php if(!$_GET['asc']) { ?>&amp;asc=1<?php } ?>" class="showmenu">UID</a></th>
<th><a href="misc.php?mod=stat&amp;op=memberlist&amp;order=gender<?php if(!$_GET['asc']) { ?>&amp;asc=1<?php } ?>" class="showmenu">性別</a></th>
<th><a href="misc.php?mod=stat&amp;op=memberlist&amp;order=regdate<?php if(!$_GET['asc']) { ?>&amp;asc=1<?php } ?>" class="showmenu">註冊日期</a></th>
<th><a href="misc.php?mod=stat&amp;op=memberlist&amp;order=lastvisit<?php if(!$_GET['asc']) { ?>&amp;asc=1<?php } ?>" class="showmenu">上次訪問</a></th>
<th><a href="misc.php?mod=stat&amp;op=memberlist&amp;order=posts<?php if(!$_GET['asc']) { ?>&amp;asc=1<?php } ?>" class="showmenu">帖子</a></th>
<th><a href="misc.php?mod=stat&amp;op=memberlist&amp;order=credits<?php if(!$_GET['asc']) { ?>&amp;asc=1<?php } ?>" class="showmenu">積分</a></th>
</tr><?php if(is_array($memberlist)) foreach($memberlist as $member) { ?><tr class="<?php echo swapclass('alt'); ?>">
<td><a href="home.php?mod=space&amp;uid=<?php echo $member['uid'];?>" class="xw1"><?php echo $member['username'];?></a></td>
<td><?php echo $member['uid'];?></td>
<td><?php if($member['gender'] == '1') { ?>男<?php } elseif($member['gender'] == 2) { ?>女<?php } else { ?>&nbsp;<?php } ?></td>
<td><?php echo $member['regdate'];?></td>
<td><?php echo $member['lastvisit'];?></td>
<td><?php echo $member['posts'];?></td>
<td><?php echo $member['credits'];?></td>
</tr>
<?php } ?>
</table>
<?php if(!empty($multipage)) { ?><div class="pgs cl"><?php echo $multipage;?></div><?php } ?>
</div>
</div><div class="appl">
<div class="tbn">
<h2 class="mt bbda">站點統計</h2>
<ul>
<li class="cl<?php if($op == 'basic') { ?> a<?php } ?>"><a href="misc.php?mod=stat&amp;op=basic">基本概況</a></li>
<li class="cl<?php if($op == 'forumstat') { ?> a<?php } ?>"><a href="misc.php?mod=stat&amp;op=forumstat">版塊統計</a></li>
<li class="cl<?php if($op == 'team') { ?> a<?php } ?>"><a href="misc.php?mod=stat&amp;op=team">管理團隊</a></li>
<?php if($_G['setting']['modworkstatus']) { ?>
<li class="cl<?php if($op == 'modworks') { ?> a<?php } ?>"><a href="misc.php?mod=stat&amp;op=modworks">管理統計</a></li>
<?php } if($_G['setting']['memliststatus']) { ?>
<li class="cl<?php if($op == 'memberlist') { ?> a<?php } ?>"><a href="misc.php?mod=stat&amp;op=memberlist">會員列表</a></li>
<?php } if($_G['setting']['updatestat']) { ?>
<li class="cl<?php if($op == 'trend') { ?> a<?php } ?>"><a href="misc.php?mod=stat&amp;op=trend">趨勢統計</a></li>
<?php } ?>
</ul>
</div>
</div></div><?php include template('common/footer'); ?>