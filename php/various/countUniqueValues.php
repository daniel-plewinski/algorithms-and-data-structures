<?php

/**
 * Function returns the number unique values in a sorted
 * int array
 * @author Daniel Plewinski
 * @param $arr
 * @return int
 */
function countUniqueValues($arr){

    if (count($arr) === 0) {
        return 0;
    }

    $i = 0;

    for($j=1; $j < count($arr); $j++){

        if($arr[$i] !== $arr[$j]){
            $i++;
            $arr[$i] = $arr[$j];
        }
    }
    return $i + 1;
}
echo countUniqueValues([1,2,2,5,7,7,99]);

