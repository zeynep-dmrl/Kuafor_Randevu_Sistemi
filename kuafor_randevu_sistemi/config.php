<?php


$mysqli = new mysqli("localhost","root","8142","kuafor_randevu");

if($mysqli -> connect_errno){
    echo("Bağlantı olusturulamadı");
    exit;
}

?>
