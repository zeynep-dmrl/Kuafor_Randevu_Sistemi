<?php
session_start();
include "/xampp/htdocs/kuafor_randevu_sistemi/config.php";


if (isset($_SESSION["id"])) {
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

            .grid-container {
                display: grid;
                grid-template-columns: auto auto auto;
                padding: 5px;
            }

            .grid-item {
                border: 1px solid #DFE3EE;
                padding: 10px;
                background-color: #F7F7F7;
                font-size: 17px;
            }

            .container {
                padding-top: 60px;
            }

            input[type=checkbox]:hover {
                color: #e06377;
            }

            input[type=checkbox]:checked {
                background-color: #eeac99;
            }

            .form-tarih {
                border: 2px solid #c83349;
                height: 80px;
                width: 50%;
                padding-top: 25px;
                padding-bottom: 15px;
                margin-top: 10px;
                margin-left: auto;
                float: left;
                text-align: center;
                background-color: #F7F7F7;
            }

            .tarih {
                height: 30px;
                position: relative;
                opacity: 1;
                width: 200px;
                padding: 10px;
            }

            .button {
                opacity: 1;
                color: white;
                background-color: #c83349;
                width: auto;
                height: 35px;
                border: none;
                font-size: 16px;
                margin-top: 25px;
                margin-left: 15%;
            }


            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                background: black;
                color: whitesmoke;
                bottom: 0;
                position: fixed;
                width: 100%;

            }

            @media screen and (max-width: 700px) {
                .row {
                    flex-direction: column;
                }
            }
            @media screen and (max-width: 400px) {
                .navbar a {
                    float: none;
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>
        <div class="navbar">
            <a href="anasayfa.php">Home</a>
            <a href="artist.php">Artistler</a>
            <a href="account.php">Hesabım(<?php echo ($_SESSION["name"] . "" . $_SESSION["lastname"]) ?>)</a>
            <a href="/kuafor_randevu_sistemi/signOut.php" class="right">Sign Out</a>
            <a class="active right" href="#">Randevu Al</a>
        </div>
        <form class="container" action="/kuafor_randevu_sistemi/createAppointment.php" method="POST">
            <h1 style="font-style:oblique; text-align:center;"> Randevu Al</h1>
            <div class="grid-container">
                <?php
                include "/xampp/htdocs/kuafor_randevu_sistemi/listProcess.php";
                ?>
            </div>
            <div style="display: inline;">
                <div class="form-tarih">
                    <b>Randevu tarihi : </b><input class="tarih" type="date" name="randevu-gunu">
                </div>
                <input class="button" type="submit" name="olustur" value="Randevu oluştur">
            </div>

        </form>

        <div class="footer">
            <h2>Studiolarımızı sizin için hazırladık</h2>
        </div>

    </body>

    </html>
<?php
}
?>