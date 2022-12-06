<?php
    $month = 12;

    if ($month == 1 or $month == 2 or $month == 12) {
        echo 'Зима';
    }

    elseif ($month >= 3 and $month <= 5) {
        echo 'Весна';
    }

    elseif ($month >= 6 and $month <= 8) {
        echo 'Лето';
    }

    elseif ($month >= 9 and $month <= 11) {
        echo 'Осень';
    } else {
        echo 'неверное значение переменной $month!!!';
    }
?>