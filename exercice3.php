<?php

function getMin(array $array) {
    // code here
    $min = $array[0];
    foreach ($array as $value){
        if($value < $min){
            $min = $value;

        }
    }
    return $min;
}
// Assert: 2
echo getMin([2])."\n";

// Assert: 1
echo getMin([2, 1])."\n";

// Assert: 1
echo getMin([3, 2, 1])."\n";
// Assert: 1
echo getMin([5, 2, 8, 1, 11, 7, 3, 4])."\n";

// Assert: -3
echo getMin([5, -3, 8, 1, 11, -1, 3, 4])."\n";