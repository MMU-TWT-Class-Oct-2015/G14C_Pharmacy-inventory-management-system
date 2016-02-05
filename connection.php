<?php

$host="localhost";
$user="root";
$password="";

$web = mysql_connect($host,$user,$password);
mysql_select_db("pharmacy");

// Check connection
if (!$web) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
?>
