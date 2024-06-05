<?php

$a = 5;
$b = $a;
$a = 6;

echo $b; // vrijednost b je 5

$a = 5;
$b = &$a;
echo 'Prije promjene vrijednosti a ' . $b;
$a = 6;

echo '<br>';
echo 'Nakon  promjene vrijednosti a ' . $b;