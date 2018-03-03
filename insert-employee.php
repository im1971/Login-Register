<?php
require("db-connect.php");

//insert employee data into database

$empname= $empaddress = $empphone = $empemail = $empnid = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $empname = $_POST["empname"];
    $empaddress = $_POST["empaddress"];
    $empphone = $_POST["empphone"];
    $empemail = $_POST["empemail"];
    $empnid = $_POST["empnid"];
}

$sql = "INSERT INTO employee (empname, empaddress, empphone, empemail, empnid) VALUES ('$empname','$empaddress','$empphone','$empemail','$empnid')";

if ($conn->query($sql) === TRUE) {
    echo "New employee created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();