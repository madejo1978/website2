<?php include "functions.php"; 

?>

<?php

if (isset($_GET['add'])) {

$_SESSION ['shoe_' . $_GET['add']] +=1;
redirect ("../index.php");

}







?>