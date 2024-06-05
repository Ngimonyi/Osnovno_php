<?php

$a = 10;
$b = 5;
$c = '10';
$d = 10;
$e = 9;
$f = 11;

var_dump($a > $b); // true
var_dump($a < $b); // false
var_dump($a <= $f); // true
var_dump($a >= $e); // false


var_dump($a == $b); // false

// Varijabla $a je jednaka varijabli $c
// provjerava da li su vrijednosti iste
var_dump($a == $c); // true

// Varijabla $a nije identicna varijabli $c
// provjerava da li su vrijednmosti i tip podataka isti
var_dump($a === $c); // false
var_dump($a === $d); // true

var_dump($a != $c); // false
var_dump($a !== $c); // true
var_dump($a !== $d); // false