<?php
session_start();
require("../conn.php");
if (isset($_POST['nicPouch_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `others_db` where othersId ='" . $_POST["nicPouch_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["othersId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">nicPouch Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["nicPouch"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">nicPouch Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["nicPouchPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateNicPouch">Update</button>
            </div>
        </form>
<?php
    }
}
?>
<?php
if (isset($_POST['A4Sealer_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `others_db` where othersId ='" . $_POST["A4Sealer_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["othersId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">A4Sealer Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["A4Sealer"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">A4Sealer Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["A4SealerPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateA4Sealer">Update</button>
            </div>
        </form>
<?php
    }
}
?>
<?php
if (isset($_POST['admitCard_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `others_db` where othersId ='" . $_POST["admitCard_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["othersId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">admitCard Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["admitCard"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">admitCard Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["admitCardPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateAdmitCard">Update</button>
            </div>
        </form>
<?php
    }
}
?>
<?php
if (isset($_POST['bikeBook_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `others_db` where othersId ='" . $_POST["bikeBook_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["othersId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">bikeBook Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["bikeBook"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">bikeBook Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["bikeBookPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateBikeBook">Update</button>
            </div>
        </form>
<?php
    }
}
?>
<?php
if (isset($_POST['A4Hard_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `others_db` where othersId ='" . $_POST["A4Hard_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["othersId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">A4Hard Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["A4Hard"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">A4Hard Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["A4HardPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateA4Hard">Update</button>
            </div>
        </form>
<?php
    }
}
?>
<?php
if (isset($_POST['nicNew_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `others_db` where othersId ='" . $_POST["nicNew_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["othersId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">nicNew Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["nicNew"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">nicNew Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["nicNewPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateNicNew">Update</button>
            </div>
        </form>
<?php
    }
}
?>
<?php
if (isset($_POST['nicOld_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `others_db` where othersId ='" . $_POST["nicOld_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["othersId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">nicOld Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["nicOld"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">nicOld Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["nicOldPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateNicOld">Update</button>
            </div>
        </form>
<?php
    }
}
?>