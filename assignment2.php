<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d", $n);

$numbers = [];
for($i = 0; $i < $n; $i++)
{
    $numbers[] = [];
    for($j = 0; $j < $n; $j++)
    {
        fscanf(STDIN, "%d", $numbers[$i][$j]);
    }
}

$diagonal1Sum = 0;
$diagonal2Sum = 0;
for($i = 0 ; $i< $n; $i++)
{
    $diagonal1Sum += $numbers[$i][$i];
    $diagonal2Sum += $numbers[$i][$n - $i - 1];
}

echo "Sum1: ". $diagonal1Sum . "\n";
echo "Sum2: ". $diagonal2Sum. "\n";

$max = -1000000000;
$maxi = -1;
$maxj = -1;
for($i = 0; $i < $n; $i++)
{
    for($j = 0; $j < $n; $j++)
    {
        $sum = 0;
        $up = $i - 1;
        $down = $i + 1;
        $left = $j - 1;
        $right = $j + 1;

        if($up >= 0 && $up < $n)
            $sum += $numbers[$up][$j];

        if($down >=0 && $down < $n)
            $sum += $numbers[$down][$j];

        if($left >=0 && $left < $n)
            $sum += $numbers[$i][$left];

        if($right >= 0 && $right < $n)
            $sum += $numbers[$i][$right];

        if($sum > $max)
        {
            $max = $sum;
            $maxi = $i;
            $maxj = $j;
        }     
    }
}

echo "Max Sum: " . $max . "\n";
echo "position of max: $maxi, $maxj\n";