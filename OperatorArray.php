<?php

$first = [
    "lastname" => "ardian",
    "firstname" => "novin"
];

$last = [
    "firstname" => "novin",
    // YANG SAMA DI IGNORE
    "lastname" => "ardian"
];

$full = $first + $last;
var_dump($full);

var_dump($first==$last);
var_dump($first===$last);