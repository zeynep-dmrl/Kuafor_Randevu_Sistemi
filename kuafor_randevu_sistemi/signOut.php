<?php

session_start();
include "config.php";
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["lastname"]);

session_destroy();
header("Location: /kuafor_randevu_sistemi/index.php");
?>