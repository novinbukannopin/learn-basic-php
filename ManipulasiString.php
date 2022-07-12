<?php

$name = "Novin Ardian Yulianto";

echo "Nama  : " . $name . PHP_EOL;
echo "Value :" . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInteger = (int)"100";
var_dump($valueInteger);

$valueFloat = (float)"1.01";
var_dump($valueFloat);


// MENGAKSES VALUE OF INDEX
$name = "Novin";
echo $name[0] . PHP_EOL;

// PRINTING -> VARIABLE PARSING
echo "Hello $name ganteng" . PHP_EOL;

// CURLY BRACES -> ADD VAR + CHAR
echo "Hello {$name}s" . PHP_EOL;

echo "Hello " . $name . PHP_EOL;