<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');?><?php include template('common/header'); ?><div class="rabbit_bgwhite" style="background:#FFF;padding-right: 50px;padding-left: 50px;width: 1300px;min-width: 1000px;max-width: 1000px;float: right;margin-right: -60px;">
<div>
<style>
.Gplus{
        background:Crimson ;
        padding: 10px;
        height: 30px;
        font-size:23px;
        color:white;
width: 50%;
    }
.container {
background: WhiteSmoke   ;
height: 330px;
margin: auto;
padding: 10px;
border: 1px solid gray;

}
.one {
width: 50%;
height: 330px;
margin: auto;
float: left;
}
.two {
margin-left: 50%;
height: 330px;
margin: auto;


}
</style>

<script >
var requestURL = '  https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=68ee2e09be834f3b9c7746bd6a9de410';
var request = new XMLHttpRequest();
request.open('GET',requestURL);
request.responseType = 'json';
request.send();
request.onload = function(){
var google_news = request.response;
show_news(google_news);
}
function show_news(jsonObj) {
var news = jsonObj['articles'];

for(i = 0; i < 4; i++) {
document.getElementById('a0').src = news[0].urlToImage; 
document.getElementById('b'+ i).href = news[i].url;
document.getElementById('b'+ i).title = news[i].title;
document.getElementById('c'+ i).textContent = news[i].title;                 
document.getElementById('d'+ i).textContent = news[i].description;
}
}
</script>
        <script>
            function $(element){
            return element = document.getElementById(element);
        }
        function <?php echo $D;?>(){
            var d=$('class1content');
            var h=d.offsetHeight;
            var maxh=330;
            function dmove(){
                h+=10; //展開速度
                if(h>=maxh){
                    d.style.height='330px';
                    clearInterval(iIntervalId);
                }else{
                    d.style.display='block';
                    d.style.height=h+'px';
                }
            }
            iIntervalId=setInterval(dmove,2);
        }
        function <?php echo $D2;?>(){
            var d=$('class1content');
            var h=d.offsetHeight;
            var maxh=330;
            function dmove(){
                h-=10;//收縮速度
                if(h<=0){
                    d.style.display='none';
                    clearInterval(iIntervalId);
                }else{
                    d.style.height=h+'px';
                }
            }
            iIntervalId=setInterval(dmove,2);
        }
        
        function <?php echo $use;?>(){
            var d=$('class1content');

            if(d.style.display=='none'){
                <?php echo $D;?>();
                
            }else{
                <?php echo $D2;?>();
                
            }
        }
        </script>
<center><div class="Gplus" onclick="toggle_collapse('category_0');" title="click to open/close" style = "cursor:pointer;"><h1>BREAKING NEWS</h1></div></center>
<section class="container" id="category_0" style = "display: none;">
<div class="one">
<div style="position: relative; width:450px;height:330px;"> 
<a href=" #" style="color:white;" title="" target="_blank" id = "b0">
<img  style=" width:450px;height:330px;"  id = "a0">
<span style="position: absolute; bottom: 0; left: 0; padding: 20px;">
<center>
<h1 id = "c0"style="font-size:19px;"></h3>
<p id = "d0"></p>
</center>
</span>
</div> 
</div>


<div class="two">


<a href=" #" title="" target="_blank" id = "b1">
<h1 id = "c1" style="font-size:19px;" ></h3>
<p id = "d1" ></p>

<br>

<a href=" #" title="" target="_blank" id = "b2">
<h1 id = "c2" style="font-size:19px;"></h3>
<p id = "d2" ></p>

<br>

<a href=" #" title="" target="_blank" id = "b3">
<h1 id = "c3" style="font-size:19px;"></h3>
<p id = "d3" ></p>
<br>
<div >
    <p style = "float:right;color:white;" >
