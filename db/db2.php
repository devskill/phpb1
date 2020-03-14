<?php
$servername = "localhost";
$database = "devskill"; 
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
$studentid = "5";

$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO Students (studentid, name) VALUES (:studentid, :name)");

$my_Insert_Statement->bindParam(':studentid', $studentid);
$my_Insert_Statement->bindParam(':name', $name);


if ($my_Insert_Statement->execute()) {
  echo "New record created successfully";
} else {
  echo "Unable to create record";
}

$name = "John";
$studentid = 6;

if ($my_Insert_Statement->execute()) {
  echo "New record created successfully";
} else {
  echo "Unable to create record";
}