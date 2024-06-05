<?php

// Definiranje varijabli
$integer = 10;
$float = 10000.50;
$string = '10\'000,50';
$prazanString = "";
$bool = false;

// Ispis varijabli
echo $integer;
echo '<br>';
echo $float;
echo '<br>';
echo $string;
echo '<br>';
echo $bool;
echo '<br>';
var_dump($bool);
echo('<br>');
echo $bool ? 'DA' : 'Ne';
echo '<br>';

// Konstante
define('PITAGORA', 1.41);
const TEODOR = 1.73;

// Ispis konstanti
echo PITAGORA;
echo '<br>';
print TEODOR;
echo '<br>';

// Reference
$a = 5;
$b = &$a;
print $b;
echo '<br>';
$a = 10;
print $b;