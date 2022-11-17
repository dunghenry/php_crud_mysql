<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";
$conn = new mysqli($servername, $username, $password, $database);
if (!$conn) {
    die(mysqli_error($conn));
}
?>