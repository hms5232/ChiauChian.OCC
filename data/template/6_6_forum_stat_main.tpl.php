<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('stat_main');
0
|| checktplrefresh('./template/default/forum/stat_main.htm', './template/default/common/stat.htm', 1511241360, '6', './data/template/6_6_forum_stat_main.tpl.php', './template/rabbit_occ', 'forum/stat_main')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首頁"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em> 站點統計
</div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt">基本概況</h1>
<table summary="會員統計" class="dt bm mbw">
<caption><h2 class="mbn">會員統計</h2></caption>
<tr>
<th width="16%">註冊會員</th>
<td width="34%"><?php echo $members;?></td>
<th width="16%">發帖會員</th>
<td width="34%"><?php echo $mempost;?></td>
</tr>
<tr>
<th>管理成員</th>
<td><?php echo $admins;?></td>
<th>未發帖會員</th>
<td><?php echo $memnonpost;?></td>
</tr>
<tr>
<th>新會員</th>
<td><?php echo $lastmember;?></td>
<th>發帖會員占總數</th>
<td><?php echo $mempostpercent;?>%</td>
</tr>
<tr>
<th>今日論壇之星</th>
<td><?php if($bestmemposts) { ?><?php echo $bestmem;?> <em title="發帖數">(<?php echo $bestmemposts;?>)</em><?php } else { ?><em>無</em><?php } ?></td>
<th>平均每人發帖數</th>
<td><?php echo $mempostavg;?></td>
</tr>
</table>

<table summary="站點統計" class="dt bm">
<caption><h2 class="mbn">站點統計</h2></caption>
<tr>
<th width="150">版塊數</th>
<td width="60"><?php echo $forums;?></td>
<th width="150">平均每日新增帖子數</th>
<td width="60"><?php echo $postsaddavg;?></td>
<th width="150">最熱門的版塊</th>
<td><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $hotforum['fid'];?>" target="_blank"><?php echo $hotforum['name'];?></a></td>
</tr>
<tr>
<th>主題數</th>
<td><?php echo $threads;?></td>
<th>平均每日註冊會員數</th>
<td><?php echo $membersaddavg;?></td>
<th>主題數</th>
<td><?php echo $hotforum['threads'];?></td>
</tr>
<tr>
<th>帖子數</th>
<td><?php echo $posts;?></td>
<th>最近 24 小時新增帖子數</th>
<td><?php echo $postsaddtoday;?></td>
<th>帖子數</th>
<td><?php echo $hotforum['posts'];?></td>
</tr>
<tr>
<th>平均每個主題被回復次數</th>
<td><?php echo $threadreplyavg;?></td>
<th>最近 24 小時新增會員數</th>
<td><?php echo $membersaddtoday;?></td>
<th>論壇活躍指數</th>
<td><?php echo $activeindex;?></td>
</tr>
</table>
<div class="notice">統計數據已被緩存，上次於 <?php echo $lastupdate;?> 被更新，下次將於 <?php echo $nextupdate;?> 進行更新</div>
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