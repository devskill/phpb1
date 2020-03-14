<?php
$filename = "E:\TestProjects\PHPWork\dummy.txt";

$file = fopen($filename, "w");

if($file == false){
    echo "Failed to create file";
    exit();
}

fwrite($file, "Hello world from php laravel.");
fclose($file);