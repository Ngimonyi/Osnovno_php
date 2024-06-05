<?php

const USERS_CSV = __DIR__ . '/podaci/users.csv';

if( false !== $handle = fopen(USERS_CSV, 'r') ) {

    $headers = fgetcsv($handle);
    $data = [];

    while( false !== $row = fgetcsv($handle)) {
        $data[] = array_combine($headers, $row);
    }

    fclose($handle);

    echo '<pre>';
    print_r($data);
    echo '</pre>';
} else {
    echo 'Unable to open the file.';
} 