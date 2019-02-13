<?php echo 'Author: Brownsugar (contact@brownsugar.tw)'; exit; ?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G['setting']['bbname']</a> <em>&rsaquo;</em>
		<a href="home.php?mod=medal">{lang medals}</a> <em>&rsaquo;</em>
		<a href="plugin.php?id=bs_medal_order:order">{lang bs_medal_order:medal_order}</a>
	</div>
</div>
<div id="ct" class="ct2_a wp cl">
	<div class="mn">
		<div class="bm bw0">
			<h1 class="mt">{lang bs_medal_order:medal_order}</h1>
			<ul class="tb cl">
				<li class="a"><a href="plugin.php?id=bs_medal_order:order">{lang bs_medal_order:medal_order}</a></li>
			</ul>
			<iframe id="frame_medal" name="frame_medal" style="display:none"></iframe>
			<form id="medalorder" name="medalorder" action="plugin.php?id=bs_medal_order:order" method="post" enctype="multipart/form-data" target="frame_medal">
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<p class="tbmu mbm">{lang bs_medal_order:mo_desc}</p>
				<!--{if $setting['prize']}-->
				<p class="tbms mtm">
					{lang bs_medal_order:mo_prize}<span class="xi1">{$_G['setting']['extcredits'][$setting['prize_type']]['title']} $setting['prize'] {$_G['setting']['extcredits'][$setting['prize_type']]['unit']}</span>。
				</p>
				<!--{/if}-->
				<!--{if $myMedals}-->
				<table cellspacing="0" cellpadding="0" class="tfm">
					<tr>
						<th>{lang bs_medal_order:main_title}</th>
						<td>
							<ul class="medal-list">
								<!--{loop $medalList $medal}-->
								<li title="{$medal['name']}" data-id="{$medal['medalid']}">
									<span class="drag-trigger"></span>
									<img src="{STATICURL}image/common/$medal['image']" alt="$medal['name']" /> $medal['name']
								</li>
								<!--{/loop}-->
							</ul>
							<input type="hidden" id="ordered" name="ordered" value="" />
							<p class="mtn">{lang bs_medal_order:main_desc}</p>
						</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td colspan="2">
							<button type="submit" name="ordersubmit" value="true" class="pn pnc" /><strong>{lang save}</strong></button>
						</td>
					</tr>
				</table>
				<!--{else}-->
					<div class="emp">{$lang['medals_nonexistence_own']}</div>
				<!--{/if}-->
			</form>
			<!--{if $setting['jquery_enable']}-->
			<script type="text/javascript" src="{$_G['siteurl']}source/plugin/bs_medal_order/js/jquery.min.js"></script>
			<!--{/if}-->
			<script type="text/javascript" src="{$_G['siteurl']}source/plugin/bs_medal_order/js/jquery.sortable.min.js"></script>
			<script>
				jQuery.noConflict();
				(function($) {
					var ordered;
					$('.medal-list').sortable({
						handle: '.drag-trigger'
					}).bind('sortupdate', function(e, ui) {
						ordered = '';
						$('.medal-list li').each(function(i, el) {
							ordered += $(el).data('id') + ',';
						});
						$('#ordered').val(ordered.slice(0, -1));
					});
				}(jQuery));
				function show_success(message) {
					showDialog(message, 'right', '{lang bs_medal_order:medal_order}', function() {
						top.window.location.href = top.window.location.href;
					}, 0, null, '', '', '', '', 3);
				}
				function show_error(message) {
					showDialog(message, 'error', '{lang bs_medal_order:medal_order}', function() {
						top.window.location.href = top.window.location.href;
					}, 0, null, '', '', '', '', 3);
				}
			</script>
		</div>
	</div>
	<div class="appl">
		<div class="tbn">
			<h2 class="mt bbda">{lang medals}</h2>
			<ul>
				<li><a href="home.php?mod=medal">{$lang['medals_center']}</a></li>
				<li><a href="home.php?mod=medal&action=log">{$lang['my_medals']}</a></li>
				<li class="a"><a href="plugin.php?id=bs_medal_order:order">{lang bs_medal_order:medal_order}</a></li></ul>
			</ul>
		</div>
	</div>
</div>
<!--{template common/footer}-->