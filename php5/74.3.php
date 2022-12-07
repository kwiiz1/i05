<?php
	$arr = [4, 2, 5, 19, 13, 0, 10];
    $result = 0;
	foreach ($arr as $elem) {
		$result += $elem * $elem;
	}
	echo $result.'<br>';
?>