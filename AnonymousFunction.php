<?php

$sayHolla = function (string $name){
    echo "Holla $name" . PHP_EOL;
};

$sayHolla("novin");

function sayGoodBye(string $nama, $filter){
    $finalName = $filter($nama);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("NOVIN", function (string $nama): string{
    return strtolower($nama);
});

//atau

$strtolower = function (string $nama) : string{
    return strtolower($nama);
};
sayGoodBye("NOVIN", $strtolower);

// MENGAKSES VARIABLE BUKAN MILIK CLOSURE
$firstName = "Novin";
$middleName = "Ardian";
$sayHelloNovin = function () use ($firstName, $middleName){
    echo "Hello $firstName $middleName" . PHP_EOL;
};
$sayHelloNovin();