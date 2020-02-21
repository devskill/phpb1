<?php

$x = 5;
$y = 10;
$z = $x + $y;

$city = "ঢাকা";  // string
$country = "Bangladesh";
$name = "Jalaluddin";

$_year = 2020; // integer
$price = 23.50; // float or double
$present = true; // boolean
$today = date("d"); // date 

$year = 2020;
$year = "new year";
$year = 2020.5;
$year = false; // syntax

// this is a comment 

/* 
this is a big
big 
big comment
*/

$z = $x + $y; // addition
$z = $x - $y; // subtraction
$z = $x * $y; // multiplication
$z = $x / $y; // division
$z = $x % $y; // modulo
$z = $x ** $y; //exponentiation

$z++; // $z = $z + 1; Increament operator
$z--; // $z = $z - 1; decreament operation
++$z;
--$z;

$z = 7;
$a = $z++; // 7

echo "a = $a, z = $z \n";

$z = 7;
$a = ++$z;
echo "a = $a, z = $z \n";


$z += 5; // $z = $z + 5;
$z -= 3; // $z = $z - 3;
$z /= 2; // $z = $z / 2;
$z %= 2; // $z = $z % 2;
$z *= 3; // $z = $z * 3;

if($z > 5)
{
    echo "Z is greater than 5\n";
}
else if($z == 5)
{
    echo "Z is equal to 5\n";
}
else if($z >= 5)
{
    // dead code, unreachable code
}
else
{
    echo "Z is smaller than 5\n";
}

$x = 3; // 0011 -> 0001 
$z = $x << 3;  // shift operator

echo $z . "\n";

$input = readline("Please enter something:");
$lineParts = explode(',', $input);
print_r($lineParts);