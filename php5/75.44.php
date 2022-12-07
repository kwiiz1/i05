<?php
$str = 'html, <b>php</b>, <i>js</i>';
echo strip_tags($str, '<b><i>');

?>