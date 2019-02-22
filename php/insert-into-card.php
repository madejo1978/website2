<?php
    session_start();
        $user_id = 1;//$_SESSION['user_id'];
        $shoecart_id= $_GET["shoe_id"];    
         
     
    include "db_connection.php";
    
    try {  
        $sql = "INSERT INTO cart (shoeCart_id, userCart_id)
        VALUES ('$shoecart_id', '$user_id')";
        
        $db_connection->exec($sql);
        }

            catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;

// header("Location: ../index-cart.php"); 

?>

