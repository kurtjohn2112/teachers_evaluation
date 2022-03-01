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
                            Active Topics
                        </h4>
                        <hr class="m-0">
                        <div class="pos-relative px-3 py-3">
                            <h6 class="text-primary text-sm">
                                <a href="#" class="text-primary">Why Bootstrap 4 is so awesome? </a>
                            </h6>
                            <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">39 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">AppStrapMaster</a></p>
                        </div>
                        <hr class="m-0">
                        <div class="pos-relative px-3 py-3">
                            <h6 class="text-primary text-sm">
                                <a href="#" class="text-primary">Custom shortcut or command to launch command in terminal? </a>
                            </h6>
                            <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">58 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
                        </div>
                        <hr class="m-0">
                        <div class="pos-relative px-3 py-3">
                            <h6 class="text-primary text-sm">
                                <a href="#" class="text-primary">HELP! My Windows XP machine is down </a>
                            </h6>
                            <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">48 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
                        </div>
                        <hr class="m-0">
                        <div class="pos-relative px-3 py-3">
                            <h6 class="text-primary text-sm">
                                <a href="#" class="text-primary">HELP! My Windows XP machine is down </a>
                            </h6>
                            <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">38 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
                        </div>
                        <hr class="m-0">
                    </div>
                    <div class="bg-white text-sm">
                        <h4 class="px-3 py-4 op-5 m-0 roboto-bold">
                            Stats
                        </h4>
                        <hr class="my-0">
                        <div class="row text-center d-flex flex-row op-7 mx-0">
                            <div class="col-sm-6 flex-ew text-center py-3 border-bottom border-right"> <a class="d-block lead font-weight-bold" href="#">58</a> Topics </div>
                            <div class="col-sm-6 col flex-ew text-center py-3 border-bottom mx-0"> <a class="d-block lead font-weight-bold" href="#">1.856</a> Posts </div>
                        </div>
                        <div class="row d-flex flex-row op-7">
                            <div class="col-sm-6 flex-ew text-center py-3 border-right mx-0"> <a class="d-block lead font-weight-bold" href="#">300</a> Members </div>
                            <div class="col-sm-6 flex-ew text-center py-3 mx-0"> <a class="d-block lead font-weight-bold" href="#">DanielD</a> Newest Member </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './html/footer.html';
?>