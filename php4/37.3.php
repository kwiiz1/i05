<?php
	$day = 32; 
	
	if ($day <= 10 ) {
		echo 'Первая декада'; 
	}
	
	elseif ($day > 10 and $day <= 20) {
		echo 'Вторая декада'; 
	}
	
	elseif ($day >=21 and $day <= 31) {
		echo 'Третья декада'; 
	} else {
        echo 'неверное значение переменной $day!!!';
    }
?>