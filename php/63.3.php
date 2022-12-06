<?php
    $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
    $sum_key = 0;
    $sum_val = 0;
    $result; 

    foreach ($arr as $key => $elem) {
            $sum_key += $key;
            $sum_val += $elem;

    }
    echo $sum_key / $sum_val;
?>