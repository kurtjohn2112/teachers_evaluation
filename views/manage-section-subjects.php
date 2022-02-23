<?php include '../controller/functions.php'; ?>
<?php include 'html/header.html'; 
$class_id = $_GET['class_id'];

$class = get_class_subjects($class_id);




if(isset($_POST['create_class'])){
    $name = $_POST['sub_name'];
    $desc = $_POST['sub_desc'];
    $id = $class_id;
    create_subjects($name,$desc,$id);
}


?>

<div class="container-fluid my-3 bg-light">
    <?php include 'admin-navbar.php'; ?>
</div>
<div class="container justify-content-center bg-white p-5">
    <div class="container">
       <!-- Button trigger modal -->
       <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modelId">
           CREATE A SUBJECT FOR THIS CLASS
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
                                        <input type="text" name="sub_name" placeholder="SUBJECT NAME" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="input-group">
                                        <span class="input-group-text">@</span>
                                        <input type="text" name="sub_desc" placeholder="DESCRIPTION" id="" class="form-control">
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

    <p class="font-monospace mt-5">MANAGE SUBJECTS</p>
    <table class="table table-bordered">
        <thead class="table-dark">
            <td>SUBJECT NAME</td>
            <td>DETAILS</td>
            <td colspan="3">Action</td>
        </thead>

        <?php foreach($class as $row ): ?>
            <tr>
                <td><?php echo $row['sub_name']?></td>
                <td><?php echo $row['sub_desc']?></td>
                <td><a href="edit-courses.php?id=<?php echo $row['subject_id'] ?>" class="btn btn-outline-secondary"> <i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
                <td><a href="../controller/delete.php?subject_id=<?php echo $row['subject_id'] ?>" class="btn btn-outline-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                
             
            </tr>

        <?php endforeach ?>
    </table>
       
    </div>
</div>









<?php include 'html/footer.html'; ?>