<?php include 'html/header.html';
include '../controller/functions.php';


$user_id = $_GET['id'];
$data = get_one_data('faculty_users', 'id', $user_id);

if (isset($_POST['edit_course'])) {
    $id = $_POST['school_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['ctu_email'];
    $college = $_POST['college'];
    $department = $_POST['department'];
    $role = $_POST['role'];

    update_user($id, $fullname, $email, $college, $department, $role, $user_id);
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
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </span>
                        <input type="text" name="school_id" placeholder="SCHOOL ID" value="<?php echo $data['school_id'] ?>" id="" class="form-control" autofocus>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" placeholder="FULLNAME" id="" class="form-control">
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <input type="text" name="ctu_email" value="<?php echo $data['ctu_email'] ?>" placeholder="CTU EMAIL" id="" class="form-control">
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <select name="college" class="form-select" id="">
                            <option value="" selected disabled hidden>SELECT WHICH COLLEGE IT BELONGS</option>
                            <?php foreach (get_specific_table('college') as $row) : ?>
                                <option value="<?php echo strtoupper($row['college_name']) ?>"><?php echo $row['college_name'] ?></option>

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
                        <select name="role" class="form-select" id="">
                            <option value="" selected disabled hidden>SELECT USER ROLE</option>
                            <?php foreach (get_specific_table('roles') as $row) : ?>
                                <option value="<?php echo strtoupper($row['role_name']) ?>"><?php echo $row['role_name'] ?></option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="d-grid mt-3">
                        <button type="submit" name="edit_course" class="btn btn-outline-secondary">Save Updates</button>
                    </div>
                </form>

                <?php

                ?>
            </div>

        </div>
    </div>

</div>




<?php include 'html/footer.html' ?>