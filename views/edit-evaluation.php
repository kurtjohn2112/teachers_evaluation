<?php include 'html/header.html';
include '../controller/functions.php';


$id = $_GET['id'];
$data = get_one_data('evaluations','id',$id);

if(isset($_POST['edit_evaluation'])){
    $school_year = $_POST['school_year'];
   $semester = $_POST['semester'];

    update_evaluation($school_year,$semester,$id);

  

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
                        <input type="text" name="school_year" placeholder="SCHOOL YEAR" value="<?php echo $data['school_year'] ?>" id="" class="form-control" autofocus>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        <input type="text" name="semester" value="<?php echo $data['semester'] ?>" placeholder="SEMESTER" id="" class="form-control">
                    </div>
                    <div class="d-grid mt-3">
                        <button type="submit" name="edit_evaluation" class="btn btn-outline-secondary">Save Updates</button>
                    </div>
                </form>

                <?php 
                   
                ?>
            </div>

        </div>
    </div>

</div>




<?php include 'html/footer.html' ?>