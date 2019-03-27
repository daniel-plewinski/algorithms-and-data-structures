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

    $counter = 0;

    for($i=1; $i < count($arr); $i++){

        if($arr[$counter] !== $arr[$i]){
            $counter++;
            $arr[$counter] = $arr[$i];
        }
    }
    return $counter + 1;
}
echo countUniqueValues([1,2,2,5,7,7,99]);

