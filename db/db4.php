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

$studentid = "4";

$my_Insert_Statement = $my_Db_Connection->prepare("DELETE FROM Students WHERE id = :id");
$my_Insert_Statement->bindParam(':id', $studentid);

if ($my_Insert_Statement->execute()) {
  echo "Record deleted successfully";
} else {
  echo "Unable to delete record";
}