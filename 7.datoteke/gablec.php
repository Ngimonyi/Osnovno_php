<?php

const URL = 'https://www.fluvius.hr/tjedni.php';

const MENU_START_DELIMITER = 'MENU početak -->';
const MENU_END_DELIMITER = '<!-- MENU kraj';
const TITLE_TAG = '<a class="menu-title" >';
const PRICE_TAG = '<span class="menu-price">';

$html = file_get_contents(URL);

if ($html === FALSE) {
    die('Error fetching the URL');
}

$start = strpos($html, MENU_START_DELIMITER) + strlen(MENU_START_DELIMITER);
$end = strpos($html, MENU_END_DELIMITER) - $start;

$results = substr($html, $start, $end);

$results = explode('<span class="clearfix">', $results);

foreach ($results as $value) {
    $value = trim($value);

    if ($value){
        $startTitle = strpos($value, TITLE_TAG) + strlen(TITLE_TAG);
        $endTitle = strpos($value, '</a>');
        $title = substr($value, $startTitle, $endTitle-$startTitle);
    
        $startPrice = strpos($value, PRICE_TAG) + strlen(PRICE_TAG);
        $endPrice = strpos($value, '</span>');
        $price = substr($value, $startPrice, $endPrice-$startPrice);
    
        echo "$title - $price\n";
    }
}