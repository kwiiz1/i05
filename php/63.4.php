<?php
        $arr = ['a' => 1, 'b' => 2, 'c' 
            => 3, 'd' => 4, 'e' => 5];
        $arr_key = [];
        $arr_val = [];

            
        foreach ($arr as $key => $elem) {
        
        $arr_key[]=$key;
        $arr_val[]=$elem;
        
       

        }
        var_dump ($arr_key);
        var_dump ($arr_val);

?>