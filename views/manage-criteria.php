<?php include 'html/header.html';
include '../controller/functions.php';
$id = $_GET['id'];
$row = get_eval_detail($id);

if(isset($_POST['save_criteria'])){
    $name = $_POST['cri_name'];

    create_criteria($name,$id);
}elseif(isset($_POST['edit_cri'])){
    $name = $_POST['cri_name'];
    $id = $_POST['cri_id'];

    edit_criteria($id,$name);
}


?>

<div class="container-fluid my-3">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container justify-content-center bg-white p-5">
    <h1 class="h4">SY <?php echo $row['school_year'] ?> <?php echo $row['semester'] ?> SEM </h1>
    <hr>
    <p class="lead">MANAGE CRITERIA</p>    
</div>

<div class="container mt-5">

<div class="row">
    <div class="col-6 ">
        <div class="card w-50 shadow">
            <div class="card-header"><p class="lead">Criteria Form</p></div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="text" name="cri_name" placeholder="Criteria" id="" class="form-control mt-3">
                   
               
            </div>
            <div class="card-footer text-end">
                <button type="submit" name="save_criteria" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-6 ">
        <?php if(get_criteria($id) == FALSE){ ?>
                <alert class="alert alert-danger my-5">NO CRITERIA CREATED YET</alert>
        <?php }else{ ?> 
            <div class="list-group">
                <?php foreach(get_criteria($id) as $row): ?>
                   
                    <li class="list-group-item list-group-item-action"><?php echo $row['criteria_name']; ?>  
                        <a href="../controller/delete.php?cri_id=<?php echo $row['id'] ?>" class="float-end badge bg-danger mx-2">DELETE</a>
                        <a href="#" class="float-end badge bg-secondary" data-bs-toggle="modal" data-bs-target="#modelId_<?php echo $row['id'] ?>" >EDIT</a>
                    </li>

                    <!-- Button trigger modal -->
                    
                    
                    <!-- Modal -->
                    <div class="modal fade" id="modelId_<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   <?php $cri_id =  $row['id']  ?>
                                    <form action="" method="post">
                                        <input type="text" name="cri_name" placeholder="Criteria Name" value="<?php echo $row['criteria_name']
                                         ?>" id="" class="form-control">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="cri_id" id="" class="form-control">
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="edit_cri" class="btn btn-primary">Save</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        
                   
                <?php endforeach; ?>  

                <a href="manage-questionaire.php?id=<?php echo $id ?>" class="btn btn-outline-primary mt-5">Proceed to manage questionaire</a>
            </div>
        <?php } ?>
    </div>
</div>

</div>




<?php include 'html/footer.html' ?>