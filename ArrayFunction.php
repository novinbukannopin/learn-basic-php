<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$mappingData = fn($value) => $value * 2;
$resultData = array_map($mappingData, $data);
foreach ($resultData as $result) {
    echo $result . PHP_EOL;
}

rsort($data);
var_dump($data);

// arraykeys arrayvalues arraymap sort dll