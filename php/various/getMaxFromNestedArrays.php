<?php

$arr = [10, [12, 40, [10, 999999], [[-100], 1000], [3, -9], 20]];
var_dump($arr);

$arr1 = [];
array_walk_recursive($arr, function($val) use(&$arr1) {
    $arr1[] = $val;
});

echo max($arr1);