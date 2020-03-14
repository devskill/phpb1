<?php
$filename = "C:/Work/PHPNEW/phpb1/demo.txt";

$file = fopen($filename, "r");

if($file == false){
    echo "Failed to open file";
    exit();
}

$size = filesize($filename);

echo $size . "\n";

$data = fread($file, $size);

fclose($file);

echo $data . "\n";