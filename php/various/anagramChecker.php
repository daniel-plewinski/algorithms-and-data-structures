<?php

function validAnagram($first, $second) {

    if (strlen($first) !== strlen($second)) {
        return false;
    }

    $lookup = [];

    for ($i=0; $i<strlen($first); $i++) {

        $letter = $first[$i];

        if (!empty($lookup[$letter])) {
            $lookup[$letter] +=1;
        } else {
            $lookup[$letter] = 1;
        }
    }

    for ($i=0; $i<strlen($second); $i++) {

        $letter = $second[$i];

        if (empty($lookup[$letter])) {
            return false;
        } else {
            $lookup[$letter] -= 1;
        }
    }

    return true;
}

if (validAnagram('anagram', 'nagaram')) {
    echo "This is an anagram";
} else {
    echo "This is not an anagram";
}