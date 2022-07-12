<?php

// JOIN / IMPLODE
$joinString = join(",", [1, 2, 3, 4, 5]);
echo $joinString . PHP_EOL;

// EXPLODE
$pisahString = explode(" ", "novin ardian yulianto");
foreach ($pisahString as $value) {
    echo $value . PHP_EOL;
}

$lowerString = strtolower("JEMBAYIK");
echo $lowerString . PHP_EOL;

$upperString = strtoupper("jembayik");
echo $upperString . PHP_EOL;

$subString = substr("jembayik", 0, 2);
echo $subString . PHP_EOL;

$trimString = trim("     novin      ");
echo $trimString . PHP_EOL;

