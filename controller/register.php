<?php 
include 'functions.php';
// foreach($_POST as $key=>$value){
//     echo $key;
//     echo "<br>";
// }

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$course = $_POST['course'];
$department = $_POST['department'];
$section = $_POST['class_section'];
$college = $_POST['college'];
$status = $_POST['user_type'];
$address = $_POST['address'];
$gender = $_POST['gender'];

$course = $_POST['course'];
$email = $_POST['email'];
$year_level = $_POST['year_level'];
$password = $_POST['password'];

$eval = register($fname,$lname,$department,$section,$college,$address,$gender,$course,$email,$status,$year_level,$password);

if($eval == TRUE){
   echo '<script>
            window.location.href = "../views/messages/reg_success.php";
        </script>';
}else{
    echo "fuck";
}




?>