<a href = "http://www.bbc.com/news" target="_blank" title="http://www.bbc.com/news">
Copyright &copy;
BBC News
</a>
</p>
</div>
</div>
</section>
</div>
<div id="pt" class="bm cl">
<?php if(empty($gid) && $announcements) { ?>
<div class="y">
<div id="an">
<dl class="cl">
<dt class="z xw1">鍏憡:&nbsp;</dt>
<dd>
<div id="anc"><ul id="ancl"><?php echo $announcements;?></ul></div>
</dd>
</dl>
</div>
<script type="text/javascript">announcement();</script>
</div>
<?php } ?>
<div class="z">
<a href="./" class="nvhm" title="棣栭爜"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?>
</div>
<div class="z"><?php if(!empty($_G['setting']['pluginhooks']['index_status_extra'])) echo $_G['setting']['pluginhooks']['index_status_extra'];?></div>
</div>


<?php if(empty($gid)) { ?><?php echo adshow("text/wp a_t");?><?php } ?>

<style id="diy_style" type="text/css"></style>

<?php if(empty($gid)) { ?>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<?php } ?>

<div id="ct" class="wp cl<?php if($_G['setting']['forumallowside']) { ?> ct2<?php } ?>">
<?php if(empty($gid)) { ?>
<div id="chart" class="bm bw0 cl">
<p class="chart z">浠婃棩: <em><?php echo $todayposts;?></em><span class="pipe">|</span>鏄ㄦ棩: <em><?php echo $postdata['0'];?></em><span class="pipe">|</span>甯栧瓙: <em><?php echo $posts;?></em><span class="pipe">|</span>鏈冨摗: <em><?php echo $_G['cache']['userstats']['totalmembers'];?></em><?php if($_G['cache']['userstats']['newsetuser']) { ?><span class="pipe">|</span>姝¤繋鏂版渻鍝�: <em><a href="home.php?mod=space&amp;username=<?php echo rawurlencode($_G['cache']['userstats']['newsetuser']); ?>" target="_blank" class="xi2"><?php echo $_G['cache']['userstats']['newsetuser'];?></a></em><?php } ?></p>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['index_nav_extra'])) echo $_G['setting']['pluginhooks']['index_nav_extra'];?>
<?php if($_G['uid']) { if($_G['uid'] && !empty($forum_favlist)) { ?>
<a href="home.php?mod=space&amp;do=favorite&amp;type=forum" title="&#x6211;&#x6536;&#x85CF;&#x7684;&#x7248;&#x5757;" class="xi2">&#x6211;&#x7684;&#x6536;&#x85CF;&#x7248;&#x584A;</a><span class="pipe">|</span>
<?php } ?>
<a href="forum.php?mod=guide&amp;view=my" title="鎴戠殑甯栧瓙" class="xi2">鎴戠殑甯栧瓙</a><?php } if(!empty($_G['setting']['search']['forum']['status'])) { if($_G['uid']) { ?><span class="pipe">|</span><?php } ?><a href="forum.php?mod=guide&amp;view=new" title="鏈�鏂板洖寰�" class="xi2">鏈�鏂板洖寰�</a><?php } ?>
</div>
</div>
<?php } ?>
<!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->
<div class="mn">

