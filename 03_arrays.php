<?php
// Simple Array
    $numbers = [1,44,55,22];
    $fruits = array('apple', 'orange', 'pear');

 //   var_dump($fruits);
 //   echo $fruits[0];

// Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green',
];

//    echo $colors[1];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f',
    ];

//    echo $hex['green'];

    $person = [
        [
            'first_name' =>'Brad',
            'last_name' => "Traversy",
            'email' => "brad@gmail.com"
        ],
        [
            'first_name' =>'John',
            'last_name' => "Doe",
            'email' => "john@gmail.com"
        ],
        [
            'first_name' =>'Jane',
            'last_name' => "Doe",
            'email' => "jane@gmail.com"
        ]
    ];

 //   echo $person[1]['first_name'];
    var_dump(json_encode($person));