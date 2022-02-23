<?php include 'html/header.html';
include '../controller/functions.php';

if (isset($_POST['create_eval'])) {
    $year = $_POST['school_year'];
    $sem = $_POST['semester'];

    create_evaluation($year, $sem);
}elseif(isset($_POST['change_status'])){
    $status = $_POST['status'];
    $id = $_POST['id'];

    change_eval_status($id,$status);


}

?>

<div class="container-fluid my-3">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container justify-content-center bg-white p-5">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modelId">
        <i class="fa fa-plus" aria-hidden="true"></i> NEW EVALUATION
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" name="school_year" placeholder="SCHOOL YEAR" id="" class="form-control">
                        </div>
                        <div class="input-group mt-3">
                            <span class="input-group-text">@</span>
                            <input type="text" name="semester" placeholder="SEMESTER" id="" class="form-control">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="create_eval" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered my-5">
        <thead>
            <td>#</td>
            <td>SCHOOL YEAR</td>
            <td>SEMESTER</td>
            <td>DEFAULT</td>
            <td colspan="3">ACTION</td>
        </thead>
        <tbody>
            <?php
            $x = 0;
            foreach (get_specific_table('evaluations') as $row) : ?>
            <?php $x = $x + 1; ?>
                <tr>
                    <td><?php echo $x; ?></td>
                    <td><?php echo $row['school_year'] ?></td>
                    <td><?php echo $row['semester'] ?></td>
                    <td>
                        <?php if ($row['status'] == 'NO') { ?>
                            <form action="" class="form-inline" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <input type="hidden" name="status" value="YES">
                                <button type="submit" class="btn btn-danger mx-auto d-block" name="change_status">NO</button>
                            </form>
                        <?php } else { ?>
                            <form action="" class="form-inline" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <input type="hidden" name="status" value="NO">
                                <button type="submit" class="btn btn-success mx-auto d-block" name="change_status">YES</button>
                            </form>
                        <?php } ?>
                    </td>
                    <td class="text-center">
                        <a href="manage-criteria.php?id=<?php echo $row['id'] ?>" class="p-1 border border-3 border-info rounded-circle"> <i class="fas fa-eye"></i> </a>
                    </td>
                    <td class="text-center">
                        <a href="edit-evaluation.php?id=<?php echo $row['id'] ?>" class="p-1 border border-3 border-primary text-primary rounded-circle "> <i class="fa fa-pencil-square" aria-hidden="true"></i> </a>
                    </td>
                    <td class="text-center">
                        <a href="../controller/delete.php?evaluation_id=<?php echo $row['id'] ?>" class="p-1 border border-3 border-danger text-danger rounded-circle "> <i class="fas fa-trash"></i> </a>
                    </td>
                </tr>

                
            <?php endforeach ?>
        </tbody>
    </table>

</div>




<?php include 'html/footer.html' ?>