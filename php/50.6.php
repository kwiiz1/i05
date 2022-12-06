<?php
	$arr = ['Понедельник ', 'Вторник ', 'Среда ', 'Четверг ','Пятница ', 'Суббота ', 'Воскресенье'];
	$day = date('l ');
    foreach ($arr as $key => $elem) {
		if ($key == 2){
			echo '<i>'. $day .'</i>';
		} else{
			echo $elem;
		}
	}
?>	