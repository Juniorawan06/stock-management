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
                    <h2 class="m-3">GlossyA4 & GlossyA3</h2>
                    <a class="btn btn-primary m-3" href="add-stock.php" role="button">+ Add Items</a>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Glossy_115
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
                                $glossy115Req = "select * from `glossy_a4_db`where A4Deleted=0 and glossy115!='' and glossy115Price!=0;";
                                $data = $con->query($glossy115Req);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="glossy115_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["A4Id"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["glossy115"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["glossy115Price"] ?></div>
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
                                $totalReq = "SELECT SUM(glossy115),SUM(glossy115Price) FROM glossy_a4_db WHERE A4Deleted=0 and glossy115!='' and glossy115Price!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(glossy115)'] . "</th>
                                <th class='text-center'>" . $row['SUM(glossy115Price)'] . "</th>
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
                        Glossy_360
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
                                $cushionReq = "select * from `glossy_a4_db`where A4Deleted=0 and glossy360!='' and glossy360Price!=0;";
                                $data = $con->query($cushionReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="glossy360_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["A4Id"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["glossy360"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["glossy360Price"] ?></div>
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
                                                    <button class="btn btn-outline-success edit_btn2"><i class="fas fa-edit"></i></button>

                                                    <button class="btn btn-outline-danger delete_btn2"><i class="fas fa-trash"></i></button>
                                                </center>
                                                    ';
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                $totalReq = "SELECT SUM(glossy360),SUM(glossy360Price) FROM glossy_a4_db WHERE A4Deleted=0 and glossy360!='' and glossy360Price!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(glossy360)'] . "</th>
                                <th class='text-center'>" . $row['SUM(glossy360Price)'] . "</th>
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
                        Gossy_140
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple3">
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
                                $shirtReq = "select * from `glossy_a4_db`where A4Deleted=0 and glossy140!='' and glossy140Price!=0;";
                                $data = $con->query($shirtReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="glossy140_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["A4Id"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["glossy140"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["glossy140Price"] ?></div>
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
                                                    <button class="btn btn-outline-success edit_btn3"><i class="fas fa-edit"></i></button>

                                                    <button class="btn btn-outline-danger delete_btn3"><i class="fas fa-trash"></i></button>
                                                </center>
                                                    ';
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                $totalReq = "SELECT SUM(glossy140),SUM(glossy140Price) FROM glossy_a4_db WHERE A4Deleted=0 and glossy140!='' and glossy140Price!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(glossy140)'] . "</th>
                                <th class='text-center'>" . $row['SUM(glossy140Price)'] . "</th>
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
                        Texture_260
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple4">
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
                                $shirtReq = "select * from `glossy_a4_db`where A4Deleted=0 and texture260!='' and texture260Price!=0;";
                                $data = $con->query($shirtReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="texture260_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["A4Id"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["texture260"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["texture260Price"] ?></div>
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
                                                    <button class="btn btn-outline-success edit_btn4"><i class="fas fa-edit"></i></button>

                                                    <button class="btn btn-outline-danger delete_btn4"><i class="fas fa-trash"></i></button>
                                                </center>
                                                    ';
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                $totalReq = "SELECT SUM(texture260),SUM(texture260Price) FROM glossy_a4_db WHERE A4Deleted=0 and texture260!='' and texture260Price!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(texture260)'] . "</th>
                                <th class='text-center'>" . $row['SUM(texture260Price)'] . "</th>
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
                        Glossy_A3
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple5">
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
                                $glossyA3Req = "select * from `glossy_a3_db`where A3Deleted=0 and glossyA3!='' and glossyA3Price!=0;";
                                $data = $con->query($glossyA3Req);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="glossyA3_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["A3Id"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["glossyA3"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["glossyA3Price"] ?></div>
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
                                                        <button class="btn btn-outline-success edit_btn5"><i class="fas fa-edit"></i></button>

                                                        <button class="btn btn-outline-danger delete_btn5"><i class="fas fa-trash"></i></button>
                                                    </center>
                                                    ';
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                $totalReq = "SELECT SUM(glossyA3),SUM(glossyA3Price) FROM glossy_a3_db WHERE A3Deleted=0 and glossyA3!='' and glossyA3Price!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(glossyA3)'] . "</th>
                                <th class='text-center'>" . $row['SUM(glossyA3Price)'] . "</th>
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

            <!-- Delete glossy115 Modal -->
            <div class="modal fade" id="delete70gsmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <form action="edit/70gsm.php" method="post">
                            <div class="modal-footer">
                                <input type="hidden" name="delete70gsmId" id="delete70gsmId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="deleteglossy115">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete glossy360 Modal -->
            <div class="modal fade" id="glossy360Id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <form action="edit/70gsm.php" method="post">
                            <div class="modal-footer">
                                <input type="hidden" name="glossy360" id="glossy360" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="deleteglossy360">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete glossy140 Modal -->
            <div class="modal fade" id="glossy140" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <form action="edit/70gsm.php" method="post">
                            <div class="modal-footer">
                                <input type="hidden" name="glossy140Id" id="glossy140Id" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="deleteglossy140">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete texture360 Modal -->
            <div class="modal fade" id="texture260" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <form action="edit/70gsm.php" method="post">
                            <div class="modal-footer">
                                <input type="hidden" name="texture260Id" id="texture260Id" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="removetexture360">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete glossyA3 Modal -->
            <div class="modal fade" id="deleteglossyA3Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="glossyA3Id" id="glossyA3Id" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="delete_glossy_A3">Delete</button>
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
                var delete70gsm_id = $(this).closest("tr").find("#glossy115_Id").text();
                // console.log(delete_id);
                $("#delete70gsmId").val(delete70gsm_id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+delete70gsm_id);
                $("#delete70gsmModal").modal("show");

            });

            $(".delete_btn2").click(function(e) {
                e.preventDefault();
                var glossy360_Id = $(this).closest("tr").find("#glossy360_Id").text();
                // console.log(delete_id);
                $("#glossy360").val(glossy360_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+glossy360_Id);
                $("#glossy360Id").modal("show");

            });

            $(".delete_btn3").click(function(e) {
                e.preventDefault();
                var glossy140_Id = $(this).closest("tr").find("#glossy140_Id").text();
                // console.log(delete_id);
                $("#glossy140Id").val(glossy140_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+glossy140_Id);
                $("#glossy140").modal("show");

            });

            $(".delete_btn4").click(function(e) {
                e.preventDefault();
                var texture260_Id = $(this).closest("tr").find("#texture260_Id").text();
                // console.log(delete_id);
                $("#texture260Id").val(texture260_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+texture260_Id);
                $("#texture260").modal("show");

            });

            $(".delete_btn5").click(function(e) {
                e.preventDefault();
                var glossyA3_Id = $(this).closest("tr").find("#glossyA3_Id").text();
                // console.log(delete_id);
                $("#glossyA3Id").val(glossyA3_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+glossyA3_Id);
                $("#deleteglossyA3Modal").modal("show");

            });

            $(".edit_btn").click(function(e) {
                e.preventDefault();
                var glossy115_Id = $(this).closest("tr").find("#glossy115_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/edit_glossy.php",
                    data: {
                        "glossy115_Id": true,
                        "glossy115_Id": glossy115_Id,
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

            $(".edit_btn2").click(function(e) {
                e.preventDefault();
                var glossy360_Id = $(this).closest("tr").find("#glossy360_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/edit_glossy.php",
                    data: {
                        "glossy360_Id": true,
                        "glossy360_Id": glossy360_Id,
                    },
                    success: function(response) {
                        console.log(response);
                        $("#editA4Modal").modal("show");
                        $("#edit_70gsm").html(response);
                    }
                });
            });
        });

        $(document).ready(function() {

            $(".edit_btn3").click(function(e) {
                e.preventDefault();
                var glossy140_Id = $(this).closest("tr").find("#glossy140_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/edit_glossy.php",
                    data: {
                        "glossy140_Id": true,
                        "glossy140_Id": glossy140_Id,
                    },
                    success: function(response) {
                        console.log(response);
                        $("#editA4Modal").modal("show");
                        $("#edit_70gsm").html(response);
                    }
                });
            });
        });

        $(document).ready(function() {

            $(".edit_btn4").click(function(e) {
                e.preventDefault();
                var texture260_Id = $(this).closest("tr").find("#texture260_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/edit_glossy.php",
                    data: {
                        "texture260_Id": true,
                        "texture260_Id": texture260_Id,
                    },
                    success: function(response) {
                        console.log(response);
                        $("#editA4Modal").modal("show");
                        $("#edit_70gsm").html(response);
                    }
                });
            });
        });

        $(document).ready(function() {

            $(".edit_btn5").click(function(e) {
                e.preventDefault();
                var glossyA3_Id = $(this).closest("tr").find("#glossyA3_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/edit_glossy.php",
                    data: {
                        "glossyA3_Id": true,
                        "glossyA3_Id": glossyA3_Id,
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