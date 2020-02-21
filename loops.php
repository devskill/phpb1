<?php
// loops
// for loop
for($i = 0; $i < 10; $i++)
{
    echo "I am a good programmer.\n";
}

// scope

$counter = 11;
while($counter <= 10)
{
    echo "I am in while loop" . "\n";
    $counter++;
}

$counter2 = 11;
do
{
    echo "I am in do while loop" . "\n";
    $counter2++;
}
while($counter2 <= 10);


$fruits = [ "Mango", "Banana", "Apple", "Cherry" ];

for($i = 0; $i < count($fruits); $i++)
{
    echo $fruits[$i] . "\n";
}

foreach($fruits as $value)
{
    echo $value . "\n";
}
