<?php
// Membuat Function dengan Parameter atau Argument
function sayHello($name)
{
    echo "Hai $name" . PHP_EOL;
}

sayHello("novin");

// Membuat Function dengan default Value
function sayWoi($nama = "jembayik")
{
    echo "Hai $nama" . PHP_EOL;
}

sayWoi();
sayWoi("novin");

// Default value berguna di akhir argument => (nama, age = 19);

// Function dengan Valid Type => String, int, bool, array

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "$first + $last = $total" . PHP_EOL;
}

sum(100,99);

// SUM WITH ARRAY
function sumAll(array $values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " .implode(",", $values) , " = $total" . PHP_EOL;
}

sumAll([1,2,3,4,5]);

function sumAllint(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " .implode(",", $values) , " = $total" . PHP_EOL;
}

sumAllint(1,2,3,4,5);