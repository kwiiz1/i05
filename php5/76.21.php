<?php
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];

    array_search('-', $arr);
    $result = array_splice($arr, 1, 1);
    var_dump($result);
?>