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
                    <h2 class="m-3"> Cushions & Shirts Lists</h2>
                    <a class="btn btn-primary m-3" href="add-stock.php" role="button">+ Add Items</a>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Simple Cushions
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
                                $cushionReq = "select * from `cushion_db`where cushionDeleted=0 and simpleCushion!='' and simpleCushionPrice!=0;";
                                $data = $con->query($cushionReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="simpleCushion_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["cushionId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["simpleCushion"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["simpleCushionPrice"] ?></div>
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
                                $totalReq = "SELECT SUM(simpleCushion),SUM(simpleCushionPrice) FROM cushion_db WHERE cushionDeleted=0 and simpleCushion!='' and simpleCushionPrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(simpleCushion)'] . "</th>
                                <th class='text-center'>" . $row['SUM(simpleCushionPrice)'] . "</th>
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
                        Magic Cushions
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
                                $cushionReq = "select * from `cushion_db`where cushionDeleted=0 and magicCushion!='' and magicCushionPrice!=0;";
                                $data = $con->query($cushionReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                         <tr>
                                            <td id="magicCushion_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["cushionId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["magicCushion"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["magicCushionPrice"] ?></div>
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
                                $totalReq = "SELECT SUM(magicCushion),SUM(magicCushionPrice) FROM cushion_db WHERE cushionDeleted=0 and magicCushion!='' and magicCushionPrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(magicCushion)'] . "</th>
                                <th class='text-center'>" . $row['SUM(magicCushionPrice)'] . "</th>
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
                        White Shirts
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
                                $shirtReq = "select * from `cushion_db`where cushionDeleted=0 and whiteShirt!='' and whiteShirtPrice!=0;";
                                $data = $con->query($shirtReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                         <tr>
                                            <td id="whiteShirt_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["cushionId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["whiteShirt"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["whiteShirtPrice"] ?></div>
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
                                $totalReq = "SELECT SUM(whiteShirt),SUM(whiteShirtPrice) FROM cushion_db WHERE cushionDeleted=0 and whiteShirt!='' and whiteShirtPrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(whiteShirt)'] . "</th>
                                <th class='text-center'>" . $row['SUM(whiteShirtPrice)'] . "</th>
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
            
            <!-- Delete simpleCushion Modal -->
            <div class="modal fade" id="simpleCushion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="simpleCushionId" id="simpleCushionId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="removeSimpleCushion">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Delete magicCushion Modal -->
            <div class="modal fade" id="magicCushion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="magicCushionId" id="magicCushionId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="removeMagicCushion">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete whiteShirt Modal -->
            <div class="modal fade" id="whiteShirt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="whiteShirtId" id="whiteShirtId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="removeWhiteShirt">Delete</button>
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
                var simpleCushion_Id = $(this).closest("tr").find("#simpleCushion_Id").text();
                // console.log(delete_id);
                $("#simpleCushionId").val(simpleCushion_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+simpleCushion_Id);
                $("#simpleCushion").modal("show");

            });

            $(".delete_btn2").click(function(e) {
                e.preventDefault();
                var magicCushion_Id = $(this).closest("tr").find("#magicCushion_Id").text();
                // console.log(delete_id);
                $("#magicCushionId").val(magicCushion_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+magicCushion_Id);
                $("#magicCushion").modal("show");

            });

            $(".delete_btn3").click(function(e) {
                e.preventDefault();
                var whiteShirt_Id = $(this).closest("tr").find("#whiteShirt_Id").text();
                // console.log(delete_id);
                $("#whiteShirtId").val(whiteShirt_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+whiteShirt_Id);
                $("#whiteShirt").modal("show");

            });

            $(".edit_btn").click(function(e) {
                e.preventDefault();
                var simpleCushion_Id = $(this).closest("tr").find("#simpleCushion_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editCushions.php",
                    data: {
                        "simpleCushion_Id": true,
                        "simpleCushion_Id": simpleCushion_Id,
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
                var magicCushion_Id = $(this).closest("tr").find("#magicCushion_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editCushions.php",
                    data: {
                        "magicCushion_Id": true,
                        "magicCushion_Id": magicCushion_Id,
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
                var whiteShirt_Id = $(this).closest("tr").find("#whiteShirt_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editCushions.php",
                    data: {
                        "whiteShirt_Id": true,
                        "whiteShirt_Id": whiteShirt_Id,
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