<?php include 'html/header.html';
include '../controller/functions.php';


$id = $_GET['id'];
$data = get_one_data('departments','department_id',$id);

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
                        <input type="text" name="dept_name" placeholder="Department Name" value="<?php echo $data['department_name'] ?>" id="" class="form-control" autofocus>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <input type="text" name="dept_desc" value="<?php echo $data['department_details'] ?>" placeholder="Department Description" id="" class="form-control">
                    </div>
                    <div class="d-grid mt-3">
                        <button type="submit" name="edit_college" class="btn btn-outline-secondary">Save Updates</button>
                    </div>
                </form>

                <?php 
                    if(isset($_POST['edit_college'])){
                        $department_name = $_POST['dept_name'];
                        $dept_desc = $_POST['dept_desc'];

                        update_college($department_name,$dept_desc,$id);

                      

                    }
                ?>
            </div>

        </div>
    </div>

</div>




<?php include 'html/footer.html' ?>