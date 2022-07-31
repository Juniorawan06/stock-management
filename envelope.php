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
                    <h2 class="m-3">Envelopes Lists</h2>
                    <a class="btn btn-primary m-3" href="add-stock.php" role="button">+ Add Items</a>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        A4 Envelope
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
                                $envelopeReq = "select * from `envelope_db`where envelopeDeleted=0 and envelopeA4!='' and envelopeA4Price!=0;";
                                $data = $con->query($envelopeReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td id="envelopeA4_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["envelopeId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["envelopeA4"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["envelopeA4Price"] ?></div>
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
                                $totalReq = "SELECT SUM(envelopeA4),SUM(envelopeA4Price) FROM envelope_db WHERE envelopeDeleted=0 and envelopeA4!='' and envelopeA4Price!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(envelopeA4)'] . "</th>
                                <th class='text-center'>" . $row['SUM(envelopeA4Price)'] . "</th>
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
                        Envelope 57
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
                                $envelopeReq = "select * from `envelope_db`where envelopeDeleted=0 and envelope57!='' and envelope57Price!=0;";
                                $data = $con->query($envelopeReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                         <tr>
                                            <td id="envelope57_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["envelopeId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["envelope57"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["envelope57Price"] ?></div>
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
                                $totalReq = "SELECT SUM(envelope57),SUM(envelope57Price) FROM envelope_db WHERE envelopeDeleted=0 and envelope57!='' and envelope57Price!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(envelope57)'] . "</th>
                                <th class='text-center'>" . $row['SUM(envelope57Price)'] . "</th>
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
                        CV Envelope
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
                                $shirtReq = "select * from `envelope_db`where envelopeDeleted=0 and cvEnvelope!='' and cvEnvelopePrice!=0;";
                                $data = $con->query($shirtReq);
                                if ($data) {
                                    while ($row = $data->fetch_assoc()) {
                                ?>
                                         <tr>
                                            <td id="cvEnvelope_Id">
                                                <div class="d-flex justify-content-center"><?php echo $row["envelopeId"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["cvEnvelope"] ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center"><?php echo $row["cvEnvelopePrice"] ?></div>
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
                                $totalReq = "SELECT SUM(cvEnvelope),SUM(cvEnvelopePrice) FROM envelope_db WHERE envelopeDeleted=0 and cvEnvelope!='' and cvEnvelopePrice!=0;";
                                $total = $con->query($totalReq);
                                if ($total) {
                                    if ($row = $total->fetch_assoc()) {
                                        echo "<tr><th>Total</th>
                                <th class='text-center'>" . $row['SUM(cvEnvelope)'] . "</th>
                                <th class='text-center'>" . $row['SUM(cvEnvelopePrice)'] . "</th>
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

            <!-- Delete A4Envelope Modal -->
            <div class="modal fade" id="A4Envelope" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="A4EnvelopeId" id="A4EnvelopeId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="removeA4Envelope">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Delete envelope57 Modal -->
            <div class="modal fade" id="envelope57" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="envelope57Id" id="envelope57Id" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="removeEnvelope57">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete cvEnvelope Modal -->
            <div class="modal fade" id="cvEnvelope" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="cvEnvelopeId" id="cvEnvelopeId" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="removeCvEnvelope">Delete</button>
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
                var envelopeA4_Id = $(this).closest("tr").find("#envelopeA4_Id").text();
                // console.log(delete_id);
                $("#A4EnvelopeId").val(envelopeA4_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+envelopeA4_Id);
                $("#A4Envelope").modal("show");

            });

            $(".delete_btn2").click(function(e) {
                e.preventDefault();
                var envelope57_Id = $(this).closest("tr").find("#envelope57_Id").text();
                // console.log(delete_id);
                $("#envelope57Id").val(envelope57_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+envelope57_Id);
                $("#envelope57").modal("show");

            });

            $(".delete_btn3").click(function(e) {
                e.preventDefault();
                var cvEnvelope_Id = $(this).closest("tr").find("#cvEnvelope_Id").text();
                // console.log(delete_id);
                $("#cvEnvelopeId").val(cvEnvelope_Id);
                $(".modal-body").html("Are you Sure you want to Delete Id "+cvEnvelope_Id);
                $("#cvEnvelope").modal("show");

            });

            $(".edit_btn").click(function(e) {
                e.preventDefault();
                var envelopeA4_Id = $(this).closest("tr").find("#envelopeA4_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editEnvelope.php",
                    data: {
                        "envelopeA4_Id": true,
                        "envelopeA4_Id": envelopeA4_Id,
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
                var envelope57_Id = $(this).closest("tr").find("#envelope57_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editEnvelope.php",
                    data: {
                        "envelope57_Id": true,
                        "envelope57_Id": envelope57_Id,
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
                var cvEnvelope_Id = $(this).closest("tr").find("#cvEnvelope_Id").text();
                //    console.log(gsm70_id);

                $.ajax({
                    type: "POST",
                    url: "edit/editEnvelope.php",
                    data: {
                        "cvEnvelope_Id": true,
                        "cvEnvelope_Id": cvEnvelope_Id,
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