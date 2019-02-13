<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('topicadmin_action');?><?php include template('common/header'); if(empty($_GET['infloat'])) { ?>
<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="首頁"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $navigation;?></div>
</div>
<div id="ct" class="wp cl">
<div class="mn">
<div class="bm bw0">
<?php } ?>

<div class="tm_c" id="floatlayout_topicadmin">
<h3 class="flb">
<em id="return_mods"><?php if(in_array($_GET['action'], array('delpost', 'banpost', 'warn', 'stickreply'))) { ?>選擇了 <?php echo $modpostsnum;?> 篇帖子<?php } elseif($_GET['action'] == 'delcomment') { ?>選擇了 1 個點評<?php } else { ?>選擇了 1 篇主題<?php } ?></em>
<span>
<a href="javascript:;" class="flbc" onclick="<?php if($_GET['action'] == 'stamp') { ?>if ($('threadstamp')) $('threadstamp').innerHTML = oldthreadstamp;<?php } ?>hideWindow('mods')" title="關閉">關閉</a>
</span>
</h3>
<form id="topicadminform" method="post" autocomplete="off" action="forum.php?mod=topicadmin&amp;action=<?php echo $_GET['action'];?>&amp;modsubmit=yes&amp;infloat=yes&amp;modclick=yes" onsubmit="ajaxpost('topicadminform', 'return_mods', 'return_mods', 'onerror');return false;">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="fid" value="<?php echo $_G['fid'];?>">
<input type="hidden" name="tid" value="<?php echo $_G['tid'];?>">
<?php if(!empty($_GET['page'])) { ?><input type="hidden" name="page" value="<?php echo $_GET['page'];?>" /><?php } if(!empty($_GET['infloat'])) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<div class="c">
<div class="<?php if($_GET['action'] != 'split') { ?>tplw<?php } else { ?>tpmh<?php } ?>">
<?php if($_GET['action'] == 'delpost') { ?>
<?php echo $deleteid;?>
刪除選定帖子

<?php if(($modpostsnum == 1 || $authorcount == 1) && $crimenum > 0) { ?>
<br /><div style="clear: both; text-align: right;">用戶 <?php echo $crimeauthor;?> 帖子已被違規刪除 <?php echo $crimenum;?> 次</div>
<?php } } elseif($_GET['action'] == 'delcomment') { ?>
<?php echo $deleteid;?>
刪除選定點評
<?php } elseif($_GET['action'] == 'restore') { ?>
<input type="hidden" name="archiveid" value="<?php echo $archiveid;?>" />
您確認要將此主題移除存檔區嗎？
<?php } elseif($_GET['action'] == 'copy') { ?>
<p class="mbn tahfx">
目標版塊: <select name="copyto" id="copyto" class="ps vm" onchange="ajaxget('forum.php?mod=ajax&action=getthreadtypes&fid=' + this.value, 'threadtypes')">
<?php echo $forumselect;?>
</select>
</p>
<p class="mbn tahfx">
目標分類: <span id="threadtypes"><select name="threadtypeid" class="ps vm"><option value="0" /></option></select></span>
</p>
<?php } elseif($_GET['action'] == 'banpost') { ?>
<?php echo $banid;?>
<ul class="llst">
<li><label><input type="radio" name="banned" class="pr" value="1" <?php echo $checkban;?> />屏蔽</label></li>
<li><label><input type="radio" name="banned" class="pr" value="0" <?php echo $checkunban;?> />解除</label></li>
</ul>
<?php if(($modpostsnum == 1 || $authorcount == 1) && $crimenum > 0) { ?>
<br /><div style="clear: both; text-align: right;">用戶 <?php echo $crimeauthor;?> 帖子已被屏蔽 <?php echo $crimenum;?> 次</div>
<?php } } elseif($_GET['action'] == 'warn') { ?>
<?php echo $warnpid;?>
<ul class="llst">
<li><label><input type="radio" name="warned" class="pr" value="1" <?php echo $checkwarn;?> />警告</label></li>
<li><label><input type="radio" name="warned" class="pr" value="0" <?php echo $checkunwarn;?> />解除</label></li>
</ul>
<?php if(($modpostsnum == 1 || $authorcount == 1) && $authorwarnings > 0) { ?>
<br /><div style="clear: both; text-align: right;" title="<?php echo $_G['setting']['warningexpiration'];?> 天內累計被警告 <?php echo $_G['setting']['warninglimit'];?> 次，將被自動禁止發帖 <?php echo $_G['setting']['warningexpiration'];?> 天">用戶 <?php echo $warningauthor;?> 已被警告 <?php echo $authorwarnings;?> 次</div>
<?php } } elseif($_GET['action'] == 'merge') { ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td><label for="othertid">合併 &larr;</label></td>
<td>填寫要合併的主題 ID (tid)</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="text" name="othertid" id="othertid" class="px" size="10" /></td>
</tr>
</table>
<?php } elseif($_GET['action'] == 'refund') { ?>
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
<th>已購買人數</th>
<td><?php echo $payment['payers'];?></td>
</tr>
<tr>
<th>作者所得</th>
<td><?php echo $payment['netincome'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?></td>
</tr>
</table>
<?php } elseif($_GET['action'] == 'split') { ?>
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
<td><label for="subject">新標題</label></td>
</tr>
<tr>
<td><input type="text" name="subject" id="subject" class="px" size="20" /></td>
</tr>
<tr>
<td><label for="split">分割 &rarr;填寫樓號 (用 "," 間隔)</label></td>
</tr>
<tr>
<td><textarea name="split" id="split" class="pt" style="width: 212px; height:120px" /></textarea></td>
</tr>
</table>
<?php } elseif($_GET['action'] == 'live') { ?>
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
<td>
<ul class="llst">
<li><label><input type="radio" name="live" class="pr" value="1" <?php if($_G['forum']['livetid'] != $_G['tid']) { ?>checked<?php } ?>/>直播</label></li>
<li><label><input type="radio" name="live" class="pr" value="0" <?php if($_G['forum']['livetid'] == $_G['tid']) { ?>checked<?php } ?>/>取消直播</label></li>
</ul>
</td>
</tr>
<tr>
<td><br>同一版塊內只能設置一個直播帖<br>設置直播後會覆蓋原有直播帖<br>建議超過5條回復後設置</td>
</tr>
</table>
<?php } elseif($_GET['action'] == 'stamp') { ?>
<p>選擇主題圖章:</p>
<p class="tah_body">
<select name="stamp" id="stamp" class="ps" onchange="updatestampimg()">
<option value="">無圖章</option><?php if(is_array($_G['cache']['stamps'])) foreach($_G['cache']['stamps'] as $stampid => $stamp) { if($stamp['type'] == 'stamp') { ?>
<option value="<?php echo $stampid;?>"<?php if($thread['stamp'] == $stampid) { ?> selected="selected"<?php } ?>><?php echo $stamp['text'];?></option>
<?php } } ?>
</select>
</p>
<script type="text/javascript" reload="1">
if($('threadstamp')) {
var oldthreadstamp = $('threadstamp').innerHTML;
}
var stampurls = new Array();<?php if(is_array($_G['cache']['stamps'])) foreach($_G['cache']['stamps'] as $stampid => $stamp) { ?>stampurls[<?php echo $stampid;?>] = '<?php echo $stamp['url'];?>';
<?php } ?>
function updatestampimg() {
if($('threadstamp')) {
$('threadstamp').innerHTML = $('stamp').value ? '<img src="<?php echo STATICURL;?>image/stamp/' + stampurls[$('stamp').value] + '">' : '<img src="<?php echo STATICURL;?>image/common/none.gif">';
}
}
</script>
<?php } elseif($_GET['action'] == 'stamplist') { ?>
<p>選擇主題圖標:</p>
<p class="tah_body mbm">
<select name="stamplist" id="stamplist" class="ps" onchange="updatestamplistimg()">
<?php if($thread['icon'] >= 0) { ?><option value="<?php echo $thread['icon'];?>">當前圖標</option><?php } ?>
<option value="">無圖標</option><?php if(is_array($_G['cache']['stamps'])) foreach($_G['cache']['stamps'] as $stampid => $stamp) { if($stamp['type'] == 'stamplist' && $stamp['icon']) { ?>
<option value="<?php echo $stampid;?>"<?php if($thread['icon'] == $stampid) { ?> selected="selected"<?php } ?>><?php echo $stamp['text'];?></option>
<?php } } ?>
</select>
</p>
<p class="tah_body" id="stamplistprev"></p>
<script type="text/javascript" reload="1">
var stampurls = new Array();<?php if(is_array($_G['cache']['stamps'])) foreach($_G['cache']['stamps'] as $stampid => $stamp) { ?>stampurls[<?php echo $stampid;?>] = '<?php echo $stamp['url'];?>';
<?php } ?>
function updatestamplistimg(icon) {
icon = !icon ? $('stamplist').value : icon;

if($('stamplistprev')) {
$('stamplistprev').innerHTML = icon && icon >= 0 ? '<img src="<?php echo STATICURL;?>image/stamp/' + stampurls[icon] + '">' : '<img src="<?php echo STATICURL;?>image/common/none.gif">';
}
}
<?php if($thread['icon']) { ?>
updatestamplistimg(<?php echo $thread['icon'];?>);
<?php } ?>
</script>
<?php } elseif($_GET['action'] == 'stickreply') { ?>
<?php echo $stickpid;?>
<ul class="llst">
<li><label><input type="radio" name="stickreply" class="pr" value="1"<?php if(empty($_GET['undo'])) { ?> checked="checked"<?php } ?>/>置頂到主題帖 </label></li>
<li><label><input type="radio" name="stickreply" class="pr" value="0"<?php if(!empty($_GET['undo'])) { ?> checked="checked"<?php } ?>/>解除置頂 </label></li>
</ul>
<?php } ?>
</div>
<div class="tpclg">
<h4>
<a onclick="showselect(this, 'reason', 'reasonselect')" class="dpbtn y" href="javascript:;">^</a>
操作說明:
</h4>
<p><textarea name="reason" id="reason" class="pt" onkeyup="seditor_ctlent(event, '$(\'modsubmit\').click()')"></textarea></p>
<ul id="reasonselect" style="display: none"><?php echo modreasonselect(); ?></ul>
</div>
</div>
<div class="o pns">
<?php if($_GET['action'] == 'delpost') { ?>
<label for="crimerecord"><input type="checkbox" name="crimerecord" id="crimerecord" class="pc" />違規登記</label>
<?php } ?>
<label for="sendreasonpm"><input type="checkbox" name="sendreasonpm" id="sendreasonpm" class="pc"<?php if($_G['group']['reasonpm'] == 2 || $_G['group']['reasonpm'] == 3) { ?> checked="checked" disabled="disabled"<?php } ?> />通知作者</label>
<button type="submit" name="modsubmit" id="modsubmit" value="ture" class="pn pnc"><span>確定</span></button>
</div>
</form>
</div>
<script type="text/javascript" reload="1">
function succeedhandle_mods(locationhref) {
<?php if($_GET['action'] == 'delcomment') { ?>
ajaxget('forum.php?mod=misc&action=commentmore&tid=<?php echo $_G['tid'];?>&pid=<?php echo $pid;?>', 'comment_<?php echo $pid;?>');
hideWindow('mods');
<?php } elseif($_GET['action'] == 'banpost' || $_GET['action'] == 'warn') { if(is_array($topiclist)) foreach($topiclist as $pid) { ?>ajaxget('forum.php?mod=viewthread&tid=<?php echo $_G['tid'];?>&viewpid=<?php echo $pid;?>&modclick=yes', 'post_<?php echo $pid;?>', 'post_<?php echo $pid;?>');
if($('topiclist_<?php echo $pid;?>')) {
$('modactions').removeChild($('topiclist_<?php echo $pid;?>'));
}
<?php } ?>
hideWindow('mods');
resetmodcount();
<?php } else { ?>
hideWindow('mods');
location.href = locationhref;
<?php } ?>
}
</script>

<?php if(empty($_GET['infloat'])) { ?>
</div>
</div>
</div>
<?php } include template('common/footer'); ?>