<?php

function sortArray($array): array {

    for($i=0; $i<count($array); $i ++) {
        for($j=0; $j<count($array)-1; $j ++){

            if($array[$j] > $array[$j+1]) {
                $tmp = $array[$j+1];
                $array[$j+1] = $array[$j];
                $array[$j] = $tmp;
            }
        }
    }

    return $array;

}

$array = [3,7,1,26,43,12,6,21,23,73];
echo implode(',', $array) . "<br>";
$array = sortArray($array);
echo implode(',', $array);

