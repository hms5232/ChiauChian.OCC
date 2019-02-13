<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); $sipath="template/rabbit_ngbc/image/user.png";?><?php if($_G['uid']) { ?>
<div class="rabbit_nv_right"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="訪問我的空間"><div class="rabbit_nv_avtar"><?php echo avatar($_G[uid],middle);?></div></a><a href="home.php?mod=spacecp" target="_blank" title="&#x70B9;&#x51FB;&#x8FDB;&#x5165;&#x4E2A;&#x4EBA;&#x8BBE;&#x7F6E;&#x9762;&#x677F;">
        
<div class="rabbit_nvlitter"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" class="dropbtn"> <b><font color="#FFF"><?php echo $_G['username'];?></font></b></a><?php if($_G['member']['newprompt']) { ?><a href="home.php?mod=space&amp;do=notice"><span title="&#x60A8;&#x6709;<?php echo $_G['member']['newprompt'];?>&#x6761;&#x672A;&#x8BFB;&#x63D0;&#x9192;,&#x70B9;&#x51FB;&#x67E5;&#x770B;" class="<?php if($_G['member']['newprompt']) { ?>rabbit_ts<?php } ?>"><font color="#FFFFFF"><b>&nbsp;N&nbsp;</b></font></span></a><?php } elseif($_G['member']['newpm']) { ?><a href="home.php?mod=space&amp;do=pm"><span title="&#x6709;&#x4EBA;&#x6EF4;&#x6EF4;&#x4F60;,&#x8BF7;&#x70B9;&#x51FB;&#x67E5;&#x770B;" class="<?php if($_G['member']['newpm']) { ?>rabbit_pm<?php } ?>"><font color="#FFFFFF"><b>&nbsp;N&nbsp;</b></font></span></a><?php } ?>
<div class="rabbit_nvlitter">
<div class="rabbit_nvlitter-content">
<a href="home.php?mod=spacecp" target="_blank">&#x5E33;&#x865F;&#x8A2D;&#x5B9A;</a>
            <a href="home.php?mod=space&amp;do=pm" target="_blank"><?php if($_G['member']['newpm']) { ?><font color="red"><b>&#x6536;&#x5230;&#x77ED;&#x4FE1;</b></font><?php } else { ?>&#x6211;&#x7684;&#x77ED;&#x4FE1;<?php } ?></a>
            <a href="home.php?mod=space&amp;do=notice"id="myprompt" class="a" target="_blank"><?php if($_G['member']['newprompt']) { ?><font color="red"><b>&#x63D0;&#x9192;(<?php echo $_G['member']['newprompt'];?>)</b></font><?php } else { ?>&#x7AD9;&#x5185;&#x63D0;&#x9192;<?php } ?></a>
<?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
            <a href="admin.php" target="_blank">管理中心</a>
<a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" target="_blank">&#x9801;&#x9762;DIY</a>
<?php } if($_G['forum']['ismoderator'] && !$_GET['archiveid']) { if($_G['forum']['recyclebin']) { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?mod=forum&action=recyclebin&frames=yes<?php } elseif($_G['forum']['ismoderator']) { ?>forum.php?mod=modcp&action=recyclebin&fid=<?php echo $_G['fid'];?><?php } ?>" class="fa_bin" target="_blank">&#x56DE;&#x6536;&#x7AD9;</a>
<?php } ?>	<?php } if($_G['forum']['ismoderator'] && !$_GET['archiveid']) { if($_G['forum']['status'] != 3) { ?>
<a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>">&#x7BA1;&#x7406;&#x9762;&#x677F;</a>
<?php } else { ?>
<a href="forum.php?mod=group&amp;action=manage&amp;fid=<?php echo $_G['fid'];?>">&#x7BA1;&#x7406;&#x9762;&#x677F;</a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
        <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?>
        </div>
    </div></a></div>
<div class="rabbit_zx"><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">&#x767B;&#x51FA;</a></div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { } elseif(!$_G['connectguest']) { ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<div class="rabbit_nv_before"><div class="rabbit_icon" style="float:left;padding-right:0px;margin-top:-10px;"><img src=" <?php echo $sipath;?>"></div>&#x6B61;&#x8FCE;&#x60A8;&#x7684;&#x4F86;&#x8A2A; , &#x8ACB;<a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&amp;action=login')" style="color:#FFF">&#x767B;&#x5165;</a>&#x6216;<a href="member.php?mod=register" style="color:#FFF">&#x8A3B;&#x518A;</a></div>
<?php } else { ?>
<div class="rabbit_nv_before"><div class="rabbit_icon" style="float:left;padding-right:0px;margin-top:-10px;"><img src=" <?php echo $sipath;?>"></div>&#x6B61;&#x8FCE;&#x60A8;&#x7684;&#x4F86;&#x8A2A; , &#x8ACB;<a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&amp;action=login')" style="color:#FFF">&#x767B;&#x5165;</a>&#x6216;<a href="member.php?mod=register" style="color:#FFF">&#x8A3B;&#x518A;</a></div>
<?php } ?>
