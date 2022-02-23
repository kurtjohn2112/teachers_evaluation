<?php 
include 'html/header.html';
include '../controller/functions.php';


?>

<div class="container-fluid my-3">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container justify-content-center bg-white p-5">
    
    <div class="card">
        <div class="card-header ">
            <p class="font-monospace">Users</p>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <td>User type</td>
                    <td>Action</td>
                </thead>
                <tbody>
                    <tr>
                        <td>Administrator</td>
                        <td class="d-grid"><a href="manage-faculties.php?user=ADMINISTRATOR" class="btn btn-primary">View</a></td>                      
                    </tr>
                    <tr>
                        <td>Students</td>
                        <td class="d-grid"><a href="manage-students.php" class="btn btn-primary">View</a></td>                      
                    </tr>
                    <tr>
                        <td>Faculties</td>
                        <td class="d-grid"><a href="manage-faculties.php?user=FACULTIES" class="btn btn-primary">View</a></td>                      
                    </tr>
                    <tr>
                        <td>Department Chair</td>
                        <td class="d-grid"><a href="manage-faculties.php?user=DEPARTMENT CHAIR" class="btn btn-primary">View</a></td>                      
                    </tr>
                    <tr>
                        <td>College Deans</td>
                        <td class="d-grid"><a href="manage-faculties.php?user=COLLEGE DEANS" class="btn btn-primary">View</a></td>                      
                    </tr>
                    <tr>
                        <td>Dean of Instructions</td>
                        <td class="d-grid"><a href="manage-faculties.php?user=DEAN OF INSTRUCTIONS" class="btn btn-primary">View</a></td>                      
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>





<?php include 'html/footer.html'; ?>