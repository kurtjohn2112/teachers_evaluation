<?php
include '../controller/functions.php';
// $users = $_GET['user'];
include 'html/header.html';
$data = get_students();





?>

<div class="container-fluid my-3">
    <?php include 'admin-navbar.php' ?>
</div>

<div class="container bg-white p-5 my-5">
    <!-- Button trigger modal -->
   

    <table class="table table-bordered mt-5">
        <thead>
           
            <td>Fullname</td>
            <td>CTU EMAIL</td>
            <td>COLLEGE</td>
            <td>DEPARTMENT</td>
            <td>COURSE</td>
            <td>LEVEL</td>
            <td colspan="3">ACTIONS</td>
        </thead>
        <tbody>
            <?php foreach($data as $row): ?>
            <tr>
                <td><?php echo $row['fname']." ".$row['lname'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['college'] ?></td>
                <td><?php echo $row['department'] ?></td>
                <td><?php echo $row['course'] ?></td>
                <td><?php echo $row['year_level'] ?></td>
                
                <td>
                    <a href="edit-student.php?id=<?php echo $row['student_id'] ?>" class="btn btn-outline-info"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                </td>
                <td>
                    <a href="../controller/delete.php?student_id=<?php echo $row['student_id'] ?>" class="btn btn-outline-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    

    
    
</div>




<?php include 'html/footer.html'; ?>