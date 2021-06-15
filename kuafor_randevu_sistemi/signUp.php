<?php

include "config.php";

?>
<head>
    <style>
        .container {
            border-radius: 5px;
            background-color: #f9d5e5;
            padding: 50px;
            margin-right: auto;
            margin-left: auto;
            height: 280px;
            width:50% ;
            margin-top: 5%;
        }

        input[type=text],input[type=email] {
            width: 50%;
            padding: 12px;
            border: none;
            border-bottom: 2px solid  #e06377;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=text]:focus,input[type=email]:focus {
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
        <form action="signedUp.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Ad:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="fname">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Soyad:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="lname">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Mail Adresi:</label>
                </div>
                <div class="col-75">
                    <input type="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="phone">Telefon Numarası:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="phone">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">Şifre:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="password">
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="submit" value="Kayıt Ol">
                </div>
            </div>
        </form>
    </div>



</body>
</html>