<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default password for XAMPP MySQL
$db_name = "book_db"; // Updated database name

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>