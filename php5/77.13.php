<?php
$date = date_create('2025-12-31');

date_modify($date, '2 days, 1 months, 3 days, 1 years, -3 days');
echo date_format($date, 'd.m.Y');

?>