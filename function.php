<?php

function sum($numbers)
{
    $sum = 0;
    foreach($numbers as $number)
    {
        $sum += $number;
    }
    return $sum;
}

function getInputNumbers()
{
    $input = readline();
    $numbers = explode(',', $input);
    $validNumbers = [];
    foreach($numbers as $number)
    {
        if($number != "")
            $validNumbers[] = $number;
    }
    
    return $validNumbers;
}

while(true)
{
    $inputs = getInputNumbers();
    if(count($inputs) == 0)
        break;

    $result = sum($inputs);
    echo $result. "\n";
}




