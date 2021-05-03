<?php
//    echo (int)(10 / 3) . '<br />'; // 3 целая
//    echo (int)(10 % 3) . '<br />'; // 1 остаток от деления

    /**
     * 3 упаковки (3шт, 5шт, 9шт)
     * По заданному числу определить количество определенных упаковок
     *
     **/

    DEFINE('PACK3', 3);
    DEFINE('PACK5', 5);
    DEFINE('PACK9', 9);

    function bottlePack($number) {

        echo 'n = ' . $number . '<br />';

        $a = 0;
        $b = 0;
        $c = 0;

        if ($number >= PACK9) {
            $a = (int)($number / PACK9);
            $number = (int)($number % PACK9);
        }


        if ($number >= PACK5) {
            $b = (int)($number / PACK5);
            $number = (int)($number % PACK5);
        }

        if ($number >= PACK3) {
            $c = (int)($number / PACK3);
            $number = (int)($number % PACK3);
        }

        if ($number < PACK3 && $number > 0) $c++;


        echo 'a(9) = ' . $a . '<br />';
        echo 'b(5) = ' . $b . '<br />';
        echo 'c(3) = ' . $c . '<br />';

    }

    bottlePack(6);