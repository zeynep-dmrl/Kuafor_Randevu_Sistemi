<?php
session_start();
include "/kuafor_randevu_sistemi/config.php";

if (isset($_SESSION["id"])) {
    $sorgu = $mysqli->query("SELECT firstName, lastName ,mail, phoneNo, customer_password FROM kuafor_randevu.customer where customer_id =" . $_SESSION["id"]);

    if ($mysqli->errno > 0) {
        die("<b>Sorgu Hatası:</b> " . $mysqli->error);
    }

    if ($sorgu->num_rows > 0) {
        $row = $sorgu->fetch_assoc()
?>
        <html>

        <head>
            <style>
                * {
                    box-sizing: border-box;
                }

                body {
                    margin: 0;
                }
                /*navbar menu  */ 
                .navbar {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    position: fixed;
                    top: 0;
                    border-bottom: 1px solid #e7e7e7;
                    background-color: white;
                    width: 100%;

                }

                .navbar a {
                    float: left;
                    display: block;
                    color: black;
                    text-align: center;
                    padding: 14px 16px;
                    padding-top: 10px;
                    text-decoration: none;
                    height: 70px;
                    font-size: 20px;
                    text-align: center;
                }

                .navbar a:hover:not(.active) {
                    color: #d19f68;
                }

                .navbar a.active {
                    color: #d19f68;
                }

                .navbar a.right {
                    float: right;
                    color: crimson;
                }
                /* ana bölüm*/
                .main-container {
                    padding-top: 60px;
                }
            
                .container {
                    border-radius: 5px;
                    background-color: #FAF0E6;
                    padding: 50px;
                    margin-right: auto;
                    margin-left: auto;
                    height: 350px;
                    width: 50%;
                    margin-top: 5%;
                }

                input[type=text] {
                    width: 75%;
                    padding: 12px;
                    border: none;
                    border-bottom: 2px solid #e06377;
                    border-radius: 4px;
                    resize: vertical;
                }

                input[type=text]:focus {
                    border: 2px solid #e06377;
                }

                input[type=submit] {
                    background-color: #c83349;
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    float: right;
                }

                .col-25 {
                    float: left;
                    width: 25%;
                    margin-top: 6px;
                }

                .col-75 {
                    float: left;
                    width: 50%;
                    margin-top: 6px;
                }

                label {
                    font-style: oblique;
                    font-size: 18px;
                }

                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }

                .table-container {
                    border-radius: 5px;
                    padding: 50px;
                    margin-right: auto;
                    margin-left: auto;
                    width: 50%;

                }

                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                td,
                th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #FAF0E6;
                }
            </style>
        </head>

        <body>
            <div class="navbar">
                <a href="anasayfa.php">Home</a>
                <a href="artist.php">Artistler</a>
                <a class="active" href="#">Hesabım(<?php echo ($_SESSION["name"] . "" . $_SESSION["lastname"]) ?>)</a>
                <a href="/kuafor_randevu_sistemi/signOut.php" class="right">Sign Out</a>
                <a class="right" href="randevu.php">Randevu Al</a>
            </div>
            <div class="main-container">
                <h2 style="text-align: center;">KULLANICI BİLGİLERİ</h2>
                <div class="container">
                    <form action="/kuafor_randevu_sistemi/update.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Ad:</label>
                            </div>
                            <div class="col-75">
                                <?php
                                echo "<input type='text' name='fname' value='" . $row["firstName"] . "'>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Soyad:</label>
                            </div>
                            <div class="col-75">
                                <?php
                                echo "<input type='text' name='lname' value='" . $row["lastName"] . "'>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="mail">Mail Adresi:</label>
                            </div>
                            <div class="col-75">
                                <?php
                                echo "<input type='text' name='mail' value='" . $row["mail"] . "'>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="phone">Telefon Numarası:</label>
                            </div>
                            <div class="col-75">
                                <?php
                                echo "<input type='text' name='phone' value='" . $row["phoneNo"] . "'>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="password">Şifre:</label>
                            </div>
                            <div class="col-75">
                                <?php
                                echo "<input type='text' name='password' value='" . $row["customer_password"] . "'>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                                <input type="submit" value="Bilgileri Güncelle">
                            </div>
                        </div>

                    </form>
                </div>
                <h2 style="text-align: center;">Randevu GEÇMİŞİ</h2>

            <?php
        }
        $sorgu1 = $mysqli->query("SELECT kuafor_randevu.appointment.id as idapp, sub_process,date FROM kuafor_randevu.appointment
        INNER JOIN kuafor_randevu.process ON kuafor_randevu.appointment.process_id = kuafor_randevu.process.id 
        where customer_id=". $_SESSION["id"]);

        if ($mysqli->errno > 0) {
            die("<b>Sorgu Hatası:</b> " . $mysqli->error);
        }
        if ($sorgu1->num_rows > 0) {
            ?>
                <div class="table-container">
                    <table>
                        <tr>
                            <th>Randevu</th>
                            <th>İptal Et</th>
                        </tr>
                        <?php
                        while ($row = $sorgu1->fetch_assoc()) {
                            echo "<tr><td> " . $row["sub_process"] . "<br/>" . $row["date"] . "</td>";
                            echo "<td><a href='/kuafor_randevu_sistemi/dltrandevu.php?id=$row[idapp]'>Sil</a></td></tr>";
                        }
                        ?>
                    </table>
                </div>


            <?php
        }
            ?>
            </div>
        </body>

        </html>
    <?php
}
    ?>
