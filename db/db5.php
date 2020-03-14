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

$studentid = "5";
$name = "Mr. X";

$my_Insert_Statement = $my_Db_Connection->prepare("UPDATE Students SET name = :name WHERE studentid = :studentid");
$my_Insert_Statement->bindParam(':studentid', $studentid, PDO::PARAM_INT);
$my_Insert_Statement->bindParam(':name', $name, PDO::PARAM_STR);

if ($my_Insert_Statement->execute()) {
  echo "Record updated successfully";
} else {
  echo "Unable to update record";
}