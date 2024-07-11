<?php

$array = [200,2,10,4,50];

function findBiggestValue($arr) {
    $max = $arr[0];
    for($i = 0; $i < count($arr); $i++) {
        if($max < $arr[$i]) {
            $max = $arr[$i];
        }
    }
    
    return $max;
}

function createNewArray($arr, $val) {
    $newArr = [];
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] != $val) {
            $newArr[] = $arr[$i];
        }
    }
    return $newArr;
}

$max = findBiggestValue($array);
$newArray = createNewArray($array, $max);
$secondMax = findBiggestValue($newArray);
echo "Terbesar adalah: ".$secondMax;