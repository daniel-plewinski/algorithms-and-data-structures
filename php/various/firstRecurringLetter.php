<?php

/**
 * Function which finds the first recurring letter
 * in a string
 * @author Daniel Plewinski
 * @param $str
 * @return bool|mixed
 */
function firstRecurringLetter($str) {

    $resAr = [];

    for ($i=0; $i<strlen($str); $i++) {

        if (in_array($str[$i], $resAr)) {
            return $str[$i];
        }

        $resAr[] = $str[$i];
    }

    return false;

}


$string = "ABCDDEFGG";
echo firstRecurringLetter($string);