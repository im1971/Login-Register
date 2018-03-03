<?php
session_start();

if(!empty( $_SESSION["sessionname"] && $_SESSION["sessionpassword"])){

    header("refresh:1;url=addemployee.php");
} else{

    header( "refresh:1; url=login.php" );
}