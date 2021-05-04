<?php

//перевернуть строку

$string = 'hello';
$string = strrev($string);
$string = my_strrev($string);

echo $string;

function my_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

//$str = "football";
//$exp = str_split($str);
//$revers = array_reverse($exp);
//$imp = implode('',$revers);
//var_dump($imp);