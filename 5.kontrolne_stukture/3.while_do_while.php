<?php

$i = 1;

while ($i <= 10) {
    echo "$i ";
    $i++; // $i = $i + 1;
}

echo '<br><br>';

// $i = 2;

do {
    echo "$i ";
    $i += 1;
} while ($i <= 10);

// echo date('N');