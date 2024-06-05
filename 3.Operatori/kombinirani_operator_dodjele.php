<?php
    $a = 15;
    $b = 10;

    echo $a += $b; // Ekvivalent $a = $a + $b
    echo $a -= $b; // Ekvivalent $a = $a - $b
    echo $a *= $b; // Ekvivalent $a = $a * $b
    echo $a /= $b; // Ekvivalent $a = $a / $b
    echo $a %= $b; // Ekvivalent $a = $a % $b
    echo $a .= $b; // Ekvivalent $a = $a . $b


    $ime = 'Aleksandar';
    $razmak = '<br>';
    $prezime = 'Dobrinic';

    $ime .= $razmak; // -> 'Aleksandar '
    $ime .= $prezime;// -> 'Aleksandar Dobrinic'
    echo $ime;

    echo $razmak;
    echo $a .= $b . '<br>';
?>