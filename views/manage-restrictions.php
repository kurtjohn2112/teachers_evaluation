<?php include '../controller/functions.php'; ?>
<?php include 'html/header.html';
$eval_id = $_GET['eval_id'];
if(isset($_POST['save_restrictions'])){
    $id = $_POST['teacher_id'];
    $section = $_POST['section'];
    $course = $_POST['courses'];
    $year = $_POST['year'];

    save_restrictions($eval_id,$id,$year,$section,$course);

}

?>

<div class="container-fluid my-3 bg-light">
    <?php include 'admin-navbar.php'; ?>
</div>
<div class="container justify-content-center bg-white p-5">
  <h1 class="h4">RESTRICT EVALUATION</h1>
    <form action="" method="post">
    <div class="row mt-3">
      
        <div class="col-3">
            <select name="teacher_id" id="" class="form-select">
                <option value="" selected hidden disabled>SELECT A TEACHER</option>
                <?php foreach (get_specific_table('teachers') as $row) : ?>
                    <option value="<?php echo $row['teacher_id'] ?>"><?php echo strtoupper($row['fname'] . " " . $row['lname']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-3">
            <select name="section" id="" class="form-select">
                <option value="" selected hidden disabled>SELECT A SECTION</option>
                <?php foreach (get_section() as $row) : ?>
                    <option value="<?php echo $row['section'] ?>"><?php echo $row['section'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-3">
            <select name="year" id="" class="form-select">
                <option value="" selected hidden disabled>SELECT A YEAR</option>
                <option value="1" >FIRST YEAR</option>
                <option value="2" >SECOND YEAR</option>
                <option value="3" >THIRD YEAR</option>
                <option value="4" >FOURTH YEAR</option>
               
            </select>
        </div>

        <div class="col-3">
        <select name="courses" id="" class="form-select">
                <option value="" selected hidden disabled>SELECT A COURSE</option>
                <?php foreach (get_courses() as $row) : ?>
                    <option value="<?php echo $row['course_name'] ?>"><?php echo $row['course_name'] ?></option>
                <?php endforeach; ?>
            </select>    
        </div>

    </div>
    <div class="row mt-3">
        <div class="col-12 d-grid">
            <button type="submit" name="save_restrictions" class="btn btn-outline-info">FINALIZE EVALUATION</button>
        </div>
    </div>
  


</div>
  </form>









<?php include 'html/footer.html'; ?>