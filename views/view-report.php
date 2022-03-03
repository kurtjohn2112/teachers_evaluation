<?php include 'html/header.html';
include '../controller/functions.php';
$eval = get_eval_detail($_GET['eval_id']);
$teacher = get_one_data('teachers', 'teacher_id', $eval['teacher_id']);
$criteria = get_criteria($eval['id']);

function solve($r1, $r2, $r3, $r4, $r5)
{
    $total = $r1 + $r2 + $r3 + $r4 + $r5;

    return $total;
}



?>

<div class="container-fluid mt-5 ">

    <a href="manage-reports.php" class="btn btn-outline-success"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>

    <div class="row">
        <div class="col-12" style="background-image: url('../images/HEADER.JPG'); 
            height:200px;
            width:100%;
            background-repeat:no-repeat;
            background-position:center ">

        </div>
        <div class="container" style="width:70%">
            <h1 class="h4 text-center p-5">
                STUDENT'S RATING SYSTEM FOR TEACHERS <br>
                <span class="text-muted fs-5">Academic Year: (<?php echo $eval['school_year'] ?>) Semester: (<?php echo $eval['semester'] ?>) </span>
            </h1>
            <div class="row mt-5">
                <div class="col-6">
                    <p class="lead">Name: <span class="text-muted"><?php echo $teacher['fname'] . " " . $teacher['lname'] ?></span></p>
                </div>
                <div class="col-6">
                    <p class="lead">Campus: <span class="text-decoration-underline text-muted">Cebu Technological University</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="lead">Department: <span class="text-muted"><?php echo $teacher['department'] ?></span></p>
                </div>
                <div class="col-6">

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ol type="I">
                        <?php foreach ($criteria as $row) : ?>
                            <li class="text-uppercase"><?php echo $row['criteria_name'] ?></li>

                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="lead">Range: Verbal Description(0) <br>
                        4.20-5: Outstanding <br>
                        3.40-4: Very Satisfactory(VS) <br>
                        2.60-3: Satisfactory(S) <br>
                        1.80-2: Fair(F) <br>
                        1.00-1: Unsatisfactory(US) <br>
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <?php foreach ($criteria as $cri_row) : ?>
                        <p class="lead"><?php echo $cri_row['criteria_name'] ?></p>
                        <?php

                        $answers = create_report($_GET['eval_id'], $cri_row['criteria_name']);
                        // $student_count = count($answers);
                        ?>
                        <table class=" mt-5 table table-bordered">
                            <thead>
                                <td>Question ID</td>
                                <td>5</td>
                                <td>4</td>
                                <td>3</td>
                                <td>2</td>
                                <td>1</td>
                                <td>WM</td>


                            </thead>
                            <tbody>
                                <?php foreach ($answers as $row) : ?>

                                    <tr>
                                        <td><?php echo $row['question_id'] ?></td>
                                        <td><?php echo $sc5 =  count_student_number($row['question_id'], '5', $cri_row['criteria_name']) ?></td>
                                        <td><?php echo $sc4 =  count_student_number($row['question_id'], '4', $cri_row['criteria_name']) ?></td>
                                        <td><?php echo $sc3 =  count_student_number($row['question_id'], '3', $cri_row['criteria_name']) ?></td>
                                        <td><?php echo $sc2 =  count_student_number($row['question_id'], '2', $cri_row['criteria_name']) ?></td>
                                        <td><?php echo $sc1 =  count_student_number($row['question_id'], '1', $cri_row['criteria_name']) ?></td>
                                        <td>
                                            <?php echo number_format(solve($sc5, $sc4, $sc3, $sc2, $sc1) / total_student_count($row['question_id']), 1); ?>
                                        </td>




                                    </tr>
                                <?php endforeach ?>

                            </tbody>

                        </table>



                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <?php if (get_comments($_GET['eval_id'])) { ?>
                        <p class="lead">STUDENTS COMMENTS</p>
                        <?php


                        $x = 0;
                        foreach (get_comments($_GET['eval_id']) as $row) :
                            $x += 1;
                        ?>
                            <div class="border border-1">
                                <p class="lead text-center">
                                <p class="fst-italic p-2"><?php echo $row['content'] ?> <span class="float-end"> - #Student <?php echo $x ?> </span></p>
                                </p>
                            </div>

                        <?php endforeach; ?>


                    <?php } else { ?>

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              <strong>NO COMMENTS ON THIS REPORT</strong> 
                            </div>
                            
                            <script>
                              var alertList = document.querySelectorAll('.alert');
                              alertList.forEach(function (alert) {
                                new bootstrap.Alert(alert)
                              })
                            </script>
                            

                    <?php  } ?>
                </div>
            </div>

        </div>
    </div>









    <?php include 'html/footer.html' ?>