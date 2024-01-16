<?php

function removeAnElement(array $array, int $value)
{
    // code here
    $newArray  = [];
    foreach ($array as $nmb){
        if ($value !== $nmb){
            $newArray[] = $nmb;
        }
    }
    return $newArray;
}

// Assert: [2, 8, 1, 11, 7, 3, 4]
//print_r(removeAnElement([5, 2, 8, 1, 11, 7, 3, 4], 5));

// Assert: [1, 3];
//print_r(removeAnElement([4, 1, 4, 3], 4));


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













$array = [5, 2, 8, 1, 11, 7, 3, 4];

function sortByAscending(array $array) {

    $newArray = [];
    $copieArray = $array;
    while($copieArray != []){
        $min = getMin($copieArray);
        $newArray[] = $min;
        $copieArray = removeAnElement($copieArray, $min);
    }
    return $newArray;



}

print_r(sortByAscending([2,1]));

// Assert: [1, 2, 3, 4, 5, 7, 8, 11];

print_r(sortByAscending($array));