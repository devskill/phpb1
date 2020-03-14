<?php
require_once 'pdodb.php';

$servername = "localhost";
$database = "devskill"; 
$username = "root";
$password = "";

try { 
  $db = new PDODB($servername, $username, $password, $database);  
  $db->connect();

  //performInsert($db);
  //performUpdate($db);
  //performDelete($db);
  performGetData($db);

} catch (Exception $error) {
  echo 'Error: ' . $error->getMessage();
}

function performInsert($db)
{
  $sql = "Insert into course (courseid, name, fee) Values(:courseid, :name, :fee);";
  $args = [ ":courseid" => 3, ":name" => "Unit Test", ":fee" => 30000];
  $db->insert($sql, $args);
}

function performUpdate($db)
{
  $sql = "UPDATE course SET name = :name WHERE courseid = :courseid";
  $args = [ ":courseid" => 3, ":name" => "AWS"];
  $db->update($sql, $args);
}

function performDelete($db)
{
  $sql = "DELETE FROM course WHERE name = :name";
  $args = [ ":name" => 'PHP Laravel'];
  $db->delete($sql, $args);
}

function performGetData($db)
{
  $sql = "SELECT * FROM course";
  //$args = [ ":name" => 'AWS'];
  $data = $db->getdata($sql, $args);

  var_dump($data);
}