<?php 
include 'functions.php';
// foreach($_POST as $key=>$value){
//     echo $key;
//     echo "<br>";
// }

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$m_name = $_POST['mothers_name'];
$f_name = $_POST['fathers_name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$city = $_POST['city'];
$course = $_POST['course'];
$email = $_POST['email'];

$eval = register($fname,$lname,$m_name,$f_name,$address,$gender,$state,$city,$course,$email);

if($eval == TRUE){
   echo '<script>
            window.location.href = "../views/messages/reg_success.php";
        </script>';
}else{
    echo "fuck";
}




?>