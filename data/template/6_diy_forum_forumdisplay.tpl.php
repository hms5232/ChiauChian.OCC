<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forumdisplay');
0
|| checktplrefresh('./template/rabbit_occ/forum/forumdisplay.htm', './template/default/forum/forumdisplay_leftside.htm', 1511239586, 'diy', './data/template/6_diy_forum_forumdisplay.tpl.php', './template/rabbit_occ', 'forum/forumdisplay')
|| checktplrefresh('./template/rabbit_occ/forum/forumdisplay.htm', './template/default/forum/recommend.htm', 1511239586, 'diy', './data/template/6_diy_forum_forumdisplay.tpl.php', './template/rabbit_occ', 'forum/forumdisplay')
|| checktplrefresh('./template/rabbit_occ/forum/forumdisplay.htm', './template/default/common/seccheck.htm', 1511239586, 'diy', './data/template/6_diy_forum_forumdisplay.tpl.php', './template/rabbit_occ', 'forum/forumdisplay')
|| checktplrefresh('./template/rabbit_occ/forum/forumdisplay.htm', './template/rabbit_occ/forum/forumdisplay_list.htm', 1511239586, 'diy', './data/template/6_diy_forum_forumdisplay.tpl.php', './template/rabbit_occ', 'forum/forumdisplay')
|| checktplrefresh('./template/rabbit_occ/forum/forumdisplay.htm', './template/default/forum/forumdisplay_sort.htm', 1511239586, 'diy', './data/template/6_diy_forum_forumdisplay.tpl.php', './template/rabbit_occ', 'forum/forumdisplay')
|| checktplrefresh('./template/rabbit_occ/forum/forumdisplay.htm', './template/default/forum/search_sortoption.htm', 1511239586, 'diy', './data/template/6_diy_forum_forumdisplay.tpl.php', './template/rabbit_occ', 'forum/forumdisplay')
|| checktplrefresh('./template/rabbit_occ/forum/forumdisplay.htm', './template/default/forum/search_sortoption.htm', 1511239586, 'diy', './data/template/6_diy_forum_forumdisplay.tpl.php', './template/rabbit_occ', 'forum/forumdisplay')
;
block_get('84');?><?php include template('common/header'); if($_G['forum']['ismoderator']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_moderate.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>
<style id="diy_style" type="text/css"></style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->
<div id="pt" class="bm cl rabbit_bk">
<?php if($_G['page'] == 1 && $_G['forum']['rules']) { } if(!$_G['uid']) { } else { ?>
<span class="rabbit_bk_newy">


<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_forumaction'])) echo $_G['setting']['pluginhooks']['forumdisplay_forumaction'];?>
<?php if($_G['forum']['ismoderator']) { if($_G['forum']['recyclebin']) { } if($_G['forum']['ismoderator'] && !$_GET['archiveid']) { if($_G['forum']['status'] != 3) { } else { } ?>
</strong>
<?php if(!empty($forumarchive)) { ?>
<span class="pipe">|</span><a id="forumarchive" href="javascript:;" class="fa_achv" onmouseover="showMenu(this.id)"><?php if($_GET['archiveid']) { ?><?php echo $forumarchive[$_GET['archiveid']]['displayname'];?><?php } else { ?>存檔<?php } ?></a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_modlink'])) echo $_G['setting']['pluginhooks']['forumdisplay_modlink'];?>
<?php } ?>
</span>
<?php } ?>
<div class="z">
<a href="./" class="nvhm" title="首頁"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?>
</div>
</div><?php echo adshow("text/wp a_t");?><div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div class="rabbit_bgwhite" style="background: #FFF;
    padding-right: 10px;
    padding-left: 10px;
    float: left;
    margin-left: -150px;
    padding-top: 10px;
    margin-right: 165px;"><?php block_display('84');?><?php if(!$_G['uid']) { ?>
<div class="rabbit_bk_box">
<div class="rabbit_bk_box_name">&#x60A8;&#x597D;,&#x904A;&#x5BA2;</div>
<br><div class="rabbit_bk_box_avtar"><a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login')"><?php echo avatar(0,middle);?></a></div>
<div class="rabbit_bk_box_left">&#x5FEB;&#x6377;&#x5C0E;&#x822A;</div>
<div class="rabbit_bk_box_quckly">
          <a href="/forum.php?mod=guide&amp;view=my" target="_blank" class="link" title="&#x6211;&#x7684;&#x6587;&#x7AE0;">
            <b class="rabbit_bk_box_icon icon1"></b>
          </a>
          <a href="/home.php?mod=magic" target="_blank" class="link" title="&#x6211;&#x7684;&#x9053;&#x5177;">
            <b class="rabbit_bk_box_icon icon2"></b>
          </a>
          <a href="/home.php?mod=task" target="_blank" class="link" title="&#x6211;&#x7684;&#x4EFB;&#x52D9;">
            <b class="rabbit_bk_box_icon icon3"></b>
          </a>
          <a href="/home.php?mod=space&amp;do=favorite&amp;view=me" target="_blank" class="link" title="&#x5168;&#x90E8;&#x6536;&#x85CF;">
            <b class="rabbit_bk_box_icon icon4"></b>
          </a>
        </div>
</div>
<?php } else { ?>
<div class="rabbit_bk_box">
<div class="rabbit_bk_box_name">&#x60A8;&#x597D;, <?php echo $_G['username'];?></div>
<br><div class="rabbit_bk_box_avtar"><a href="home.php?mod=spacecp&amp;ac=avatar"><?php echo avatar($_G[uid],middle);?></a></div>
<div class="rabbit_bk_box_left">&#x5FEB;&#x6377;&#x5C0E;&#x822A;</div>
<div class="rabbit_bk_box_quckly">
          <a href="/forum.php?mod=guide&amp;view=my" target="_blank" class="link" title="&#x6211;&#x7684;&#x6587;&#x7AE0;">
            <b class="rabbit_bk_box_icon icon1"></b>
          </a>
          <a href="/home.php?mod=magic" target="_blank" class="link" title="&#x6211;&#x7684;&#x9053;&#x5177;">
            <b class="rabbit_bk_box_icon icon2"></b>
          </a>
          <a href="/home.php?mod=task" target="_blank" class="link" title="&#x6211;&#x7684;&#x4EFB;&#x52D9;">
            <b class="rabbit_bk_box_icon icon3"></b>
          </a>
          <a href="/home.php?mod=space&amp;do=favorite&amp;view=me" target="_blank" class="link" title="&#x5168;&#x90E8;&#x6536;&#x85CF;">
            <b class="rabbit_bk_box_icon icon4"></b>
          </a>
        </div>
</div>
<?php } ?>
<div class="boardnav">
<div id="ct" class="wp cl<?php if($_G['forum']['allowside']) { ?> ct2<?php } ?>"<?php if($leftside) { ?> style="margin-left:<?php echo $_G['leftsidewidth_mwidth'];?>px"<?php } ?>>
<?php if($leftside) { ?>
<div id="sd_bdl" class="bdl" onmouseover="showMenu({'ctrlid':this.id, 'pos':'dz'});" style="width:<?php echo $_G['setting']['leftsidewidth'];?>px;margin-left:-<?php echo $_G['leftsidewidth_mwidth'];?>px">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_leftside_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_leftside_top'];?>
<!--[diy=diyleftsidetop]--><div id="diyleftsidetop" class="area"></div><!--[/diy]-->

<div class="tbn" id="forumleftside"><?php if($leftside['favorites']) { ?>
<h2 class="mbn"><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">收藏的版塊</a></h2>
<dl id="lf_fav" class="bdl_fav mbm"><?php if(is_array($leftside['favorites'])) foreach($leftside['favorites'] as $favfid => $fdata) { ?><dd>
<?php if(!empty($_G['cache']['forums'][$favfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])) { ?>
<a href="http://<?php echo $_G['cache']['forums'][$favfid]['domain'];?>.<?php echo $_G['setting']['domain']['root']['forum'];?>" title="<?php echo $fdata['0'];?>"><?php echo $fdata['0'];?></a>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $favfid;?>"><?php echo $fdata['0'];?></a>
<?php } ?>

</dd>
<?php } ?>
</dl>
<?php } else { ?>
<h2 class="bdl_h">版塊導航</h2>
<?php } if(is_array($leftside['forums'])) foreach($leftside['forums'] as $upfid => $gdata) { ?><dl class="<?php if($fgroupid == $upfid || $_G['setting']['leftsideopen']) { ?>a<?php } ?>" id="lf_<?php echo $upfid;?>">
<dt><a href="javascript:;" hidefocus="true" onclick="leftside('lf_<?php echo $upfid;?>')" title="<?php echo $gdata['name'];?>"><?php echo $gdata['name'];?></a></dt><?php if(is_array($gdata['sub'])) foreach($gdata['sub'] as $subfid => $name) { ?><dd<?php if($_G['fid'] == $subfid || $_G['forum']['fup'] == $subfid) { ?> class="bdl_a"<?php } ?>>
<?php if(!empty($_G['cache']['forums'][$subfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])) { ?>
<a href="http://<?php echo $_G['cache']['forums'][$subfid]['domain'];?>.<?php echo $_G['setting']['domain']['root']['forum'];?>" title="<?php echo $name;?>"><?php echo $name;?></a>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $subfid;?>" title="<?php echo $name;?>"><?php echo $name;?></a>
<?php } ?>
</dd>
<?php } ?>
</dl>
<?php } ?></div>

<!--[diy=diyleftsidebottom]--><div id="diyleftsidebottom" class="area"></div><!--[/diy]-->
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_leftside_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_leftside_bottom'];?>
</div>
<?php } ?>

<div class="mn">
<div class="rabbit_bk_post"><?php if(!$_GET['archiveid']) { ?><a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> title="發新帖">&#x767C;&#x5E03;&#x4E3B;&#x984C;</a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_top'];?></div>
<div class="bm bml pbn">
<?php if($_G['forum']['banner'] && !$subforumonly) { ?><img src="<?php echo $_G['forum']['banner'];?>" alt="<?php echo $_G['forum']['name'];?>" /><?php } ?>
<div class="bm_h cl">
<h1 class="xs2 rabbit_bkmc">
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>"><?php echo $_G['forum']['name'];?></a>
</h1>
</div>

<?php if((!empty($_G['forum']['domain']) && !empty($_G['setting']['domain']['root']['forum'])) || $moderatedby || ($_G['page'] == 1 && $_G['forum']['rules'])) { ?>

<div class="bm_c cl pbn">
<?php if(!empty($_G['forum']['domain']) && !empty($_G['setting']['domain']['root']['forum'])) { ?>
<div class="pbn">本版域名: <a href="http://<?php echo $_G['forum']['domain'];?>.<?php echo $_G['setting']['domain']['root']['forum'];?>" id="group_link">http://<?php echo $_G['forum']['domain'];?>.<?php echo $_G['setting']['domain']['root']['forum'];?></a></div>
<?php } if($moderatedby) { ?><div>版主: <span class="xi2"><?php echo $moderatedby;?></span></div><?php } if($_G['page'] == 1 && $_G['forum']['rules']) { ?>
<div id="forum_rules_<?php echo $_G['fid'];?>" style="<?php echo $collapse['forum_rules'];?>;">
<div class="ptn xg2"><?php echo $_G['forum']['rules'];?></div>
</div>
<?php } ?>
</div>
<?php } if(!empty($forumarchive)) { ?>
<div id="forumarchive_menu" class="p_pop" style="display:none">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>">全部主題</a></li><?php if(is_array($forumarchive)) foreach($forumarchive as $id => $info) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;archiveid=<?php echo $id;?>"><?php echo $info['displayname'];?> (<?php echo $info['threads'];?>)</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
</div>

</div>

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_top'];?>

<?php if($subexists && $_G['page'] == 1) { include template('forum/forumdisplay_subforum'); } ?>

<div class="drag">
<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
</div>

<?php if(!empty($_G['forum']['recommendlist'])) { ?>
<div class="bm bmw">
<div class="bm_h cl">
<h2>推薦主題</h2>
</div>
<div class="bm_c cl"><?php if($_G['forum']['recommendlist']['images'] && $_G['forum']['modrecommend']['imagenum']) { ?>
<div class="cl" style="width: <?php echo $_G['forum']['modrecommend']['imagewidth'];?>px; margin: 0 auto; float:left;">
<script type="text/javascript">
var slideSpeed = 5000;
var slideImgsize = [<?php echo $_G['forum']['modrecommend']['imagewidth'];?>,<?php echo $_G['forum']['modrecommend']['imageheight'];?>];
var slideBorderColor = '<?php echo $_G['style']['specialborder'];?>';
var slideBgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideImgs = new Array();
var slideImgLinks = new Array();
var slideImgTexts = new Array();
var slideSwitchColor = '<?php echo $_G['style']['tabletext'];?>';
var slideSwitchbgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideSwitchHiColor = '<?php echo $_G['style']['specialborder'];?>';<?php if(is_array($_G['forum']['recommendlist']['images'])) foreach($_G['forum']['recommendlist']['images'] as $k => $imginfo) { ?>slideImgs[<?php echo $k+1; ?>] = '<?php echo $imginfo['filename'];?>';
slideImgLinks[<?php echo $k+1; ?>] = 'forum.php?mod=viewthread&tid=<?php echo $imginfo['tid'];?>';
slideImgTexts[<?php echo $k+1; ?>] = '<?php echo $imginfo['subject'];?>';
<?php } ?>
</script>
<script src="<?php echo $_G['setting']['jspath'];?>forum_slide.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</div>
<?php } ?>
<div class="cl"<?php if($_G['forum']['recommendlist']['images'] && $_G['forum']['modrecommend']['imagenum']) { ?> style="margin-left: <?php echo $_G['forum']['modrecommend']['imagewidth'];?>px; padding-left: 20px;"<?php } ?>><?php unset($_G['forum']['recommendlist']['images']);?><ul class="xl<?php if(!$_G['forum']['allowside']) { ?> xl2<?php } ?> cl"><?php if(is_array($_G['forum']['recommendlist'])) foreach($_G['forum']['recommendlist'] as $rtid => $recommend) { ?><li>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $rtid;?>" <?php echo $recommend['subjectstyles'];?> target="_blank"><?php echo $recommend['subject'];?></a>
</li>
<?php } ?>
</ul>
</div></div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_middle'])) echo $_G['setting']['pluginhooks']['forumdisplay_middle'];?>

<?php if(!$subforumonly) { if($recommendgroups && !$_G['forum']['allowside']) { ?>
<div class="bm bmw fl<?php if($_G['forum']['forumcolumns']) { ?> flg<?php } ?>">

<div class="bm_c" id="recommendgroups_<?php echo $_G['forum']['fid'];?>" style="<?php echo $collapse['recommendgroups'];?>">
<table cellspacing="0" cellpadding="0" class="fl_tb"><?php if(is_array($recommendgroups)) foreach($recommendgroups as $key => $group) { if($_G['forum']['forumcolumns']) { if($key && ($key % $_G['forum']['forumcolumns'] == 0)) { ?>
</tr>
<?php if($key < $_G['forum']['forumcolumns']) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g">
<div class="fl_icn_g">
<a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>" target="_blank"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" width="32" /></a>
</div>
<dl>
<dt><a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" target="_blank"><?php echo $group['name'];?></a><span class="xg1 xw0"> (<?php echo $group['membernum'];?> 人)</span>
<dd><em>主題: <?php echo $group['threads'];?></em></dd>
<dd>
<?php if(is_array($group['lastpost'])) { if($_G['forum']['forumcolumns'] < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $group['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($group['lastpost']['subject'], 30); ?></a> <cite><?php echo $group['lastpost']['dateline'];?> <?php if($group['lastpost']['author']) { ?><a href="home.php?mod=space&amp;username=<?php echo $group['lastpost']['encode_author'];?>"><?php echo $group['lastpost']['author'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $group['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo $group['lastpost']['dateline'];?></a>
<?php } ?>				<?php } else { ?>
從未
<?php } ?>
</dd>
</dl>
</td>
<?php } else { ?>
<tr <?php if($key != 0) { ?>class="fl_row"<?php } ?>>
<td class="fl_icn">
<a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>" target="_blank"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" width="32" /></a>
</td>
<td>
<h2><a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" target="_blank"><?php echo $group['name'];?></a><span class="xg1 xw0"> (<?php echo $group['membernum'];?> 人)</span></h2>
<p><?php echo cutstr($group['description'], 100); ?></p>
</td>
<td class="fl_i">
<span class="xi2"><?php echo $group['threads'];?> 主題</span>
</td>
<td class="fl_by">
<div>
<?php if(is_array($group['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $group['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($group['lastpost']['subject'], 30); ?></a> <cite><?php echo $group['lastpost']['dateline'];?> <?php if($group['lastpost']['author']) { ?><a href="home.php?mod=space&amp;username=<?php echo $group['lastpost']['encode_author'];?>"><?php echo $group['lastpost']['author'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
從未
<?php } ?>
</div>
</td>
</tr>
<?php } } ?>
</table>
</div>
</div>
<?php } if($threadmodcount) { ?><div class="bm"><div class="ntc_l hm xi2"><strong><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me&amp;type=thread&amp;from=&amp;filter=aduit">您有 <?php echo $threadmodcount;?> 個主題正等待審核中，點擊查看</a></strong></div></div><?php } if($livethread) { ?>
<div id="livethread" class="tl bm bmw cl" style="padding:10px 15px;">
<div class="livethreadtitle vm">
<span class="replynumber xg1">回復 <span id="livereplies" class="xi1"><?php echo $livethread['replies'];?></span></span>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $livethread['tid'];?>" target="_blank"><?php echo $livethread['subject'];?></a> <img src="<?php echo IMGDIR;?>/livethreadtitle.png" />
</div>
<div class="livethreadcon"><?php echo $livemessage;?></div>
<div id="livereplycontentout">
<div id="livereplycontent">
</div>
</div>
<div id="liverefresh">有新的發言了，點擊刷新</div>
<div id="livefastreply">
<form id="livereplypostform" method="post" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $livethread['tid'];?>&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=livereplypost&amp;inajax=1" onsubmit="return livereplypostvalidate(this)">
<div id="livefastcomment">
<textarea id="livereplymessage" name="message" style="color:gray;<?php if(!$liveallowpostreply) { ?>display:none;<?php } ?>">#在這裡快速回復#</textarea>
<?php if(!$liveallowpostreply) { ?>
<div>
<?php if(!$_G['uid']) { ?>
您需要登錄後才可以回帖 <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">登錄</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a>
<?php } else { ?>
您現在無權發帖。<a href="javascript:;" onclick="ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));" class="xi2">點擊查看原因</a>
<?php } ?>
</div>
<?php } ?>
</div>
<div id="livepostsubmit" style="display:none;">
<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm sec" style="text-align:right;"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
<?php } ?>
<p class="ptm pnpost" style="margin-bottom:10px;">
<button type="submit" name="replysubmit" class="pn pnc vm" style="float:right;" value="replysubmit" id="livereplysubmit">
<strong>發表</strong>
</button>
</p>
</div>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="subject" value="  ">
</form>
</div>
<span id="livereplypostreturn"></span>
</div>
<script type="text/javascript">
var postminchars = parseInt('<?php echo $_G['setting']['minpostsize'];?>');
var postmaxchars = parseInt('<?php echo $_G['setting']['maxpostsize'];?>');
var disablepostctrl = parseInt('<?php echo $_G['group']['disablepostctrl'];?>');
var replycontentlist = new Array();
var addreplylist = new Array();
var timeoutid = timeid = movescrollid = waitescrollid = null;
var replycontentnum = 0;
getnewlivepostlist(1);
timeid = setInterval(getnewlivepostlist, 5000);
$('livereplycontent').style.position = 'absolute';
$('livereplycontent').style.width = ($('livereplycontentout').clientWidth - 50) + 'px';
$('livereplymessage').onfocus = function() {
if(this.style.color == 'gray') {
this.value = '';
this.style.color = 'black';
$('livepostsubmit').style.display = 'block';
this.style.height = '56px';
$('livefastcomment').style.height = '57px';
}
};
$('livereplymessage').onblur = function() {
if(this.value == '') {
this.style.color = 'gray';
this.value = '#在這裡快速回復#';
}
};

$('liverefresh').onclick = function() {
$('livereplycontent').style.position = 'absolute';
getnewlivepostlist();
this.style.display = 'none';
};

$('livereplycontentout').onmouseover = function(e) {

if($('livereplycontent').style.position == 'absolute' && $('livereplycontent').clientHeight > 215) {
$('livereplycontent').style.position = 'static';
this.scrollTop = this.scrollHeight;
}

if(this.scrollTop + this.clientHeight != this.scrollHeight) {
clearInterval(timeid);
clearTimeout(timeoutid);
clearInterval(movescrollid);
timeid = timeoutid = movescrollid = null;

if(waitescrollid == null) {
waitescrollid = setTimeout(function() {
$('liverefresh').style.display = 'block';
}, 60000 * 10);
}
} else {
clearTimeout(waitescrollid);
waitescrollid = null;
}
};

$('livereplycontentout').onmouseout = function(e) {
if(this.scrollTop + this.clientHeight == this.scrollHeight) {
$('livereplycontent').style.position = 'absolute';
clearInterval(timeid);
timeid = setInterval(getnewlivepostlist, 10000);
}
};

function getnewlivepostlist(first) {
var x = new Ajax('JSON');
x.getJSON('forum.php?mod=misc&action=livelastpost&fid=<?php echo $livethread['fid'];?>', function(s, x) {
var count = s.data.count;
$('livereplies').innerHTML = count;
var newpostlist = s.data.list;
for(i in newpostlist) {
var postid = i;
var postcontent = '';
postcontent += newpostlist[i].authorid ? '<dt><a href="home.php?mod=space&amp;uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].avatar + '</a></dt>' : '<dt></dt>';
postcontent += newpostlist[i].authorid ? '<dd><a href="home.php?mod=space&amp;uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].author + '</a></dd>' : '<dd>' + newpostlist[i].author + '</dd>';
postcontent += '<dd>' + htmlspecialchars(newpostlist[i].message) + '</dd>';
postcontent += '<dd class="dateline">' + newpostlist[i].dateline + '</dd>';
if(replycontentlist[postid]) {
$('livereply_' + postid).innerHTML = postcontent;
continue;
}
addreplylist[postid] = '<dl id="livereply_' + postid + '">' + postcontent + '</dl>';
}
if(first) {
for(i in addreplylist) {
replycontentlist[i] = addreplylist[i];
replycontentnum++;
var div = document.createElement('div');
div.innerHTML = addreplylist[i];
$('livereplycontent').appendChild(div);
delete addreplylist[i];
}
} else {
livecontentfacemove();
}
});
}

function livecontentfacemove() {
//note �Ӷ�����ȡ������
var reply = '';
for(i in addreplylist) {
reply = replycontentlist[i] = addreplylist[i];
replycontentnum++;
delete addreplylist[i];
break;
}
if(reply) {
var div = document.createElement('div');
div.innerHTML = reply;
var oldclientHeight = $('livereplycontent').clientHeight;
$('livereplycontent').appendChild(div);
$('livereplycontentout').style.overflowY = 'hidden';
$('livereplycontent').style.bottom = oldclientHeight - $('livereplycontent').clientHeight + 'px';

if(replycontentnum > 20) {
$('livereplycontent').removeChild($('livereplycontent').firstChild);
for(i in replycontentlist) {
delete replycontentlist[i];
break;
}
replycontentnum--;
}

if(!movescrollid) {
movescrollid = setInterval(function() {
if(parseInt($('livereplycontent').style.bottom) < 0) {
$('livereplycontent').style.bottom =
((parseInt($('livereplycontent').style.bottom) + 5) > 0 ? 0 : (parseInt($('livereplycontent').style.bottom) + 5)) + 'px';
} else {
$('livereplycontentout').style.overflowY = 'auto';
clearInterval(movescrollid);
movescrollid = null;
timeoutid = setTimeout(livecontentfacemove, 1000);
}
}, 100);
}
}
}

function livereplypostvalidate(theform) {
var s;
if(theform.message.value == '' || $('livereplymessage').style.color == 'gray') {
s = '抱歉，您尚未輸入內容';
}
if(!disablepostctrl && ((postminchars != 0 && mb_strlen(theform.message.value) < postminchars) || (postmaxchars != 0 && mb_strlen(theform.message.value) > postmaxchars))) {
s = '您的帖子長度不符合要求。\n\n當前長度: ' + mb_strlen(theform.message.value) + ' 字節\n系統限制: ' + postminchars + ' 到 ' + postmaxchars + ' 字節';
}
if(s) {
showError(s);
doane();
$('livereplysubmit').disabled = false;
return false;
}
$('livereplysubmit').disabled = true;
theform.message.value = theform.message.value.replace(/([^>=\]"'\/]|^)((((https?|ftp):\/\/)|www\.)([\w\-]+\.)*[\w\-\u4e00-\u9fa5]+\.([\.a-zA-Z0-9]+|\u4E2D\u56FD|\u7F51\u7EDC|\u516C\u53F8)((\?|\/|:)+[\w\.\/=\?%\-&~`@':+!]*)+\.(jpg|gif|png|bmp))/ig, '$1[img]$2[/img]');
theform.message.value = parseurl(theform.message.value);
ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));
return false;
}

function succeedhandle_livereplypost(url, msg, param) {
$('livereplymessage').value = '';
$('livereplycontent').style.position = 'absolute';
if(param['sechash']) {
updatesecqaa(param['sechash']);
updateseccode(param['sechash']);
}
getnewlivepostlist();
}
</script>
<?php } if(($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0) { ?>
<ul id="thread_types" class="ttp bm cl">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_threadtype_inner'])) echo $_G['setting']['pluginhooks']['forumdisplay_threadtype_inner'];?>
<li id="ttp_all" <?php if(!$_GET['typeid'] && !$_GET['sortid']) { ?>class="xw1 a"<?php } ?>><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_G['forum']['threadsorts']['defaultshow']) { ?>&amp;filter=sortall&amp;sortall=1<?php } if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">全部</a></li>
<?php if($_G['forum']['threadtypes']) { if(is_array($_G['forum']['threadtypes']['types'])) foreach($_G['forum']['threadtypes']['types'] as $id => $name) { if($_GET['typeid'] == $id) { ?>
<li class="xw1 a"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['sortid']) { ?>&amp;filter=sortid&amp;sortid=<?php echo $_GET['sortid'];?><?php } if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php if($_G['forum']['threadtypes']['icons'][$id] && $_G['forum']['threadtypes']['prefix'] == 2) { ?><img class="vm" src="<?php echo $_G['forum']['threadtypes']['icons'][$id];?>" alt="" /> <?php } ?><?php echo $name;?><?php if($showthreadclasscount['typeid'][$id]) { ?><span class="xg1 num"><?php echo $showthreadclasscount['typeid'][$id];?></span><?php } ?></a></li>
<?php } else { ?>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=typeid&amp;typeid=<?php echo $id;?><?php echo $forumdisplayadd['typeid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php if($_G['forum']['threadtypes']['icons'][$id] && $_G['forum']['threadtypes']['prefix'] == 2) { ?><img class="vm" src="<?php echo $_G['forum']['threadtypes']['icons'][$id];?>" alt="" /> <?php } ?><?php echo $name;?><?php if($showthreadclasscount['typeid'][$id]) { ?><span class="xg1 num"><?php echo $showthreadclasscount['typeid'][$id];?></span><?php } ?></a></li>
<?php } } } if($_G['forum']['threadsorts']) { if($_G['forum']['threadtypes']) { ?><li><span class="pipe">|</span></li><?php } if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $name) { if($_GET['sortid'] == $id) { ?>
<li class="xw1 a"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['typeid']) { ?>&amp;filter=typeid&amp;typeid=<?php echo $_GET['typeid'];?><?php } if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php echo $name;?><?php if($showthreadclasscount['sortid'][$id]) { ?><span class="xg1 num"><?php echo $showthreadclasscount['sortid'][$id];?></span><?php } ?></a></li>
<?php } else { ?>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $id;?><?php echo $forumdisplayadd['sortid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php echo $name;?><?php if($showthreadclasscount['sortid'][$id]) { ?><span class="xg1 num"><?php echo $showthreadclasscount['sortid'][$id];?></span><?php } ?></a></li>
<?php } } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_filter_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_filter_extra'];?>
</ul>
<div class="th tz_sx">
<table cellspacing="0" cellpadding="0">
<tr>
<th colspan="<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>3<?php } else { ?>2<?php } ?>">
<?php if(CURMODULE != 'guide') { ?>
<div class="tf">
<span id="atarget" <?php if($_G['cookie']['atarget'] > 0) { ?>onclick="setatarget(-1)" class="y atarget_1"<?php } else { ?>onclick="setatarget(1)" class="y"<?php } ?> title="在新窗口中打開帖子">新窗</span>
<?php if($_GET['specialtype'] == 'reward') { ?>
<a id="filter_reward" href="javascript:;" class="showmenu xi2<?php if($_GET['rewardtype']) { ?> xw1<?php } ?>" onclick="showMenu(this.id)"><?php if($_GET['rewardtype'] == '') { ?>全部懸賞<?php } elseif($_GET['rewardtype'] == '1') { ?>進行中<?php } elseif($_GET['rewardtype'] == '2') { ?>已解決<?php } ?></a>&nbsp;
<?php } ?>
<a id="filter_special" href="javascript:;" class="showmenu xi2<?php if($_GET['specialtype']) { ?> xw1<?php } ?>" onclick="showMenu(this.id)"><?php if($_GET['specialtype'] == 'poll') { ?>投票<?php } elseif($_GET['specialtype'] == 'trade') { ?>商品<?php } elseif($_GET['specialtype'] == 'reward') { ?>懸賞<?php } elseif($_GET['specialtype'] == 'activity') { ?>活動<?php } elseif($_GET['specialtype'] == 'debate') { ?>辯論<?php } else { ?>全部主題<?php } ?></a>&nbsp;						
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=lastpost&amp;orderby=lastpost<?php echo $forumdisplayadd['lastpost'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="xi2<?php if($_GET['filter'] == 'lastpost') { ?> xw1<?php } ?>">最新</a>&nbsp;
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=heat&amp;orderby=heats<?php echo $forumdisplayadd['heat'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="xi2<?php if($_GET['filter'] == 'heat') { ?> xw1<?php } ?>">熱門</a>&nbsp;
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=hot" class="xi2<?php if($_GET['filter'] == 'hot') { ?> xw1<?php } ?>">熱帖</a>&nbsp;
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=digest&amp;digest=1<?php echo $forumdisplayadd['digest'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="xi2<?php if($_GET['filter'] == 'digest') { ?> xw1<?php } ?>">精華</a>&nbsp;
<a id="filter_dateline" href="javascript:;" class="showmenu xi2<?php if($_GET['dateline']) { ?> xw1<?php } ?>" onclick="showMenu(this.id)">更多</a>&nbsp;
<?php if(empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && (!$_G['setting']['forumseparator'] || !$separatepos) && !$_GET['filter']) { ?>
<a href="javascript:;" onclick="checkForumnew_btn('<?php echo $_G['fid'];?>')" title="查看更新" class="forumrefresh"></a>
<?php } if($_GET['filter'] == 'hot') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<span><?php echo $ctime;?></span>
<img src="<?php echo IMGDIR;?>/date_magnify.png" class="cur1" alt="" id="hottime" value="<?php echo $ctime;?>" fid="<?php echo $_G['fid'];?>" onclick="showcalendar(event, this, false, false, false, false, function(){viewhot(this);});" align="absmiddle" />
<?php } ?>
<span id="clearstickthread" style="display: none;">
<span class="pipe">|</span>
<a href="javascript:;" onclick="clearStickThread()" class="xi2" title="顯示置頂">顯示置頂</a>
</span>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_filter_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_filter_extra'];?>
</div>
<?php } else { ?>
標題
<?php } ?>
</th>
<?php if(empty($_G['forum']['picstyle'])) { if(CURMODULE == 'guide') { ?>
<td class="by">版塊/群組</td>
<?php } ?>
<td class="by">作者</td>
<td class="num">回復/查看</td>
<td class="by">最後發表</td>
<?php } else { ?>
<td class="by" colspan="3">
<a<?php if(empty($_G['cookie']['forumdefstyle'])) { ?> href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;forumdefstyle=yes" class="chked"<?php } else { ?> href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;forumdefstyle=no" class="unchk"<?php } ?> title="圖片模式瀏覽帖子">圖片模式</a>
</td>
<?php } ?>
</tr>
</table>
</div>
<script type="text/javascript">showTypes('thread_types');</script>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_threadtype_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_threadtype_extra'];?>
<?php if(empty($_G['forum']['sortmode'])) { ?><div id="threadlist" class="tl bm bmw"<?php if($_G['uid']) { ?> style="position: relative;"<?php } ?>>
<?php if($quicksearchlist && !$_GET['archiveid']) { ?><script type="text/javascript">
var forum_optionlist = <?php if($forum_optionlist) { ?>'<?php echo $forum_optionlist;?>'<?php } else { ?>''<?php } ?>;
</script>
<script src="<?php echo $_G['setting']['jspath'];?>threadsort.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php if(is_array($quicksearchlist)) foreach($quicksearchlist as $optionid => $option) { $formsearch = '';?>        <?php if(getstatus($option['search'], 1)) { ?>
        <?php
$__VERHASH = VERHASH;$formsearch = <<<EOF

            <div style="
EOF;
 if($option['type'] == 'checkbox') { 
$formsearch .= <<<EOF
clear:left;padding-bottom: 5px;
EOF;
 } else { 
$formsearch .= <<<EOF
float: left;width: 48%;height: 30px; overflow: hidden;
EOF;
 } 
$formsearch .= <<<EOF
">
                <span style="padding-right: 1em;">{$option['title']}:</span>
                
EOF;
 if(in_array($option['type'], array('radio', 'checkbox', 'select', 'range'))) { 
$formsearch .= <<<EOF

                    <span id="select_{$option['identifier']}">
                    
EOF;
 if($option['type'] == 'select') { 
$formsearch .= <<<EOF

                        
EOF;
 if($_GET['searchoption'][$optionid]['value']) { 
$formsearch .= <<<EOF

                            <script type="text/javascript">
                                changeselectthreadsort('{$_GET['searchoption'][$optionid]['value']}', {$optionid}, 'search');
                            </script>
                        
EOF;
 } else { 
$formsearch .= <<<EOF

                            <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" onchange="changeselectthreadsort(this.value, '{$optionid}', 'search');" class="ps vm">
                                <option value="0">請選擇</option>
                            
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                                
EOF;
 if(!$value['foptionid']) { 
$formsearch .= <<<EOF

                                <option value="{$id}">{$value['content']} 
EOF;
 if($value['level'] != 1) { 
$formsearch .= <<<EOF
&raquo;
EOF;
 } 
$formsearch .= <<<EOF
</option>
                                
EOF;
 } 
$formsearch .= <<<EOF

                            
EOF;
 } 
$formsearch .= <<<EOF

                            </select>
<input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                        
EOF;
 } 
$formsearch .= <<<EOF

                    
EOF;
 } elseif($option['type'] != 'checkbox') { 
$formsearch .= <<<EOF

                        <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" class="ps vm">
                            <option value="0">請選擇</option>
                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <option value="{$id}" 
EOF;
 if($_GET['searchoption'][$optionid]['value'] == $id) { 
$formsearch .= <<<EOF
selected="selected"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</option>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        </select>
                        <input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <label><input type="checkbox" class="pc" name="searchoption[{$optionid}][value][{$id}]" value="{$id}" 
EOF;
 if(is_array($_GET['searchoption'][$optionid]) && $_GET['searchoption'][$optionid]['value'][$id]) { 
$formsearch .= <<<EOF
checked="checked"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</label>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        <input type="hidden" name="searchoption[{$optionid}][type]" value="checkbox">
                    
EOF;
 } 
$formsearch .= <<<EOF

                    </span>
                
EOF;
 } else { 
$formsearch .= <<<EOF

                    
EOF;
 if($option['type'] == 'calendar') { 
$formsearch .= <<<EOF

                        <script src="{$_G['setting']['jspath']}calendar.js?{$__VERHASH}" type="text/javascript"></script>
                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" onclick="showcalendar(event, this, false)" />
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" />
                    
EOF;
 } 
$formsearch .= <<<EOF

                
EOF;
 } 
$formsearch .= <<<EOF

            </div>
            
EOF;
?>
<?php } ?>
    <?php $formsearch_html .= $formsearch;?><?php $fontsearch = '';$showoption = array();$tmpcount = 0;?><?php if(getstatus($option['search'], 2)) { ?>
    <?php
$fontsearch = <<<EOF

<tr>
<th width="8%">{$option['title']}:</th>
            <td>
                <ul class="cl">
                    <li
EOF;
 if($_GET[''.$option['identifier']] == 'all') { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1{$filterurladd}&amp;{$option['identifier']}=all{$sorturladdarray[$option['identifier']]}" class="xi2">不限</a></li>

EOF;
 if($option['type'] == 'select') { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if($value['foptionid'] == 0) { 
$fontsearch .= <<<EOF

<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } } if(!($_GET[''.$option['identifier']] == 'all' || !isset($_GET[''.$option['identifier']]))) { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if((preg_match('/^'.$value['foptionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['foptionid'].'$/i', $_GET[''.$option['identifier']])) && ($showoption[$value['count']][$id] = $value)) { } } if(ksort($showoption)) { } if(is_array($showoption)) foreach($showoption as $optioncount => $values) { if($tmpcount != $optioncount && ($tmpcount = $optioncount)) { 
$fontsearch .= <<<EOF

</ul><ul class="subtsm cl">
EOF;
 if(is_array($values)) foreach($values as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } 
$fontsearch .= <<<EOF

</ul><ul>

EOF;
 } } } } else { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if($_GET[''.$option['identifier']] && !strcmp($id, $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value}</a></li>

EOF;
 } } 
$fontsearch .= <<<EOF

                </ul>
            </td>
</tr>

EOF;
?>
     <?php } ?>
     <?php $fontsearch_html .= $fontsearch;?><?php } if($formsearch_html || $fontsearch_html) { ?>
<div>
<?php if($fontsearch_html) { ?>
    <div class="ptn pbn mbm bbs">
    <table id="fontsearch" class="tsm cl">
         <?php echo $fontsearch_html;?>
    </table>
    </div>
<?php } if($formsearch_html) { ?>
    <form method="post" autocomplete="off" name="searhsort" id="searhsort" class="bbs bm_c pns mfm cl" action="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $_GET['sortid'];?>">
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <?php echo $formsearch_html;?>
        <div class="ptm cl"><button type="submit" class="pn pnc" name="searchsortsubmit"><em>搜索</em></button></div>
    </form>
<?php } ?>
</div>
<?php } } ?>
<style>
        .common em{margin-left:15px;padding:2px;background:#AAAAAA;border-radius:5px;}
        .common em:hover{background:#333333;}
        .common em a{padding-left:8px;padding-right:8px;color:#FFFFFF !important;}
        .common em a:hover{color:#cccccc;}
        .new em{margin-left:15px;padding:2px;background:#AAAAAA;border-radius:5px;}
        .new em:hover{background:#333333;}
        .new em a{padding-left:8px;padding-right:8px;color:#FFFFFF !important;}
        .new em a:hover{color:#cccccc;}
        .lock em{margin-left:15px;padding:2px;background:#AAAAAA;border-radius:5px;}
        .lock em:hover{background:#333333;}
        .lock em a{padding-left:8px;padding-right:8px;color:#FFFFFF !important;}
        .lock em a:hover{color:#cccccc;}
</style>
<div class="th">
<table cellspacing="0" cellpadding="0">
<tr>
<th colspan="<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>3<?php } else { ?>2<?php } ?>">
<?php if(CURMODULE != 'guide') { ?>
<div class="tf">
<span id="atarget" <?php if($_G['cookie']['atarget'] > 0) { ?>onclick="setatarget(-1)" class="y atarget_1"<?php } else { ?>onclick="setatarget(1)" class="y"<?php } ?> title="在新窗口中打開帖子">新窗</span>
<?php if($_GET['specialtype'] == 'reward') { ?>
<a id="filter_reward" href="javascript:;" class="showmenu xi2<?php if($_GET['rewardtype']) { ?> xw1<?php } ?>" onclick="showMenu(this.id)"><?php if($_GET['rewardtype'] == '') { ?>全部懸賞<?php } elseif($_GET['rewardtype'] == '1') { ?>進行中<?php } elseif($_GET['rewardtype'] == '2') { ?>已解決<?php } ?></a>&nbsp;
<?php } ?>
<a id="filter_special" href="javascript:;" class="showmenu xi2<?php if($_GET['specialtype']) { ?> xw1<?php } ?>" onclick="showMenu(this.id)"><?php if($_GET['specialtype'] == 'poll') { ?>投票<?php } elseif($_GET['specialtype'] == 'trade') { ?>商品<?php } elseif($_GET['specialtype'] == 'reward') { ?>懸賞<?php } elseif($_GET['specialtype'] == 'activity') { ?>活動<?php } elseif($_GET['specialtype'] == 'debate') { ?>辯論<?php } else { ?>全部主題<?php } ?></a>&nbsp;						
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=lastpost&amp;orderby=lastpost<?php echo $forumdisplayadd['lastpost'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="xi2<?php if($_GET['filter'] == 'lastpost') { ?> xw1<?php } ?>">最新</a>&nbsp;
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=heat&amp;orderby=heats<?php echo $forumdisplayadd['heat'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="xi2<?php if($_GET['filter'] == 'heat') { ?> xw1<?php } ?>">熱門</a>&nbsp;
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=hot" class="xi2<?php if($_GET['filter'] == 'hot') { ?> xw1<?php } ?>">熱帖</a>&nbsp;
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=digest&amp;digest=1<?php echo $forumdisplayadd['digest'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="xi2<?php if($_GET['filter'] == 'digest') { ?> xw1<?php } ?>">精華</a>&nbsp;
<a id="filter_dateline" href="javascript:;" class="showmenu xi2<?php if($_GET['dateline']) { ?> xw1<?php } ?>" onclick="showMenu(this.id)">更多</a>&nbsp;
<?php if(empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && (!$_G['setting']['forumseparator'] || !$separatepos) && !$_GET['filter']) { ?>
<a href="javascript:;" onclick="checkForumnew_btn('<?php echo $_G['fid'];?>')" title="查看更新" class="forumrefresh"></a>
<?php } if($_GET['filter'] == 'hot') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<span><?php echo $ctime;?></span>
<img src="<?php echo IMGDIR;?>/date_magnify.png" class="cur1" alt="" id="hottime" value="<?php echo $ctime;?>" fid="<?php echo $_G['fid'];?>" onclick="showcalendar(event, this, false, false, false, false, function(){viewhot(this);});" align="absmiddle" />
<?php } ?>
<span id="clearstickthread" style="display: none;">
<span class="pipe">|</span>
<a href="javascript:;" onclick="clearStickThread()" class="xi2" title="顯示置頂">顯示置頂</a>
</span>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_filter_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_filter_extra'];?>
</div>
<?php } else { ?>
標題
<?php } ?>
</th>
<?php if(empty($_G['forum']['picstyle'])) { if(CURMODULE == 'guide') { ?>
<td class="by">版塊/群組</td>
<?php } ?>
<td class="by">作者</td>
<td class="num">回復/查看</td>
<td class="by">最後發表</td>
<?php } else { ?>
<td class="by" colspan="3">
<a<?php if(empty($_G['cookie']['forumdefstyle'])) { ?> href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;forumdefstyle=yes" class="chked"<?php } else { ?> href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;forumdefstyle=no" class="unchk"<?php } ?> title="圖片模式瀏覽帖子">圖片模式</a>
</td>
<?php } ?>
</tr>
</table>
</div>
<div class="bm_c">
<?php if(empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']) { ?>
<script type="text/javascript">var lasttime = <?php echo $_G['timestamp'];?>;var listcolspan= '<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>6<?php } else { ?>5<?php } ?>';</script>
<?php } ?>
<div id="forumnew" style="display:none"></div>
<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;infloat=yes&amp;nopost=yes">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="listextra" value="<?php echo $extra;?>" />
<table summary="forum_<?php echo $_G['fid'];?>" cellspacing="0" cellpadding="0" id="threadlisttableid">
<?php if((!$simplestyle || !$_G['forum']['allowside'] && $page == 1) && !empty($announcement)) { ?>
<tbody>
<tr>
<td class="icn"><img src="<?php echo IMGDIR;?>/ann_icon.gif" alt="公告" /></td>
<?php if($_G['forum']['ismoderator'] && !$_GET['archiveid']) { ?><td class="o">&nbsp;</td><?php } ?>
<th><strong class="xst">公告: <?php if(empty($announcement['type'])) { ?><a href="forum.php?mod=announcement&amp;id=<?php echo $announcement['id'];?>#<?php echo $announcement['id'];?>" target="_blank"><?php echo $announcement['subject'];?></a><?php } else { ?><a href="<?php echo $announcement['message'];?>" target="_blank"><?php echo $announcement['subject'];?></a><?php } ?></strong></th>
<td class="by">
<cite><a href="home.php?mod=space&amp;uid=<?php echo $announcement['authorid'];?>" c="1"><?php echo $announcement['author'];?></a></cite>
<em><?php echo $announcement['starttime'];?></em>
</td>
<td class="num">&nbsp;</td>
<td class="by">&nbsp;</td>
</tr>
</tbody>
<?php } if(!$separatepos || !$_G['setting']['forumseparator']) { ?>
<tbody id="separatorline" class="emptb"><tr><td class="icn"></td><?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?><td class="o"></td><?php } ?><th></th><?php if(CURMODULE == 'guide') { ?><td class="by"></td><?php } ?><td class="by"></td><td class="num"></td><td class="by"></td></tr></tbody>
<?php } if($_G['forum_threadcount']) { if(empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']) { if(is_array($_G['forum_threadlist'])) foreach($_G['forum_threadlist'] as $key => $thread) { if($_G['setting']['forumseparator'] == 1 && $separatepos == $key + 1) { ?>

<script type="text/javascript">hideStickThread();</script>
<?php } if($separatepos <= $key + 1) { ?><?php echo adshow("threadlist");?><?php } ?>
<tbody id="<?php echo $thread['id'];?>"<?php if($_G['hiddenexists'] && $thread['hidden']) { ?> style='display:none'<?php } ?>>
<tr>
<td class="icn">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['icontid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>" title="<?php if($thread['displayorder'] == 1) { ?>本版置頂主題 - <?php } if($thread['displayorder'] == 2) { ?>分類置頂主題 - <?php } if($thread['displayorder'] == 3) { ?>全局置頂主題 - <?php } if($thread['displayorder'] == 4) { ?>多版置頂主題 - <?php } if($thread['folder'] == 'lock') { ?>關閉的主題 - <?php } if($thread['special'] == 1) { ?>投票 - <?php } if($thread['special'] == 2) { ?>商品 - <?php } if($thread['special'] == 3) { ?>懸賞 - <?php } if($thread['special'] == 4) { ?>活動 - <?php } if($thread['special'] == 5) { ?>辯論 - <?php } if($thread['folder'] == "new") { ?>有新回復 - <?php } ?>
新窗口打開" target="_blank">
<?php if($thread['folder'] == 'lock') { ?>
<img src="<?php echo IMGDIR;?>/folder_lock.gif" />
<?php } elseif($thread['special'] == 1) { ?>
<img src="<?php echo IMGDIR;?>/pollsmall.gif" alt="投票" />
<?php } elseif($thread['special'] == 2) { ?>
<img src="<?php echo IMGDIR;?>/tradesmall.gif" alt="商品" />
<?php } elseif($thread['special'] == 3) { ?>
<img src="<?php echo IMGDIR;?>/rewardsmall.gif" alt="懸賞" />
<?php } elseif($thread['special'] == 4) { ?>
<img src="<?php echo IMGDIR;?>/activitysmall.gif" alt="活動" />
<?php } elseif($thread['special'] == 5) { ?>
<img src="<?php echo IMGDIR;?>/debatesmall.gif" alt="辯論" />
<?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<img src="<?php echo IMGDIR;?>/pin_<?php echo $thread['displayorder'];?>.gif" alt="<?php echo $_G['setting']['threadsticky'][3-$thread['displayorder']];?>" />
<?php } else { ?>
<img src="<?php echo IMGDIR;?>/folder_<?php echo $thread['folder'];?>.gif" />
<?php } ?>
</a>
</td>
<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>
<td class="o">
<?php if($thread['fid'] == $_G['fid']) { if($thread['displayorder'] <= 3 || $_G['adminid'] == 1) { ?>
<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="<?php echo $thread['tid'];?>" />
<?php } else { ?>
<input type="checkbox" disabled="disabled" />
<?php } } else { ?>
<input type="checkbox" disabled="disabled" />
<?php } ?>
</td>
<?php } ?>
<th class="<?php echo $thread['folder'];?>">
<a href="javascript:;" id="content_<?php echo $thread['tid'];?>" class="showcontent y" title="更多操作" onclick="CONTENT_TID='<?php echo $thread['tid'];?>';CONTENT_ID='<?php echo $thread['id'];?>';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<?php if(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<a href="javascript:void(0);" onclick="hideStickThread('<?php echo $thread['tid'];?>')" class="showhide y" title="隱藏置頂帖">隱藏置頂帖</a></em>
<?php } if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } if(!$_G['setting']['forumdisplaythreadpreview'] && !($thread['readperm'] && $thread['readperm'] > $_G['group']['readaccess'] && !$_G['forum']['ismoderator'] && $thread['authorid'] != $_G['uid'])) { if(!(!empty($_G['setting']['antitheft']['allow']) && empty($_G['setting']['antitheft']['disable']['thread']) && empty($_G['forum']['noantitheft']))) { ?>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('<?php echo $thread['moved'] ? $thread['closed'] : $thread['tid']; ?>', '<?php echo $thread['id'];?>');">預覽</a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread'][$key];?><?php $thread[typehtml] = str_replace('[',"",$thread[typehtml]);?><?php $thread[typehtml] = str_replace(']',"",$thread[typehtml]);?><?php echo $thread['typehtml'];?> <?php echo $thread['sorthtml'];?>
<?php if($thread['moved']) { ?>
移動:<?php $thread[tid]=$thread[closed];?><?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>"<?php echo $thread['highlight'];?><?php if($thread['isgroup'] == 1 || $thread['forumstick']) { ?> target="_blank"<?php } else { ?> onclick="atarget(this)"<?php } ?> class="s xst"><?php echo $thread['subject'];?></a>
<?php if($_G['setting']['threadhidethreshold'] && $thread['hidden'] >= $_G['setting']['threadhidethreshold']) { ?><span class="xg1">隱藏</span>&nbsp;<?php } if($thread['icon'] >= 0) { ?>
<img src="<?php echo STATICURL;?>image/stamp/<?php echo $_G['cache']['stamps'][$thread['icon']]['url'];?>" alt="<?php echo $_G['cache']['stamps'][$thread['icon']]['text'];?>" align="absmiddle" />
<?php } if($thread['rushreply']) { ?>
<img src="<?php echo IMGDIR;?>/rushreply_s.png" alt="搶樓" align="absmiddle" />
<?php if($rushinfo[$thread['tid']]) { ?>
<span id="rushtimer_<?php echo $thread['tid'];?>"> 【還有 <span id="rushtimer_body_<?php echo $thread['tid'];?>"></span> <script language="javascript">settimer(<?php echo $rushinfo[$thread['tid']]['timer'];?>, 'rushtimer_body_<?php echo $thread['tid'];?>');</script><?php if($rushinfo[$thread['tid']]['timertype'] == 'start') { ?> 開始 <?php } else { ?> 結束 <?php } ?> 】</span>
<?php } } if($stemplate && $sortid) { ?><?php echo $stemplate[$sortid][$thread['tid']];?><?php } if($thread['readperm']) { ?> - <span class="xw1 rabbit_ydqx">閱讀權限 <?php echo $thread['readperm'];?></span><?php } if($thread['price'] > 0) { if($thread['special'] == '3') { ?>
- <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=1" title="只看進行中的"><span class="rabbit_xsgive">$ 懸賞<?php echo $thread['price'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?></span></span></a>
<?php } else { ?>
- <span class="xw1 rabbit_sale"> �� 售價 <?php echo $thread['price'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?></span>
<?php } } elseif($thread['special'] == '3' && $thread['price'] < 0) { ?>
- <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=2" title="只看已解決的">[已解決]</a>
<?php } if($thread['attachment'] == 2) { ?>
<img src="<?php echo STATICURL;?>image/filetype/image_s.gif" alt="attach_img" title="圖片附件" align="absmiddle" />
<?php } elseif($thread['attachment'] == 1) { ?>
<img src="<?php echo STATICURL;?>image/filetype/common.gif" alt="attachment" title="附件" align="absmiddle" />
<?php } if($thread['mobile']) { ?>
<img src="<?php echo IMGDIR;?>/mobile-attach-<?php echo $thread['mobile'];?>.png" alt="手機發帖" align="absmiddle" />
<?php } if($thread['digest'] > 0 && $filter != 'digest') { ?>
<img src="<?php echo IMGDIR;?>/digest_<?php echo $thread['digest'];?>.gif" align="absmiddle" alt="digest" title="精華 <?php echo $thread['digest'];?>" />
<?php } if($thread['displayorder'] == 0) { if($thread['recommendicon'] && $filter != 'recommend') { ?>
<img src="<?php echo IMGDIR;?>/recommend_<?php echo $thread['recommendicon'];?>.gif" align="absmiddle" alt="recommend" title="評價指數 <?php echo $thread['recommends'];?>" />
<?php } if($thread['heatlevel']) { ?>
<img src="<?php echo IMGDIR;?>/hot_<?php echo $thread['heatlevel'];?>.gif" align="absmiddle" alt="heatlevel" title="熱度: <?php echo $thread['heats'];?>" />
<?php } if($thread['rate'] > 0) { ?>
<img src="<?php echo IMGDIR;?>/agree.gif" align="absmiddle" alt="agree" title="帖子被加分" />
<?php } elseif($thread['rate'] < 0) { ?>
<img src="<?php echo IMGDIR;?>/disagree.gif" align="absmiddle" alt="disagree" title="帖子被減分" />
<?php } } if($thread['replycredit'] > 0) { ?>
- <span class="xi1"><span class="rabbit_xs">$ 回帖獎勵 <strong> <?php echo $thread['replycredit'];?></strong> </span></span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread_subject'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread_subject'][$key];?>
<?php if($thread['multipage']) { ?>
<span class="tps"><?php echo $thread['multipage'];?></span>
<?php } if($thread['weeknew']) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $thread['tid'];?>&amp;goto=lastpost#lastpost" class="xi1">New</a>
<?php } if(!$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { if($thread['related_group'] == 0 && $thread['closed'] > 1) { $thread[tid]=$thread[closed];?><?php } if($groupnames[$thread['tid']]) { ?>
<span class="fromg xg1"> [來自: <a href="forum.php?mod=group&amp;fid=<?php echo $groupnames[$thread['tid']]['fid'];?>" target="_blank" class="xg1"><?php echo $groupnames[$thread['tid']]['name'];?></a>]</span>
<?php } } ?>
</th>
<?php if(CURMODULE == 'guide') { ?>
<td class="by"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $thread['fid'];?>" target="_blank"><?php echo $forumnames[$thread['fid']]['name'];?></a></td>
<?php } ?>
<td class="by">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_author'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_author'][$key];?>
<cite>
<?php if($thread['authorid'] && $thread['author']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>" c="1"<?php if($groupcolor[$thread['authorid']]) { ?> style="color: <?php echo $groupcolor[$thread['authorid']];?>;"<?php } ?>><?php echo $thread['author'];?></a><?php if(!empty($verify[$thread['authorid']])) { ?> <?php echo $verify[$thread['authorid']];?><?php } } else { ?>
<?php echo $_G['setting']['anonymoustext'];?>
<?php } ?>
</cite>
<em><span<?php if($thread['istoday']) { ?> class="xi1"<?php } ?>><?php echo $thread['dateline'];?></span></em>
</td>
<td class="num"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>" class="xi2"><?php echo $thread['allreplies'];?></a><em><?php if($thread['isgroup'] != 1) { ?><?php echo $thread['views'];?><?php } else { ?><?php echo $groupnames[$thread['tid']]['views'];?><?php } ?></em></td>
<td class="by">
<cite><?php if($thread['lastposter']) { ?><a href="<?php if($thread['digest'] != -2) { ?>home.php?mod=space&username=<?php echo $thread['lastposterenc'];?><?php } else { ?>forum.php?mod=viewthread&tid=<?php echo $thread['tid'];?>&page=<?php echo max(1, $thread['pages']);; } ?>" c="1"><?php echo $thread['lastposter'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<em><a href="<?php if($thread['digest'] != -2 && !$thread['ordertype']) { ?>forum.php?mod=redirect&tid=<?php echo $thread['tid'];?>&goto=lastpost<?php echo $highlight;?>#lastpost<?php } else { ?>forum.php?mod=viewthread&tid=<?php echo $thread['tid'];?><?php if(!$thread['ordertype']) { ?>&page=<?php echo max(1, $thread['pages']);; } } ?>"><?php echo $thread['lastpost'];?></a></em>
</td>
</tr>
</tbody>
<?php } ?>
</table><!-- end of table "forum_G[fid]" branch 1/3 -->
<?php if($_G['hiddenexists']) { ?>							
<div id="hiddenthread"<?php if($thread['hidden']) { ?> class="last"<?php } ?>><a href="javascript:;" onclick="display_blocked_thread()">還有一些帖子被系統自動隱藏，點此展開</a></div>
<?php } } else { ?>
</table><!-- end of table "forum_G[fid]" branch 2/3 -->
<ul id="waterfall" class="ml waterfall cl"><?php if(is_array($_G['forum_threadlist'])) foreach($_G['forum_threadlist'] as $key => $thread) { if($_G['hiddenexists'] && $thread['hidden']) { continue;?><?php } if(!$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { if($thread['related_group'] == 0 && $thread['closed'] > 1) { $thread[tid]=$thread[closed];?><?php } } $waterfallwidth = $_G[setting][forumpicstyle][thumbwidth] + 24;?><li style="width:<?php echo $waterfallwidth;?>px">
<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>
<div style="position:absolute;margin:1px;padding:2px;background:#FFF">
<?php if($thread['fid'] == $_G['fid']) { if($thread['displayorder'] <= 3 || $_G['adminid'] == 1) { ?>
<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="<?php echo $thread['tid'];?>" />
<?php } else { ?>
<input type="checkbox" disabled="disabled" />
<?php } } else { ?>
<input type="checkbox" disabled="disabled" />
<?php } ?>
</div>
<?php } ?>
<div class="c cl">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>" <?php if($thread['isgroup'] == 1 || $thread['forumstick'] || CURMODULE == 'guide') { ?> target="_blank"<?php } else { ?> onclick="atarget(this)"<?php } ?> title="<?php echo $thread['subject'];?>" class="z">
<?php if($thread['cover']) { ?>
<img src="<?php echo $thread['coverpath'];?>" alt="<?php echo $thread['subject'];?>" width="<?php echo $_G['setting']['forumpicstyle']['thumbwidth'];?>" />
<?php } else { ?>
<span class="nopic" style="width:<?php echo $_G['setting']['forumpicstyle']['thumbwidth'];?>px; height:<?php echo $_G['setting']['forumpicstyle']['thumbwidth'];?>px;"></span>
<?php } ?>
</a>
</div>
<h3 class="xw0">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread'][$key];?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>"<?php echo $thread['highlight'];?><?php if($thread['isgroup'] == 1 || $thread['forumstick']) { ?> target="_blank"<?php } else { ?> onclick="atarget(this)"<?php } ?> title="<?php echo $thread['subject'];?>"><?php echo $thread['subject'];?></a>
</h3>
<div class="auth cl">
<cite class="xg1 y">
喜歡: <?php if($thread['recommends']) { ?><?php echo $thread['recommends'];?><?php } else { ?>0<?php } ?>
 &nbsp; 回復: <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>" title="<?php echo $thread['replies'];?> 回復"><?php echo $thread['replies'];?></a>
</cite>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_author'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_author'][$key];?>
<?php if($thread['authorid'] && $thread['author']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>"><?php echo $thread['author'];?></a><?php if(!empty($verify[$thread['authorid']])) { ?> <?php echo $verify[$thread['authorid']];?><?php } } else { ?>
<?php echo $_G['setting']['anonymoustext'];?>
<?php } ?>
</div>
</li>
<?php } ?>
</ul>
<div id="tmppic" style="display: none;"></div>
<script src="<?php echo $_G['setting']['jspath'];?>redef.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" reload="1">
var wf = {};

_attachEvent(window, "load", function () {
if($("waterfall")) {
wf = waterfall();
}

<?php if($page < $_G['page_next'] && !$subforumonly) { ?>
var page = <?php echo $page;?> + 1,
maxpage = Math.min(<?php echo $page;?> + 10,<?php echo $maxpage;?> + 1),
stopload = 0,
scrolltimer = null,
tmpelems = [],
tmpimgs = [],
markloaded = [],
imgsloaded = 0,
loadready = 0,
showready = 1,
nxtpgurl = 'forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&filter=<?php echo $filter;?>&orderby=<?php echo $_GET['orderby'];?><?php echo $forumdisplayadd['page'];?>&page=',
wfloading = "<img src=\"<?php echo IMGDIR;?>/loading.gif\" alt=\"\" width=\"16\" height=\"16\" class=\"vm\" /> 加載中...",
pgbtn = $("pgbtn").getElementsByTagName("a")[0];

function loadmore() {
var url = nxtpgurl + page + '&t=' + parseInt((+new Date()/1000)/(Math.random()*1000));
var x = new Ajax("HTML");
x.get(url, function (s) {
s = s.replace(/\n|\r/g, "");
if(s.indexOf("id=\"pgbtn\"") == -1) {
$("pgbtn").style.display = "none";
stopload++;
window.onscroll = null;
}

s = s.substring(s.indexOf("<ul id=\"waterfall\""), s.indexOf("<div id=\"tmppic\""));
s = s.replace("id=\"waterfall\"", "");
$("tmppic").innerHTML = s;
loadready = 1;
});
}

window.onscroll = function () {
if(scrolltimer == null) {
scrolltimer = setTimeout(function () {
try {
if(page < maxpage && stopload < 2 && showready && ((document.documentElement.scrollTop || document.body.scrollTop) + document.documentElement.clientHeight + 500) >= document.documentElement.scrollHeight) {
pgbtn.innerHTML = wfloading;
loadready = 0;
showready = 0;
loadmore();
tmpelems = $("tmppic").getElementsByTagName("li");
var waitingtimer = setInterval(function () {
stopload >= 2 && clearInterval(waitingtimer);
if(loadready && stopload < 2) {
if(!tmpelems.length) {
page++;
pgbtn.href = nxtpgurl + Math.min(page, <?php echo $maxpage;?>);
pgbtn.innerHTML = "下一頁 &raquo;";
showready = 1;
clearInterval(waitingtimer);
}
for(var i = 0, j = tmpelems.length; i < j; i++) {
if(tmpelems[i]) {
tmpimgs = tmpelems[i].getElementsByTagName("img");
imgsloaded = 0;
for(var m = 0, n = tmpimgs.length; m < n; m++) {
tmpimgs[m].onerror = function () {
this.style.display = "none";
};
markloaded[m] = tmpimgs[m].complete ? 1 : 0;
imgsloaded += markloaded[m];
}
if(imgsloaded == tmpimgs.length) {
$("waterfall").appendChild(tmpelems[i]);
wf = waterfall({
"index": wf.index,
"totalwidth": wf.totalwidth,
"totalheight": wf.totalheight,
"columnsheight": wf.columnsheight
});
}
}
}
}
}, 40);
}
} catch(e) {}
scrolltimer = null;
}, 320);
}
};
<?php } ?>

});

</script>
<?php } } else { ?>
<tbody class="bw0_all"><tr><th colspan="<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>6<?php } else { ?>5<?php } ?>"><p class="emp">本版塊或指定的範圍內尚無主題</p></th></tr></tbody>
</table><!-- end of table "forum_G[fid]" branch 3/3 -->
<?php } if($_G['forum']['ismoderator'] && $_G['forum_threadcount']) { include template('forum/topicadmin_modlayer'); } ?>
</form>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_threadlist_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_threadlist_bottom'];?>
</div>

<?php if(!IS_ROBOT) { ?>
<div id="filter_special_menu" class="p_pop" style="display:none" change="location.href='forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&filter='+$('filter_special').value">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">全部主題</a></li>
<?php if($showpoll) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=poll<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">投票</a></li><?php } if($showtrade) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=trade<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">商品</a></li><?php } if($showreward) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">懸賞</a></li><?php } if($showactivity) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=activity<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">活動</a></li><?php } if($showdebate) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=debate<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">辯論</a></li><?php } ?>
</ul>
</div>
<div id="filter_reward_menu" class="p_pop" style="display:none" change="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype='+$('filter_reward').value">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">全部懸賞</a></li>
<?php if($showpoll) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=1">進行中</a></li><?php } if($showtrade) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=2">已解決</a></li><?php } ?>
</ul>
</div>
<div id="filter_dateline_menu" class="p_pop" style="display:none">
<ul class="pop_moremenu">
<li>排序: 
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=author&amp;orderby=dateline<?php echo $forumdisplayadd['author'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['orderby'] == 'dateline') { ?>class="xw1"<?php } ?>>發帖時間</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=replies<?php echo $forumdisplayadd['reply'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['orderby'] == 'replies') { ?>class="xw1"<?php } ?>>回復/查看</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=views<?php echo $forumdisplayadd['view'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['orderby'] == 'views') { ?>class="xw1"<?php } ?>>查看</a>
</li>
<li>時間: 
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if(!$_GET['dateline']) { ?>class="xw1"<?php } ?>>全部時間</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=86400<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '86400') { ?>class="xw1"<?php } ?>>一天</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=172800<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '172800') { ?>class="xw1"<?php } ?>>兩天</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=604800<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '604800') { ?>class="xw1"<?php } ?>>一周</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=2592000<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '2592000') { ?>class="xw1"<?php } ?>>一個月</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=7948800<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '7948800') { ?>class="xw1"<?php } ?>>三個月</a>
</li>
</ul>
</div>
<?php if(!$_G['setting']['closeforumorderby']) { ?>
<div id="filter_orderby_menu" class="p_pop" style="display:none">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">默認排序</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=author&amp;orderby=dateline<?php echo $forumdisplayadd['author'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">發帖時間</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=replies<?php echo $forumdisplayadd['reply'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">回復/查看</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=views<?php echo $forumdisplayadd['view'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">查看</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=lastpost&amp;orderby=lastpost<?php echo $forumdisplayadd['lastpost'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">最後發表</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=heat&amp;orderby=heats<?php echo $forumdisplayadd['heat'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">熱門</a></li>
</ul>
</div>
<?php } } if($multipage && $filter != 'hot') { if(!($_G['forum']['picstyle'] && !$_G['cookie']['forumdefstyle'])) { ?>
<a class="bm_h" href="javascript:;" rel="<?php echo $multipage_more;?>" curpage="<?php echo $page;?>" id="autopbn" totalpage="<?php echo $maxpage;?>" picstyle="<?php echo $_G['forum']['picstyle'];?>" forumdefstyle="<?php echo $_G['cookie']['forumdefstyle'];?>">下一頁 &raquo;</a>
<script src="<?php echo $_G['setting']['jspath'];?>autoloadpage.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } else { ?>
<div id="pgbtn" class="pgbtn"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=<?php echo $filter;?>&amp;orderby=<?php echo $_GET['orderby'];?><?php echo $forumdisplayadd['page'];?>&amp;<?php echo $multipage_archive;?>&amp;page=<?php echo $nextpage;?>" hidefocus="true">下一頁 &raquo;</a></div>
<?php } } ?>
<div class="bm bw0 pgs cl">
<span id="fd_page_bottom"><?php echo $multipage;?></span>
<span <?php if($_G['setting']['visitedforums']) { ?>id="visitedforumstmp" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'21'})"<?php } ?> class="pgb y"><a href="forum.php">返&nbsp;回</a></span>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'];?>
</div>
<?php } else { ?><div id="threadlist" class="bm bmw"<?php if($_G['uid']) { ?> style="position: relative;"<?php } ?>>
<?php if($quicksearchlist && !$_GET['archiveid']) { ?><script type="text/javascript">
var forum_optionlist = <?php if($forum_optionlist) { ?>'<?php echo $forum_optionlist;?>'<?php } else { ?>''<?php } ?>;
</script>
<script src="<?php echo $_G['setting']['jspath'];?>threadsort.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php if(is_array($quicksearchlist)) foreach($quicksearchlist as $optionid => $option) { $formsearch = '';?>        <?php if(getstatus($option['search'], 1)) { ?>
        <?php
$__VERHASH = VERHASH;$formsearch = <<<EOF

            <div style="
EOF;
 if($option['type'] == 'checkbox') { 
$formsearch .= <<<EOF
clear:left;padding-bottom: 5px;
EOF;
 } else { 
$formsearch .= <<<EOF
float: left;width: 48%;height: 30px; overflow: hidden;
EOF;
 } 
$formsearch .= <<<EOF
">
                <span style="padding-right: 1em;">{$option['title']}:</span>
                
EOF;
 if(in_array($option['type'], array('radio', 'checkbox', 'select', 'range'))) { 
$formsearch .= <<<EOF

                    <span id="select_{$option['identifier']}">
                    
EOF;
 if($option['type'] == 'select') { 
$formsearch .= <<<EOF

                        
EOF;
 if($_GET['searchoption'][$optionid]['value']) { 
$formsearch .= <<<EOF

                            <script type="text/javascript">
                                changeselectthreadsort('{$_GET['searchoption'][$optionid]['value']}', {$optionid}, 'search');
                            </script>
                        
EOF;
 } else { 
$formsearch .= <<<EOF

                            <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" onchange="changeselectthreadsort(this.value, '{$optionid}', 'search');" class="ps vm">
                                <option value="0">請選擇</option>
                            
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                                
EOF;
 if(!$value['foptionid']) { 
$formsearch .= <<<EOF

                                <option value="{$id}">{$value['content']} 
EOF;
 if($value['level'] != 1) { 
$formsearch .= <<<EOF
&raquo;
EOF;
 } 
$formsearch .= <<<EOF
</option>
                                
EOF;
 } 
$formsearch .= <<<EOF

                            
EOF;
 } 
$formsearch .= <<<EOF

                            </select>
<input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                        
EOF;
 } 
$formsearch .= <<<EOF

                    
EOF;
 } elseif($option['type'] != 'checkbox') { 
$formsearch .= <<<EOF

                        <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" class="ps vm">
                            <option value="0">請選擇</option>
                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <option value="{$id}" 
EOF;
 if($_GET['searchoption'][$optionid]['value'] == $id) { 
$formsearch .= <<<EOF
selected="selected"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</option>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        </select>
                        <input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <label><input type="checkbox" class="pc" name="searchoption[{$optionid}][value][{$id}]" value="{$id}" 
EOF;
 if(is_array($_GET['searchoption'][$optionid]) && $_GET['searchoption'][$optionid]['value'][$id]) { 
$formsearch .= <<<EOF
checked="checked"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</label>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        <input type="hidden" name="searchoption[{$optionid}][type]" value="checkbox">
                    
EOF;
 } 
$formsearch .= <<<EOF

                    </span>
                
EOF;
 } else { 
$formsearch .= <<<EOF

                    
EOF;
 if($option['type'] == 'calendar') { 
$formsearch .= <<<EOF

                        <script src="{$_G['setting']['jspath']}calendar.js?{$__VERHASH}" type="text/javascript"></script>
                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" onclick="showcalendar(event, this, false)" />
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" />
                    
EOF;
 } 
$formsearch .= <<<EOF

                
EOF;
 } 
$formsearch .= <<<EOF

            </div>
            
EOF;
?>
<?php } ?>
    <?php $formsearch_html .= $formsearch;?><?php $fontsearch = '';$showoption = array();$tmpcount = 0;?><?php if(getstatus($option['search'], 2)) { ?>
    <?php
$fontsearch = <<<EOF

<tr>
<th width="8%">{$option['title']}:</th>
            <td>
                <ul class="cl">
                    <li
EOF;
 if($_GET[''.$option['identifier']] == 'all') { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1{$filterurladd}&amp;{$option['identifier']}=all{$sorturladdarray[$option['identifier']]}" class="xi2">不限</a></li>

EOF;
 if($option['type'] == 'select') { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if($value['foptionid'] == 0) { 
$fontsearch .= <<<EOF

<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } } if(!($_GET[''.$option['identifier']] == 'all' || !isset($_GET[''.$option['identifier']]))) { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if((preg_match('/^'.$value['foptionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['foptionid'].'$/i', $_GET[''.$option['identifier']])) && ($showoption[$value['count']][$id] = $value)) { } } if(ksort($showoption)) { } if(is_array($showoption)) foreach($showoption as $optioncount => $values) { if($tmpcount != $optioncount && ($tmpcount = $optioncount)) { 
$fontsearch .= <<<EOF

</ul><ul class="subtsm cl">
EOF;
 if(is_array($values)) foreach($values as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } 
$fontsearch .= <<<EOF

</ul><ul>

EOF;
 } } } } else { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if($_GET[''.$option['identifier']] && !strcmp($id, $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value}</a></li>

EOF;
 } } 
$fontsearch .= <<<EOF

                </ul>
            </td>
</tr>

EOF;
?>
     <?php } ?>
     <?php $fontsearch_html .= $fontsearch;?><?php } if($formsearch_html || $fontsearch_html) { ?>
<div>
<?php if($fontsearch_html) { ?>
    <div class="ptn pbn mbm bbs">
    <table id="fontsearch" class="tsm cl">
         <?php echo $fontsearch_html;?>
    </table>
    </div>
<?php } if($formsearch_html) { ?>
    <form method="post" autocomplete="off" name="searhsort" id="searhsort" class="bbs bm_c pns mfm cl" action="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $_GET['sortid'];?>">
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <?php echo $formsearch_html;?>
        <div class="ptm cl"><button type="submit" class="pn pnc" name="searchsortsubmit"><em>搜索</em></button></div>
    </form>
<?php } ?>
</div>
<?php } } ?>
<?php echo $sorttemplate['header'];?>
<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;infloat=yes&amp;nopost=yes">
<?php echo $sorttemplate['body'];?>
<?php if($_G['forum']['ismoderator'] && $_G['forum_threadcount']) { include template('forum/topicadmin_modlayer'); } ?>
</form>
<?php echo $sorttemplate['footer'];?>
</div>

<div class="bm bw0 pgs cl">
<?php echo $multipage;?>
<span <?php if($_G['setting']['visitedforums']) { ?>id="visitedforumstmp" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'21'})"<?php } ?> class="pgb y"><a href="forum.php">返&nbsp;回</a></span>
<?php if(!$_GET['archiveid']) { ?><a href="javascript:;" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle'])) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> title="發新帖"><img src="<?php echo IMGDIR;?>/pn_post.png" alt="發新帖" /></a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'];?>
</div><?php } } ?>
<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
<?php if($fastpost) { include template('forum/forumdisplay_fastpost'); } ?>

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_bottom'];?>
<!--[diy=diyforumdisplaybottom]--><div id="diyforumdisplaybottom" class="area"></div><!--[/diy]-->
</div>

<?php if($_G['forum']['allowside']) { ?>
<div class="sd">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_side_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_side_top'];?>
<?php if(!$subforumonly) { ?>
<div class="bm">
<div class="bm_h">
<h2>所屬分類: <?php echo cutstr($_G['cache']['forums'][$_G['forum']['fup']]['name'], 22, '')?></h2>
</div>
<div class="bm_c">
<ul class="xl xl2 cl"><?php if(is_array($_G['cache']['forums'])) foreach($_G['cache']['forums'] as $bforum) { if($bforum['fup'] == $_G['forum']['fup'] && $bforum['status']) { ?>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $bforum['fid'];?>"><?php echo $bforum['name'];?></a></li>
<?php } } ?>
</ul>
</div>
</div>

<?php if($recommendgroups) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>推薦<?php echo $_G['setting']['navs']['3']['navname'];?></h2>
</div>
<div class="bm_c cl">
<ul class="ml mls cl"><?php if(is_array($recommendgroups)) foreach($recommendgroups as $key => $group) { ?><li>
<a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>" target="_blank" class="avt"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>"></a>
<p><a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" target="_blank"><?php echo $group['name'];?></a></p>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } if(!($_G['forum']['simple'] & 1) && $_G['setting']['whosonlinestatus']) { ?>
<div class="bm">
<?php if($detailstatus) { ?>

<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($whosonline)) foreach($whosonline as $key => $online) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $online['uid'];?>" class="avt"><?php echo avatar($online[uid],small);?></a>
<?php if($online['uid']) { ?>
<p><a href="home.php?mod=space&amp;uid=<?php echo $online['uid'];?>"><?php echo $online['username'];?></a></p>
<?php } else { ?>
<p><?php echo $online['username'];?></p>
<?php } ?>
<span><?php echo $online['lastactivity'];?><?php echo "\n";?></span>
</li>
<?php } ?>
</ul>
</div>
<?php } else { ?>
<div class="bm_h cl">
<span class="o y"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;page=<?php echo $page;?>&amp;showoldetails=yes#online" class="nobdr"><img src="<?php echo IMGDIR;?>/collapsed_yes.gif" alt="" /></a></span>
<h2>正在瀏覽此版塊的會員 (<?php echo $onlinenum;?>)</h2>
</div>
<?php } ?>
</div>
<?php } } ?>
<div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_side_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_side_bottom'];?>
</div>
<?php } ?>
</div>
</div>
<?php if($_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])) { ?>
<ul class="p_pop" id="newspecial_menu" style="display: none">
<?php if(!$_G['forum']['allowspecialonly']) { ?><li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>">發表帖子</a></li><?php } if($_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']) { if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $threadsorts) { if($_G['forum']['threadsorts']['show'][$id]) { ?>
<li class="popupmenu_option"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;extra=<?php echo $extra;?>&amp;sortid=<?php echo $id;?>"><?php echo $threadsorts;?></a></li>
<?php } } } if($_G['group']['allowpostpoll']) { ?><li class="poll"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=1">發起投票</a></li><?php } if($_G['group']['allowpostreward']) { ?><li class="reward"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=3">發佈懸賞</a></li><?php } if($_G['group']['allowpostdebate']) { ?><li class="debate"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=5">發起辯論</a></li><?php } if($_G['group']['allowpostactivity']) { ?><li class="activity"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=4">發起活動</a></li><?php } if($_G['group']['allowposttrade']) { ?><li class="trade"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=2">出售商品</a></li><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<li class="popupmenu_option"<?php if($_G['setting']['threadplugins'][$tpid]['icon']) { ?> style="background-image:url(source/plugin/<?php echo $tpid;?>/<?php echo $_G['setting']['threadplugins'][$tpid]['icon'];?>)"<?php } ?>><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;specialextra=<?php echo $tpid;?>"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a></li>
<?php } } } ?>
</ul>
<?php } if($_G['setting']['visitedforums'] && $_G['forum']['status'] != 3) { ?>
<div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
<table cellspacing="0" cellpadding="0">
<tr>
<td id="v_forums">
<h3 class="mbn pbn bbda xg1">瀏覽過的版塊</h3>
<ul class="xl xl1">
<?php echo $_G['setting']['visitedforums'];?>
</ul>
</td>
</tr>
</table>
</div>
<?php } if($_G['setting']['threadmaxpages'] > 1 && $page && !$subforumonly) { ?>
<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <?php if($page > 1) { ?>1<?php } else { ?>0<?php } ?>, <?php if($page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']) { ?>1<?php } else { ?>0<?php } ?>, 'forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&filter=<?php echo $filter;?>&orderby=<?php echo $_GET['orderby'];?><?php echo $forumdisplayadd['page'];?>&<?php echo $multipage_archive;?>', <?php echo $page;?>);}</script>
<?php } if(empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && empty($_GET['filter']) ) { ?>
<script type="text/javascript">checkForumnew_handle = setTimeout(function () {checkForumnew(<?php echo $_G['fid'];?>, lasttime);}, checkForumtimeout);</script>
<?php } ?>
<div class="wp mtn">
</div>
<?php if(empty($_G['setting']['disfixednv_forumdisplay']) ) { ?><script>fixed_top_nv();</script><?php } ?>
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]--><?php include template('common/footer'); ?>