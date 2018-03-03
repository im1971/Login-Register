<?php
require("db-connect.php");

//insert register file data into database
$logname= $logemail = $log_pass = $con_pass = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $logname = $_POST["logname"];
    $logemail = $_POST["logemail"];
    $log_pass = $_POST["log-pass"];
    $con_pass = $_POST["con-pass"];
}

$sql = "INSERT INTO tbl3 (username, useremail, userpassword, confirmpassword) VALUES ('$logname','$logemail','$log_pass', '$con_pass')";

if ($conn->query($sql) === TRUE) {
    echo "New account created successfully";
    header( "refresh:1;url=login.php" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
