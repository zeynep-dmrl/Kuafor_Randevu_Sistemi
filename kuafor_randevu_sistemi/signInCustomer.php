<?php

include "config.php";

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
        .container {
            border-radius: 5px;
            background-color: #f9d5e5;
            padding: 50px;
            margin-right: auto;
            margin-left: auto;
            height: 50%;
            width: 65%;
            margin-top: 5%;
        }

        input[type=text],input[type=password] {
            width: 60%;
            padding: 12px;
            border: none;
            border-bottom: 2px solid  #e06377;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=text]:focus ,input[type=password]:focus{
            border: 2px solid  #e06377;
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
        label{
            font-style: oblique;
            font-size: 18px;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="signedInCustomer.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Adınız:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="fname">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Soyadınız:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="lname">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">Şifre:</label>
                </div>
                <div class="col-75">
                    <input type="password" name="password">
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="submit" value="Giriş Yap">
                </div>
            </div>
            <p>Kayıt oluşturmak için <a href="signUp.php">tıklayınız</a></p>
        </form>
    </div>

</body>
</html>
