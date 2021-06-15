<?php

include "config.php";

$sorgu = $mysqli->query("SELECT kuafor_randevu.`kind-of-process`.process, sub_process, price, time FROM kuafor_randevu.process 
INNER JOIN kuafor_randevu.`kind-of-process` ON kuafor_randevu.process.process_name = kuafor_randevu.`kind-of-process`.id
where process_name = 1");

if ($mysqli->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $mysqli->error);
}

if ($sorgu->num_rows > 0) {
    // her bir satırı döker
    while($row = $sorgu->fetch_assoc()) {
        echo "<li>".$row["sub_process"]."</li>" ;
       
    }
}

?>