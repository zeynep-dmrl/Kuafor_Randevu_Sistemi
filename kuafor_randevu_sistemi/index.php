<html>

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-image: url('/kuafor_randevu_sistemi/images/bg_img_2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            margin: 0;
        }

        .button {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 15px;
            transition-duration: 0.4s;
            cursor: pointer;

        }

        .button1 {
            background-color:#622569;
            color: white;
            border: 2px solid black;
        }

        .button1:hover {
            background-color: #b8a9c9;
            color: black;
        }

        table,
        td {
            border: none;
        }

        td {
            width: 180px;
            text-align: center;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
            margin-top: 20%;
        }
    </style>
</head>

<body>
    <table class="center">
        <tr>
            <td>
                <h2><strong>Kayıt için</strong></h2>
            </td>
            <td>
                <h2><strong>Giriş İçin</strong></h2>
            </td>
        </tr>
        <tr>
            <td><button class="button button1" onclick="location.href='signUp.php'"><b>Sign Up</b></button></td>
            <td><button class="button button1" onclick="location.href='signInCustomer.php'"><b>Sign In</b></button></td>
        </tr>
    </table>


</body>

</html>