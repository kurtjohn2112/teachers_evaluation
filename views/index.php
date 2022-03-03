<?php 
include '../controller/functions.php';
include 'html/header.html';
?>


<div class="container my-5">
    <div class="card w-50 my-y mx-auto">
        <form action="" method="post">
            <div class="card-body">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-user    "></i>
                    </span>
                    <input type="text" name="username" placeholder="CTU Email" id="" class="form-control">
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">
                        <i class="fas fa-lock    "></i>
                    </span>
                    <input type="password" name="password" placeholder="School ID" id="" class="form-control">

                </div>
                <button type="submit" name="login" class="btn btn-outline-success mt-3  w-25 mt-3">Login</button>

            </div>
            <div class="card-footer">
                <a href="../index.php" class="text-decoration-none fs-5 text-muted">Are you a student?</a>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['login'])) {
    $username  = $_POST['username'];
    $password = $_POST['password'];

    login_admins($username, $password);
}

?>







<?php include 'html/footer.html' ?>