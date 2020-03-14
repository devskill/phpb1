<?php
$servername = "localhost";
$database = "phpdemo"; 
$username = "root";
$password = "";
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try { 
  $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
  echo "Connected successfully";
} catch (PDOException $error) {
  echo 'Connection error: ' . $error->getMessage();
}

$name = "Thom";
$is_active = true;

$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO Students (name, is_active) VALUES (:name, :is_active)");

$my_Insert_Statement->bindParam(':is_active', $is_active);
$my_Insert_Statement->bindParam(':name', $name);


if ($my_Insert_Statement->execute()) {
  echo "New record created successfully";
} else {
  echo "Unable to create record";
}

$name = "John";
$is_active = false;

if ($my_Insert_Statement->execute()) {
  echo "New record created successfully";
} else {
  echo "Unable to create record";
}