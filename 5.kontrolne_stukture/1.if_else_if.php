<?php

$primeNumbers = array(2, 3, 5, 7, 11);

// (2 + 3) * 4
echo "Treci caln arraya primeNumbers " . (isset($primeNumbers[2]) ? 'postoji.' : 'ne postoji.') . '<br><br>';

// ako postoji index 2 ispisi postoji

// ako (isset($primeNumbers[2])) print 'postoji'


// if iskaz
if (isset($primeNumbers[2])) {
    echo 'Treci caln arraya primeNumbers postoji.<br><br>';
}

// if-else iskaz
if (isset($primeNumbers[5])) {
    echo 'Treci caln arraya primeNumbers postoji.<br><br>';
} else {
    echo 'Treci caln arraya primeNumbers ne postoji.<br><br>';
}
// if-else iskaz
$a = 5;
$b = 10;
$c = 15;

if ($a === 4){
    echo '$a je 5<br><br>';
}

if ( ($b > $a && $b < $c) || $b < $a ) {
    echo 'Ispisuje se kod unutar IF<br><br>';
} else {
    echo 'Ispisuje se kod unutar ELSE<br><br>';
}

// if-else-if
$postotakIspita = -50;

if ($postotakIspita >= 90) {
    echo 'Ocjena je 5';
} elseif ($postotakIspita >= 80) {
    echo 'Ocjena je 4';
} elseif ($postotakIspita >= 70) {
    echo 'Ocjena je 3';
} elseif ($postotakIspita >= 60) {
    echo 'Ocjena je 2';
}elseif ($postotakIspita < 60 && $postotakIspita >= 0) {
    echo 'Pali ste na ispitu!';
} else {
    echo 'Nismo mogli izracunati vasu ocjenu';
}

echo '<br><br>';

if ( count($primeNumbers) > 5) {
    echo 'Array primeNumbers ima vise od 5 zapisa.';
} elseif (count($primeNumbers) === 5) {
    echo 'Array primeNumbers ima tocno 5 zapisa.';
}else {
    echo 'Array primeNumbers ima manje od 5 zapisa.';
}
