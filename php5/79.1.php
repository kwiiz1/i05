<?php
	function func($name, $surname) {
		echo 'Привет! '.$name.' '.$surname;

	}

    function summa($a, $b) {
        return $a + $b; 
    }

    function summ_arr ($arr) {
        foreach ($arr as $a) {
            $sum = 0; 
            foreach ($arr as $a) {
                $sum += $a;
              }
              return $sum;
            }
    }

    function propis($num) {
       $s = (string) $num;
       $result = '';
       switch ($s[0]) {
        case '1': $result .= 'сто '; break;
        case '2': $result .= 'двести'; break;
        case '3': $result .= 'триста'; break;
        case '4': $result .= 'четыреста'; break;
        case '5': $result .= 'пятьсот'; break;
        case '6': $result .= 'шестьсот'; break;
        case '7': $result .= 'семьсот'; break;
        case '8': $result .= 'восемьсот'; break;
        case '9': $result .= 'девятьсот'; break;
       }

       switch ($s[1]) {
        case '1': $result .= 'десять'; break;
        case '2': $result .= 'двадцать '; break;
        case '3': $result .= 'тридцать'; break;
        case '4': $result .= 'сорок'; break;
        case '5': $result .= 'пятьдесят'; break;
        case '6': $result .= 'шестьдесят'; break;
        case '7': $result .= 'семьдесят'; break;
        case '8': $result .= 'восемьдесят'; break;
        case '9': $result .= 'девятьдесят'; break;

        }
        switch ($s[2]) {
            case '1': $result .= 'один'; break;
            case '2': $result .= 'два'; break;
            case '3': $result .= 'три '; break;
            case '4': $result .= 'четыре'; break;
            case '5': $result .= 'пять'; break;
            case '6': $result .= 'шесть'; break;
            case '7': $result .= 'семь'; break;
            case '8': $result .= 'восемь'; break;
            case '9': $result .= 'девять'; break;
            }
            return $result;
        }
     
?>