<?php

$arr = [
    [
        '01',
        '02',
    ],
    [
        '11',
        '12'
    ],
    [
        '21',
        '22'
    ]
];



foreach ($arr as $items) {
    foreach ($items as $item) {
        echo $item . "\t";
    }
    echo '<br />';
}

$number = 1;

echo preg_match("/(\d)/", $number) ? 'Yes' : 'No';