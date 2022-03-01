<?php include '../controller/functions.php'; ?>
<?php include 'html/header.html';

if(isset($_POST['create_teacher'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $department = $_POST['department'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    create_teacher($fname,$lname,$department,$username,$password);
    

}

?>

<div class="container-fluid my-3 bg-light">
    <?php include 'admin-navbar.php'; ?>
</div>
<div class="container justify-content-center bg-white p-5">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modelId">
        ADD A NEW TEACHER
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TEACHER DETAILS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="text" name="fname" placeholder="FIRSTNAME" class="form-control" id="">
                        <input type="text" name="lname" placeholder="LASTNAME" class="form-control mt-3" id="">
                        <select name="department" id="" class="form-select mt-3">
                            <option value="" selected disabled hidden>SELECT DEPARMENT</option>
                            <?php foreach (get_specific_table('departments') as $row) : ?>
                                <option value="<?php echo strtoupper($row['department_name']); ?>"><?php echo strtoupper($row['department_name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" name="username" placeholder="USERNAME" class="form-control mt-3" id="">
                        <input type="password" name="password" placeholder="PASSWORD" class="form-control mt-3" id="">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="create_teacher" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>









<?php include 'html/footer.html'; ?>