<?php


$mysqli = new mysqli("localhost","root","","kuafor_randevu");

if($mysqli -> connect_errno){
    echo("Bağlantı olusturulamadı");
    exit;
}

?>
