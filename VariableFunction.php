<?php

function foo(){
    echo "foo" . PHP_EOL;
}

function bar(){
    echo "bar" . PHP_EOL;
}

$sample = "foo";
$sample();

$sample2 = "bar";
$sample2();

function sayOnara(string $name, $filter){
    $fullName = $filter($name);
    echo "hai $fullName" . PHP_EOL;
}

function addGanteng(string $name): string{
    return "$name ganteng";
}

sayOnara("NOVIN", "addGanteng");
sayOnara("NOVIN", "strtoupper");
