<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$__IMGDIR = IMGDIR;$return = <<<EOF


<!--
ID: toplist_7ree 
version: 8.2
(C)2007-2016 [www.7ree.com]
This is NOT a freeware, use is subject to license terms
update: 2016/9/20 18:40
Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
More Plugins: http://addon.discuz.com/?@7ree
-->


            <div class="fl bm">
<div class="bm bmw cl">


EOF;
 if($vars_7ree['showtitle_7ree']) { 
$return .= <<<EOF

<div class="bm_h cl">
<span class="o">
<img id="category_{$cat['fid']}_img" src="{$__IMGDIR}/collapsed_no.gif" title="收起、展開四格" alt="收起、展開四格" onclick="toggle_collapse('category_{$cat['fid']}');" 
EOF;
 if(!$_G['uid'] && $tiptime_7ree ) { 
$return .= <<<EOF
onload="showPrompt(null, null, '<span>{$vars_7ree['guesttipmsg_7ree']}</span> ', '{$tiptime_7ree}');"
EOF;
 } 
$return .= <<<EOF
/>
</span>
<span class="y" 
EOF;
 if($vars_7ree['titlecolor_7ree']) { 
$return .= <<<EOF
style="color: {$vars_7ree['titlecolor_7ree']};"
EOF;
 } 
$return .= <<<EOF
>
       

EOF;
 if($right_show_7ree == "show_tools_7ree") { 
$return .= <<<EOF

<a  href="plugin.php?id=toplist_7ree:desktopshotcut_7ree" 
EOF;
 if($vars_7ree['titlecolor_7ree']) { 
$return .= <<<EOF
style="color: {$vars_7ree['titlecolor_7ree']};"
EOF;
 } 
$return .= <<<EOF
>下載桌面快捷訪問</a>
    
EOF;
 } elseif($right_show_7ree == "show_time_7ree") { 
$return .= <<<EOF

{$date_7ree} {$week_7ree} {$time_7ree}
    
EOF;
 } else { 
$return .= <<<EOF

    
EOF;
 } 
$return .= <<<EOF

            </span>

<h2 
EOF;
 if($vars_7ree['titlecolor_7ree']) { 
$return .= <<<EOF
style="color: {$vars_7ree['titlecolor_7ree']};"
EOF;
 } 
$return .= <<<EOF
>					

EOF;
 if($headertitleshow_7ree == "show_time_7ree") { 
$return .= <<<EOF

{$date_7ree} {$week_7ree} {$time_7ree}

EOF;
 } elseif($headertitleshow_7ree == "diymsg_7ree") { 
$return .= <<<EOF

{$vars_7ree['leftdiymsg_7ree']}

EOF;
 } elseif($headertitleshow_7ree == "health_7ree" ) { 
$return .= <<<EOF

『健康時刻』
<script language="JavaScript">
<!--
var health_message_7ree="";
day = new Date( );
hr = day.getHours( );
if (( hr >= 0 ) && (hr <= 1 ))
health_message_7ree="0點~1點：進入睡眠狀態，充分恢復體能。"
if (( hr >= 1 ) && (hr <= 2 ))
health_message_7ree="1點~2點：人體進入淺睡眠階段，易醒，對痛覺特別敏感。"
if (( hr >= 2 ) && (hr <= 3 ))
health_message_7ree=" 體內大部分器官處於一天中工作最慢的時刻。肝臟緊張地工作，為人體排毒。"
if (( hr >= 3 ) && (hr <= 4 ))
health_message_7ree="3點~4點：全身處於休息狀態，肌肉完全放鬆。"
if (( hr >= 4 ) && (hr <= 5 ))
health_message_7ree="4點~5點：血壓最低，人體腦部供血最少。所以，此時老年人容易發生心腦血管意外。"
if (( hr >= 5 ) && (hr <= 6 ))
health_message_7ree="5點~6點：經歷了一定時間的睡眠，人體得到了充分休息。此時起床，顯得精神飽滿。"
if (( hr >= 6 ) && (hr <= 7 ))
health_message_7ree="6點~7點：血壓開始升高，心跳也逐漸加快。"
if (( hr >= 7 ) && (hr <= 8 ))
health_message_7ree="7點~8點：體溫開始上升，人體免疫力最強。"
if (( hr >= 8 ) && (hr <= 9 ))
health_message_7ree="8點~9點：皮膚有毒物質排除殆盡，性激素含量最高。"
if (( hr >= 9 ) && (hr <= 10 ))
health_message_7ree="9點~10點：皮膚痛覺降低。此時是就醫注射的好時機。"
if (( hr >= 10 ) && (hr <= 11 ))
health_message_7ree="10點~11點：精力充沛，最適宜工作。"
if (( hr >= 11 ) && (hr <= 12 ))
health_message_7ree="11點~12點：精力最旺盛，人體不易感覺疲勞。"
if (( hr >= 12 ) && (hr <= 13 ))
health_message_7ree="12點~13點：經歷了一個上午的工作，人體需要休息。"
if (( hr >= 13 ) && (hr <= 14 ))
health_message_7ree="13點~14點：胃液分泌最多，胃腸加緊工作，適宜進餐，稍感疲乏，需要短時間的休息。"
if (( hr >= 14 ) && (hr <= 15 ))
health_message_7ree="14點~15點：人體應激能力下降，全身反應遲鈍。"
if (( hr >= 15 ) && (hr <= 16 ))
health_message_7ree="15點~16點：體溫最高，工作能力開始恢復。"
if (( hr >= 16 ) && (hr <= 17 ))
health_message_7ree="16點~17點：血糖升高，臉部最紅。"
if (( hr >= 17 ) && (hr <= 18 ))
health_message_7ree="17點~18點：工作效率最高，肺部呼吸運動最活躍，適宜進行體育鍛煉。"
if (( hr >= 18 ) && (hr <= 19 ))
health_message_7ree="18點~19點：人體痛覺再度降低。"
if (( hr >= 19 ) && (hr <= 20 ))
health_message_7ree="19點~20點：血壓略有升高。此時，人們情緒最不穩定。"
if (( hr >= 20 ) && (hr <= 21 ))
health_message_7ree="20點~21點：記憶力最強，大腦反應異常迅速。"
if (( hr >= 21 ) && (hr <= 22 ))
health_message_7ree="21點~22點：腦神經反應活躍，適宜學習和記憶。"
if (( hr >= 22 ) && (hr <= 23 ))
health_message_7ree="22點~23點：呼吸開始減慢，體溫逐漸下降。"
if (( hr >= 23 ) && (hr <= 24 ))
health_message_7ree="23點~24點：機體功能處於休息狀態，一天的疲勞開始緩解。"

document.write(health_message_7ree)
//--->
</script>


EOF;
 } 
$return .= <<<EOF

</h2>
</div>

EOF;
 } 
