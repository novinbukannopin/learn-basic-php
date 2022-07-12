<?php

$firstName = "novin";
$middleName = "ardian";

$anonymousFunction = function () use ($firstName, $middleName) : string{
    return "Hello $firstName $middleName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $middleName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();
