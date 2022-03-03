<link rel="stylesheet" href="css/login.css">

 <?php include 'views/html/header.html'; ?>
 <div class="form-bg">
     <a href="views/index.php" class="float-end btn btn-outline-info m-5">ADMIN LOGIN <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a>
     <div class="container">
         <div class="row">
             <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 mx-auto mt-5">
                 <div class="form-container">
                     <h3 class="title">My Account</h3>
                     <form method="post" action="controller/login.php" class="form-horizontal">
                         <div class="form-icon">
                             <i class="fa fa-user-circle"></i>
                         </div>
                         <div class="form-group">
                             <span class="input-icon"><i class="fa fa-user"></i></span>
                             <input type="email" name="username" class="form-control" placeholder="Username">
                         </div>
                         <div class="form-group">
                             <span class="input-icon"><i class="fa fa-lock"></i></span>
                             <input type="password" name="password" class="form-control" placeholder="Password">
                             <span class="forgot"><a href="">Forgot Password?</a></span>
                         </div>
                         <button class="btn signin">Login</button>
                     </form>
                     <a href="views/register.php" class="text-light">No account? Register here</a>
                 </div>
             </div>
         </div>
     </div>
 </div>



 <?php include 'views/html/footer.html'; ?>