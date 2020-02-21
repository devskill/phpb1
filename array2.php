<?php

$settings1 = ["jalaluddin","112kdjk",25,true,"smtp.gmail.com"];

$settings2 = [
    "username" => "jalaluddin", // Key => Value
    "password" => "112kdjk",
    "port" => 25,
    "ssl" => true,
    "host" => "smtp.gmail.com"
];

$settings2["tls"] = "no";

echo $settings1[0] . "\n";
echo $settings1[3]. "\n";
foreach($settings1 as $val)
{
    echo $val. "\n";
}
echo "----------------------" ."\n";

echo $settings2["username"]. "\n";
echo $settings2["password"]. "\n"; 

foreach($settings2 as $key => $val)
{
    echo $key . " -> " . $val. "\n";
}