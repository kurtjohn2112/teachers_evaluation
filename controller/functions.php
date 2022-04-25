<?php

include '../model/connection.php';


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
        $_SESSION['section'] = $rows['section'];
        $_SESSION['course'] = $rows['course'];
        $_SESSION['level'] = $rows['year_level'];

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
function get_class_subjects($id){
    $conn = connect_db();
    
    $sql = "SELECT * FROM subjects WHERE sub_class_id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }else{
        return FALSE;
    }

}
function create_subjects($name,$desc,$id){
    $conn = connect_db();
    $sql = "INSERT INTO subjects(sub_name,sub_desc,sub_class_id) VALUES ('$name','$desc','$id')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }
}
function create_evaluation($school_year,$semester){
    $conn = connect_db();
    $sql = "INSERT INTO evaluations(school_year,semester) VALUES ('$school_year','$semester')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }
}
function change_eval_status($id,$status){
    $conn = connect_db();
    $sql ="UPDATE evaluations SET status = '$status'  WHERE id ='$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }
    

}
function update_evaluation($year,$semester,$id){
    $conn = connect_db();
    $sql ="UPDATE evaluations SET school_year = '$year', semester = '$semester' WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('location:manage-evaluation.php');
      
    } else {
       die("ERROR: ".$conn->error);
    }

}
function get_eval_detail($id){
    $conn = connect_db();
    $sql ="SELECT * FROM evaluations WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
       return $result->fetch_assoc();
      
    } else {
       die("ERROR: ".$conn->error);
    }

}
function get_criteria($id){
    $conn = connect_db();
    $sql ="SELECT * FROM criteria WHERE eval_id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }else{
        return FALSE;
    }
    
}
function create_criteria($name,$id){
    $conn = connect_db();
    $sql = "INSERT INTO criteria(eval_id,criteria_name) VALUES ('$id','$name')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }

}
function create_question($question,$criteria,$eval_id){
    $conn = connect_db();
    $sql = "INSERT INTO questionaires(question,criteria,eval_id) VALUES ('$question','$criteria','$eval_id')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }


}

function get_questions($eval_id){
    $conn = connect_db();
    $sql ="SELECT * FROM questionaires WHERE eval_id = '$eval_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }else{
        return FALSE;
    }

}

function edit_criteria($cri_id,$cri_name){
    $conn = connect_db();
    $sql ="UPDATE criteria SET criteria_name = '$cri_name' WHERE id = '$cri_id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }

}
function edit_question($quest_id,$question){
    $conn = connect_db();
    $sql ="UPDATE questionaires SET question = '$question' WHERE quest_id = '$quest_id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }

}

 function get_section(){
    $conn = connect_db();
    $sql ="SELECT section FROM classes GROUP BY section";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }else{
        return FALSE;
    }

}
 function get_courses(){
    $conn = connect_db();
    $sql ="SELECT course_name FROM courses GROUP BY course_name";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }else{
        return FALSE;
    }

}

function create_teacher($fname,$lname,$department,$username,$password){
    $conn = connect_db();
    $sql = "INSERT INTO teachers(fname,lname,department,username,password)VALUES('$fname','$lname','$department','$username','$password')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }


}

function save_restrictions($eval_id,$teacher_id,$year,$section,$course){
    $conn = connect_db();
    $sql = "UPDATE evaluations SET year = '$year', section = '$section', course = '$course', teacher_id = '$teacher_id' WHERE id ='$eval_id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('location: messages/eval_complete.php');
      
    } else {
       die("ERROR: ".$conn->error);
    }


}

function get_evaluations($year,$section,$course){
    $conn = connect_db();
    $sql = "SELECT * FROM evaluations WHERE year = '$year' AND section = '$section' AND course = '$course'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }else{
        return FALSE;
    }


}
 function save_answers($student_id,$eval_id,$question_id,$score,$criteria){
    $conn = connect_db();
    $sql = "INSERT INTO answers(student_id,eval_id,question_id,score,criteria)VALUES('$student_id','$eval_id','$question_id','$score','$criteria')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('location: messages/answer-completed.php');
      
    } else {
       die("ERROR: ".$conn->error);
    }

}
function check_if_student_answered_question($student_id,$eval_id){
    $conn = connect_db();
    $sql = "SELECT * FROM answers WHERE student_id = '$student_id' AND eval_id = '$eval_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return "ANSWERED";
    }else{
        return FALSE;
    }


}

