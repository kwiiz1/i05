<?php
	$arr = [2, -5, -9, 4];
    $sum = 0;
    foreach ($arr as $elem) {
        if ($elem > 0) {
            $sum = $sum + $elem;
        }
    }
    echo $sum;
?>