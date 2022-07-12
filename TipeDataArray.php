<?php

$values = array(1,2,3,4);
var_dump($values);

$names = ["Novin", "Ardian", "Yulianto"];
var_dump($names);

var_dump($names[0]);
$names[0] = "Ganteng";
var_dump($names);

unset($names[1]);
var_dump($names);

var_dump(count($names));
echo "\n";


// MAP -> ()
$novin = array(
    "nama" => "novin",
    "umur" => 19,
    "kota" => [
        "city" => "Lamongan",
        "code" => 62292,
    ],
    "status" => "jomblo"
);

var_dump($novin["kota"]["city"]);

$budi = [
    "nama" => "Budi",
    "kota" => "Nganjuk",
    "umur" => 35,
];

var_dump($budi);