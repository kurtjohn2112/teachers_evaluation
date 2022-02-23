<?php include 'html/header.html';
include '../controller/functions.php';


$id = $_GET['id'];
$data = get_one_data('courses','course_id',$id);

if(isset($_POST['edit_course'])){
    $course_name = $_POST['course_name'];
    $course_details = $_POST['course_details'];
    $department_name = $_POST['department_name'];

    update_course($id,$course_name,$course_details,$department_name);

  

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
                        <input type="text" name="course_name" placeholder="Department Name" value="<?php echo $data['course_name'] ?>" id="" class="form-control" autofocus>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <input type="text" name="course_details" value="<?php echo $data['course_detail'] ?>" placeholder="Department Description" id="" class="form-control">
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <input type="text" name="department_name" value="<?php echo $data['department_name'] ?>" placeholder="Department Description" id="" class="form-control">
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