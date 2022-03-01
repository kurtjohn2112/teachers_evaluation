<?php include '../controller/functions.php'; ?>
<?php include 'html/header.html';



?>

<div class="container-fluid my-3 bg-light">
    <?php include 'admin-navbar.php'; ?>
</div>
<div class="container justify-content-center bg-white p-5">
    <?php foreach(get_specific_table('evaluations') as $row):
        $teacher = get_one_data('teachers','teacher_id',$row['teacher_id']) ?>
        <div class="shadow-lg border border-2 mb-3 p-5">
            <p class="lead">YEAR: <span class="text-muted"><?php echo $row['school_year'] ?></span> </p> 
            <p class="lead">SEMESTER: <span class="text-muted"><?php echo $row['semester'] ?></span></p>
            <p class="lead">CLASS: <span class="text-muted"><?php echo $row['year']."-".$row['section']." ".$row['course'] ?></span></p>
            <p class="lead">TEACHER: <span class="text-muted"><?php echo $teacher['fname']." ".$teacher['lname'] ?></span></p>

            <a href="view-report.php?eval_id=<?php echo $row['id'] ?>" class="btn btn-outline-primary float-end">View Report</a>
        </div>
    <?php endforeach ?>
</div>
 









<?php include 'html/footer.html'; ?>