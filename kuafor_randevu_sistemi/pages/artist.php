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

            table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 75%;
            }

            td,
            th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #ddd;
            }

            th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #d19f68;
                color: white;
            }

            .divider {
                padding: 16px;
                margin-right: auto;
                margin-left: 15%;
            }

            .container {
                padding-top: 45px;
            }

            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                background: black;
                color: whitesmoke;
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
            <a class="active" href="artist.php">Artistler</a>
            <a href="account.php">Hesabım(<?php echo ($_SESSION["name"] . "" . $_SESSION["lastname"]) ?>)</a>
            <a href="/kuafor_randevu_sistemi/signOut.php" class="right">Sign Out</a>
            <a href="randevu.php" class="right">Randevu Al</a>
        </div>
        <div class="container">
            <div class="divider">
                <h2 style="font-style: oblique">MakeUp Artistleri</h2>
                <?php
                include "/xampp/htdocs/kuafor_randevu_sistemi/listMakeUpArtist.php";
                ?>
            </div>
            <div class="divider">
                <h2 style="font-style: oblique">Nail Artistleri</h2>
                <?php
                include "/xampp/htdocs/kuafor_randevu_sistemi/listNailArtist.php";
                ?>
            </div>
        </div>
        <div class="footer">
            <h2>Studiolarımızı sizin için hazırladık</h2>
        </div>

    </body>

    </html>
<?php
}
?>