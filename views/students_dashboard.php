<?php
include '../controller/functions.php';
include './html/header.html';


// print_r($_SESSION);
$eval = get_evaluations($_SESSION['level'], $_SESSION['section'], $_SESSION['course']);

// print_r($eval);


?>

<div class="container">
    <div class="row my-5">
        <?php include 'navbar-students.php'; ?>

    </div>
</div>

<link rel="stylesheet" href="../css/students_dashboard.css">
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <!-- Main content -->
        <div class="col-lg-12 mb-3">
            <div class="row text-left mb-5">
                <div class="col-lg-6 mb-3 mb-sm-0">
                    <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" style="width: 100%;">
                        <select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" data-toggle="select" tabindex="-98">
                            <option> Categories </option>
                            <option> Learn </option>
                            <option> Share </option>
                            <option> Build </option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" style="width: 100%;">
                        <select class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" data-toggle="select" tabindex="-98">
                            <option> Filter by </option>
                            <option> Votes </option>
                            <option> Replys </option>
                            <option> Views </option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- End of post 1 -->
            <?php if ($eval == FALSE) { ?>

                <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>NO EVALUATIONS AVAILABLE YET</strong>
                </div>

                <script>
                    var alertList = document.querySelectorAll('.alert');
                    alertList.forEach(function(alert) {
                        new bootstrap.Alert(alert)
                    })
                </script>

            <?php } else { ?>
                <?php foreach ($eval as $row) : ?>
                    <?php if ($row['status'] == 'YES') { ?>
                        <?php if(check_if_student_answered_question($_SESSION['id'],$row['id']) == 'ANSWERED'){ ?>
                            <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-3 mb-sm-0 ">
                                    <h5>
                                        <a href="#" class="text-primary"><?php
                                            $data = get_one_data('teachers','teacher_id',$row['teacher_id']);

                                            echo strtoupper($data['fname'])." ".strtoupper($data['lname']);
                                        ?></a>
                                    </h5>
                                    <p class="text-sm"><span class="op-6">evaluation for class</span> <a class="text-black" href="#"><?php echo $row['year']."-".$row['section'] ?></a> <span class="op-6">course</span> <a class="text-black" href="#"><?php echo $row['course'] ?></a></p>
                                   
                                </div>
                                <div class="col-md-4 op-7">
                                    <div class="row text-center op-7">
                                       <div class="alert alert-info">ANSWERED</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                            <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <h5>
                                        <a href="answer-question.php?eval_id=<?php echo $row['id'] ?>" class="text-primary"><?php
                                            $data = get_one_data('teachers','teacher_id',$row['teacher_id']);

                                            echo strtoupper($data['fname'])." ".strtoupper($data['lname']);
                                        ?></a>
                                    </h5>
                                    <p class="text-sm"><span class="op-6">evaluation for class</span> <a class="text-black" href="#"><?php echo $row['year']."-".$row['section'] ?></a> <span class="op-6">course</span> <a class="text-black" href="#"><?php echo $row['course'] ?></a></p>
                                   
                                </div>
                                <div class="col-md-4 op-7">
                                    <div class="row text-center op-7">
                                        <?php foreach (get_criteria($row['id']) as $criteria) : ?>
                                            <div class="col px-1"> <span class="badge bg-info"><?php echo $criteria['criteria_name'] ?></span> </div>
                                            
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    <?php } ?>
                <?php endforeach ?>

            <?php } ?>


            <!-- /End of post 1 -->

        </div>
        <!-- Sidebar content -->
        <!-- <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
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
</div> -->

<?php
include './html/footer.html';
?>