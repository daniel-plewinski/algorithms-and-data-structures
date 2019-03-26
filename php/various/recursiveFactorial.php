<?php

/**
 * returns the factorial of a given number (n!) using recursion
 * @param $n
 * @return float|int
 * @author Daniel Plewinski
 */
function getFactorial($n) {

    if ($n === 0) {
        return 1;
    }

    return $n * getFactorial($n-1);
}

echo getFactorial(3);