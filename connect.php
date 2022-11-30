<?php
//Host local

$host = "localhost";
$username = "root";
$password = "";
$database_name = "mydb";

//Host docker
// $host = "mysql_db";
// $username = "root";
// $password = "root";
// $database_name = "mydb";
$conn = new mysqli($host, $username, $password, $database_name);
if (!$conn) {
    echo "Connected to MYSQL error";
    die(mysqli_error($conn));
}
