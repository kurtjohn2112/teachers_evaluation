<?php include 'html/header.html';
include '../controller/functions.php';
$eval_id = $_GET['id'];

if (isset($_POST['create_criteria'])) {
    $question = $_POST['question'];
    $cri = $_POST['criteria'];

    create_question($question, $cri, $eval_id);
} elseif (isset($_POST['edit_question'])) {
    $question = $_POST['question'];
    $id = $_POST['quest_id'];

    edit_question($id, $question);
}


?>

<div class="container-fluid my-3">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container justify-content-center bg-white p-5">
    <div class="header p-5 text-center bg-info text-light">
        MANAGE QUESTIONAIRE
    </div>
    <ul class="mt-3">
        <?php foreach (get_criteria($eval_id) as $row) : ?>
            <li class="text-uppercase"><?php echo $row['criteria_name'] ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modelId">
        CREATE QUESTION
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
                        <input type="text" name="question" placeholder="QUESTION" id="" class="form-control">
                        <select name="criteria" id="" class="form-select mt-3">
                            <option value="" selected disabled hidden>CHOOSE CRITERIA</option>
                            <?php foreach (get_criteria($eval_id) as $row) : ?>

                                <option value="<?php echo strtoupper($row['criteria_name']); ?>"><?php echo strtoupper($row['criteria_name']) ?></option>

                            <?php endforeach; ?>
                        </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="create_criteria" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if (get_questions($eval_id) == FALSE) { ?>

        <div class="alert alert-info mt-5">NO QUESTIONS ADDED YET</div>
    <?php } else { ?>

        <?php foreach (get_questions($eval_id) as $row) : ?>

            <div class="border mt-3 p-3">
                <p class="lead"><?php echo $row['question'] ?><span class="badge bg-success float-end"><?php echo $row['criteria'] ?></span></p>
                <a href="../controller/delete.php?ques_id=<?php echo $row['quest_id'] ?>" class="badge bg-danger text-decoration-none">DELETE</a>
                <!-- Button trigger modal -->
                <a href="#" class="badge bg-secondary text-decoration-none" data-bs-toggle="modal" data-bs-target="#modelId_<?php echo $row['quest_id'] ?>">
                    EDIT
                </a>

                <!-- Modal -->
                <div class="modal fade" id="modelId_<?php echo $row['quest_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <input type="text" name="question" placeholder="QUESTION" value="<?php echo $row['question'] ?>" id="" class="form-control">
                                    <input type="hidden" value="<?php echo $row['quest_id'] ?>" name="quest_id" id="" class="form-control">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="edit_question" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        <?php endforeach; ?>

    <?php } ?>

    <div class="text-end">
        <a href="manage-restrictions.php?eval_id=<?php echo $eval_id ?>" class="btn btn-outline-info mt-5">SET UP RESTRICTIONS</a>
    </div>

</div>




<?php include 'html/footer.html' ?>