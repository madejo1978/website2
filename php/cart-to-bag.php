<?php
    include "db_connection.php";        

    $sql_querie = "SELECT shoe_id, shoe_name, shoe_price, shoe_picture FROM shoes";
    
    $db_result = $db_connection->query($sql_querie);  

    foreach ($db_result as $row)
    
    {                     
        echo 
            
            // Name
            '<div class="shoe-details">' .
                '<h1>' . $row['shoe_name'] . '<h1>' . '<br>' .
            // Price
                '<h1>' . '€ ' . $row['shoe_price'] . '<h1>' . '<br>' .  
            '</div>' ;
        }       
          

    $conn = null;
?>