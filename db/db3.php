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

$my_Insert_Statement = $my_Db_Connection->query("SELECT studentid, name FROM students");

while ($row = $my_Insert_Statement->fetch(PDO::FETCH_NUM)) {
    $x = $row[0];
    $y = $row[1];
    echo "id: $x, name: $y\n";
}