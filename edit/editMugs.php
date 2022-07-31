<?php
session_start();
require("../conn.php");
if (isset($_POST['whiteMug_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `mugs_db` where mugsId ='" . $_POST["whiteMug_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["mugsId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">whiteMug Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["whiteMug"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">whiteMug Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["whiteMugPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateWhiteMug">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['colorMug_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelope57Req = "select * from `mugs_db` where mugsId ='" . $_POST["colorMug_Id"] . "';";
    $data = $con->query($envelope57Req);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["mugsId"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">colorMug Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["colorMug"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">colorMug Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["colorMugPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateColorMug">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['magicMug_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $cvEnvelopeReq = "select * from `mugs_db` where mugsId ='" . $_POST["magicMug_Id"] . "';";
    $data = $con->query($cvEnvelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["mugsId"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">magicMug Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["magicMug"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">magicMug Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["magicMugPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateMagicMug">Update</button>
            </div>
        </form>   
<?php
    }
}
?>