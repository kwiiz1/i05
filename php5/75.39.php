<?php

$str = 'mnopefghiklabcdqrstvxyz';
$suf = str_shuffle($str);

echo substr($suf, 0, 6);

?>