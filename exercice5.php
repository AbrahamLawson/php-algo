<?php
$array = [5, 2, 5, 8, 1, 2, 2, 7, 8, 3, 2, 4, 2, 3, 5];
//$array = [1, 2, 2, 3];
function fromArrayToHistogram(array $array) {
    // code here
   $newArray = [];
   foreach ($array as  $value){

       if(isset($newArray[$value])){
           $newArray[$value]= $newArray[$value]+ 1 ;
       }
       else{
           $newArray[$value]= 1;
       }

   }
   return $newArray;
}

/** Should look like
* (
 * [1, 2, 2, 3];
 *
 * [1] => 1
 * [2] => 5
* [3] => 2
* [4] => 1
* [5] => 3
* [7] => 1
* [8] => 2
* )
 */
print_r(fromArrayToHistogram($array));