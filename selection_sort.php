<?php

function selectionSort($array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $array = swapPosition($array, $i, $min);
    }
    return $array;
}

function swapPosition($data, $left, $right) {
    $flag = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $flag;
    return $data;
}
$array = [5,4,6,7,2,2,1];
echo implode(", ", selectionSort($array));