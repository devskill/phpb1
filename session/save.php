<?php
session_start();
echo $_SESSION["name"]; // get
unset($_SESSION["name"]); // remote or delete
$_SESSION["name"] = "jalaluddin"; // update