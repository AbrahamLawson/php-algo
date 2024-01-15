<?php
$array = [-5, 2, 5, 8, -1, 2, 2, -7, 8, 3, -2, -4, 2, 3, 5];

function transformToAbsWithForEach(array $array) {
    // code here
    $newArray = [];
    foreach ($array as $nmb){
        $newArray[] = abs($nmb);
    }
    return $newArray;
}

function transformToAbsWithFor(array $array){
    $newArray = [];
    for($i = 0; $i < count($array); $i++){
       $newArray[] =  abs($array[$i]);
    }
    return $newArray;

}

function transformToAbsWithWhile(array $array){
    $newArray = [];
    $i = 0;
    while ($i < count($array)){
        $newArray[] =  abs($array[$i]);
        $i++;
    }
    return $newArray;
}

// Assert: [5, 2, 5, 8, 1, 2, 2, 7, 8, 3, 2, 4, 2, 3, 5];
print_r(transformToAbsWithForEach($array));
print_r(transformToAbsWithFor($array));
print_r(transformToAbsWithWhile($array));




