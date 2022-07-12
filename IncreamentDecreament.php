<?php
// PRE
$a = 10;
$b = ++$a;

var_dump($a);
var_dump($b);


// POST
$a = 10;
$b = $a++;

var_dump($a);
var_dump($b);