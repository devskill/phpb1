<?php
$filename = "C:/Work/PHPNEW/phpb1/demo.txt";

$file = fopen($filename, "a");

if($file == false){
    echo "Failed to create file";
    exit();
}

fwrite($file, "Hello world from php laravel.\n");
fwrite($file, "Hello world from php laravel 2.\n");
fwrite($file, "Hello world from php laravel 3.\n");

fflush($file);
fclose($file);