<?php
    $age = '78';
    if ($age < 10 or $age > 99) {
        echo 'число меньше 10 или больше 99';
    } else {
        $result = $age[0] + $age[1]; 
        if ($result <= 9) {
            echo 'однозначна';
        }
            else {
                echo 'двузначна'; // победа....
            }
    } 
 
?>