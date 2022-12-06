<?php
	$arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
	foreach ($arr as $key => $elem) {
        if ($arr [$key] <=400)
        $arr[$key] *= 1.1;
        
        
	}
	foreach ($arr as $key => $elem) {
		echo $elem.'<br>';
	}
?>