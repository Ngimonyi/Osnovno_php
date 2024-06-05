<?php

$names = ['Harry', 'Ron', 'Hermione'];

// var_dump($names);
echo '<br><br>';
foreach ($names as $name) {
    echo "$name, ";
}

echo '<br><br>';

foreach ($names as $key => $name) {
    echo ++$key . " - $name<br>";
}

$users = [
    [
        "id" => 1,
        "name" => "John Doe",
        "email" => "john@example.com",
        "age" => 30
    ],
    [
        "id" => 2,
        "name" => "Jane Smith",
        "email" => "jane@example.com",
        "age" => 25
    ],
    [
        "id" => 3,
        "name" => "Mike Johnson",
        "email" => "mike@example.com",
        "age" => 35
    ],
    [
        "id" => 4,
        "name" => "Emily Davis",
        "email" => "emily@example.com",
        "age" => 28
    ],
    [
        "id" => 5,
        "name" => "Chris Brown",
        "email" => "chris@example.com",
        "age" => 40
    ]
];

echo '<br><br>';

foreach($users as $key => $user){
    echo ++$key . '. ';
    echo $user['name'] . ' - ' . $user['email'];
    echo '<br>';
    unset($users[--$key]['age']);
}

echo '<pre>';
print_r($users);
echo '</pre>';