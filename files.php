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
                    <h2 class="m-3">Files List</h2>
                    <a class="btn btn-primary m-3" href="add-stock.php" role="button">+ Add Items</a>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        File Bag
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Added On</th>
                                    <th>Added By</th>
                                    <th>Updated By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $fileBagReq = "select * from `files_db`where fileDeleted=0 and fileBag!='' and fileBagPrice!=0;";
                                $data = $con->query($fileBagReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="fileBag_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["filesId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["fileBag"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["fileBagPrice"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["addedOn"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["addedBy"] ?></div>
                                            </td>
                                            <?php if ($row["updatedBy"] == "") { ?>
                                                <td>
                                                    <div class="d-flex justify-content-center">Fresh Entry</div>
                                                </td>
                                            <?php } else { ?>
                                                <td>
                                                    <div class="d-flex justify-content-center"><?php echo $row["updatedBy"] ?></div>
                                                </td>
                                            <?php } ?>
                                            <td>
                                                <?php

                                                echo '
                                                    <center>
                                                        <button class="btn btn-outline-success edit_btn"><i class="fas fa-edit"></i></button>

                                                        <button class="btn btn-outline-danger delete_btn"><i class="fas fa-trash"></i></button>
                                                    </center>
                                                    ';
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                $totalReq = "SELECT SUM(fileBag),SUM(fileBagPrice) FROM files_db WHERE fileDeleted=0 and fileBag!='' and fileBagPrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(fileBag)'] . "</th>
                                <th class='text-center'>" . $row['SUM(fileBagPrice)'] . "</th>
                                </tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Office File
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple2">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Added On</th>
                                    <th>Added By</th>
                                    <th>Updated By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $officeFileReq = "select * from `files_db`where fileDeleted=0 and officeFile!='' and officeFilePrice!=0;";
                                $data = $con->query($officeFileReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                         <tr>
                                            <td id="officeFile_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["filesId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["officeFile"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["officeFilePrice"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["addedOn"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["addedBy"] ?></div>
                                            </td>
                                            <?php if ($row["updatedBy"] == "") { ?>
                                                <td>
                                                    <div class="d-flex justify-content-center">Fresh Entry</div>
                                                </td>
                                            <?php } else { ?>
                                                <td>
                                                    <div class="d-flex justify-content-center"><?php echo $row["updatedBy"] ?></div>
                                                </td>
                                            <?php } ?>
                                            <td>
                                                <?php

                                                echo '
                                                    <center>
                                                        <button class="btn btn-outline-success btn_edit"><i class="fas fa-edit"></i></button>

                                                        <button class="btn btn-outline-danger btn_delete"><i class="fas fa-trash"></i></button>
                                                    </center>
                                                    ';
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                $totalReq = "SELECT SUM(officeFile),SUM(officeFilePrice) FROM files_db WHERE fileDeleted=0 and officeFile!='' and officeFilePrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(officeFile)'] . "</th>
                                <th class='text-center'>" . $row['SUM(officeFilePrice)'] . "</th>
                                </tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Edit A4 Modal -->
            <div class="modal fade" id="editA4Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Edit form to Update Data</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="edit_70gsm"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete fileBag Modal -->
            <div class="modal fade" id="fileBag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <form action="edit/80gsm.php" method="post">
                            <div class="modal-footer">
                                <input type="hidden" name="fileBagId" id="fileBagId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="deleteFileBag">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete officeFile Modal -->
            <div class="modal fade" id="officeFile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <form action="edit/80gsm.php" method="post">
                            <div class="modal-footer">
                                <input type="hidden" name="officeFileId" id="officeFileId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="deleteOfficeFile">Delete</button>
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
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $(".delete_btn").click(function(e) {
                e.preventDefault();
                var fileBag_id = $(this).closest("tr").find("#fileBag_Id").text();
                // console.log(delete_id);
                $("#fileBagId").val(fileBag_id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+fileBag_id);
                $("#fileBag").modal("show");

            });

            $(".btn_delete").click(function(e) {
                e.preventDefault();
                var officeFile_id = $(this).closest("tr").find("#officeFile_Id").text();
                // console.log(delete_id);
                $("#officeFileId").val(officeFile_id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+officeFile_id);
                $("#officeFile").modal("show");

            });

            $(".edit_btn").click(function(e) {
                e.preventDefault();
                var fileBag_id = $(this).closest("tr").find("#fileBag_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editFiles.php",
                    data: {
                        "fileBag_Id": true,
                        "fileBag_Id": fileBag_id,
                    },
                    success: function(response) {
                        // console.log(response);
                        $("#editA4Modal").modal("show");
                        $("#edit_70gsm").html(response);
                    }
                });
            });
        });

        $(document).ready(function() {

            $(".btn_edit").click(function(e) {
                e.preventDefault();
                var officeFile_id = $(this).closest("tr").find("#officeFile_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editFiles.php",
                    data: {
                        "officeFile_Id": true,
                        "officeFile_Id": officeFile_id,
                    },
                    success: function(response) {
                        console.log(response);
                        $("#editA4Modal").modal("show");
                        $("#edit_70gsm").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>