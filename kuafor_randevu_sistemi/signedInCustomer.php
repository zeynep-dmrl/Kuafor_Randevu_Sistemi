<?php
session_start();
include "config.php";

$user_fname = $_POST["fname"];
$user_lname = $_POST["lname"];
$user_password = $_POST["password"];

$result = $mysqli->query("SELECT * FROM customer 
WHERE firstName='$user_fname' AND lastName='$user_lname' AND customer_password='$user_password'");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["id"] = $row["customer_id"];
    $_SESSION["name"] = $row["firstName"];
    $_SESSION["lastname"] = $row["lastName"];
    header("Location: /kuafor_randevu_sistemi/pages/anasayfa.php");

}else{
    
    echo "Kullanıcı bulunamadı";
    exit;
}
$mysqli->close();

?>