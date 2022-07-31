<?php
session_start();
require("../conn.php");
if (isset($_POST['envelopeA4_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `envelope_db` where envelopeId ='" . $_POST["envelopeA4_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["envelopeId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">envelopeA4 Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["envelopeA4"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">envelopeA4 Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["envelopeA4Price"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateEnvelopeA4">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['envelope57_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelope57Req = "select * from `envelope_db` where envelopeId ='" . $_POST["envelope57_Id"] . "';";
    $data = $con->query($envelope57Req);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["envelopeId"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">envelope57 Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["envelope57"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">envelope57 Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["envelope57Price"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateEnvelope57">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['cvEnvelope_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $cvEnvelopeReq = "select * from `envelope_db` where envelopeId ='" . $_POST["cvEnvelope_Id"] . "';";
    $data = $con->query($cvEnvelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["envelopeId"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">cvEnvelope Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["cvEnvelope"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">cvEnvelope Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["cvEnvelopePrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updatecvEnvelope">Update</button>
            </div>
        </form>   
<?php
    }
}
?>