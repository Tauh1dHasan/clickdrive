<?php require "inc/security.php"; ?>
<!DOCTYPE html>
<html lang="en">

<?php
  require "inc/head.php";

  // Processing Profile update form data
  if (isset($_POST['update'])) {
    $name = mysqli_escape_string($conn, $_POST['name']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, $_POST['password']);

    $sql = "UPDATE user SET name = '$name', email = '$email', password = '$password' WHERE id = 1 ";
    $run_sql = mysqli_query($conn, $sql);

    if ($run_sql) {
      echo "<script> location = 'profile.php' </script>";
    }else{
      echo "<script> location = 'profile.php' </script>";
    }

  }
?> 

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php require "inc/sidebar.php" ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require "inc/topbar.php" ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Update Admin Profile</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <form action="profile.php" method="POST">

                  <!-- getting user ingo from database -->
          <?php  
            $infoSql = "SELECT * FROM user WHERE id = 1";
            $infoSqlRun = mysqli_query($conn, $infoSql);

            $data = mysqli_fetch_assoc($infoSqlRun);
          ?>


                  <div class="form-group">
                    <label for="name">Admin Name</label>
                    <input name="name" type="text" class="form-control" value="<?= $data['name'] ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" value="<?= $data['email'] ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" value="<?= $data['password'] ?>" required>
                  </div>

                  <button name="update" type="submit" class="btn btn-primary">Update</button>
                </form>



              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Developed with love by <a href="https://github.com/Tauh1dHasan/" target="_blank">Tauhid Hasan</a></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
