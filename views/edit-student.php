<?php include 'html/header.html';
include '../controller/functions.php';


$user_id = $_GET['id'];
$data = get_one_data('students_cred', 'student_id', $user_id);

if (isset($_POST['update_student'])) {
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $department = $_POST['department'];
    $section = $_POST['class_section'];
    $college = $_POST['college'];
    $status = "STUDENT";
    $address = $data['address'];
    $gender = $data['gender'];
    $year_level = $_POST['year_level'];

    update_student($user_id,$fname,$lname,$college,$department,$section,$college,$status,$address,$gender,$year_level);
    
}

?>

<div class="container-fluid my-3">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container justify-content-center bg-white p-5">

    <div class="row my-3">
        <div class="card p-5">
            <div class="card-body">
                <form action="" method="post">
                    
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <input type="text" name="fname" value="<?php echo $data['fname'] ?>" placeholder="FULLNAME" id="" class="form-control">
                        <input type="text" name="lname" value="<?php echo $data['lname'] ?>" placeholder="FULLNAME" id="" class="form-control">
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <select name="course" class="form-select" id="">
                            <option value="" selected disabled hidden>SELECT WHICH COURSE IT BELONGS</option>
                            <?php foreach (get_specific_table('courses') as $row) : ?>
                                <option value="<?php echo strtoupper($row['course_name']) ?>"><?php echo $row['course_name'] ?></option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <select name="department" class="form-select" id="">
                            <option value="" selected disabled hidden>SELECT WHICH DEPARTMENT IT BELONGS</option>
                            <?php foreach (get_specific_table('departments') as $row) : ?>
                                <option value="<?php echo strtoupper($row['department_name']) ?>"><?php echo $row['department_name'] ?></option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <select name="class_section" class="form-select" id="">
                            <option value="" selected disabled hidden>SELECT WHICH SECTION IT BELONGS</option>
                            <?php foreach (get_section() as $row) : ?>
                                <option value="<?php echo strtoupper($row['section']) ?>"><?php echo $row['section'] ?></option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <select name="college" class="form-select" id="">
                            <option value="" selected disabled hidden>SELECT COLLEGE</option>
                            <?php foreach (get_specific_table('college') as $row) : ?>
                                <option value="<?php echo strtoupper($row['college_name']) ?>"><?php echo $row['college_name'] ?></option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <select name="year_level" class="form-select" id="">
                            <option value="" selected disabled hidden>SELECT YEAR LEVEL</option>
                            <option value="1" >FIRST YEAR</option>
                            <option value="2" >SECOND YEAR</option>
                            <option value="3" >THIRD YEAR</option>
                            <option value="4" >FOURTH YEAR</option>
                            
                        </select>
                    </div>
                    <div class="d-grid mt-3">
                        <button type="submit" name="update_student" class="btn btn-outline-secondary">Save Updates</button>
                    </div>
                </form>

                <?php

                ?>
            </div>

        </div>
    </div>

</div>




<?php include 'html/footer.html' ?>