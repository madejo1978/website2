<?php
    include "db_connection.php";        

    $sql_querie = "SELECT shoe_id, shoe_name, shoe_price, shoe_picture FROM shoes";
    
    $db_result = $db_connection->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        echo '<div class="shoe-container">' .
             '<a href="index-shoe-details.php?shoe_id=' . $row['shoe_id'] . '">' .     
             '<img src="' . $row['shoe_picture'] . '" alt="' . ' ' . ' 
             "style="width:100%" . ">' .
             '</div>';  

            } 

    $conn = null;
?>