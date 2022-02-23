<?php include '../controller/functions.php'; ?>
<?php include 'html/header.html'; 
$course_name = $_GET['course_name'];
$class = get_class_course($course_name);




if(isset($_POST['create_class'])){
    $year = $_POST['year'];
    $section = strtoupper($_POST['section']);
    $course = strtoupper($course_name);
   create_class($year,$section,$course);
}


?>

<div class="container-fluid my-3 bg-light">
    <?php include 'admin-navbar.php'; ?>
</div>
<div class="container justify-content-center bg-white p-5">
    <div class="container">
       <!-- Button trigger modal -->
       <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modelId">
            Create a class
       </button>
       
       <!-- Modal -->
       <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Create a class</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group">
                                        <span class="input-group-text">@</span>
                                        <input type="text" name="year" placeholder="YEAR" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="input-group">
                                        <span class="input-group-text">@</span>
                                        <input type="text" name="section" placeholder="SECTION" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3">
                                    
                                </div>
                            </div>
                        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="create_class" class="btn btn-primary">Save</button>
                    </form>
                       <?php
                        
                       
                       ?>
                      
                   </div>
               </div>
           </div>
       </div>

    <p class="font-monospace mt-5">MANAGE YEAR AND SECTION</p>
    <table class="table table-bordered">
        <thead class="table-dark">
            <td>YEAR AND SECTION</td>
            <td>COURSE DETAILS</td>
            <td colspan="3">Action</td>
        </thead>

        <?php foreach($class as $row ): ?>
            <tr>
                <td><?php echo $row['course']." ".$row['year']."-".$row['section'] ?></td>
                <td></td>
                <td><a href="edit-courses.php?id=<?php echo $row['class_id'] ?>" class="btn btn-outline-secondary"> <i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
                <td><a href="../controller/delete.php?course_id=<?php echo $row['class_id'] ?>" class="btn btn-outline-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>
             
            </tr>

        <?php endforeach ?>
    </table>
       
    </div>
</div>









<?php include 'html/footer.html'; ?>