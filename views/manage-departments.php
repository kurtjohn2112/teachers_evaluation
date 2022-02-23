<?php include 'html/header.html';
include '../controller/functions.php';
$college = $_GET['college_name'];


if (isset($_POST['btn_submit'])) {
    $dept_name = strtoupper($_POST['dept_name']);
    $dept_desc = $_POST['dept_desc'];
    $college = $_GET['college_name'];

    create_department($dept_name, $dept_desc,$college);
}
?>

<div class="container-fluid my-3">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container justify-content-center bg-white p-5">
    <p class="font-monospace">MANAGE DEPARTMENT</p>
    <table class="table table-bordered">
        <thead class="table-dark">
            <td>Department Name</td>
            <td>Department Details</td>
            <td colspan="3">Action</td>
        </thead>

        <?php foreach (get_colleges_department($college) as $row) : ?>
            <tr>
                <td><?php echo $row['department_name'] ?></td>
                <td><?php echo $row['department_details'] ?></td>
                <td><a href="edit-department.php?id=<?php echo $row['department_id'] ?>" class="btn btn-outline-secondary"> <i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
                <td><a href="../controller/delete.php?department_id=<?php echo $row['department_id'] ?>" class="btn btn-outline-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                <td><a href="manage-courses.php?dep_name=<?php echo $row['department_name'] ?>" class="btn btn-outline-secondary"> <i class="fas fa-search    "></i> </a></td>
            </tr>

        <?php endforeach ?>
    </table>

    <div class="row">
        <div class="col-10">

        </div>
        <div class="col-2 d-grid">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#modelId">
                ADD A DEPARTMENT
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New department</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        @
                                    </span>
                                    <input type="text" name="dept_name" placeholder="Department Name" id="" class="form-control">
                                </div>
                                <div class="input-group mt-3">
                                    <span class="input-group-text">
                                        @
                                    </span>
                                    <input type="text" name="dept_desc" placeholder="Department Description" id="" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        
                                    </div>
                                </div>
                                <div class="d-grid mt-3">
                                    <button type="submit" name="btn_submit" class="btn btn-outline-secondary">Save Department</button>
                                </div>
                            </form>

                            <?php

                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save</button> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<?php include 'html/footer.html' ?>