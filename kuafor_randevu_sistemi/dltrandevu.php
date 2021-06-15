<?php
session_start();
include "config.php";

if(isset($_GET["id"])){

    $rId = $_GET["id"];
    $sorgu = $mysqli->query("DELETE FROM kuafor_randevu.appointment where id =".$rId);
    if($sorgu === FALSE){
        echo "başarısız";
        
    }
    header("Location:/kuafor_randevu_sistemi/pages/account.php");
}

?>