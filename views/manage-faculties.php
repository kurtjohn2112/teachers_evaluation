<?php
include '../controller/functions.php';
$users = $_GET['user'];
include 'html/header.html';
$data = get_user_group($users);




if(isset($_POST['create_user'])){
    $id = $_POST['school_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['ctu_email'];
    $college = $_POST['college'];
    $department = $_POST['department'];
    $role = $_POST['role'];

    create_user($id,$fullname,$email,$college,$department,$role);
}


?>

<div class="container-fluid my-3">
    <?php include 'admin-navbar.php' ?>
</div>

<div class="container bg-white p-5 my-5">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modelId">
        CREATE A USER
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create a user</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" name="school_id" placeholder="SCHOOL ID" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                            <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" name="fullname" placeholder="FULLNAME" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" name="ctu_email" placeholder="CTU EMAIL" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                            <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <select name="college" id="" class="form-select">
                                        <option value="" selected disabled hidden >SELECT A COLLEGE </option>
                                        <?php foreach(get_specific_table('college') as $row): ?>
                                            <option value="<?php echo strtoupper($row['college_name']) ?>"><?php echo $row['college_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                            <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <select name="department" id="department" class="form-select">
                                        <option value="" selected disabled hidden >SELECT A DEPARTMENT </option>
                                        <?php foreach(get_specific_table('departments') as $row): ?>
                                            <option value="<?php echo strtoupper($row['department_name']) ?>"><?php echo $row['department_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                            <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <select name="role" id="" class="form-select">
                                        <option value="" selected disabled hidden >SELECT A ROLE </option>
                                        <?php foreach(get_specific_table('roles') as $row): ?>
                                            <option value="<?php echo strtoupper($row['role_name']) ?>"><?php echo $row['role_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                    
                </div>
            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="create_user" class="btn btn-outline-secondary">ADD NEW USER</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered mt-5">
        <thead>
            <td>School ID</td>
            <td>Fullname</td>
            <td>CTU EMAIL</td>
            <td>COLLEGE</td>
            <td>DEPARTMENT</td>
            <td>ROLE</td>
            <td colspan="3">ACTIONS</td>
        </thead>
        <tbody>
            <?php foreach($data as $row): ?>
            <tr>
                <td><?php echo $row['school_id'] ?></td>
                <td><?php echo $row['fullname'] ?></td>
                <td><?php echo $row['ctu_email'] ?></td>
                <td><?php echo $row['college'] ?></td>
                <td><?php echo $row['department'] ?></td>
                <td><?php echo $row['role'] ?></td>
                <td>
                    <a href="edit-faculties.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-info"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                </td>
                <td>
                    <a href="../controller/delete.php?user_id=<?php echo $row['id'] ?>" class="btn btn-outline-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    

    
    
</div>




<?php include 'html/footer.html'; ?>