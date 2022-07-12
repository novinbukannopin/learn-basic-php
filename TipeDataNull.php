<?php

$name = "Novin";
$name = null;

$age = null;

echo "Name\t: ";
echo $name;
echo "\n";

echo "Age\t: ";
echo $age;
echo "\n";

echo "Is Name Null\t: ";
echo is_null($name);
var_dump(is_null($name));
echo "\n";

$isNullName = is_null($name);
var_dump($isNullName);

// MENGHAPUS / UNSET VARIABLE
$contoh = "novin";
unset($contoh);

// Semua perintah tidak bisa di run, jika variable sudah di unset

// TRUE = !0 -> 1,2,3,4
// FALSE = 0 -> 0