<?php
    session_start();
    include "db_connection.php";

    $email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $database_query = "SELECT user_email 
               FROM users 
               WHERE user_email = '$email' 
               AND user_password = '$user_password'";

    $db_result = $db_connection->query($database_query);

    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
           $firstname = $row['user_email'];
    }   

    $_SESSION["login-user"] = $firstname;
    $_SESSION["login-wrong-message"] = "Your Username or Password is unknown";

    header("location: ../index.php");
    }
    else 
    { 
        function display_message(){
            if(isset($_SESSION["login-user"]))
            echo $_SESSION["login-wrong-message"];
            unset($_SESSION["login-wrong-message"]);
        }

      echo 'Your Username or Password is unknown';

    // echo "welkom " . $firstname;
    // header verwijst naar hij moet inloggen
}
?>