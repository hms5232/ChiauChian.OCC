<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$return = <<<EOF

<script type="text/javascript">
window.addEventListener('load', function() {
var links = document.getElementsByTagName('a');
for(var i in links) {
var link = links[i];
if(link.href && link.innerHTML=='登錄') {
var mylink = document.createElement('a');
mylink.href = '{$this->href}';
mylink.appendChild(document.createTextNode('{$this->mobilelink}'));
var p = link.parentNode;
if(link==p.lastChild) p.appendChild(mylink);
else p.insertBefore(mylink, link.nextSibling);
var pipe = document.createElement('span');
pipe.className = 'pipe';
pipe.appendChild(document.createTextNode('|'));
p.insertBefore(pipe, mylink);
break;
}
}
}, false);
</script>

EOF;
?>