<?php

include '../model/connection.php';
session_start();

function login($email,$password){
    $conn = connect_db();
    $sql = "SELECT * FROM login_cred INNER JOIN students_cred ON login_cred.login_id = students_cred.student_id WHERE login_cred.email = '$email' AND login_cred.password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $rows = $result->fetch_assoc();

        $_SESSION['id'] = $rows['student_id'];
        $_SESSION['fname'] = $rows['fname'];
        $_SESSION['lname'] = $rows['lname'];

        return TRUE;


    }else{
        return FALSE;
    }
}

function register($fname, $lname, $mothers_name, $fathers_name, $address, $gender, $state, $city, $course, $email)
{
    $conn = connect_db();
    $sql = "INSERT INTO students_cred(fname, lname, mothers_name, fathers_name, address,gender, state, city, course, email) VALUES ('$fname', '$lname', '$mothers_name', '$fathers_name', '$address', '$gender', '$state', '$city', '$course',' $email')";
    $result = $conn->query($sql);

    if($result == TRUE){
        $id = $conn->insert_id;
        create_login($email,$id);
        return TRUE;
    }else{
        echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Account creation failed</h4>
                <p>Please check the given credentials properly</p>
                <hr>
                <p class="mb-0"></p>
             </div>';
    }

}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function create_login($email,$student_id){
    $conn = connect_db();
    $password = randomPassword();
    $sql = "INSERT INTO login_cred(email,password,student_id)VALUES('$email','$password','$student_id')";
    $result = $conn->query($sql);

    if($result == TRUE){
        return TRUE;
    }else{
        return FALSE;
    }
    
}



?>
