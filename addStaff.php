<?php
session_start();
include("components.php");
if (!isset($_SESSION['staffPass'])) {
    header("location:login.php");
}
myHead("Staff");
?>

<body class="sb-nav-fixed">

    <?php

    topBar();
    sideBar();
    ?>
    <div id="layoutSidenav_content">
        <main class="container-fluid">
            <h2>Fill this Form to Add User</h2>
            <?php
            require("conn.php");
            if (isset($_POST['submit'])) {
                if ($_POST['uPass'] != $_POST['cPass']) {
                    echo "<script> 
                    alert('Passward not matched');
                    </script>";
                } else {

                    $qry = "insert into staff_user_db values(null, '" . $_POST['uName'] . "', '" . $_POST['uPass'] . "', '" . $_POST['uContact'] . "','" . $_POST['uEmail'] . "', CURRENT_TIMESTAMP,'" . $_SESSION['staffName'] . "','','" . $_POST['uStatus'] . "','" . $_POST['uRole'] . "',0);";

                    if ($con->query($qry)) {
                        $save = "success";
                    } else {
                        $save = "warning";
                    }
                }
            }
            ?>
            <form method="POST" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Username" name="uName" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="uPass"> Password:</label>
                    <input type="password" class="form-control" id="uPass" placeholder="********" name="uPass" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="cPass">Confirm Password:</label>
                    <input type="password" class="form-control" id="cPass" placeholder="********" name="cPass" onchange="pass()" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    <div style="color:#dc3545; font-size:80%;" id="match-pass"></div>
                </div>
                <div class="form-group">
                    <label for="num">Mobile:</label>
                    <input type="number" class="form-control" id="num" placeholder="Mobile Number" name="uContact" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="mail">Email:</label>
                    <input type="email" class="form-control" id="mail" placeholder="example@example.com" name="uEmail" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="mail">Status:</label>
                    <select class="custom-select" name="uStatus" required>
                        <option value="">--Select--</option>
                        <option value="0">Acive</option>
                        <option value="1">In Acive</option>
                    </select>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="mail">Role:</label>
                    <select class="custom-select" name="uRole" required>
                        <option value="">--Select--</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" class="btn btn-primary mb-2" name="submit">Add</button>
            </form>
        </main>
        <?php
        footer();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../utils/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <!-- <script>
            function validate() {
                (document.getElementById("staffUserConfirmPass").value === document.getElementById("staffUserPass").value) ? document.getElementsByTagName("formSubmit")[0].click(): alert("Password and confirm Password is not matched ")
            }
        </script> -->
    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

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