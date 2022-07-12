<?php
// dengan ilmu manusia biasa
function factorialLoop(int $value)
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

echo factorialLoop(4);
echo PHP_EOL;

// dengan recursive
function factorialRecursive(int $values){
    if ($values==1){
        return 1;
    } else {
        return $values * factorialRecursive($values-1);
    }
}

echo factorialRecursive(4);
