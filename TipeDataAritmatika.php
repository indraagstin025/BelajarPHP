<?php

$a = 10;
$b = 15;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = $result;
var_dump($resultPositive);

$a = 50;
$b = 100;

$result = $a * $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultModulo = 250 % 4;
var_dump($resultModulo);


