<?php

/* Ova funkcija ispisuje Brake line HTML tag */
function br(int $ponavljanje = 1)
{
    echo str_repeat('<br>', $ponavljanje);
}

/* 1. Koristeći petlju
while, ispišite prvih
deset brojeva. */

    $i = 1;
    while ($i <= 10) {
        echo $i . " ";
        $i++;
    }

    br(4);

// 2. Koristeći petlju for, ispišite visekratnike broja 3 do 100.

    for ($i = 3; $i <= 100; $i += 3) {
        echo $i . " ";
    }

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            echo $i . " ";
        }
    }
    br(3);

    
/* 3. Tablica množenja: Napiši PHP program koji koristi petlje za generiranje tablice množenja od 1 do 10.
    Primjer:
        1 x 1 = 1
        2 x 2 = 4
        ...
        10 x 10 = 100 */

    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . ($i * $j) . br();
        }
        br();
    }
    

// 4. Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena.
//     Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti. 

    $names = ["Ana", "Marko", "Ivana", "Petar", "Maja"];
    foreach ($names as $key => $value) {
        echo "$key: $value<br>";
    }

// 6. Ispisati imena iz niza $names spojene sa zarezom i razmakom tako da iza zadnjeg imena ne budu zarez i razmak
//     Primjer:
//         Harry, Ron, Hermione, Snake

    $zadnji_key = count($names) - 1;

    foreach ($names as $key => $name) {
        if ($zadnji_key === $key) {
            echo $name;
        } else {
            echo "$name, ";
        }
    }

    $imena = implode(', ', $names);

// 7. Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.
//     Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.
//     Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.
//     Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c. 

    $a = 5;
    $b = 10;
    $c = 15;
    if (($b > $a && $b < $c) || ($b < $a && $b > $c)) {
        echo "Vrijednost b je između a i c";
    } else {
        echo "Vrijednost b nije između a i c";
    }

    if ($b < $c && $b > $a) {
        echo 'Broj '. $b .' je između brojeva '. $a .' i '. $c .'.';
    } elseif ($b > $c && $b < $a) {
        echo 'Broj '. $b .' je između brojeva '. $a .' i '. $c .'.';
    } else {
        echo 'Broj '. $b .' nije između brojeva '. $a .' i '. $c .'.';
    }

// 8. Koristeći uvjetovani tip kontrolne strukture switch ili match ispišite koji je trenutno dan u tjednu.
//     Za ispravno izvršenu vježbu koristite PHP funkciju date(). Nazivi dana moraju biti na hrvatskom jeziku.

    $day = match (date('N')) {
        "1" => "Ponedjeljak",
        "2" => "Utorak",
        "3" => "Srijeda",
        "4" => "Četvrtak",
        "5" => "Petak",
        "6" => "Subota",
        "7" => "Nedjelja",
        default => "Dan ne postoji!"
    };
    echo "\t$day";
