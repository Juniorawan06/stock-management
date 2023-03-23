<?php
session_start();
if (!isset($_SESSION['staffPass'])) {
    header("location:login.php");
}
include("components.php");
myHead("Staff");
?>

<body class="sb-nav-fixed">
    <?php

    require("conn.php");
    topBar();
    sideBar();
    ?>

    <div id="layoutSidenav_content">
        <main class="container-fluid">
            <div class="container-fluid px-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="m-3">Staff List</h2>

                    <div style="display: none;" id="user" class="alert alert-info alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Alert!</strong> Users are not allowed to add, edit or delete Staff
                    </div>
                    <?php if ($_SESSION['role'] === "admin") { ?>

                        <a class="btn btn-primary m-3" href="addStaff.php" role="button">+ Add Staff</a>

                    <?php } else { ?>
                        <button type="button" class="btn btn-primary m-3" onclick="check()">+ Add Staff</button>
                    <?php } ?>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        All Staff List
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th>Added On</th>
                                    <th>Added By</th>
                                    <th>Updated By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $staffUserReq = "select * from `staff_user_db` where staffDeleted=0;";
                                $data = $con->query($staffUserReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="staffId">
                                                <div class="d-flex justify-content-center"><?php echo $row["staffId"] ?></div>
                                            </td>
                                            <td id="staffName">
                                                <div class="d-flex justify-content-center"><?php echo $row["staffName"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["staffContact"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["staffEmail"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["staffStatus"] === "0" ? "Active" : "In Active" ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["staffRole"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["staffCreateTime"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["staffAddedBy"] ?></div>
                                            </td>
                                            <?php if ($row["staffUpdatedBy"] == "") { ?>
                                                <td>
                                                    <div class="d-flex justify-content-center">Fresh Entry</div>
                                                </td>
                                            <?php } else { ?>
                                                <td>
                                                    <div class="d-flex justify-content-center"><?php echo $row["staffUpdatedBy"] ?></div>
                                                </td>
                                            <?php } ?>
                                            <td>
                                                <?php
                                                if ($_SESSION['role'] === "admin") {
                                                    echo '
                                                    <center>
                                                        <a class="btn btn-outline-success" href="editStaff.php?staffId=' . $row["staffId"] . '"><i class="fas fa-edit"></i></a>

                                                        <button class="btn btn-outline-danger delete_btn"><i class="fas fa-trash"></i></button>
                                                    </center>
                                                    ';
                                                } else {
                                                    echo '<button class="btn btn-outline-success user" onclick="check()"><i class="fas fa-edit"></i></button>

                                                        <button class="btn btn-outline-danger user" onclick="check()"><i class="fas fa-trash"></i></button>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Delete A4 Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <form action="deleteStaff.php" method="post">
                            <div class="modal-footer">
                                <input type="hidden" name="deleteStaffId" id="deleteStaffId">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger" name="deleteStaff">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php
        footer();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- <script src="js/scripts.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $(".delete_btn").click(function(e) {
                e.preventDefault();
                var delete_id = $(this).closest("tr").find("#staffId").text();
                var staffName = $(this).closest("tr").find("#staffName").text();
                // console.log(delete_id);
                $("#deleteStaffId").val(delete_id);
                $(".modal-body").html("Are you Sure you want to Delete" + staffName);
                $("#deleteModal").modal("show");

            });

        });

        function check() {
            var user = document.getElementById("user");
            user.style = "display: block !important;"
        }
    </script>
</body>

</html>