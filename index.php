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
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <title>PHP Just Do it</title>
</head>
<body>
    <div class="container1" id="home">
        <div class="container-navigation">
            <div class="navigation-left">
                <a href="">NIKE</a>
                <a href="index-blog.php">Blog</a>
                <a href="">My account</a>
                <a href="#shop" >Shop</a>
            </div>

            <div class="navigation-right">
                <a href="index-login.php">Login / Register</a>
                <a href="index-cart.php"><ion-icon name="basket"></ion-icon></a>
            </div>
        </div> 
    </div><!--//container1-->

    <div class="container2">
        <div class="video-container">
        <video width="100%" height="100%" autoplay source src="video/video1.mp4" type="video/mp4"></video>
        </div>
    </div>

    <div class="container3">
        <div class="shop-container" id="shop">
        <h1>SHOP</h1>
        <p>Click on image for detailS</p>
    </div>

    <div class="container4"> 
        <div class="shoe-container">
            <?php include "php/shoe-mainpage.php" ;?>
        </div>
    </div>

    <div class="container5">
        <div class="footer-container">
        <a href="#home">BACK TO MAIN PAGE</a>
        
    </div>
    
<!--JavaScript-->
    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js">   
</script>
</body>
</html>
