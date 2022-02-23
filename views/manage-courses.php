<?php include '../controller/functions.php'; ?>
<?php include 'html/header.html'; 
$department_name = $_GET['dep_name'];
$course = get_courses_department($department_name);

if(isset($_POST['create_course'])){
    $course_name = strtoupper($_POST['course_name']);
    $course_detail = $_POST['course_detail'];
    $course_department = $department_name;
    create_course($course_name,$course_detail,$course_department);
}


?>

<div class="container-fluid my-3 bg-light">
    <?php include 'admin-navbar.php'; ?>
</div>
<div class="container justify-content-center bg-white p-5">
    <div class="container">
       <!-- Button trigger modal -->
       <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modelId">
            Create a course
       </button>
       
       <!-- Modal -->
       <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Create a course</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group">
                                        <span class="input-group-text">@</span>
                                        <input type="text" name="course_name" placeholder="Course name" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="input-group">
                                        <span class="input-group-text">@</span>
                                        <input type="text" name="course_detail" placeholder="Course details" id="" class="form-control">
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
                                <button type="submit" name="create_course" class="btn btn-primary">Save</button>
                    </form>
                       <?php
                        
                       
                       ?>
                      
                   </div>
               </div>
           </div>
       </div>

    <p class="font-monospace mt-5">MANAGE COURSES</p>
    <table class="table table-bordered">
        <thead class="table-dark">
            <td>Course Name</td>
            <td>Course Details</td>
            <td colspan="3">Action</td>
        </thead>

        <?php foreach($course as $row ): ?>
            <tr>
                <td><?php echo $row['course_name'] ?></td>
                <td><?php echo $row['course_detail'] ?></td>
                <td><a href="edit-courses.php?id=<?php echo $row['course_id'] ?>" class="btn btn-outline-secondary"> <i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
                <td><a href="../controller/delete.php?course_id=<?php echo $row['course_id'] ?>" class="btn btn-outline-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                <td><a href="manage-year-section.php?course_name=<?php echo $row['course_name'] ?>" class="btn btn-outline-secondary"> <i class="fas fa-search    "></i> </a></td>
            </tr>

        <?php endforeach ?>
    </table>
       
    </div>
</div>









<?php include 'html/footer.html'; ?>