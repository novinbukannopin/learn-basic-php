<?php

$data = [
    "action" => "create"
];
// TANPA COALESING
//if (isset($data["action"])) {
//    $action = $data["action"];
//} else {
//    $action = "nothing";
//}
//echo $action . PHP_EOL;

// DENGAN COALESCING

$data = [
    "action" => "create"
];
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;