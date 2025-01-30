<?php
$host = "localhost";
$username = "root";
$password = ""; // Replace with your MySQL root password
$database = "urbanvibe";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
