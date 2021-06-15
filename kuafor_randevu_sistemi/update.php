<?php
session_start();
include "config.php";
if (isset($_SESSION["id"])) {

  $user_fname = $_POST["fname"];
  $user_lname = $_POST["lname"];
  $user_email = $_POST["mail"];
  $user_phone = $_POST["phone"];
  $user_password = $_POST["password"];
  $user_id = $_SESSION["id"];

  $result = $mysqli->query("UPDATE customer  SET firstName ='".$user_fname."',lastName= '".$user_lname."',mail='".$user_email."',
  phoneNo = '".$user_phone."',customer_password='".$user_password."' WHERE customer_id =".$user_id);

  if ($result === TRUE) {
      header("Location: /kuafor_randevu_sistemi/pages/account.php");
    } else {
      echo "Error updating record: " . $mysqli->error;
      echo "Bilgilerinizi tekrardan düzeltiniz.";
    }


}
?>