function create_report($eval,$criteria){
    $conn = connect_db();
    $sql = "SELECT question_id FROM answers WHERE eval_id = '$eval' AND criteria = '$criteria' GROUP BY question_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }else{
        return FALSE;
    }
}
function count_student_who_answered($eval_id){
    $conn = connect_db();
    $sql = "SELECT student_id FROM answers WHERE eval_id = '$eval_id' GROUP BY student_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       return $result->num_rows;
    }else{
        return FALSE;
    }

}

function total_student_count($question_id){
    $conn = connect_db();
    $sql = "SELECT * FROM answers WHERE question_id = '$question_id' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       return $result->num_rows;
       

     }else{
         return 0;
     }
}
function count_student_number($question_id,$score,$criteria){
    $conn = connect_db();
    $sql = "SELECT COUNT(score) as count FROM answers WHERE question_id = '$question_id' AND score = '$score' AND criteria = '$criteria'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      return $row['count'] * $score;
       

     }else{
         return 0;
     }
}

function login_admins($username,$password){
    $conn = connect_db();
    $sql = "SELECT * FROM faculty_users WHERE ctu_email = '$username' AND school_id = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['role'] = $row['role'];

    
        
        header('location: admin.php');

     }else{
        echo "<div class = 'alert alert-danger mt-5'>INVALID CREDENTIALS</div>";
     }
}

function update_student($id,$fname,$lname,$course,$department,$section,$college,$status,$address,$gender,$year_level){
    $conn = connect_db();
    $sql = "UPDATE students_cred SET fname='$fname',lname='$lname',department='$department',section='$section',college='$college',address='$address',gender='$gender',course='$course',status='$status',year_level='$year_level' WHERE student_id='$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
     
       header('location: manage-students.php');
     }else{
         die('ERROR: '.$conn->error);
     }

}

function count_students_who_submitted(){
    $conn = connect_db();
    $sql = "SELECT student_id FROM answers GROUP BY student_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      return  $result->num_rows;

      

     }else{
         return 0;
     }
}

function add_comment($eval_id,$student_id,$comment){
    $conn = connect_db();
    $sql = "INSERT INTO comments(eval_id,student_id,content)VALUES('$eval_id','$student_id','$comment')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Refresh: 0');
      
    } else {
       die("ERROR: ".$conn->error);
    }
    
}

function get_comments($eval_id){
    $conn = connect_db();
    $sql = "SELECT * FROM comments WHERE eval_id = '$eval_id' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }else{
        return FALSE;
    }

}

function upload_img($name){
    $conn = connect_db();
    $sql = "INSERT INTO images(name)VALUES('$name')";
    $result = $conn->query($sql);

    if($result == TRUE){
      return 1;
      
    }else{
        die('ERROR: '.$conn->error);
    }

}

 function show_img(){
    $conn = connect_db();
    $sql = "SELECT * FROM images ORDER BY id DESC";
    $result = $conn->query($sql);

    if($result == TRUE){
      return $result->fetch_assoc();
      
    }else{
        die('ERROR: '.$conn->error);
    }

}

function get_total_score($id){
    $conn = connect_db();
    $sql = "SELECT SUM(score) as total FROM answers WHERE eval_id = $id;
    ";
    $result = $conn->query($sql);

    if($result == TRUE){
      return $result->fetch_assoc();
      
    }else{
        die('ERROR: '.$conn->error);
    }

}
function get_total_question($id){
    $conn = connect_db();
    $sql = "SELECT DISTINCT question_id FROM answers WHERE eval_id = '$id';
    ";
    $result = $conn->query($sql);

    if($result == TRUE){
      return $result->num_rows;
      
    }else{
        die('ERROR: '.$conn->error);
    }

}



?>
