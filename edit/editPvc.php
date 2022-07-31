<?php
session_start();
require("../conn.php");
if (isset($_POST['pvc_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `pvc_db` where pvcId ='" . $_POST["pvc_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["pvcId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">pvc Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["pvcQuantity"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">pvc Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["pvcPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updatePvc">Update</button>
            </div>
        </form>   
<?php
    }
}
?>