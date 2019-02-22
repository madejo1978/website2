<?php
    include "db_connection.php";        

    if(isset($_GET['shoe_id'])){
        $shoe_id = $_GET['shoe_id'];
    }else{
        $shoe_id = 1;
    }    
    
    $sql_querie = "SELECT shoe_id, shoe_name, shoe_price, shoe_picture FROM shoes WHERE shoe_id = '$shoe_id'";
    
    $db_result = $db_connection->query($sql_querie);  

    foreach ($db_result as $row)
    
{                     
    echo 
        
        // Name
        '<div class="shoe-details">' .
            '<h1>' . $row['shoe_name'] . '<h1>' . '<br>' .
        // Price
            '<h1>' . '€ ' . $row['shoe_price'] . '<h1>' . '<br>' .
        // Button    
        '</div>' ;
    }       

    $conn = null;
?>