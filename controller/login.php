<?php 
include 'functions.php';
$username = $_POST['username'];
$password = $_POST['password'];


$validate = login($username,$password);





if($validate == TRUE){
    echo '<script>
             window.location.href = "../views/students_dashboard.php";
         </script>';
 }else{
    echo '<script>
         window.location.href = "../views/messages/login_error.php";
    </script>';
 }

?>