$return .= <<<EOF



<div id="category_{$cat['fid']}" class="bm_c" style="border-top: 1px #CDCDCD solid;">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr 
EOF;
 if($vars_7ree['colcolor_7ree']) { 
$return .= <<<EOF
style="color: {$vars_7ree['colcolor_7ree']};"
EOF;
 } 
$return .= <<<EOF
>

EOF;
 if($vars_7ree['pic_on_7ree']) { 
$return .= <<<EOF

<td width="{$vars_7ree['ge_width_7ree']}" align="center"><strong>{$pic_title_7ree}</strong></td>

EOF;
 } if($vars_7ree['new_on_7ree']) { 
$return .= <<<EOF

<td width="{$vars_7ree['ge_width_7ree']}" align="center"><strong>{$new_title_7ree}</strong</td>

EOF;
 } if($vars_7ree['rep_on_7ree']) { 
$return .= <<<EOF

<td width="{$vars_7ree['ge_width_7ree']}" align="center"><strong>{$rep_title_7ree}</strong></td>

EOF;
 } if($vars_7ree['dig_on_7ree']) { 
$return .= <<<EOF

<td width="{$vars_7ree['ge_width_7ree']}" align="center"><strong>{$dig_title_7ree}</strong></td>

EOF;
 } if($vars_7ree['hot_on_7ree']) { 
$return .= <<<EOF

<td width="{$vars_7ree['ge_width_7ree']}" align="center"><strong>{$hot_title_7ree}</strong></td>

EOF;
 } 
$return .= <<<EOF

