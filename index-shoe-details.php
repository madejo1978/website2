<?php
session_start();
?>

<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styles-details.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <title>PHP Just Do it</title>
</head>
<body>
    <div class="container1">
        <div class="container-navigation">
            <div class="navigation-left">
                <a href="index.php">NIKE</a>
                <a href="index-blog.php">Blog</a>
                <a href="">My account</a>
                <a href="index.php">Shop</a>
            </div>

            <div class="navigation-right">
                <a href="index-login.php">Login / Register</a>
                <a href="index-cart.php"><ion-icon name="basket"></ion-icon></a>
            </div>
        </div> 
    </div><!--//container1-->

    <div class="container2"> 
            <?php include "php/shoe-details.php" ;?>
        </div>
    </div><!--//container2-->


    <div class="container3"></div>
    <div class="container4"></div>

    <!--JavaScript-->
<script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>    
</body>
</html>
