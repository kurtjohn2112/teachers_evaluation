<?php 
include 'functions.php';
$username = $_POST['username'];
$password = $_POST['password'];


$validate = login($username,$password);

if($eval == TRUE){
    echo '<script>
             window.location.href = "../views/dstd_dashboard.php";
         </script>';
 }else{
     echo "fuck";
 }

?>