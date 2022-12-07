<?php

$string = 'http://code.mu/ru/php/book/prime/inbuilt/string/';
if(stristr($string, 'http://') or stristr($string, 'https://')) {
    echo 'naydena';
 }
 else {
    echo 'ne naydena';
 }
?>