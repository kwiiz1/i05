<?php
	$str = 'abcde';
	    $str = strrev($str); // переворачиваем строку
	        $str = ucfirst($str); // в верхний регистр делаем
	            $str = strrev($str); // возвращаем как было...
	echo $str;
?>