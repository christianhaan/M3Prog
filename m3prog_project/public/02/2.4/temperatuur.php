<?php
// Fahrenheit naar Celsius
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

// Celsius naar Fahrenheit
$celsius1 = 100;
$fahrenheit1 = ($celsius + 32) * 1.8;
echo "{$celsius1} graden Celsius = {$fahrenheit1} graden Fahrenheit. <br/>";

// Celsius naar Kelvin
$celsius2 = -10;
$kelvin = ($celsius + 273.15);
echo "{$celsius2} graden Celsius = {$kelvin} graden Fahrenheit. <br/>";

// Fahrenheit naar Kelvin
$fahrenheit2 = 50;
$kelvin1 = ($fahrenheit2 + 459.67) * 5/9;
echo "{$fahrenheit2} graden Fahrenheit = {$kelvin1} graden Kelvin."
?>