<?php

echo date('Y-m-d', mktime(0, 0, 0, 12, 31, 2013)) . '<br>';
echo date('d.m.Y', mktime(0, 0, 0, 12, 31, 2013)). '<br>';
echo date('d.m.y H:i:s', mktime(12, 59, 59, 12, 31, 2013)) . '<br>';

?>