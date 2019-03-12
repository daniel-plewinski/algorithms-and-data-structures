<?php

$arr = [10, [12, 40, [10, 999999], [[-100], 1000], [3, -9], 20]];
var_dump($arr);
$arr1 = [];
foreach($arr as $key=>$value) {
    if(!is_array($value)) {
        $arr1[] = $value;
    } else {
        array_walk_recursive($value, function($val) use(&$arr1) {
            $arr1[] = $val;
        });
    }
}

echo max($arr1);