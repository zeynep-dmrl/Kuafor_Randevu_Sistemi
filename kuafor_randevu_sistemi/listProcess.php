<?php

include "config.php";

$sorgu = $mysqli->query("SELECT kuafor_randevu.process.id as id,kuafor_randevu.`kind-of-process`.process, sub_process,price,time FROM kuafor_randevu.process
INNER JOIN kuafor_randevu.`kind-of-process` ON kuafor_randevu.process.process_name = kuafor_randevu.`kind-of-process`.id
where process_name = 1");

if ($mysqli->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $mysqli->error);
}

if ($sorgu->num_rows > 0) {
    echo "<div class='grid-item'>";
    // her bir satırı döker
    while($row = $sorgu->fetch_assoc()) {
        echo "<input type='checkbox' name='islemler[]' value=".$row["id"] ."/><b>".$row["sub_process"] . "</b>&ensp; Ücret: " . $row["price"] . "<br/>&ensp; Süre: " . $row["time"]."</br>";
    }
    echo "</div>";
    

}


$sorgu2 = $mysqli->query("SELECT kuafor_randevu.process.id as id,kuafor_randevu.`kind-of-process`.process, sub_process,price,time FROM kuafor_randevu.process
INNER JOIN kuafor_randevu.`kind-of-process` ON kuafor_randevu.process.process_name = kuafor_randevu.`kind-of-process`.id
where process_name = 2");

if ($mysqli->errno > 0) {
    die("<br>Sorgu Hatası:</br> " . $mysqli->error);
}


if ($sorgu2->num_rows > 0) {
    $id=1;
    echo "<div class='grid-item'>";
    // her bir satırı döker
    while($row = $sorgu2->fetch_assoc()) {
        echo "<input type='checkbox' name='islemler[]' value=".$row["id"] ."/><b>".$row["sub_process"] . "</b>&ensp; Ücret: " . $row["price"] . "<br/>&ensp; Süre: " . $row["time"]."</br>";
    }
    echo "</div>";
}

$sorgu3 = $mysqli->query("SELECT kuafor_randevu.process.id as id,kuafor_randevu.`kind-of-process`.process, sub_process,price,time FROM kuafor_randevu.process
INNER JOIN kuafor_randevu.`kind-of-process` ON kuafor_randevu.process.process_name = kuafor_randevu.`kind-of-process`.id
where process_name = 3");

if ($mysqli->errno > 0) {
    die("<br>Sorgu Hatası:</br> " . $mysqli->error);
}


if ($sorgu3->num_rows > 0) {

    echo "<div class='grid-item'>";
    // her bir satırı döker
    while($row = $sorgu3->fetch_assoc()) {
        echo "<input type='checkbox' name='islemler[]' value=".$row["id"] ."/><b>".$row["sub_process"] . "</b>&ensp; Ücret: " . $row["price"] . "<br/>&ensp; Süre: " . $row["time"]."</br>";
    }
    echo "</div>";

}



$sorgu->close();
$sorgu2->close();
$sorgu3->close();
$mysqli->close();
