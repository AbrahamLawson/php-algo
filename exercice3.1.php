<?php

function getMax(array $array) {
    // code here
    if($array === []){
        return null;
    }
    $max = $array[0];


    foreach ($array as $value){
        if($value > $max){
            $max = $value;
        }

    }
    return $max;
}

// Assert: 11
echo getMax([5, 2, 8, 1, 11, 7, 3, 4])."\n";

// Assert: null
echo getMax([])."\n";