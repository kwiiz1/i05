<?php
	$num = 3;
		
	if ($num > 5 and $num < 10 or $num == 20) { // приоритет $num > 5 and $num
		echo '+';
	} else {
		echo '-';
	}
?>