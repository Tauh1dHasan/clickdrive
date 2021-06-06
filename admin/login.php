<?php
require "inc/db.php";

  if (isset($_POST['submit'])) {
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, $_POST['password']);
    // Checking user info with database
    $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password' ";
    $run_sql = mysqli_query($conn, $sql);
    // $count = mysqli_num_rows($run_sql);
    if (mysqli_num_rows($run_sql) > 0) {
      session_start();
      $_SESSION['user_email'] = $email;
      echo "<script> location = 'index.php' </script>";
    }else{
      echo "<script> alert('Wrong Email or Password') </script>";
      echo "<script> location = 'login.php' </script>";
    }

  }
?>

<!DOCTYPE html>
<html lang="en">

<?php 
  require "inc/head.php";
?>  


<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Log into the panel</h1>
                  </div>

                  <form class="user" action="#" method="post">

                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>

                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>

                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Login" />

                    <hr>

                  </form>
                  
                </div>
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
