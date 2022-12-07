<?php

    $str = 'abc';
    echo strtr($str, 'abc', '123'  ) . '<br>'; // 1 sposob
    
    $string[0] = "abc";
    echo strtr($string[0], ['a'=>'1', 'b'=>'2', 'c' => '3']); // 2 sposob
    


    

?>