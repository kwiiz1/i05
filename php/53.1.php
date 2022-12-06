<?php
	$arr = [1, 2, 3, 4, 5, 0];
	
	foreach ($arr as $elem) {
		if ($elem == 0) {
			echo 'есть';
            break;
		} 
	}
?>