<?php
session_start();
if (isset($_POST['login'])) {


  require('conn.php');
  $qry = "select staffId,staffName, staffPass, staffStatus,staffRole from staff_user_db where staffName = '" . $_POST['staffName'] . "' and staffPass = '" . $_POST['staffPass'] . "' and staffStatus = 0 and staffDeleted = 0;";

  $data = $con->query($qry);
  
  if ($row = $data->fetch_assoc()) {
    $_SESSION['staffName'] = $row['staffName'];
    $_SESSION['staffPass'] = $row['staffPass'];
    $_SESSION['role'] = $row['staffRole'];
    echo "<script>window.location.href='index.php'</script>";
  } else {
    $save = "Invalid";
  }
}
?>
<?php
include("components.php");
myHead(); 
?>
<body class="login-page">
  <div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="brand-logo">
        <a href="login.php">
          <img src="vendors/images/Logo.png" alt="Logo Img" width="35%" />
        </a>
      </div>
      <h3 class="text-center">Stock Management System</h3>
      <h3 class="text-center">Made With Passion</h3>
    </div>
  </div>
  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-7">
          <img src="vendors/images/login-page-img.png" alt="Login Image" />
        </div>
        <div class="col-md-6 col-lg-5">
          <div class="login-box bg-white box-shadow border-radius-10">
            <div class="login-title">
              <h2 class="text-center text-primary">Login To Dashboard</h2>
            </div>
            <form method="POST">
              <div class="input-group custom">
                <input type="text" class="form-control form-control-lg" placeholder="Username" name="staffName" required/>
                <div class="input-group-append custom">
                  <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                </div>
              </div>
              <div class="input-group custom">
                <input type="password" class="form-control form-control-lg" placeholder="**********" name="staffPass" required/>
                <div class="input-group-append custom">
                  <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                </div>
              </div>
              <div class="row pb-30">
                <div class="col-6">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                    <label class="custom-control-label" for="customCheck1">Remember</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="forgot-password">
                    <a href="forgot-password.php">Forgot Password</a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="input-group mb-0">
                    <input class="btn btn-primary btn-lg btn-block" type="submit" name="login" value="Login" />
                  </div>

                  <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                    <?php
                    if (isset($save) && $save == 'Invalid') { ?>
                      <div class="invalid-login"><strong style="color:red;">Invalid!</strong> username or passward.</div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>