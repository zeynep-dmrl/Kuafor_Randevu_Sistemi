<?php

include "config.php";

$sorgu = $mysqli->query("SELECT firstName, lastName FROM kuafor_randevu.artist where position=2");

if ($mysqli->errno > 0) {
    die("<br>Sorgu Hatası:</br> " . $mysqli->error);
}


if ($sorgu->num_rows > 0) {
    echo "<table><tr><th>Ad</th><th>Soyad</th></tr>";

    // her bir satırı döker
    while($row = $sorgu->fetch_assoc()) {

        echo "<tr><td> " . $row["firstName"] . "</td><td>" . $row["lastName"] . "</td></tr>";
    }
    echo "</table>";

}

$sorgu->close();
$mysqli->close();
?>
