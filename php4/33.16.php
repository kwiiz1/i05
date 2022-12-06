<?php
	$test = 3 * 'abc'; // не сработает, потому что умножаем на abc
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}
?>