<?php

// STANDARD
$name = ["novin", "ardian", "yulianto"];

foreach ($name as $names) {
    echo $names . PHP_EOL;
}

// OBJECT

$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
$keys = array_keys($superheroes);
for ($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . PHP_EOL;
    foreach ($superheroes[$keys[$i]] as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    }
}

$person = array(
    "firstname" => "novin",
    "middlename" => "ardian",
    "city" => array(
        "zipcode" => 62292,
        "country" => "ina"
    )
);