</tr>


<tr class="fl_row">

EOF;
 if($vars_7ree['pic_on_7ree']) { 
$return .= <<<EOF

   <td width="{$vars_7ree['ge_width_7ree']}" align="left" style="vertical-align:top;">
   <div id="showpic_7ree" style="height:auto;" >
   
    <script type="text/javascript">
    var swf_width='{$width_7ree}';
var swf_height='{$height_7ree}';
var config='5|0xffffff|0x0099ff|50|0xffffff|0x0099ff|0x000000';
var files='{$showpicpics}';
var links='{$showpiclinks}';
var texts='{$showpictexts}';
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="source/plugin/toplist_7ree/template/images/focus.swf" />');
document.write('<param name="quality" value="high" />');
document.write('<param name="menu" value="false" />');
    document.write('<param name="wmode" value="transparent" />');
document.write('<param name="FlashVars" value="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'" />');
document.write('<embed src="source/plugin/toplist_7ree/template/images/focus.swf" wmode="opaque" FlashVars="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
document.write('</object>');
    </script>
        
   </div>
   </td>

EOF;
 } if($vars_7ree['new_on_7ree']) { 
$return .= <<<EOF

      <td  width="{$vars_7ree['ge_width_7ree']}" style="vertical-align:top;">
   <div  id="new1" style="height:auto;" ><div  id="new2">
      
EOF;
 if(is_array($new_post_threadlist)) foreach($new_post_threadlist as $nthread) { 
$return .= <<<EOF
        <div style="overflow: hidden;height: 20px; width: 96%; word-break:break-all; 
EOF;
 if($vars_7ree['bordercolor_7ree']) { 
$return .= <<<EOF
border-bottom:1px dashed {$vars_7ree['bordercolor_7ree']}; 
EOF;
 } 
$return .= <<<EOF
" 
        
EOF;
 if($linetitle_style_7ree == "on_popupmenu_7ree") { 
$return .= <<<EOF
 
        id="new_7ree_{$nthread['tid']}"  onmouseover="showMenu({'ctrlid':this.id,'duration':'1'})"
        
EOF;
 } 
$return .= <<<EOF

        > <a href="forum.php?mod=viewthread&amp;tid={$nthread['tid']}"  {$nthread['highlight']} {$blank_7ree}>
EOF;
 if($vars_7ree['showauthor_7ree']) { 
$return .= <<<EOF
<span  class="y xg1" style="margin-right:5px;">[{$nthread['author']}]</span>
EOF;
 } 
$return .= <<<EOF
<img src="source/plugin/toplist_7ree/template/images/list_7ree.gif" border="0" align="absmiddle"/> {$nthread['view_subject']}</a>
        </div>

EOF;
 if($linetitle_style_7ree == "on_popupmenu_7ree") { 
$return .= <<<EOF

       <div id="new_7ree_{$nthread['tid']}_menu" class="p_pop" style="width:220px;display:none">
       &nbsp;&nbsp;<strong {$nthread['highlight']}>{$nthread['view_subject']}</strong><br>
   &nbsp;&nbsp;版塊：{$nthread['forumname']}<br>
       &nbsp;&nbsp;作者：{$nthread['author']}<br>
       &nbsp;&nbsp;時間：{$nthread['date']}<br>
       &nbsp;&nbsp;瀏覽：{$nthread['views']}次&nbsp;&nbsp;回復：{$nthread['replies']}次
       
       </ul>
       </div>
        
EOF;
 } 
$return .= <<<EOF

      
EOF;
 } 
$return .= <<<EOF

      
      </div></div> 
   </td>

EOF;
 } if($vars_7ree['rep_on_7ree']) { 
$return .= <<<EOF

      <td  width="{$vars_7ree['ge_width_7ree']}" style="vertical-align:top;">
   <div  id="rep1" style="height:auto;" ><div  id="rep2">
      
EOF;
 if(is_array($reply_post_threadlist)) foreach($reply_post_threadlist as $rthread) { 
$return .= <<<EOF
       <div style="overflow: hidden;height: 20px; width: 96%; word-break:break-all; 
EOF;
 if($vars_7ree['bordercolor_7ree']) { 
$return .= <<<EOF
border-bottom:1px dashed {$vars_7ree['bordercolor_7ree']}; 
EOF;
 } 
$return .= <<<EOF
" 
       
EOF;
 if($linetitle_style_7ree == "on_popupmenu_7ree") { 
$return .= <<<EOF

       id="rep_7ree_{$rthread['tid']}"  onmouseover="showMenu({'ctrlid':this.id,'duration':'1'})"
        
EOF;
 } 
$return .= <<<EOF

       >  
       
EOF;
 if($vars_7ree['replaygoto_7ree']==1) { 
$return .= <<<EOF

       <a href="forum.php?mod=viewthread&amp;tid={$rthread['tid']}" {$rthread['highlight']} {$blank_7ree}>
       
EOF;
 } elseif($vars_7ree['replaygoto_7ree']==2) { 
$return .= <<<EOF

       <a href="forum.php?mod=redirect&amp;tid={$rthread['tid']}&amp;goto=lastpost#lastpost" {$rthread['highlight']} {$blank_7ree}>
       
EOF;
 } 
$return .= <<<EOF

       
EOF;
 if($vars_7ree['showauthor_7ree']) { 
$return .= <<<EOF
<span class="y xg1" style="margin-right:5px;">[{$rthread['lastposter']}]</span>
EOF;
 } 
$return .= <<<EOF
<img src="source/plugin/toplist_7ree/template/images/list_7ree.gif" border="0" align="absmiddle"/> {$rthread['view_subject']}</a></div>

EOF;
 if($linetitle_style_7ree == "on_popupmenu_7ree") { 
$return .= <<<EOF
 
       <div id="rep_7ree_{$rthread['tid']}_menu" class="p_pop" style="width:220px;display:none">
       &nbsp;&nbsp;<strong {$rthread['highlight']}>{$rthread['view_subject']}</strong><br>
       &nbsp;&nbsp;版塊：{$rthread['forumname']}<br>
       &nbsp;&nbsp;回復：{$rthread['lastposter']}<br>
       &nbsp;&nbsp;時間：{$rthread['lastreplytime']}<br>
       &nbsp;&nbsp;瀏覽：{$rthread['views']}次&nbsp;&nbsp;回復：{$rthread['replies']}次
       </div>
       
EOF;
 } 
$return .= <<<EOF

      
EOF;
 } 
$return .= <<<EOF

            </div></div>
   </td>

EOF;
 } if($vars_7ree['dig_on_7ree']) { 
$return .= <<<EOF

      <td width="{$vars_7ree['ge_width_7ree']}" style="vertical-align:top;">
   <div  id="dig1" style="height:auto;" ><div  id="dig2">
      
EOF;
 if(is_array($digest_post_threadlist)) foreach($digest_post_threadlist as $dthread) { 
$return .= <<<EOF
       <div style="overflow: hidden;height: 20px; width: 96%; word-break:break-all; 
EOF;
 if($vars_7ree['bordercolor_7ree']) { 
$return .= <<<EOF
border-bottom:1px dashed {$vars_7ree['bordercolor_7ree']}; 
EOF;
 } 
$return .= <<<EOF
" 
       
EOF;
 if($linetitle_style_7ree == "on_popupmenu_7ree") { 
$return .= <<<EOF
 
       id="dig_7ree_{$dthread['tid']}"  onmouseover="showMenu({'ctrlid':this.id,'duration':'1'})"
       
EOF;
 } 
$return .= <<<EOF

       > <a href="forum.php?mod=viewthread&amp;tid={$dthread['tid']}" {$dthread['highlight']} {$blank_7ree}>
EOF;
 if($vars_7ree['showauthor_7ree']) { 
$return .= <<<EOF
<span class="y xg1" style="margin-right:5px;">[{$dthread['author']}]</span>
EOF;
 } 
$return .= <<<EOF
<img src="source/plugin/toplist_7ree/template/images/list_7ree.gif" border="0" align="absmiddle"/> {$dthread['view_subject']}</a></div>

EOF;
 if($linetitle_style_7ree == "on_popupmenu_7ree") { 
$return .= <<<EOF
 
       <div id="dig_7ree_{$dthread['tid']}_menu" class="p_pop" style="width:220px;display:none">
       &nbsp;&nbsp;<strong {$dthread['highlight']}>{$dthread['view_subject']}</strong><br>
       &nbsp;&nbsp;版塊：{$dthread['forumname']}<br>
       &nbsp;&nbsp;作者：{$dthread['author']}<br>
       &nbsp;&nbsp;時間：{$dthread['date']}<br>
       &nbsp;&nbsp;瀏覽：{$dthread['views']}次&nbsp;&nbsp;回復：{$dthread['replies']}次
       </div>

EOF;
 } 
$return .= <<<EOF

      
EOF;
 } 
$return .= <<<EOF

            </div></div>
   </td>  

EOF;
 } if($vars_7ree['hot_on_7ree']) { 
$return .= <<<EOF

<td width="{$vars_7ree['ge_width_7ree']}" align="left" style="vertical-align:top;">
   <div  id="hot1" style="height:auto;"><div  id="hot2">
      
EOF;
 if(is_array($hot_post_threadlist)) foreach($hot_post_threadlist as $hthread) { 
$return .= <<<EOF
       <div style="overflow: hidden;height: 20px; width: 96%; word-break:break-all; 
EOF;
 if($vars_7ree['bordercolor_7ree']) { 
$return .= <<<EOF
border-bottom:1px dashed {$vars_7ree['bordercolor_7ree']}; 
EOF;
 } 
$return .= <<<EOF
"
       
EOF;
 if($linetitle_style_7ree == "on_popupmenu_7ree") { 
$return .= <<<EOF
 
         id="hot_7ree_{$hthread['tid']}" onmouseover="showMenu({'ctrlid':this.id,'duration':'1'})"
         
EOF;
 } 
$return .= <<<EOF

         > <a href="forum.php?mod=viewthread&amp;tid={$hthread['tid']}" {$hthread['highlight']} {$blank_7ree}>
EOF;
 if($vars_7ree['showauthor_7ree']) { 
$return .= <<<EOF
<span class="y xg1" style="margin-right:5px;">[{$hthread['author']}]</span>
EOF;
 } 
$return .= <<<EOF
<img src="source/plugin/toplist_7ree/template/images/list_7ree.gif" border="0" align="absmiddle"/> {$hthread['view_subject']}</a></div>

EOF;
 if($linetitle_style_7ree == "on_popupmenu_7ree") { 
$return .= <<<EOF
 
       <div id="hot_7ree_{$hthread['tid']}_menu" class="p_pop" style="width:220px;display:none">
       <strong {$hthread['highlight']}>{$hthread['view_subject']}</strong><br>
       &nbsp;&nbsp;版塊：{$hthread['forumname']}<br>
       &nbsp;&nbsp;作者：{$hthread['author']}<br>
       &nbsp;&nbsp;時間：{$hthread['date']}<br>
       &nbsp;&nbsp;瀏覽：{$hthread['views']}次&nbsp;&nbsp;回復：{$hthread['replies']}次
       </div>

EOF;
 } 
$return .= <<<EOF

      
EOF;
 } 
$return .= <<<EOF

            </div></div>
</td>

EOF;
 } 
$return .= <<<EOF


</tr>
</table>
</div>
</div>
</div>

EOF;
 if($newbienum_7ree) { 
$return .= <<<EOF

<div style="height:56px;width:99%;margin-bottom:10px; clear:both;">
<div style="margin-right:5px; padding:0px 3px 0px 3px; width:12px; height:56px;border:1px solid #CDCDCD; overflow:hidden; word-wrap:break-word; float:left;">
{$vars_7ree['member_title_7ree']}
</div>
<div style="overflow:hidden; height:55px; float:left;">
EOF;
 if(is_array($newbie_list_7ree)) foreach($newbie_list_7ree as $newbie_list_value) { 
$return .= <<<EOF
<span class="avt" style="margin-left:3px; float:left;">
<a href="home.php?mod=space&amp;uid={$newbie_list_value['uid']}" target="_blank" title="{$newbie_list_value['username']}@{$newbie_list_value['regdate']}">{$newbie_list_value['avatar_7ree']}</a>
</span>

EOF;
 } 
$return .= <<<EOF

</div>

</div>

EOF;
 } 
$return .= <<<EOF




EOF;
?>
