<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('misc_stat');
0
|| checktplrefresh('./template/default/home/misc_stat.htm', './template/default/common/stat.htm', 1511241385, '6', './data/template/6_6_home_misc_stat.tpl.php', './template/rabbit_occ', 'home/misc_stat')
;?>
<?php $_G['home_tpl_titles'] = array('趨勢統計');?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首頁"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em>
<a href="misc.php?mod=stat">站點統計</a><em>&rsaquo;</em>
趨勢統計
</div>
</div>

<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt">趨勢統計</h1>
<form method="get" action="misc.php?mod=stat&amp;op=trend">
<table cellspacing="0" cellpadding="0" class="dt bm mbw">
<caption>
<h2>統計分類</h2>
<p class="pbm xg1">站點趨勢統計系統，會記錄站點每日的發展概況。通過每日的趨勢變化，為站長運營站點提供科學的數據基礎 </p>
</caption>
<tr class="tbmu">
<th>基礎數據:</th>
<td>
<a href="misc.php?mod=stat&amp;op=trend"<?php echo $actives['all'];?>>綜合概況</a> &nbsp;<?php if(is_array($cols['login'])) foreach($cols['login'] as $value) { ?><label<?php echo $actives[$value];?>><input type="checkbox" name="types[]" value="<?php echo $value;?>" class="pc" <?php if(in_array($value, $_GET['types'])) { ?> checked="checked"<?php } ?> /><?php echo lang('spacecp', "do_stat_$value");?></label> &nbsp;
<?php } ?>
</td>
</tr>
<tr class="tbmu">
<th><?php echo $_G['setting']['navs']['2']['navname'];?>:</th>
<td><?php if(is_array($cols['forum'])) foreach($cols['forum'] as $value) { ?><label<?php echo $actives[$value];?>><input type="checkbox" name="types[]" value="<?php echo $value;?>" class="pc" <?php if(in_array($value, $_GET['types'])) { ?> checked="checked"<?php } ?> /><?php echo lang('spacecp', "do_stat_$value");?></label> &nbsp;
<?php } ?>
</td>
</tr>
<tr class="tbmu">
<th>群組:</th>
<td><?php if(is_array($cols['tgroup'])) foreach($cols['tgroup'] as $value) { ?><label <?php echo $actives[$value];?>><input type="checkbox" name="types[]" value="<?php echo $value;?>" class="pc" <?php if(in_array($value, $_GET['types'])) { ?> checked="checked"<?php } ?> /><?php echo lang('spacecp', "do_stat_$value");?></label> &nbsp;
<?php } ?>
</td>
</tr>
<tr class="tbmu">
<th>家園:</th>
<td><?php if(is_array($cols['home'])) foreach($cols['home'] as $value) { ?><label<?php echo $actives[$value];?>><input type="checkbox" name="types[]" value="<?php echo $value;?>" class="pc" <?php if(in_array($value, $_GET['types'])) { ?> checked="checked"<?php } ?> /><?php echo lang('spacecp', "do_stat_$value");?></label> &nbsp;
<?php } ?>
</td>
</tr>

<!--tr class="tbmu">
<th>信息互動:</th>
<td><?php if(is_array($cols['comment'])) foreach($cols['comment'] as $value) { ?><label<?php echo $actives[$value];?>><input type="checkbox" name="types[]" value="<?php echo $value;?>" class="pc" <?php if(in_array($value, $_GET['types'])) { ?> checked="checked"<?php } ?> /><?php echo lang('spacecp', "do_stat_$value");?></label> &nbsp;
<?php } ?>
</td>
</tr-->
<tr class="tbmu">
<th>互動:</th>
<td><?php if(is_array($cols['space'])) foreach($cols['space'] as $value) { ?><label<?php echo $actives[$value];?>><input type="checkbox" name="types[]" value="<?php echo $value;?>" class="pc" <?php if(in_array($value, $_GET['types'])) { ?> checked="checked"<?php } ?> /><?php echo lang('spacecp', "do_stat_$value");?></label> &nbsp;
<?php } ?>
</td>
</tr>
<tr class="tbmu">
<th>統計日期:</th>
<td>
<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<input type="text" name="primarybegin" class="px" value="<?php echo $primarybegin;?>" onclick="showcalendar(event, this, false)"/> - <input type="text" name="primaryend" class="px" value="<?php echo $primaryend;?>" onclick="showcalendar(event, this, false)" />
<label><input type="checkbox" name="merge" value="1" class="pc" <?php if(!empty($merge)) { ?> checked="checked"<?php } ?> />合併統計</label>
<button type="submit" class="pn pnc"><strong>查看</strong></button>
</td>
</tr>
</table>
<input type="hidden" name="type" value="<?php echo $_GET['type'];?>" />
<input type="hidden" name="mod" value="stat" />
<input type="hidden" name="op" value="trend" />
</form>
<table cellspacing="0" cellpadding="0" width="100%">
<?php if($type=='all') { ?>
<caption>
<h2>綜合概況</h2>
<p class="xg1">這裡看到的是站點的綜合概況發展統計(需要至少統計 2 天後才有效)</p>
</caption>
<tr>
<td>
<ul class="ptn pbm xl">
<li>來訪用戶：指的是每天訪問本站的唯一用戶數。一個用戶訪問多次，也只算一次</li>
  									<li><?php echo $_G['setting']['navs']['2']['navname'];?>：指的是每天發佈主題、投票、活動、懸賞、辯論、商品和主題回帖的總數量 </li>
									<li>群組：指的是每天創建<?php echo $_G['setting']['navs']['3']['navname'];?>、<?php echo $_G['setting']['navs']['3']['navname'];?>主題、<?php echo $_G['setting']['navs']['3']['navname'];?>回帖的總數量 </li>
									<li>家園：指的是每天發佈記錄、日誌、圖片、話題、投票、活動、分享和互相評論的總數量 </li>
									<li>互動：指的是每天用戶之間互相留言、打招呼和的<?php echo $_G['setting']['navs']['4']['navname'];?>相應的表態互動總數量 </li>
</ul>
</td>
</tr>
<?php } else { ?>
<caption>
<h2><?php if(is_array($_GET['types'])) foreach($_GET['types'] as $key => $type) { ?>&nbsp;<?php echo lang('spacecp', "do_stat_$type");?>&nbsp;
<?php } ?>
</h2>
</caption>
<?php } ?>
<tr><td>
<script type="text/javascript">
document.write(AC_FL_RunContent(
'width', '100%', 'height', '300',
'src', '<?php echo STATICURL;?>image/common/stat.swf?<?php echo $statuspara;?>',
'quality', 'high', 'wmode', 'transparent'
));
</script>
</td></tr>
</table>

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