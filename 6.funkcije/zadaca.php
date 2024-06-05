<?php

// PHP funkcije – vježba 1
// Proizvoljno deklarirajte funkciju koja vraća neki tekst.
// Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
// Ispišite vrijednost varijable.

function returnText() : string 
{
    return "Ovo je vraceni tekst";
}

$text = returnText();
var_dump($text);

echo '<br>';

// PHP funkcije – vježba 2
// Proizvoljno deklarirajte funkciju koja ima dva argumenta (name i surname). Funkcija
// treba konkatenirati podatke iz argumenata tako da između postoji razmak i dodijeliti ih
// lokalnoj varijabli, zatim treba vrijednost u varijabli pretvoriti u velika slova i to vratiti kao
// rezultat.
// Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
// Ispišite vrijednost varijable.

function allCapsNameAndSurname(string $name, string $surname) : string {
    $fullName = "$name $surname";
    return mb_strtoupper($fullName);
}

$ime = allCapsNameAndSurname('žan luk', "pikard");
echo $ime;

echo '<br>';

// PHP funkcije – vježba 3
// Proizvoljno deklarirajte funkciju koja ima jedan argument (number). Funkcija treba imati
// lokalnu varijablu u koju će pribrojiti vrijednost argumenta number te istu vratiti kao
// rezultat. Vrijednost treba biti zadržana kod svakog poziva funkcije.
// Deklarirajte funkciju kao varijablu.
// Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u
// rasponu od 1 do 10 te ispišite rezultat.
// Ponovite postupak pet puta.

function pribroji(int $number) : int 
{
    static $a = 0; // radi isto i kad se ostavi $a bez setiranja na 0, valjda pretvori null u 0?
    $a += $number;
    return $a;
}
$fn = 'pribroji';
for ($i = 0; $i < 6; $i++) { 
    $random = rand(1,10);
    if ($i == 0) {
        $sumA = $fn($random);
        echo "Nasumicni broj $random zbrojen s vrijednosti 0 daje $sumA. <br>";//write out first sum
        continue;
    }
    echo "Nasumicni broj $random zbrojen s prethodnim rezultatom $sumA daje ";//write out other sums, first mentioning the previous sumA
    $sumA = $fn($random);//then change sumA to the new value
    echo "$sumA. <br>";//then state what the new sumA is
}

function returnSum(int $num): int
{
    static $sum = 0;
    $sum += $num;
    return $sum;
}

$returnSum = 'returnSum';
$oldSum = 0;

for ($i = 0; $i < 5; $i++) {
    $rand = rand(1, 10);

    echo "oldSum = $oldSum<br>";
    echo "rand = $rand<br>";

    $newSum = $returnSum($rand);
    echo "$oldSum + $rand = $newSum<br>";
    echo "newSum = $newSum<br><br>";
    $oldSum = $newSum;
}