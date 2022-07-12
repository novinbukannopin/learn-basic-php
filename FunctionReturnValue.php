<?php
// untuk menambahkan type return, : => sum(a,b) : int

function sum(int $first, int $last) : int
{
    return $first + $last;
}

$result = sum(1, 2);
var_dump($result);

function getFinalValue(int $value) : string
{
    if ($value >= 85) {
        return "A";
    } else if ($value >= 75) {
        return "B";
    } else if ($value >= 65) {
        return "C";
    } else {
        return "D";
    }
    echo "ups!!" . PHP_EOL;
}

echo getFinalValue(84);
