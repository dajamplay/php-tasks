<?php

//ссылка объект

class A {
    public $property;
}

$a = new A();
$a->property = 'a';


$b = $a;
$b->property = 'b';

echo $a->property;
