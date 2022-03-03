<?php
include 'html/header.html';
include '../controller/functions.php';
?>


<div class="container-fluid my-3 bg-light">
    <?php include 'admin-navbar.php'; ?>
</div>
<div class="container mt-3">
    <div class="row mt-3 justify-content-center bg-white p-5 border border-1">
        <div class="col-3 bg-white">
            <div class="card ">
                <div class="card-body">
                    <p class="card-text text-center lead">
                        NUMBER OF STUDENTS WHO EVALUATED
                    <p><i class="fa fa-star" aria-hidden="true"></i>
                        <span class="float-end"><?php echo count_students_who_submitted() ?> </span>
                    </p>
                    
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link text-decoration-none">View</a>
                    <a href=""> <i class="fas fa-arrow-right float-end"></i> </a>
                </div>
            </div>
        </div>
        <div class="col-3 bg-white">
            <div class="card ">
                <div class="card-body">
                    <p class="card-text text-center lead">
                        TOTAL NUMBER OF FACULTIES
                    <p>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="float-end"> <?php echo count(get_specific_table('faculty_users')) ?> </span>
                    </p>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="admin-manage-students.php" class="card-link text-decoration-none">View</a>
                    <a href=""> <i class="fas fa-arrow-right float-end"></i> </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card ">
                <div class="card-body">
                    <p class="card-text text-center lead">
                        TOTAL NUMBER OF STUDENTS
                    <p>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="float-end"><?php echo count(get_specific_table('students_cred')) ?></span>
                        
                    </p>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="" class="card-link text-decoration-none">View</a>
                    <a href=""> <i class="fas fa-arrow-right float-end"></i> </a>
                </div>
            </div>


        </div>

    </div>
</div>







<?php include 'html/footer.html'; ?>