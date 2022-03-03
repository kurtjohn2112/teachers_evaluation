<?php
include '../controller/functions.php';
include './html/header.html';


$eval = get_evaluations($_SESSION['level'], $_SESSION['section'], $_SESSION['course']);

$questions = get_questions($_GET['eval_id']);

if(isset($_POST['save_answer'])){
    $q_id = $_POST['quest_id'];
    $answers = $_POST['grade'];
    $criteria = $_POST['criteria'];
    $count = count($answers);

    for($x=0; $x < $count; $x++){
        save_answers($_SESSION['id'],$_GET['eval_id'],$q_id[$x],$answers[$x],$criteria[$x]);
    }



}elseif(isset($_POST['post'])){
    $comment = $_POST['comment'];
    $student_id = $_POST['student_id'];
    $eval_id = $_POST['eval_id'];

    add_comment($eval_id,$student_id,$comment);

}


?>

<div class="container">
    <div class="row mt-3">
        <?php include 'navbar-students.php'; ?>

    </div>
</div>

<div class="container">
    <div class="row">
        <!-- Main content -->
        <div class="col-lg-9 mb-3">
            <form action="" method="post" class="text-center">
                <?php foreach ($questions as $row) : ?>
                    <div class="border border-1 p-5 mb-4">
                        <p class="lead"><?php echo $row['question'] ?></p>
                        <input type="hidden" name="quest_id[]" value="<?php echo $row['quest_id'] ?>">
                        <input type="hidden" name="criteria[]" value="<?php echo $row['criteria'] ?>">
                        <select name="grade[]" id="" class="form-select w-25 mx-auto">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                <?php endforeach; ?>
                <div class="d-grid">
                    <button type="submit" name="save_answer" class="  btn mt-3 btn-outline-info">Submit answer</button>
                </div>
            </form>

        </div>
        <!-- Sidebar content -->
        <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
            <div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;"></div>
            <div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;">
                <div class="sticky-inner">
                    <a class="btn btn-lg btn-block btn-success rounded-0 py-4 mb-3 bg-op-6 roboto-bold" href="#">Ask Question</a>
                    <div class="bg-white mb-3">
                        <h4 class="px-3 py-4 op-5 m-0">
                            Comments:
                        </h4>
                        <hr class="m-0">
                        <div class="pos-relative px-3 py-3">
                            <h6 class="text-primary text-sm">
                                <a href="#" class="text-primary">Why Bootstrap 4 is so awesome? </a>
                            </h6>
                            <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">39 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">AppStrapMaster</a></p>
                        </div>
                       <form action="" method="post" class="mt-5">
                           <div class="input-group">
                               <input type="text" name="comment" placeholder="Comments" id="" class="form-control" required>
                               <input type="hidden" name="student_id" value="<?php echo $_SESSION['id'] ?>">
                               <input type="hidden" name="eval_id" value="<?php echo $_GET['eval_id'] ?>">
                               <button type="submit" name="post" class="btn btn-info">Post Comment</button>
                           </div>
                       </form>
            <!-- -------------- -->
        </div>
    </div>
</div>

<?php
include './html/footer.html';
?>