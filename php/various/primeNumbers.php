<?php

/**
 * returns array of prime numbers from 0 to n range
 * @author Daniel Plewinski
 * @param $n
 * @return array
 */

function getPrimeNumbers($n) {

    $primesArr = [];

    for ($x = 2; $x < $n; $x++ ) {

        $isPrime = true;

        for ($i = 2; $i < $x; $i++) {

            if ($x % $i === 0) {
                $isPrime = false;
                continue;
            }
        }

        if ($isPrime) {
            $primesArr[] = $x;
        }
    }

    return $primesArr;
}

var_dump(getPrimeNumbers(30));