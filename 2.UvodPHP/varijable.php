<?php

// imena varijabli su osjetljiva na velika i mala slova
$ime = 'alex';
$Ime = 'Alex';

echo $ime;
echo '<br>';
echo $Ime;

// primjer neispravne definicije imena varijable
// $123ime;
// $-ime;
// $ ime;

// Nakon zanaka $ ime varijable moze zapoceti sa slovom ili _ (donja crta)
// primjer ispravne definicije imena varijable
$_ime;
$ime123;
$ime_prezime_i_adresa; // -> snake case
$imePrezimeIAdresa; // Camel Case


// KONSTANTE
// Imena konmstanti trebalo bi pisati velikim slovima

define("PI", 3.14);
const OIB = '27441617985';

echo '<br>';
echo 'Vas OIB je ' . OIB . ' a ime je ' . $Ime . '.';