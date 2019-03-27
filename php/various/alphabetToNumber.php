<?php

/**
 * Function returns numbers instead of letters from a defined
 * alphabet string
 * @author Daniel Plewinski
 * @param $str
 * @return string
 */
function textToAlphabetToNumbers($str) {

    $alph = "abcdefghijklmnopqrstuvwxyz";
    $retStr = "";

    for ($i=0; $i < strlen($str); $i++) {

        if (stristr($alph, $str[$i])) {

            $retStr .= strpos($alph, $str[$i]) . ' ';

        }
    }
    return $retStr;
}

$text = "this is a test only";
echo textToAlphabetToNumbers($text);

# should return
// 19 7 8 18 8 18 0 19 4 18 19 14 13 11 24