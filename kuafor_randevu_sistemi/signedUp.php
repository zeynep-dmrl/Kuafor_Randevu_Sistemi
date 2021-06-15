<?php

include "config.php";

$newuser_fname = $_POST["fname"];
$newuser_lname = $_POST["lname"];
$newuser_email = $_POST["email"];
$newuser_phone = $_POST["phone"];
$newuser_password = $_POST["password"];

$result = $mysqli->query("INSERT INTO customer (firstName,lastName,mail,phoneNo,customer_password) 
VALUES ('".$newuser_fname."','".$newuser_lname."','".$newuser_email."','".$newuser_phone."','".$newuser_password."')");

if(!($result)){
    echo("Error description: " .$mysqli->error);
    exit;
}
header("Location: index.php");

$mysqli->close();

?>