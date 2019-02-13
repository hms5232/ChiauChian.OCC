<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_task');
0
|| checktplrefresh('./template/default/home/space_task.htm', './template/default/home/space_task_list.htm', 1511341363, '6', './data/template/6_6_home_space_task.tpl.php', './template/rabbit_occ', 'home/space_task')
|| checktplrefresh('./template/default/home/space_task.htm', './template/default/home/space_task_detail.htm', 1511341363, '6', './data/template/6_6_home_space_task.tpl.php', './template/rabbit_occ', 'home/space_task')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首頁"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=task">任務</a>
</div>
</div>

<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<?php if(empty($do)) { ?><h1 class="mt">
<img src="<?php echo STATICURL;?>image/feed/task.gif" alt="任務" class="vm" />
<?php if($_GET['item'] == "doing") { ?>進行中的任務
<?php } elseif($_GET['item'] == "done") { ?>已完成的任務
<?php } elseif($_GET['item'] == "failed") { ?>失敗的任務
<?php } else { ?>新任務<?php } ?>
</h1>
<div class="ptm">
<?php if($tasklist) { ?>
<table cellspacing="0" cellpadding="0" width="100%"><?php if(is_array($tasklist)) foreach($tasklist as $task) { ?><tr>
<td width="80" class="bbda"><img src="<?php echo $task['icon'];?>" width="64" height="64" alt="<?php echo $task['name'];?>" /></td>
<td class="bbda ptm pbm">
<h3 class="xs2 xi2"><a href="home.php?mod=task&amp;do=view&amp;id=<?php echo $task['taskid'];?>"><?php echo $task['name'];?></a> <span class="xs1 xg2 xw0">(人氣: <a href="home.php?mod=task&amp;do=view&amp;id=<?php echo $task['taskid'];?>#parter"><?php echo $task['applicants'];?></a> )</span></h3>
<p class="xg2"><?php echo $task['description'];?></p>
<?php if($_GET['item'] == 'doing') { ?>
<div class="pbg mtm mbm">
<div class="pbr" style="width: <?php if($task['csc']) { ?><?php echo $task['csc'];?>%<?php } else { ?>8px<?php } ?>;"></div>
<div class="xs0">已完成 <span id="csc_<?php echo $task['taskid'];?>"><?php echo $task['csc'];?></span>%</div>
</div>
<?php } ?>
</td>
<td class="xi1 bbda hm" width="200">
<?php if($task['reward'] == 'credit') { ?>
積分 <?php echo $_G['setting']['extcredits'][$task['prize']]['title'];?> <?php echo $task['bonus'];?> <?php echo $_G['setting']['extcredits'][$task['prize']]['unit'];?>
<?php } elseif($task['reward'] == 'magic') { ?>
道具 <?php echo $listdata[$task['prize']];?> <?php echo $task['bonus'];?> 張
<?php } elseif($task['reward'] == 'medal') { ?>
勳章 <?php echo $listdata[$task['prize']];?> <?php if($task['bonus']) { ?>有效期 <?php echo $task['bonus'];?> 天 <?php } } elseif($task['reward'] == 'invite') { ?>
邀請碼 <?php echo $task['prize'];?> 有效期 <?php echo $task['bonus'];?> 天
<?php } elseif($task['reward'] == 'group') { ?>
用戶組 <?php echo $listdata[$task['prize']];?> <?php if($task['bonus']) { ?> <?php echo $task['bonus'];?> 天 <?php } } ?>
</td>
<td width="120" class="bbda">
<?php if($_GET['item'] == 'new') { if($task['noperm']) { ?>
<a href="javascript:;" onclick="doane(event);showDialog('您所在的用戶組無法申請此任務')"><img src="<?php echo STATICURL;?>image/task/disallow.gif" title="您所在的用戶組無法申請此任務" alt="disallow" /></a>
<?php } elseif($task['appliesfull']) { ?>
<a href="javascript:;" onclick="doane(event);showDialog('人數已滿')"><img src="<?php echo STATICURL;?>image/task/disallow.gif" title="人數已滿" alt="disallow" /></a>
<?php } else { ?>
<a href="home.php?mod=task&amp;do=apply&amp;id=<?php echo $task['taskid'];?>"><img src="<?php echo STATICURL;?>image/task/apply.gif" alt="apply" /></a>
<?php } } elseif($_GET['item'] == 'doing') { ?>
<p><a href="home.php?mod=task&amp;do=draw&amp;id=<?php echo $task['taskid'];?>"><img src="<?php echo STATICURL;?>image/task/<?php if($task['csc'] >=100) { ?>reward.gif<?php } else { ?>rewardless.gif<?php } ?>"  alt="" /></a></p>
<?php } elseif($_GET['item'] == 'done') { ?>
<p style="white-space:nowrap">完成於 <?php echo $task['dateline'];?>
<?php if($task['period'] && $task['t']) { ?><br /><?php if($task['allowapply']) { ?><a href="home.php?mod=task&amp;do=apply&amp;id=<?php echo $task['taskid'];?>">現在可以再次申請</a><?php } else { ?><?php echo $task['t'];?> 後可以再次申請<?php } } ?></p>
<?php } elseif($_GET['item'] == 'failed') { ?>
<p style="white-space:nowrap">失敗於 <?php echo $task['dateline'];?>
<?php if($task['period'] && $task['t']) { ?><br /><?php if($task['allowapply']) { ?><a href="home.php?mod=task&amp;do=apply&amp;id=<?php echo $task['taskid'];?>">現在可以再次申請</a><?php } else { ?><?php echo $task['t'];?>後可以重新申請<?php } } ?></p>
<?php } ?>
</td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
<p class="emp"><?php if($_GET['item'] == 'new') { ?>暫無新任務，週期性任務完成後可以再次申請，敬請關注 <?php } elseif($_GET['item'] == 'doing') { ?>暫無進行中的任務，請到新任務中申請 <?php } else { ?>暫無數據<?php } ?></p>
<?php } ?>
</div><?php } elseif($do == 'view') { ?><h1 class="mt cl">
<img src="<?php echo STATICURL;?>image/feed/task.gif" alt="任務" class="vm" /> 任務詳情
</h1>
<?php if($task['endtime']) { ?><p class="xg2">當前任務下線時間為 <?php echo $task['endtime'];?>，過期後您將不能申請此任務</p><?php } ?>
<div>
<table cellpadding="0" cellspacing="0" class="tfm">
<tr>
<td width="80"><img src="<?php echo $task['icon'];?>" alt="Icon" width="64" height="64" /></td>
<td class="bbda">
<h1 class="xs2 ptm pbm"><?php echo $task['name'];?></h1>
<?php if($task['period']) { ?>
<div class="xg1">
<?php if($task['periodtype'] == 0) { ?>
( 每隔 <?php echo $task['period'];?> 小時允許申請一次 )
<?php } elseif($task['periodtype'] == 1) { ?>
( 每 <?php echo $task['period'];?> 天允許申請一次 )
<?php } elseif($task['periodtype'] == 2) { $periodweek = $_G['lang']['core']['weeks'][$task[period]];?>( 每週 <?php echo $periodweek;?> 允許申請一次 )
<?php } elseif($task['periodtype'] == 3) { ?>
( 每月 <?php echo $task['period'];?> 日允許申請一次 )
<?php } ?>
</div>
<?php } ?>
<div><?php echo $task['description'];?></div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<table cellpadding="0" cellspacing="0" class="tfm">
<tr>
<th class="bbda">獎勵</th>
<td class="bbda xi1">
<?php if($task['reward'] == 'credit') { ?>
積分 <?php echo $_G['setting']['extcredits'][$task['prize']]['title'];?> <?php echo $task['bonus'];?> <?php echo $_G['setting']['extcredits'][$task['prize']]['unit'];?>
<?php } elseif($task['reward'] == 'magic') { ?>
道具 <?php echo $task['rewardtext'];?> <?php echo $task['bonus'];?> 張
<?php } elseif($task['reward'] == 'medal') { ?>
勳章 <?php echo $task['rewardtext'];?> <?php if($task['bonus']) { ?>有效期 <?php echo $task['bonus'];?> 天 <?php } } elseif($task['reward'] == 'invite') { ?>
邀請碼 <?php echo $task['prize'];?> 有效期 <?php echo $task['bonus'];?> 天
<?php } elseif($task['reward'] == 'group') { ?>
用戶組 <?php echo $task['rewardtext'];?> <?php if($task['bonus']) { ?> <?php echo $task['bonus'];?> 天 <?php } } else { ?>
無
<?php } ?>
</td>
</tr>
<?php if($task['viewmessage']) { ?>
<tr>
<th class="bbda">&nbsp;</th>
<td class="bbda"><?php echo $task['viewmessage'];?></td>
</tr>
<?php } else { ?>
<tr>
<th class="bbda">完成此任務所需條件</th>
<td class="bbda">
<?php if($taskvars['complete']) { ?>
<ul><?php if(is_array($taskvars['complete'])) foreach($taskvars['complete'] as $taskvar) { ?><li><?php echo $taskvar['name'];?> : <?php echo $taskvar['value'];?></li>
<?php } ?>
</ul>
<?php } else { ?>
<p>不限</p>
<?php } ?>
</td>
<?php } ?>
<tr>
<th class="bbda">申請此任務所需條件</th>
<td class="bbda">
<?php if($task['applyperm'] || $task['relatedtaskid'] || $task['tasklimits'] || $taskvars['apply']) { ?>
<ul>
<li><?php if($task['grouprequired']) { ?>用戶組: <?php echo $task['grouprequired'];?> <?php } elseif($task['applyperm'] == 'member') { ?>普通會員<?php } elseif($task['applyperm'] == 'admin') { ?>管理人員<?php } ?></li>
<?php if($task['relatedtaskid']) { ?><li>必須完成指定任務: <a href="home.php?mod=task&amp;do=view&amp;id=<?php echo $task['relatedtaskid'];?>"><?php echo $_G['taskrequired'];?></a></li><?php } if($task['tasklimits']) { ?><li>人次上限: <?php echo $task['tasklimits'];?></li><?php } if($taskvars['apply']) { if(is_array($taskvars['apply'])) foreach($taskvars['apply'] as $taskvar) { ?><li><?php echo $taskvar['name'];?>: <?php echo $taskvar['value'];?></li>
<?php } } ?>
</ul>
<?php } else { ?>
<p>不限</p>
<?php } ?>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<?php if($allowapply == '-1') { ?>
<div class="pbg mtm mbm">
<div class="pbr" style="width: <?php if($task['csc']) { ?><?php echo $task['csc'];?>%<?php } else { ?>8px<?php } ?>;"></div>
<div class="xs0">已完成 <span id="csc_<?php echo $task['taskid'];?>"><?php echo $task['csc'];?></span>%</div>
</div>
<p class="mbw">
<a href="home.php?mod=task&amp;do=draw&amp;id=<?php echo $task['taskid'];?>"><img src="<?php echo STATICURL;?>image/task/<?php if($task['csc'] >=100) { ?>reward.gif<?php } else { ?>rewardless.gif<?php } ?>" /></a>
<?php if($task['csc'] < 100) { ?><a href="home.php?mod=task&amp;do=delete&amp;id=<?php echo $task['taskid'];?>"><img src="<?php echo STATICURL;?>image/task/cancel.gif" alt="放棄任務" /></a><?php } ?>
</p>
<?php } elseif($allowapply == '-2') { ?>
<p class="xg2 mbn">您所在的用戶組無法申請此任務</p>
<a href="javascript:;" onclick="doane(event);showDialog('您所在的用戶組無法申請此任務')"><img src="<?php echo STATICURL;?>image/task/disallow.gif" title="您所在的用戶組無法申請此任務" alt="您所在的用戶組無法申請此任務" /></a>
<?php } elseif($allowapply == '-3') { ?>
<p class="xg2 mbn">人數已滿</p>
<a href="javascript:;" onclick="doane(event);showDialog('人數已滿')"><img src="<?php echo STATICURL;?>image/task/disallow.gif" title="人數已滿" alt="人數已滿" /></a>
<?php } elseif($allowapply == '-4') { ?>
<p class="xg2 mbn">失敗於<?php echo $task['dateline'];?></p>
<?php } elseif($allowapply == '-5') { ?>
<p class="xg2 mbn">完成於<?php echo $task['dateline'];?></p>
<?php } elseif($allowapply == '-6') { ?>
<p class="xg2 mbn">完成於<?php echo $task['dateline'];?> &nbsp; <?php echo $task['t'];?> 後可以再次申請</p>
<a href="javascript:;" onclick="doane(event);showDialog('<?php echo $task['t'];?> 後可以再次申請')"><img src="<?php echo STATICURL;?>image/task/disallow.gif" title="<?php echo $task['t'];?> 後可以再次申請" alt="人數已滿" /></a>
<?php } elseif($allowapply == '-7') { ?>
<p class="xg2 mbn">失敗於<?php echo $task['dateline'];?> &nbsp; <?php echo $task['t'];?>後可以重新申請</p>
<a href="javascript:;" onclick="doane(event);showDialog('<?php echo $task['t'];?>後可以重新申請')"><img src="<?php echo STATICURL;?>image/task/disallow.gif" title="<?php echo $task['t'];?>後可以重新申請" alt="人數已滿" /></a>
<?php } elseif($allowapply == '2') { ?>
<p class="xg2 mbn">完成於<?php echo $task['dateline'];?> &nbsp; 現在可以再次申請</p>
<?php } elseif($allowapply == '3') { ?>
<p class="xg2 mbn">失敗於<?php echo $task['dateline'];?> &nbsp; 現在可以重新申請</p>
<?php } if($allowapply > '0') { ?>
<a href="home.php?mod=task&amp;do=apply&amp;id=<?php echo $task['taskid'];?>"><img src="<?php echo STATICURL;?>image/task/apply.gif" alt="立即申請" /></a>
<?php } ?>
</td>
</tr>
<?php if($task['applicants']) { ?>
<tr>
<td>&nbsp;</td>
<td>
<a name="parter"></a>
<div class="mtm">
<h2 class="mbm">已有 <?php echo $task['applicants'];?> 位會員參與此任務</h2>
<div id="ajaxparter"></div>
</div>
<script type="text/javascript">ajaxget('home.php?mod=task&do=parter&id=<?php echo $task['taskid'];?>', 'ajaxparter');</script>
</td>
</tr>
<?php } ?>
</table>
</div><?php } ?>
</div>
</div>
<div class="appl">
<div class="tbn">
<h2 class="mt bbda">任務</h2>
<ul>
<li<?php echo $actives['new'];?>><a href="home.php?mod=task&amp;item=new">新任務</a></li>
<li<?php echo $actives['doing'];?>><a href="home.php?mod=task&amp;item=doing">進行中的任務</a></li>
<li<?php echo $actives['done'];?>><a href="home.php?mod=task&amp;item=done">已完成的任務</a></li>
<li<?php echo $actives['failed'];?>><a href="home.php?mod=task&amp;item=failed">失敗的任務</a></li>
</ul>
</div>
</div>
</div><?php include template('common/footer'); ?>