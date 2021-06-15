<?php 
session_start();
include "config.php";
if (isset($_SESSION["id"])) {

    if($_POST['olustur']){
        $user = $_SESSION["id"];
        $artist = rand(1,10);
        $appointment_date = $_POST["randevu-gunu"];
        $count = count($_POST["islemler"]);

        for($i=0; $i < $count; $i++){
            $sql = "INSERT INTO appointment(artist_id,customer_id,date,process_id) 
            VALUES('".$artist."','".$user."','".$appointment_date."','".(int)$_POST["islemler"][$i]."')";
            $result = $mysqli->query($sql);
            echo($_POST["islemler"][$i]);
            if(!($result)){
                echo("Error description: " .$mysqli->error);
                exit;
            }
        }
        
        header("Location:/kuafor_randevu_sistemi/pages/randevu.php");

        $mysqli->close();
    }
}
