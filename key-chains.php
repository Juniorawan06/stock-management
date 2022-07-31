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
                    <h2 class="m-3"> Key Cahins</h2>
                    <a class="btn btn-primary m-3" href="add-stock.php" role="button">+ Add Items</a>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Circular Key Chain
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
                                $circularKeyChainReq = "select * from `key_chain_db`where keyChainDeleted=0 and circularKeyChain!='' and circularKeyChainPrice!=0;";
                                $data = $con->query($circularKeyChainReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="circularKeyChain_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["keyChainId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["circularKeyChain"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["circularKeyChainPrice"] ?></div>
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
                                $totalReq = "SELECT SUM(circularKeyChain),SUM(circularKeyChainPrice) FROM key_chain_db WHERE keyChainDeleted=0 and circularKeyChain!='' and circularKeyChainPrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(circularKeyChain)'] . "</th>
                                <th class='text-center'>" . $row['SUM(circularKeyChainPrice)'] . "</th>
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
                        Circle Key Chain
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
                                $circleKeyChainReq = "select * from `key_chain_db`where keyChainDeleted=0 and circleKeyChain!='' and circleKeyChainPrice!=0;";
                                $data = $con->query($circleKeyChainReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                         <tr>
                                            <td id="circleKeyChain_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["keyChainId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["circleKeyChain"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["circleKeyChainPrice"] ?></div>
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
                                $totalReq = "SELECT SUM(circleKeyChain),SUM(circleKeyChainPrice) FROM key_chain_db WHERE keyChainDeleted=0 and circleKeyChain!='' and circleKeyChainPrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(circleKeyChain)'] . "</th>
                                <th class='text-center'>" . $row['SUM(circleKeyChainPrice)'] . "</th>
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
                        Box Key Chain
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
                                $shirtReq = "select * from `key_chain_db`where keyChainDeleted=0 and boxKeyChain!='' and boxKeyChainPrice!=0;";
                                $data = $con->query($shirtReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                         <tr>
                                            <td id="boxKeyChain_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["keyChainId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["boxKeyChain"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["boxKeyChainPrice"] ?></div>
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
                                $totalReq = "SELECT SUM(boxKeyChain),SUM(boxKeyChainPrice) FROM key_chain_db WHERE keyChainDeleted=0 and boxKeyChain!='' and boxKeyChainPrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(boxKeyChain)'] . "</th>
                                <th class='text-center'>" . $row['SUM(boxKeyChainPrice)'] . "</th>
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
                        Wood Key Chain
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
                                $shirtReq = "select * from `key_chain_db`where keyChainDeleted=0 and woodKeyChain!='' and woodKeyChainPrice!=0;";
                                $data = $con->query($shirtReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                         <tr>
                                            <td id="woodKeyChain_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["keyChainId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["woodKeyChain"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["woodKeyChainPrice"] ?></div>
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
                                $totalReq = "SELECT SUM(woodKeyChain),SUM(woodKeyChainPrice) FROM key_chain_db WHERE keyChainDeleted=0 and woodKeyChain!='' and woodKeyChainPrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(woodKeyChain)'] . "</th>
                                <th class='text-center'>" . $row['SUM(woodKeyChainPrice)'] . "</th>
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

            <!-- Delete circularKeyChain Modal -->
            <div class="modal fade" id="circularKeyChain" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="circularKeyChainId" id="circularKeyChainId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="deleteCircularKeyChain">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete circleKeyChain Modal -->
            <div class="modal fade" id="circleKeyChain" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="circleKeyChainId" id="circleKeyChainId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="deleteCircleKeyChain">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete boxKeyChain Modal -->
            <div class="modal fade" id="boxKeyChain" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="boxKeyChainId" id="boxKeyChainId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="deleteBoxKeyChain">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete woodKeyChain Modal -->
            <div class="modal fade" id="woodKeyChain" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="woodKeyChainId" id="woodKeyChainId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="removeWoodKeyChain">Delete</button>
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
                var circularKeyChain_id = $(this).closest("tr").find("#circularKeyChain_Id").text();
                // console.log(delete_id);
                $("#circularKeyChainId").val(circularKeyChain_id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+circularKeyChain_id);
                $("#circularKeyChain").modal("show");

            });

            $(".delete_btn2").click(function(e) {
                e.preventDefault();
                var circleKeyChain_Id = $(this).closest("tr").find("#circleKeyChain_Id").text();
                // console.log(delete_id);
                $("#circleKeyChainId").val(circleKeyChain_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+circleKeyChain_Id);
                $("#circleKeyChain").modal("show");

            });

            $(".delete_btn3").click(function(e) {
                e.preventDefault();
                var boxKeyChain_Id = $(this).closest("tr").find("#boxKeyChain_Id").text();
                // console.log(delete_id);
                $("#boxKeyChainId").val(boxKeyChain_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+boxKeyChain_Id);
                $("#boxKeyChain").modal("show");

            });

            $(".delete_btn4").click(function(e) {
                e.preventDefault();
                var woodKeyChain_Id = $(this).closest("tr").find("#woodKeyChain_Id").text();
                // console.log(delete_id);
                $("#woodKeyChainId").val(woodKeyChain_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+woodKeyChain_Id);
                $("#woodKeyChain").modal("show");

            });

            $(".edit_btn").click(function(e) {
                e.preventDefault();
                var circularKeyChain_Id = $(this).closest("tr").find("#circularKeyChain_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editKeyChains.php",
                    data: {
                        "circularKeyChain_Id": true,
                        "circularKeyChain_Id": circularKeyChain_Id,
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
                var circleKeyChain_Id = $(this).closest("tr").find("#circleKeyChain_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editKeyChains.php",
                    data: {
                        "circleKeyChain_Id": true,
                        "circleKeyChain_Id": circleKeyChain_Id,
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
                var boxKeyChain_Id = $(this).closest("tr").find("#boxKeyChain_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editKeyChains.php",
                    data: {
                        "boxKeyChain_Id": true,
                        "boxKeyChain_Id": boxKeyChain_Id,
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
                var woodKeyChain_Id = $(this).closest("tr").find("#woodKeyChain_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editKeyChains.php",
                    data: {
                        "woodKeyChain_Id": true,
                        "woodKeyChain_Id": woodKeyChain_Id,
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