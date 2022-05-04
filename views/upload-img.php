<?php
include '../controller/functions.php';
if (isset($_POST['upload'])) {
    $img = $_FILES['img']['name'];
    $dir = 'uploads/';
    $target_dir = $dir . basename($img);

    $validate = upload_img($img);

    if ($validate == 1) {
        move_uploaded_file($_FILES['img']['tmp_name'], $target_dir);
        echo '<div class="alert alert-warning alert-dismissible fade show"          role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Header Uploaded Successfully, Check reports <a href="manage-reports.php" class="alert-link"> here </a></strong> 
            </div>';
    } else {
        echo "ERROR";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-light">
    <section class="mt-5 p-5">
        <div class="container">
            <div class="card w-50 mx-auto shadow">
                <div class="card-header p-4 bg-dark"></div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="file" name="img" id="" class="form-control form-control-lg">
                            <button name="upload" class="btn btn-secondary"><i class="fas fa-file-upload "></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>


    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>