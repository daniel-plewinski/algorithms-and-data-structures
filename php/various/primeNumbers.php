<?php

/**
 * @author Daniel Plewinski
 * returns array of prime numbers from n range
 * @param $n
 * @return array
 */

function getPrimeNumbers($n) {

    $primesArr = [2];

    for ($x = 3; $x < $n; $x += 2 ) {

        $isPrime = true;

        for ($i = 3; $i < $x; $i++) {

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