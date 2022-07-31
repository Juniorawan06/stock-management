<?php
session_start();
if (!isset($_SESSION['staffPass'])) {
    header("location:login.php");
}
include("components.php");
myHead("Staff");
require("conn.php");
if (isset($_POST['submit'])) {
    if ($_POST['uPass'] != $_POST['cPass']) {
        echo "<script> alert('Passward not Matched');</script>";
    } else {
        $qry = "update staff_user_db set staffName='" . $_POST['uName'] . "', staffPass = '" . $_POST['uPass'] . "', staffContact = '" . $_POST['uContact'] . "',staffEmail = '" . $_POST['uEmail'] . "',staffUpdatedBy = '" . $_SESSION['staffName'] . "', staffStatus = '" . $_POST['uStatus'] . "', staffRole = '" . $_POST['uRole'] . "' where staffId = '" . $_GET['staffId'] . "';";
        if ($con->query($qry)) {
            $save = "success";
            echo "<script>window.location.href='staff.php';</script>";
        } else {
            $save = "warning";
        }
    }
}
?>

<body class="sb-nav-fixed">

    <?php

    topBar();
    sideBar();
    ?>
    <div id="layoutSidenav_content">
        <main class="container-fluid">
            <h2 class="p-3">Edit the Form to Update User</h2>
            <?php
            $staffUserReq = "select * from `staff_user_db` where staffId='" . $_GET["staffId"] . "';";
            $data = $con->query($staffUserReq);
            while ($row = $data->fetch_assoc()) {
            ?>
                <form class="container-fluid" name="staffUserForm" method="POST" id="staffUserForm">
                    <div class="mb-3">
                        <label for="staffUserName" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="staffUserName" name="uName" required value="<?php echo $row["staffName"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="staffUserEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="staffUserEmail" name="uEmail" aria-describedby="emailHelp" required title="Invalid email address" value="<?php echo $row["staffEmail"] ?>" ;>
                    </div>
                    <div class="mb-3">
                        <label for="uPass" class="form-label">Password</label>
                        <input type="password" autocomplete="new-password" class="form-control" id="uPass" name="uPass" required value="<?php echo $row["staffPass"] ?>" ;>
                    </div>
                    <div class="mb-3">
                        <label for="cPass" class="form-label">Confirm Password</label>
                        <input type="password" autocomplete="new-password" class="form-control" id="cPass" name="cPass" onchange="pass()" required value="<?php echo $row["staffPass"] ?>" ;>
                        <div style="color:#dc3545; font-size:80%;" id="match-pass"></div>
                    </div>
                    <div class="mb-3">
                        <label for="staffUserContact" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="staffUserContact" name="uContact" title="Invalid Contact Number" pattern="[0-9]{11}" required value="<?php echo $row["staffContact"] ?>" ;>
                    </div>
                    <div class="mb-3">
                        <label for="staffUserStatus" class="form-label">Status</label>
                        <select name="uStatus" id="staffUserStatus" class="custom-select">
                            <option value="0" <?php echo $row["staffStatus"] === "0" ? "selected" : ""; ?>>Active</option>
                            <option value="1" <?php echo $row["staffStatus"] === "1" ? "selected" : ""; ?>>InActive</option>
                        </select>
                    </div>
                    <input type="hidden" name="uId" value="<?php echo $_GET["staffId"]; ?> " />
                    <div class="mb-3">
                        <label for="staffUserRole" class="form-label">Choose Staff Role</label>
                        <select name="uRole" id="staffUserRole" class="custom-select">
                            <option value="Admin" <?php echo $row["staffRole"] === "Admin" ? "selected" : ""; ?>>Admin</option>
                            <option value="user" <?php echo $row["staffRole"] === "user" ? "selected" : ""; ?>>User</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="Update" />
                </form>
            <?php
            }
            ?>
        </main>
        <?php
        footer();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script>
        function pass() {

            var uPass = document.getElementById('uPass');
            var cPass = document.getElementById('cPass');
            var matchPass = document.getElementById('match-pass');
            if (uPass.value != cPass.value) {
                matchPass.innerHTML = "Type same as above";
                cPass.style = "border:1px solid #dc3545 !important;";
            } else {
                matchPass.innerHTML = "";
                cPass.style = "";
            }
        }
    </script>
</body>

</html>