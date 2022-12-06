<?php
	$day = 10; 
	
	if ($day <= 10 ) {
		echo 'Первая декада'; 
	}
	
	if ($day > 10 and $day <= 20) {
		echo 'Вторая декада'; 
	}
	
	if ($day >=21 and $day <= 31) {
		echo 'Третья декада'; 
	}
?>