<?php
$x = 5;
$y = true;
$z = "hello";

$fruits = [];
$fruits[] = "Mango";
$fruits[] = "Banana";
$fruits[2] = "Apple";
$fruits[1] = "Cherry";
$fruits[] = 25;
$fruits[] = true;
$fruits[] = 17.5;

print_r($fruits);

foreach($fruits as $value)
{
    echo $value . "\n";
}

for($i = 0; $i<count($fruits); $i++)
{
    if($i % 2 === 0)
    {
        echo $fruits[$i] . "\n";
    }
}