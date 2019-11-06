<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "courier";

// Create connection
$connect = new mysqli($servername, $username, $password, $db);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>