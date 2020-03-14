<?php
$filename = "E:\TestProjects\PHPWork\dummy.txt";

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