<?php if(!empty($_G['setting']['grid']['showgrid'])) { ?>
<!-- index four grid -->
<div class="fl bm">
<div class="bm bmw cl">
<div id="category_grid" class="bm_c" >
<table cellspacing="0" cellpadding="0"><tr>
<?php if(!$_G['setting']['grid']['gridtype']) { ?>
<td valign="top" class="category_l1">
<div class="newimgbox">
<h4><span class="tit_newimg"></span>鏈�鏂板湒鐗�</h4>
<div class="module cl slidebox_grid" style="width:218px">
<script type="text/javascript">
var slideSpeed = 5000;
var slideImgsize = [218,200];
var slideBorderColor = '<?php echo $_G['style']['specialborder'];?>';
var slideBgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideImgs = new Array();
var slideImgLinks = new Array();
var slideImgTexts = new Array();
var slideSwitchColor = '<?php echo $_G['style']['tabletext'];?>';
var slideSwitchbgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideSwitchHiColor = '<?php echo $_G['style']['specialborder'];?>';<?php $k = 1;?><?php if(is_array($grids['slide'])) foreach($grids['slide'] as $stid => $svalue) { ?>slideImgs[<?php echo $k; ?>] = '<?php echo $svalue['image'];?>';
slideImgLinks[<?php echo $k; ?>] = '<?php echo $svalue['url'];?>';
slideImgTexts[<?php echo $k; ?>] = '<?php echo $svalue['subject'];?>';<?php $k++;?><?php } ?>
</script>
<script src="<?php echo $_G['setting']['jspath'];?>forum_slide.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</div>
</div>
</td>
<?php } ?>
<td valign="top" class="category_l2">
<div class="subjectbox">
<h4><span class="tit_subject"></span>鏈�鏂颁富椤�</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['newthread'])) foreach($grids['newthread'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="妯欓: <strong><?php echo $thread['oldsubject'];?></strong><br/>浣滆��: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>鏌ョ湅/鍥炲京: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<td valign="top" class="category_l3">
<div class="replaybox">
<h4><span class="tit_replay"></span>鏈�鏂板洖寰�</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['newreply'])) foreach($grids['newreply'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=redirect&amp;tid=<?php echo $thread['tid'];?>&amp;goto=lastpost#lastpost"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?>tip="妯欓: <strong><?php echo $thread['oldsubject'];?></strong><br/>浣滆��: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>鏌ョ湅/鍥炲京: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<td valign="top" class="category_l3">
<div class="hottiebox">
<h4><span class="tit_hottie"></span>鐔卞笘</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['hot'])) foreach($grids['hot'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="妯欓: <strong><?php echo $thread['oldsubject'];?></strong><br/>浣滆��: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>鏌ョ湅/鍥炲京: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<?php if($_G['setting']['grid']['gridtype']) { ?>
<td valign="top" class="category_l4">
<div class="goodtiebox">
<h4><span class="tit_goodtie"></span>绮捐彲甯栧瓙</h4>
<ul class="category_newlist"><?php if(is_array($grids['digest'])) foreach($grids['digest'] as $thread) { if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="妯欓: <strong><?php echo $thread['oldsubject'];?></strong><br/>浣滆��: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>鏌ョ湅/鍥炲京: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
 </ul>
 	</div>
</td>
<?php } ?>
</table>
</div>
</div>
</div>
<!-- index four grid end -->
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_top'])) echo $_G['setting']['pluginhooks']['index_top'];?>
<?php if(!empty($_G['cache']['heats']['message'])) { ?>
<div class="bm">
<div class="bm_h cl">
<h2><?php echo $_G['setting']['navs']['2']['navname'];?>鐔遍粸</h2>
</div>
<div class="bm_c cl">
<div class="heat z"><?php if(is_array($_G['cache']['heats']['message'])) foreach($_G['cache']['heats']['message'] as $data) { ?><dl class="xld">
<dt><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></dt>
<dd><?php echo $data['message'];?></dd>
</dl>
<?php } ?>
</div>
<ul class="xl xl1 heatl"><?php if(is_array($_G['cache']['heats']['subject'])) foreach($_G['cache']['heats']['subject'] as $data) { ?><li><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>&middot; <a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_catlist_top'])) echo $_G['setting']['pluginhooks']['index_catlist_top'];?>
<div class="fl bm">
<?php if(!empty($collectiondata['follows'])) { $forumscount = count($collectiondata['follows']);?><?php $forumcolumns = 4;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_-1_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-1'];?>" title="鏀惰捣/灞曢枊" alt="鏀惰捣/灞曢枊" onclick="toggle_collapse('category_-1');" />
</span>
<h2><a href="forum.php?mod=collection&amp;op=my">鎴戣▊闁辩殑灏堣集</a></h2>
</div>
<div id="category_-1" class="bm_c" style="<?php echo $collapse['category_-1']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $ctorderid = 0;?><?php if(is_array($collectiondata['follows'])) foreach($collectiondata['follows'] as $key => $colletion) { if($ctorderid && ($ctorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($ctorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="fl_icn_g">
<a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>" target="_blank"><img src="<?php echo IMGDIR;?>/forum<?php if($followcollections[$key]['lastvisit'] < $colletion['lastupdate']) { ?>_new<?php } ?>.gif" alt="<?php echo $colletion['name'];?>" /></a>
</div>
<dl>
<dt><a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>"><?php echo $colletion['name'];?></a></dt>
<dd><em>涓婚: <?php echo dnumber($colletion['threadnum']); ?></em>, <em>瑭曡珫: <?php echo dnumber($colletion['commentnum']); ?></em></dd>
<dd>
<?php if($colletion['lastpost']) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($colletion['lastsubject'], 30); ?></a> <cite><?php echo dgmdate($colletion[lastposttime]);?> <?php if($colletion['lastposter']) { ?><?php echo $colletion['lastposter'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">鏈�寰岀櫦琛�: <?php echo dgmdate($colletion[lastposttime]);?></a>
<?php } } else { ?>
寰炴湭
<?php } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]];?>
</dl>
</td><?php $ctorderid++;?><?php } if(($columnspad = $ctorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div>

<?php } if(empty($gid) && !empty($forum_favlist)) { $forumscount = count($forum_favlist);?><?php $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl"style="display:none !important;">
<div class="bm_h cl">
<span class="o">
<img id="category_0_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_0'];?>" title="鏀惰捣/灞曢枊" alt="鏀惰捣/灞曢枊" onclick="toggle_collapse('category_0');" />
</span>
<h2><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">鎴戞敹钘忕殑鐗堝</a></h2>
</div>
<div id="category_0" class="bm_c" style="<?php echo $collapse['category_0']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $favorderid = 0;?><?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { if($favforumlist[$favorite['id']]) { $forum=$favforumlist[$favorite[id]];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><?php if($forumcolumns>1) { if($favorderid && ($favorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($favorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="fl_icn_g"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="浠婃棩"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($forum['redirect'])) { ?><dd><em>涓婚: <?php echo dnumber($forum['threads']); ?></em>, <em>甯栨暩: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($forum['permission'] == 1) { ?>
绉佸瘑鐗堝
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">閺堟帴鍒板閮ㄥ湴鍧�</a>
<?php } elseif(is_array($forum['lastpost'])) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">鏈�寰岀櫦琛�: <?php echo $forum['lastpost']['dateline'];?></a>
<?php } } else { ?>
寰炴湭
<?php } } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</dl>
</td><?php $favorderid++;?><?php } else { ?>
<td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</td>
<td>
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="浠婃棩"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>瀛愮増濉�: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>鐗堜富: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
绉佸瘑鐗堝
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">閺堟帴鍒板閮ㄥ湴鍧�</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
寰炴湭
<?php } } ?>
</div>
</td>
</tr>
<tr class="fl_row">

