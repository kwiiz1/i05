<?php
$date = date_create();

date_modify($date, '-100 days');
echo date_format($date, 'd.m.Y');

?>