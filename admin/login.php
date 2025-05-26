
<?php
include_once(__DIR__ . '/../config.php'); 
include_once('../includes/admin_head.php'); 
session_start();
if(isset($_SESSION['admin_id'])){
   $id=$_SESSION['admin_id'];
}
 if(isset($id)){
  header('location:index.php');
 }

if (isset($_POST['submit'])) {
  $admin_email = $_POST['email'];
  $admin_password = md5($_POST['password']);

  $query = "SELECT * FROM admin_login WHERE admin_email='$admin_email' AND admin_pass='$admin_password'";
  $result = mysqli_query($conn, $query);

  // Check if one matching user is found
  if ($result && mysqli_num_rows($result) == 1) {
    $admin_data=mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['admin_id'] = $admin_data['id'];
$_SESSION['admin_name'] = $admin_data['admin_name'];
$_SESSION['admin_password'] = $admin_data['admin_pass'];

    header('Location: index.php');
    exit;
  } else {
    echo '<div class="alert alert-danger text-center">Invalid email or password.</div>';
  }
}
?>



<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../assets/img/login.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p  class="fs-2 fw-normal mb-0 me-3">Login</p>
          </div>



          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input name="email" type="email" id="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="email">Email address</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input name="password" type="password" id="password" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="password">Password</label>
          </div>

          

          <div class="col-12 text-center">
                    <button type="submit" value="submit" name="submit" class="btn btn-outline-success">Login </button>
                  </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2025. All rights reserved.
    </div>
    <!-- Copyright -->
  </div>
</section>