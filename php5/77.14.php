<?php
$year = mktime(0, 0, 0, 1, 1, date('Y') + 1);
$s = $year - time();
$days = $sec / 86400; // ????
echo $days;


?>