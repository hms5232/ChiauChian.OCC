<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$__C = C;$return = <<<EOF


<div id="fb-root"></div>

<script type="text/javascript">
function darfbcomment() {
var hlink = document.getElementsByTagName('link')[0];
var main = document.createElement('div');
main.setAttribute('data-num-posts', '{$this->numposts}');
main.setAttribute('data-order_by', '{$this->orderby}');
main.setAttribute('data-width', '{$this->width}');
main.setAttribute('data-href', (hlink && hlink.href)? hlink.href : SITEURL);
main.setAttribute('data-colorscheme', '{$this->colorscheme}');
main.className = 'fb-comments';
var wrapper = document.createElement('div');
wrapper.style.display = 'block';
wrapper.style.width = '{$this->width}px';
wrapper.style.margin = '8px auto 4px auto';
wrapper.appendChild(main);


EOF;
 if($this->fposition == 'bottom') { 
$return .= <<<EOF

if(!$('postlist')) return;
var divpo = \${$__C}('po', $('postlist'), 'div');
if(!divpo || divpo.length==0) return;
var container = divpo[0].parentNode;
container.appendChild(wrapper);

EOF;
 } elseif($this->fposition == 'postbottom') { 
$return .= <<<EOF

var pb = \$('darfbcomment_postbottom');
if(!pb) return;
var container = pb.parentNode;
container.appendChild(wrapper);

EOF;
 } elseif($this->fposition == 'useraction') { 
$return .= <<<EOF

var ua = \$('darfbcomment_useraction');
if(!ua) return;
ua = ua.parentNode;
var container = ua.parentNode;
container.insertBefore(wrapper, ua.nextSibling);

EOF;
 } elseif($this->fposition == 'signature') { 
$return .= <<<EOF

var ua = \$('darfbcomment_useraction');
if(!ua) return;
var container = ua.parentNode.parentNode;
container.appendChild(wrapper);

EOF;
 } 
$return .= <<<EOF


if(typeof(FB)!='undefined' && typeof(FB.XFBML)!='undefined') {
FB.XFBML.parse(container);
} else {
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/{$this->locale}/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
}
}
if({$this->delayload}) _attachEvent(window, 'load', darfbcomment, document);
else darfbcomment();
</script>


EOF;
?>