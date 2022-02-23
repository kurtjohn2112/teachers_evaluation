<?php

include '../model/connection.php';
session_start();

function login($email, $password)
{
    $conn = connect_db();
    $sql = "SELECT * FROM login_cred INNER JOIN students_cred ON login_cred.login_id = students_cred.student_id WHERE login_cred.email = '$email' AND login_cred.password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $rows = $result->fetch_assoc();

        $_SESSION['id'] = $rows['student_id'];
        $_SESSION['fname'] = $rows['fname'];
        $_SESSION['lname'] = $rows['lname'];

        return TRUE;
    } else {
        return FALSE;
    }
}

function register($fname, $lname, $department, $section,$college, $address, $gender, $course, $email,$status,$year_level,$password)
{
    $conn = connect_db();
    $sql = "INSERT INTO students_cred(fname, lname, department, section,college, address, gender, course, status, year_level) VALUES ('$fname', '$lname', '$department', '$section','$college', '$address', '$gender', '$course','$status','$year_level')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        $id = $conn->insert_id;
        create_login($email,$password,$id);
        return TRUE;
    } else {
        // echo '<div class="alert alert-danger" role="alert">
        //         <h4 class="alert-heading">Account creation failed</h4>
        //         <p>Please check the given credentials properly</p>
        //         <hr>
        //         <p class="mb-0"></p>
        //      </div>';

        return die('ERROR '.$conn->error);
    }
}

function randomPassword()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function create_login($email,$password, $student_id)
{
    $conn = connect_db();
    // $password = randomPassword();
    $sql = "INSERT INTO login_cred(email,password,student_id)VALUES('$email','$password','$student_id')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function get_students()
{
    $conn = connect_db();
    $sql = "SELECT * FROM students_cred INNER JOIN login_cred ON students_cred.student_id = login_cred.login_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
}

function get_specific_student($id)
{

    $conn = connect_db();
    $sql = "SELECT * FROM students_cred INNER JOIN login_cred ON students_cred.student_id = login_cred.student_id WHERE students_cred.student_id =  '$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        return $result->fetch_assoc();
    } else {
        return FALSE;
    }
}

function get_specific_table($table_name)
{
    $conn = connect_db();
    $sql = "SELECT * FROM $table_name";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
}

function delete_item($table_name,$pk_column,$primary_key){
    $conn = connect_db();
    $sql = "DELETE FROM $table_name WHERE $pk_column = '$primary_key' ";
    $result = $conn->query($sql);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;

}
function get_one_data($table,$pk_column,$id){
    $conn = connect_db();
    $sql = "SELECT * FROM $table WHERE $pk_column ='$id' ";
    $result = $conn->query($sql);

    return $result->fetch_assoc();
    

}

function create_department($college_name,$collge_desc,$college)
{
    $conn = connect_db();
    $sql = "INSERT INTO departments(department_name,department_details,department_college)VALUES('$college_name','$collge_desc','$college')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh:0');
      
    } else {
       return false;
    }
}

function update_department($name,$desc,$id){
    $conn = connect_db();
    $sql ="UPDATE departments SET department_name = '$name', department_details = '$desc' WHERE department_id = '$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('location:departments.php');
      
    } else {
       die("ERROR: ".$conn->error);
    }

}

function get_courses_department($department){
    $conn = connect_db();
    $department_name = strtoupper($department);
    $sql = "SELECT * FROM courses WHERE department_name = '$department_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

}
function update_course($id, $name, $detail, $department){
    $conn = connect_db();
    $department = strtoupper($department);
    $sql ="UPDATE courses SET course_name = '$name', course_detail = '$detail', department_name = '$department' WHERE course_id = '$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('location:manage-courses.php?dep_name='.$department);
      
    } else {
       die("ERROR: ".$conn->error);
    }
}
function create_course($name,$details,$department){
    $conn = connect_db();
    $sql = "INSERT INTO courses(course_name,course_detail,department_name)VALUES('$name','$details','$department')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh:0');
      
    } else {
       die("error ".$conn->error);
    }

}
function create_college($name,$details){
    $conn = connect_db();
    $sql = "INSERT INTO college(college_name,college_detail)VALUES('$name','$details')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh:0');
      
    } else {
       die("error ".$conn->error);
    }

}
function get_colleges_department($college){
    $conn = connect_db();
    $college = strtoupper($college);
    $sql = "SELECT * FROM departments WHERE department_college = '$college'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

}
function update_college($id, $name, $detail){
    $conn = connect_db();
    $name = strtoupper($name);
    $sql ="UPDATE college SET college_name = '$name', college_detail = '$detail' WHERE college_id = '$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('location:manage-college.php');
      
    } else {
       die("ERROR: ".$conn->error);
    }
}

function create_user($id,$name,$email,$college,$department,$role){
    $conn = connect_db();
    $sql = "INSERT INTO faculty_users(school_id, fullname, ctu_email, college, department,role) VALUES ('$id','$name','$email','$college','$department','$role')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }
}

function get_user_group($role){
    $conn = connect_db();
    $role = strtoupper($role);
    $sql = "SELECT * FROM faculty_users WHERE role = '$role'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

}
function update_user($school_id,$fullname,$ctu_email,$college,$department,$role,$id){
    $conn = connect_db();
    $role = strtoupper($role);
    $sql ="UPDATE faculty_users SET school_id = '$school_id', fullname = '$fullname', ctu_email = '$ctu_email', college = '$college', department = '$department', role = '$role' WHERE id ='$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('location:manage-faculties.php?user='.$role);
      
    } else {
       die("ERROR: ".$conn->error);
    }
}

function get_class_course($course){
    $conn = connect_db();
    $course = strtoupper($course);
    $sql = "SELECT * FROM classes WHERE course = '$course'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    

}
function create_class($year,$section,$course){
    $conn = connect_db();
    $sql = "INSERT INTO classes(year,section,course) VALUES ('$year','$section','$course')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }
}


?>
