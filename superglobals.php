<?php

// Globals
$x = 5;

function something()
{   global $x;
    echo $x;
    echo "Hello " . $GLOBALS["x"] . "\n";
}

function something2()
{
    $GLOBALS['x'] = 10;
}

something2();
//something();

// $_SERVER

//print_r($_SERVER);
//echo $_SERVER["SystemRoot"];

// $_REQUEST
echo $_REQUEST["name"];
