<?php


$arr = [11,12,13,23,56,77,88,92,106];
$a = 'test';
var_dump($arr);

$pos = 0;
foreach ($arr as $key => $item) {
    if (isNumberContainDigit($item, 2)) {
        arrayInsert($arr, $a, $pos+1);
        $pos++;
    }
    $pos++;
}


var_dump($arr);


function arrayInsert(&$arr, $elem, $position)
{
   $arr = array_merge(array_slice($arr, 0, $position), [$elem], array_slice($arr, $position, count($arr)));
}

function isNumberContainDigit($number = '', $digit = ''): bool
{
    if (!$digit) return false;
    $strNum = strval($number);
    $strDigit = strval($digit);
    return !(strpos($strNum, $strDigit) === false);

}