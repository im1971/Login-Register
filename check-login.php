<?php
session_start();
require("db-connect.php");

$ckname = $ckpassword = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ckname = $_POST["ckname"];
    $ckpassword = $_POST["ckpassword"];
}

//match login by username and password
$sql = "SELECT username, userpassword FROM tbl3 WHERE username = '".$ckname."' AND userpassword = '".$ckpassword."' ";

$result = $conn->query($sql);

$num_rows = $result->num_rows;

if($num_rows > 0)
{
    echo "Successfully logged in";

    $_SESSION["sessionname"] = $ckname;
    $_SESSION["sessionpassword"] = $ckpassword;
    header( "refresh:2;url=addemployee.php" );
}
else {
    echo "Sorry the credential is wrong";
    session_unset();
    session_destroy();
    header( "refresh:1;url=login.php" );
}


$conn->close();