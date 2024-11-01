<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_phonghoc";
global $conn;

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = mysqli_query($conn, "SELECT * FROM users");
$row = mysqli_fetch_row($query);
var_dump($row);
echo "Connected successfully";
mysqli_select_db($conn, $db);
?>