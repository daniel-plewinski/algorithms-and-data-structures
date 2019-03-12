<?php

$arr = [
    [
    'name' => 'Tom',
    'surname' => 'Nowak',
    'age' => 21
    ],
    [
    'name' => 'John',
    'surname' => 'Smith',
    'age' => 30
    ],
    [
    'name' => 'Jack',
    'surname' => 'Green',
    'age' => 40
    ]
];

var_dump($arr);


usort($arr,function($item1, $item2) {
    
    $key = 'surname';
    if ($item1[$key] == $item2[$key]) return 0;
    return ($item1[$key] < $item2[$key])?-1:1;
});

var_dump($arr);