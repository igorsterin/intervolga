<?php


$arr = [11, 12, 13, 23, 56, 77, 88, 92, 106, 121, 133];
$a = 'test';
var_dump($arr);

$pos = 0;
foreach ($arr as $key => $item) {
    if (isNumberContainDigit($item, 2)) {
        arrayInsert($arr, $a, $pos + 1);
        $pos++;
    }
    $pos++;
}


var_dump($arr);


function arrayInsert(&$arr, $elem, $position)
{
    $countArray = count($arr);

    if ($position > $countArray) {
        $position = $countArray;
    }
    for ($i = $countArray; $i >= $position; $i--) {
        $arr[$i] = $arr[$i - 1];
    }
    $arr[$position] = $elem;
}

function isNumberContainDigit($number = '', $digit = ''): bool
{
    if (!$digit) {
        return false;
    }
    $strNum = strval($number);
    $strDigit = strval($digit);
    return !(strpos($strNum, $strDigit) === false);
}