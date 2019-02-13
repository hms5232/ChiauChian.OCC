<?php
	if (!defined('IN_DISCUZ')) {
		exit('Access Denied');
	}

	global $_G;
	$setting = $_G['cache']['plugin']['strong_kx'];
	$homeset = $setting['homeset'];
	$homeid = $setting['homeid'];
	$homeurl = 'forum.php?mod=forumdisplay&fid='.$homeid;
	$tophdcolor = $setting['dh_bg_color'];
	$dh_font_color = $setting['dh_font_color'];
	$dh_fontf_color = $setting['dh_fontf_color'];
	$buttoncolor = $setting['buttoncolor'];
	$fontcolor = $setting['fontcolor'];	
	$linkcolor = $setting['linkcolor'];	
	$dianjingcolor = $setting['dianjingcolor'];		
	$cbl_color_l = $setting['cbl_bg_l'];
	$cbl_color_r = $setting['cbl_bg_r'];	
	$titledescribe = $setting['titledescribe'];
	$titlepic = $setting['titlepic'];
	$titledescribepic = $setting['titledescribepic'];
	$titledescribelen = $setting['titledescribelen'];
	$openforum = $setting['openforum'];	
	$opensubforum = $setting['opensubforum'];
	$iffenxiang = $setting['iffenxiang'];
	$fenxiangdaima = $setting['fenxiangdaima'];
	$randpost = $setting['randpost'];
	$randpostnum = $setting['randpostnum'];
	$loginbg = $setting['loginbg'];
	$gmenucolor =$setting['gbottomcolor'];
	$gbottomcolor = $setting['gmenucolor'];
	$gbottomfontcolor = $setting['gbottomfontcolor'];
	
	
	$piclist = $setting['pic'];
	$truepic = $setting['truepic'];
	$leftmenu = $setting['leftmenu'];

 
 

	function isfidtp($fid,$titlepic){
		 
			$titlepic = explode (',',$titlepic);
			$returntrue = in_array($fid,$titlepic)? 1 : 0;
			if ($returntrue){return $returntrue; break; }
		 	return 0;
	}

	function ispic($fid,$piclist){
			$piclist = explode (',',$piclist);
			$returntrue = in_array($fid,$piclist)? 1 : 0;
			if ($returntrue){return $returntrue; break; }
			return 0;
	}



	function setthreadpic($tid,$num,$w='100',$h='100'){
		foreach (DB::fetch_all('SELECT tableid FROM '.DB::table('forum_attachment').' WHERE tid = '.$tid) as $setthread){
			foreach ($getdata = DB::fetch_all('SELECT * FROM '.DB::table('forum_attachment_'.$setthread['tableid'].'').' WHERE tid = '.$tid . '  LIMIT  0 ,'.$num) as $setthreadpic){
 				
			 if($num == 1){
			 	$setthreadpicarray = getforumimg($setthreadpic['aid'],'0',$w,$h);
			 }else{
				$setthreadpicarray[$setthreadpic['aid']] = getforumimg($setthreadpic['aid'],'0',$w,$h);
			 }	 
		}
	}
	return $setthreadpicarray;
	}


	function tagsreplace($tid,$titledescribelen){
		$postmessage= DB::fetch_first('SELECT message FROM '.DB::table('forum_post').' WHERE tid = ' . $tid . ' and first = 1 ');

			
		
			require_once libfile('function/post');
			return messagecutstr($postmessage['message'],$titledescribelen);
	}

		function wei_sortpic($weiv){
			if(strstr($weiv,'<a')!= false and strstr($weiv,'data/attachment') != false ){
				$weivs = explode('href="',$weiv);				
				$weivs = explode('" target="_blank"',$weivs[1]);				
				$weiv = '<img src="'.$weivs[0].'"style="max-width: 60%;max-height: 60%;">'; 				
				return $weiv;
				}else{
				return $weiv;	
				}			
			
			
			
			}
			
		function randpost($randpostnum){	
 		 
		 	$randpost = DB::fetch_all("SELECT * FROM ".DB::table('forum_thread').' order by RAND() limit '.$randpostnum);			
 
			return $randpost;
			
		}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

?>
