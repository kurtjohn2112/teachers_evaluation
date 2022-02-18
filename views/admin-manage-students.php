<?php include 'html/header.html'; 
include '../controller/functions.php'; 

?>
<link rel="stylesheet" href="../css//manage-user.css">

<div class="container-fluid my-3">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container justify-content-center bg-white p-5">
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">CTU Email</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">College</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Deparmtment</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Course</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Level/Section</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (get_students() as $row) { ?>
                                <tr>
                                    <td class="pl-4"><?php echo $row['student_id'] ?></td>
                                    <td>
                                        <h5 class="font-medium mb-0"><?php echo $row['fname'] . " " . $row['lname'] ?></h5>
                                        <span class="text-muted"></span>
                                    </td>
                                    <td>
                                        <span class="text-muted"><?php echo $row['email'] ?></span><br>

                                    </td>
                                    <td>
                                        <span class="text-muted"><?php echo $row['college'] ?></span><br>

                                    </td>
                                    <td>
                                        <span class="text-muted"><?php echo $row['department'] ?></span><br>

                                    </td>
                                    <td>
                                        <span class="text-muted"><?php echo $row['course'] ?></span>
                                    </td>
                                    <td>
                                        <span class="text-muted"><?php echo $row['year_level']." / ".$row['section'] ?></span><br>

                                    </td>
                                    <td>
                                        <a href="student_profile.php?id=<?php echo $row['student_id'] ?>" class=" btn btn-outline-info btn-lg"><i class="fas fa-search"></i></a>
                                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fas fa-user-times"></i></i> </button>
                                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 
</div>




<?php include 'html/footer.html' ?>