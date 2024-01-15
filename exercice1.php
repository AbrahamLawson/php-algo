<?php

$array = ['foo', 'bar', 'feu', 'toto', 'tata'];

function findElementInArray(array $array, string $element) {
    // code here
    foreach($array as $key => $value){
        if($element === $value){
            return $key;
        }

    }
    return -1;

}

echo findElementInArray($array, 'bar') . " = 1\n";

echo findElementInArray($array, 'tata') . " = 4\n";

echo findElementInArray($array, 'autre') . " = -1\n";