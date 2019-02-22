<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styles-login.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <title>PHP Just Do it</title>
</head>
<body>
    <div class="container1">
        <div class="container-navigation">
            <div class="navigation-left">
                <a href="index.php">NIKE</a>
             <!-- <a href="">My account</a> -->
            </div>

            <div class="navigation-right">
            <!--  <a href="">Login / Register</a> --> 
                <a href="index-cart.php"><ion-icon name="basket"></ion-icon></a>
            </div>
        </div> 
    </div><!--//container1-->

<!-- forms -->

<div class = "container2">
    <div class="form-admin">
        <form action="php/loginFormExisting.php" method="POST">
            <h2>PLEASE LOGIN</h2>
            <legend><br>WELCOME<br>&nbsp<br></legend>
            <input type="text" id="#" name="user_email" autofocus placeholder="Username">
            <input type="password" id="#" name="user_password" autofocus placeholder="Password">
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
 
    <div class="form-admin">
        <form action="php/loginFormNew.php" method="POST">
            <h2>OR CREATE A NEW ACCOUNT</h2>
            <legend><br>WELCOME<br>&nbsp<br></legend>
            <input type="text" id="#" name="user_email" autofocus placeholder="Username">
            <input type="password" id="#" name="user_password" autofocus placeholder="Password">
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div><!-- //container2 -->
<script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
</body>
</html>