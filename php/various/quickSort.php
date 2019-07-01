<?php


function quickSort($array)
{
    if (count($array) == 0)
        return array();

    $pivot_element = $array[0];
    $left_element = [];
    $right_element = [];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $pivot_element)
            $left_element[] = $array[$i];
        else
            $right_element[] = $array[$i];
    }

    return array_merge(quickSort($left_element), array($pivot_element), quickSort($right_element));
}

$array = [3,7,1,26,43,12,6,21,23,73];
echo implode(',', $array) . "<br>";
$array = quickSort($array);
echo implode(',', $array);



