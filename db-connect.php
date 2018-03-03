<?php
$servername = "testphp.dev";
$username = "root";
$password = "123";
$dbname = "abc";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
