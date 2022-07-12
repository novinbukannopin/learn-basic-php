<?php

$gender = "PRIA";
$hi = null;

// TERNARY

$hi = $gender == "PRIA" ? "Hai bro" : "Hai nona";
echo $hi . PHP_EOL;


// IF ELSE STANDARD
if ($gender == "PRIA") {
    $hi = "Hai Bro";
} else {
    $hi = "Hai nona";
}

echo $hi . PHP_EOL;
