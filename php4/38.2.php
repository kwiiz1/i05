<?php   
    $arr = [2, 2, 3];
    $sum = 0;
    if (count($arr) >= 3 ) {
        foreach ($arr as $elem)
        $sum +=$elem;
        echo $sum;

    }
?>