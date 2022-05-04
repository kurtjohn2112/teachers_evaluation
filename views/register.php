<style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }
</style>

<?php include 'html/header.html'; ?>

<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block bg-dark">
                            <img src="../images/register-img.jpeg"  alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"/>
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Student registration form</h3>
                                <form action="../controller/register.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1m" name="fname" class="form-control form-control-lg" />
                                                <div class="form-text">Firstname</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1n" name="lname" class="form-control form-control-lg" />
                                                <div class="form-text">Lastname</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">

                                                <?php
                                                include '../controller/functions.php';

                                                ?>
                                                <select name="course" class="form-select form-select-lg" id="">
                                                    <?php


                                                    foreach (get_specific_table('courses') as $row) {
                                                        $course = $row['course_name']; ?>
                                                        <option value="<?php echo $course ?>"><?php echo $course ?></option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <div class="form-text">Select a course</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <select name="department" class="form-select form-select-lg" id="">
                                                <?php


                                                foreach (get_specific_table('departments') as $row) {
                                                    $department = $row['department_name']; ?>
                                                    <option value="<?php echo $department ?>"><?php echo $department ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <div class="form-text">Select a Department</div>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                             <select name="class_section" class="form-select form-select-lg" id="">
                                                <?php foreach(get_section() as $row): ?>
                                                    <option value="<?php echo strtoupper($row['section']) ?>"><?php echo strtoupper($row['section']) ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <div class="form-text">Select a year</div>
                                    </div>
                                    <div class="form-outline mb-4">
                                             <select name="college" class="form-select form-select-lg" id="">
                                                <?php


                                                foreach (get_specific_table('college') as $row) {
                                                    $section = $row['college_name']; ?>
                                                    <option value="<?php echo $section ?>"><?php echo $section ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <div class="form-text">Select a College</div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Address</label>
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <!-- <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div> -->

                                    </div>




                                    <div class="form-outline mb-4">
                                    <select name="user_type" id="" class="form-select form-select-lg">
                                            <option value="student">Student</option>
                                            <option value="faculty">Faculty</option>
                                            <option value="chairpairson">Chairperson</option>
                                            <option value="collegedean">College Dean</option>
                                            <option value="deanofinstruction">Dean of Instruction</option>
                                        </select>
                                        <div class="form-text">User type</div>
                                    </div>
                                    <div class="form-outline mb-4">
                                    <select name="year_level" id="" class="form-select form-select-lg">
                                            <option value="1">First Year</option>
                                            <option value="2">Second Year</option>
                                            <option value="3">Third Year</option>
                                            <option value="4">Fourth Year</option>
                                          
                                        </select>
                                        <div class="form-text">User type</div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example97" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Email ID</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example97" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Password</label>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                        <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'html/footer.html'; ?>