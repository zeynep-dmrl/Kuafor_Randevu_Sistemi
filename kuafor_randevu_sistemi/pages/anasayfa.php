<?php
session_start();
include "/xampp/htdocs/kuafor_randevu_sistemi/config.php";

if (isset($_SESSION["id"]) && $_SESSION >0) {
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

            /*Navbar Menu */
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

            /* Column container */
            .row {
                display: -ms-flexbox;
                /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap;
                /* IE10 */
                flex-wrap: wrap;
                padding-top: 45px;
            }

            /* Sidebar/left column */
            .side {
                -ms-flex: 30%;
                /* IE10 */
                flex: 30%;
                background-color: #f1f1f1;
                padding: 20px;
            }

            /* Main column */
            .main {
                -ms-flex: 70%;
                /* IE10 */
                flex: 70%;
                background-color: white;
                padding: 20px;
            }

            .fakeimg {
                background-color: #aaa;
                width: 100%;

            }

            .sideimg {
                padding: 5px;
                width: 400px;
                height: 200px;
            }

            .sideimg2 {
                padding: 10px;
                width: 270px;
                height: 400px;
            }

            .mainimg {
                width: 400px;
                height: 300px;
                float: left;
            }

            .makeup>img,
            .makeup>ul {
                display: inline-block;
            }

            ul {
                list-style-type: none;
            }

            li {
                font-size: 22px;
                text-align: center;
                color: black;
                padding: 4px;
            }

            .nailimg {
                padding: 5px;
                width: 400px;
                height: 400px;
            }

            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                background: black;
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
            <a class="active" href="#home">Home</a>
            <a href="artist.php">Artistler</a>
            <a href="account.php">Hesabım(<?php echo ($_SESSION["name"] . "" . $_SESSION["lastname"]) ?>)</a>
            <a href="/kuafor_randevu_sistemi/signOut.php" class="right">Sign Out</a>
            <a href="randevu.php" class="right">Randevu Al</a>
        </div>
        <div class="row">
            <div class="side">
                <br>
                <div class="fakeimg" style="height:200px;background-color:mintcream">
                    <img class="sideimg" src="/kuafor_randevu_sistemi/images/img_bg.png">
                </div>
                <p>Her ortamın aynı makyajı kaldıramayacağı kanısındayız.
                    Bu yüzden size farklı yer ve farklı özel güne uygun birkaç seçenek sunduk.

                </p>

                <h3>ÇALIŞMA SAATLERİ</h3>
                <h3> Pzt, Sa, Çrş, Prş, Cu, Cts 11:00 - 19:00</h3>
                <div class="fakeimg" style="height:400px; background-color:deeppink;">
                    <img class="sideimg2" src="/kuafor_randevu_sistemi/images/img_studio.png" alt="stduio">
                </div>
                <br>
            </div>
            <div class="main">
                <h1 style="text-align:center;"><strong>HİZMETLERİMİZ</strong></h1>
                <h2>MakeUp</h2>
                <div class="makeup fakeimg" style="height:300px; background-color:white;">
                    <img class="mainimg" src="/kuafor_randevu_sistemi/images/bg_img.png" alt="stduio">
                    <ul>
                        <?php
                        include "/xampp/htdocs/kuafor_randevu_sistemi/listProcessName.php";
                        ?>
                    </ul>
                </div>
                <br>
                <h2>Nail Art</h2>
                <div class="fakeimg" style="height:400px;display:inline-block;background-color:white;">
                    <img class="nailimg" src="/kuafor_randevu_sistemi/images/img-nailart.png" alt="nailart">
                    <img class="nailimg" src="/kuafor_randevu_sistemi/images/img_nailart2.png" alt="nailart">
                </div>
            </div>
        </div>

        <div class="footer">
            <h2 style="color: whitesmoke;">Studiolarımızı sizin için hazırladık</h2>
        </div>

    </body>

    </html>
<?php
}

?>