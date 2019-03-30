<?php

/**
 * Function returns the first longest repeated letters
 * in a string
 * @author Daniel Plewinski
 * @param $seq
 * @return array
 */
function findLongestRepeated($seq) {

    $max_count = 0;
    $count = 0;
    $max_char = null;
    $prev_char = null;

    for ($i=0; $i<strlen($seq);$i++) {

        $current = $seq[$i];

        if ($prev_char === $current) {
            $count +=1;
        } else {
            $count = 1;
        }

        if ($count > $max_count) {
            $max_count = $count;
            $max_char = $current;
        }

        $prev_char = $current;
    }

    return [$max_char => $max_count];

}


$string = "AAABBCCCCCCCCCCCDDDDDDEFG";

var_dump(findLongestRepeated($string));