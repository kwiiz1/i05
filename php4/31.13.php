<?php
	$num = 3;
		
	if ($num > 5 or $num > 0 and $num < 3) { // $num > 0 and $num < 3 в приоритете
		echo '+';
	} else {
		echo '-';
	}
?>