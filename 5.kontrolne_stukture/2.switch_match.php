<?php

$variable = date('N');

switch ($variable) {
    case 1:
        echo 'Ponedjeljak';
        break;
    case 2:
        echo 'Utorak';
        break;
    case 3:
        echo 'Srijeda';
        break;
    case 4:
        echo 'Cetvrtak';
        break;
    
    default:
        echo 'Nezanm koji je dan';
        break;
}

$variable = 'uto';

switch ($variable) {
    case 'pon':
        echo 'Ponedjeljak';
        break;
    case 'uto':
        echo 'Utorak';
        break;
    case 'sri':
        echo 'Srijeda';
        break;
    case 'cet':
        echo 'Cetvrtak';
        break;
    
    default:
        echo 'Nezanm koji je dan';
        break;
}

switch ($variable) {
    case 'pon':
    case 'uto':
    case 'sri':
        echo 'Prvi dio tjedna';
        break;
    case 'cet':
    case 'pet':
    case 'sub':
        echo 'Drugi dio tjedna';
        break;
    case 'ned':
        echo 'Nedjelja';
        break;
    default:
        echo 'Nezanm koji je dan';
        break;
}

echo '<br><br>';

$dan = match ($variable) {
    'pon' => 'Ponedjeljak',
    'uto' => 'Utorak',
    'sri' => 'Srijeda',
    default => 'Nezanm koji je dan'
};

echo $dan;