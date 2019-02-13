<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="bm bw0 mdcp">
<h1 class="mt">登錄管理面板</h1>
<div class="mbw">首次進入管理面板或空閒時間過長, 您輸入密碼才能進入。如果密碼輸入錯誤超過 5 次，管理面板將會鎖定 15 分鐘。</div>
<form method="post" autocomplete="off" action="<?php echo $cpscript;?>?mod=modcp&action=login" class="exfm">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="fid" value="<?php echo $_G['fid'];?>">
<input type="hidden" name="submit" value="yes">
<input type="hidden" name="login_panel" value="yes">
<table cellspacing="0" cellpadding="5">
<tr>
<th width="60">用戶名:</th>
<td><?php echo $_G['member']['username'];?></td>
</tr>
<tr>
<th>密碼:</th>
<td><input type="password" name="cppwd" id="cppwd" class="px" /></td>
</tr>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="submit" id="submit" class="pn" value="true"><strong>提交</strong></button></td>
</tr>
</table>
</form>
</div>
<script type="text/javascript">
$("cppwd").focus();
</script>