<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'dbconfig.php';
$db = connectDB();
$select = $db->prepare("SELECT * FROM
movies;");
$select->execute();
$info = $select->fetchAll();
//echo "db succes";


 ?>