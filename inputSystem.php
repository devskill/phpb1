<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$line = fgets(STDIN); // reads one line from STDIN

fscanf(STDIN, "%d", $testcase); // reads number from STDIN

for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%d %d %d %d", $x1, $y1, $x2, $y2);  // %s for string, %lf for double, %f float
   $result = abs($x2 - $y2) + abs($x1 - $y1);

   fprintf(STDOUT, "Case %d: %d\n", $i+1, $result);
}