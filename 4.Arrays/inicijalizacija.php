<?php
    // Inicijalizacija praznog niza
    $empty1 = []; 
    $empty2 = array();

    // Inicijalizacija niza (lista) s podatcima -> Indexed array
    $names = ['Alex', 'Filip', 'Marko'];
    $names = array('Alex', 'Filip', 'Janko');

    echo '<pre>';
    print_r( $names );
    echo '</pre>';
    echo $names[1];

    // Inicijalizacija niza (mapa) s podatcima -> Associative array
    $fruits = array(
        'name' => 'Banana',
        'cijena' => '12 EUR',
        'klasa' => 'Prva'
    );
    $fruits = [
        'name' => 'Banana',
        'cijena' => '12 EUR',
        'klasa' => 'Prva',
    ];

    echo '<pre>';
    print_r( $fruits);
    echo '</pre>';

    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';