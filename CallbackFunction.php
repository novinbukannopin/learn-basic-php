<?php


function sayHello(string $name, callable $filter)
{
    $fullName = call_user_func($filter, $name);
    echo "Hai $fullName" . PHP_EOL;
}

// DENGAN MANUAL BY STRING
sayHello("novin", "strtoupper");
// DENGAN ARROW FUNCTION
sayHello("NOVIN", fn($name) => strtolower($name));
// DENGAN ANONYMOUS FUNCTION
sayHello("novin", function (string $name): string {
    return strtoupper($name);
});