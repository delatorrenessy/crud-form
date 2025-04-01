<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lastname_b8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br/>";
?>