<?php
// simple array
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

print_r($numbers);
var_dump($numbers);
// echo $fruits[1];

// Associative Array
$colors = [
    1 => 'red',
    2 => 'blue',
    6 => 'green'
];

// echo $colors[6];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'ruben',
    'last_name' => 'rienstra',
    'email' => 'ruben@gmail'
];

// echo $person['first_name'];

// multidimensional array
$people = [
    [
        'first_name' => 'ruben',
        'last_name' => 'rienstra',
        'email' => 'ruben@gmail'
    ],
    [
        'first_name' => 'joe',
        'last_name' => 'doe',
        'email' => 'joe@gmail'
    ],
    [
        'first_name' => 'jane',
        'last_name' => 'doe',
        'email' => 'jane@gmail'
    ]
];

// echo $people[1]['email'];
var_dump(json_encode($people));
