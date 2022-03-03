<?php 
session_start();
session_destroy();


if($_GET['student'] == true){
    header('location: ../index.php');

   
   
}else{
    header('location: index.php');
}



?>