<?php } } } if(($columnspad = $favorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div><?php echo adshow("intercat/bm a_c/-1");?><?php } if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><?php if(!empty($_G['setting']['pluginhooks']['index_catlist'][$cat[fid]])) echo $_G['setting']['pluginhooks']['index_catlist'][$cat[fid]];?>
<div class="bm bmw <?php if($cat['forumcolumns']) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_<?php echo $cat['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $cat['collapseimg'];?>" title="鏀惰捣/灞曢枊" alt="鏀惰捣/灞曢枊" onclick="toggle_collapse('category_<?php echo $cat['fid'];?>');" />
</span>
<?php if($cat['moderators']) { ?><span class="y">鍒嗗崁鐗堜富: <?php echo $cat['moderators'];?></span><?php } $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';?><h2><a href="<?php if(!empty($caturl)) { ?><?php echo $caturl;?><?php } else { ?>forum.php?gid=<?php echo $cat['fid'];?><?php } ?>" style="<?php if($cat['extra']['namecolor']) { ?>color: <?php echo $cat['extra']['namecolor'];?>;<?php } ?>"><?php echo $cat['name'];?></a></h2>
</div>
<div id="category_<?php echo $cat['fid'];?>" class="bm_c" style="<?php echo $collapse['category_'.$cat['fid']]; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><?php if($cat['forumcolumns']) { if($forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)) { ?>
</tr>
<?php if($forum['orderid'] < $cat['forumscount']) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g" width="<?php echo $cat['forumcolwidth'];?>">
<div class="fl_icn_g"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="浠婃棩"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($forum['redirect'])) { ?><dd><em>涓婚: <?php echo dnumber($forum['threads']); ?></em>, <em>甯栨暩: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($forum['permission'] == 1) { ?>
绉佸瘑鐗堝
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">閺堟帴鍒板閮ㄥ湴鍧�</a>
<?php } elseif(is_array($forum['lastpost'])) { if($cat['forumcolumns'] < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">鏈�寰岀櫦琛�: <?php echo $forum['lastpost']['dateline'];?></a>
<?php } } else { ?>
寰炴湭
<?php } } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</dl>
</td>
<?php } else { ?>
<td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</td>
<td>
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="浠婃棩"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>瀛愮増濉�: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>鐗堜富: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
绉佸瘑鐗堝
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">閺堟帴鍒板閮ㄥ湴鍧�</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
寰炴湭
<?php } } ?>
</div>
</td>
</tr>
<tr class="fl_row">
<?php } } ?>
<?php echo $cat['endrows'];?>
</tr>
</table>
</div>
</div><?php echo adshow("intercat/bm a_c/$cat[fid]");?><?php } if(!empty($collectiondata['data'])) { $forumscount = count($collectiondata['data']);?><?php $forumcolumns = 4;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_-2_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-2'];?>" title="鏀惰捣/灞曢枊" alt="鏀惰捣/灞曢枊" onclick="toggle_collapse('category_-2');" />
</span>
<h2><a href="forum.php?mod=collection">娣樺皥杓帹钖�</a></h2>
</div>
<div id="category_-2" class="bm_c" style="<?php echo $collapse['category_-2']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $ctorderid = 0;?><?php if(is_array($collectiondata['data'])) foreach($collectiondata['data'] as $key => $colletion) { if($ctorderid && ($ctorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($ctorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="fl_icn_g">
<a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>" target="_blank"><img src="<?php echo IMGDIR;?>/forum.gif" alt="<?php echo $colletion['name'];?>" /></a>
</div>
<dl>
<dt><a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>"><?php echo $colletion['name'];?></a></dt>
<dd><em>涓婚: <?php echo dnumber($colletion['threadnum']); ?></em>, <em>瑭曡珫: <?php echo dnumber($colletion['commentnum']); ?></em></dd>
<dd>
<?php if($colletion['lastpost']) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($colletion['lastsubject'], 30); ?></a> <cite><?php echo dgmdate($colletion[lastposttime]);?> <?php if($colletion['lastposter']) { ?><?php echo $colletion['lastposter'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">鏈�寰岀櫦琛�: <?php echo dgmdate($colletion[lastposttime]);?></a>
<?php } } else { ?>
寰炴湭
<?php } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]];?>
</dl>
</td><?php $ctorderid++;?><?php } if(($columnspad = $ctorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div>

<?php } ?>

</div>

<?php if(!empty($_G['setting']['pluginhooks']['index_middle'])) echo $_G['setting']['pluginhooks']['index_middle'];?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<?php if(empty($gid) && $_G['setting']['whosonlinestatus']) { ?>
<div id="online" class="bm oll">
<div class="bm_h">
<?php if($detailstatus) { ?>
<span class="o"><a href="forum.php?showoldetails=no#online" title="鏀惰捣/灞曢枊"><img src="<?php echo IMGDIR;?>/collapsed_no.gif" alt="鏀惰捣/灞曢枊" /></a></span>
<h3>
<strong><a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">鍦ㄧ窔鏈冨摗</a></strong>
<span class="xs1">- <strong><?php echo $onlinenum;?></strong> 浜哄湪绶�
- <strong><?php echo $membercount;?></strong> 鏈冨摗(<strong><?php echo $invisiblecount;?></strong> 闅辫韩),
<strong><?php echo $guestcount;?></strong> 浣嶉亰瀹�
- 鏈�楂樿閷勬槸 <strong><?php echo $onlineinfo['0'];?></strong> 鏂� <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } else { if(empty($_G['setting']['sessionclose'])) { ?>
<span class="o"><a href="forum.php?showoldetails=yes#online" title="鏀惰捣/灞曢枊"><img src="<?php echo IMGDIR;?>/collapsed_yes.gif" alt="鏀惰捣/灞曢枊" /></a></span>
<?php } ?>
<h3>
<strong>
<?php if(!empty($_G['setting']['whosonlinestatus'])) { ?>
鍦ㄧ窔鏈冨摗
<?php } else { ?>
<a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">鍦ㄧ窔鏈冨摗</a>
<?php } ?>
</strong>
<span class="xs1">- 绺借▓ <strong><?php echo $onlinenum;?></strong> 浜哄湪绶�
<?php if($membercount) { ?>- <strong><?php echo $membercount;?></strong> 鏈冨摗,<strong><?php echo $guestcount;?></strong> 浣嶉亰瀹�<?php } ?>
- 鏈�楂樿閷勬槸 <strong><?php echo $onlineinfo['0'];?></strong> 鏂� <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } ?>
</div>
<?php if($_G['setting']['whosonlinestatus'] && $detailstatus) { ?>
<dl id="onlinelist" class="bm_c">
<dt class="ptm pbm bbda"><?php echo $_G['cache']['onlinelist']['legend'];?></dt>
<?php if($detailstatus) { ?>
<dd class="ptm pbm">
<ul class="cl">
  <style type="text/css">
#onlinelist .wv_online_avatar{width:26px;height:26px;margin: 0px; 

padding: 2px;}

#onlinelist li .wv_online_g1{border: 1px solid #b9b9b9;}
#onlinelist li .wv_online_g2{border: 1px solid #b9b9b9;}
#onlinelist li .wv_online_g3{border: 1px solid #b9b9b9;}
#onlinelist li .wv_online_gmember{border: 1px solid #b9b9b9;}
</style>
                        <!--在线列表显示头像 by 茶姒兔子--><?php if($whosonline) { ?>
                                <?php if(is_array($whosonline)) foreach($whosonline as $key => $online) { ?>                                        <li title="鏅傞枔: 

<?php echo $online['lastactivity'];?><?php echo "\n";?>鎿嶄綔: <?php echo $online['action'];?> <?php if($online['fid']) { ?><?php echo "\n";?>鐗堝: <?php echo $online['fid'];?><?php } ?>">
                                        <?php if($online['uid']!=0) { ?>
                                                <img src="<?php echo discuz_uc_avatar($online['uid'], 'small',true);; ?>" alt="" 

class="wv_online_avatar wv_online_g<?php if($online['groupid']>3) { ?>--

>member<!--<?php } else { ?><?php echo $online['groupid'];?><?php } ?>" />
                                        <?php } else { ?>
                                                <img 

src="images/common/<?php echo $online['icon'];?>" alt="" class="normalimg" />
                                        <?php } ?>

                                        <?php if($online['uid']) { ?>
                                                <a href="home.php?mod=space&amp;uid=<?php echo $online['uid'];?>"><?php echo $online['username'];?></a>
                                        <?php } else { ?>
                                                <?php echo $online['username'];?>
                                        <?php } ?>
                                        </li>
                                <?php } ?>
                        <?php } else { ?>
                                <li style="width: auto">鐣跺墠鍙湁閬婂鎴栭毐韬渻鍝″湪绶�</li>
                        <?php } ?> 
</ul>
</dd>
<?php } ?>
</dl>
<?php } ?>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_bottom'])) echo $_G['setting']['pluginhooks']['index_bottom'];?>
</div>

<?php if($_G['setting']['forumallowside']) { ?>
<div id="sd" class="sd">
<?php if(!empty($_G['setting']['pluginhooks']['index_side_top'])) echo $_G['setting']['pluginhooks']['index_side_top'];?>
<div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>
<?php if(!empty($_G['setting']['pluginhooks']['index_side_bottom'])) echo $_G['setting']['pluginhooks']['index_side_bottom'];?>
</div>
<?php } ?>
</div>
<?php if($_G['group']['radminid'] == 1) { helper_manyou::checkupdate();?><?php } if(empty($_G['setting']['disfixednv_forumindex']) ) { ?><script>fixed_top_nv();</script><?php } include template('common/footer'); ?>