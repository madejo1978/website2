<?php
    
        $email = $_POST["user_email"];    
        $user_password = $_POST["user_password"];  
     
    include "db_connection.php";
    
    try {  
        $sql = "INSERT INTO users (user_email, user_password)
        VALUES ('$email', '$user_password')";
        
        $db_connection->exec($sql);
        
        echo "Uw nieuwe account is aangemaakt <br/>";
        echo "Welkom " . $email;
        }

            catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;

header("Location: ../index-login.php");  

?>