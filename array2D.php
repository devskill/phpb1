<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$twoDimensionalArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

for($i = 0; $i< count($twoDimensionalArray); $i++)
{
    for($j = 0; $j < count($twoDimensionalArray[$i]); $j++)
    {
        echo $twoDimensionalArray[$i][$j] . " ";
    }
    echo "\n";
}
echo "=======================================\n";

$inputArray = [];
$width = 0;
$height = 0;
fscanf(STDIN, "%d%d", $width, $height);

for($i = 0; $i < $height; $i++)
{
    $inputArray[$i] = [];
    for($j = 0; $j < $width; $j++)
    {
        fscanf(STDIN, "%d", $v);
        $inputArray[$i][$j] = $v;
    }
}

function printMyArray($myArray)
{
    for($i = 0; $i < count($myArray); $i++)
    {
        for($j = 0; $j < count($myArray[$i]); $j++)
        {
            echo $myArray[$i][$j] . " ";
        }
        echo "\n";
    }
}

printMyArray($inputArray);
