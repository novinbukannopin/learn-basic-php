<?php

function sayHello() {
    echo "Hello World" . PHP_EOL;
}

sayHello();


// Tidak bisa di run karena function belum di defined kan
$buatFunction = false;

if ($buatFunction){
    function sayHolla(){
        echo "Holla mapren" . PHP_EOL;
    }
}

sayHolla();
