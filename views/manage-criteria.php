<?php include 'html/header.html';
include '../controller/functions.php';
$id = $_GET['id'];
$row = get_eval_detail($id);

if(isset($_POST['save_criteria'])){
    $name = $_POST['cri_name'];

    create_criteria($name,$id);
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
                   
                        <a href="#" class="list-group-item list-group-item-action"><?php echo $row['criteria_name'] ?></a>
                        
                   
                <?php endforeach; ?>  

                <a href="manage-questionaire.php?id=<?php echo $id ?>" class="btn btn-outline-primary mt-5">Proceed to manage questionaire</a>
            </div>
        <?php } ?>
    </div>
</div>

</div>




<?php include 'html/footer.html' ?>