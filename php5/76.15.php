<?php
	$arr = [1, 2, 3, 4, 5];
    array_splice($arr, 4, 0, ['c']);
    array_splice($arr, 6, 0, ['e']);
    array_splice($arr, 1, 0, ['a', 'b']);

    var_dump($arr);
?>