<?php
session_start();
require("../conn.php");
if (isset($_POST['edit_70gsm'])) {
    //   echo  $_POST["gsm70_Id"];
    $a370gsmReq = "select * from `a3_70gsm_db` where a3Id ='" . $_POST["gsm70_Id"] . "';";
    $data = $con->query($a370gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/70gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["a3Id"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">70gsm Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["a370gsm"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">70gsm Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["a370gsmPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="edit70gsm">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['edit_80gsm'])) {
    //   echo  $_POST["gsm70_Id"];
    $a380gsmReq = "select * from `a3_80gsm_db` where a3Id ='" . $_POST["gsm80_Id"] . "';";
    $data = $con->query($a380gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["a3Id"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">80gsm Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["a380gsm"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">80gsm Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["a380gsmPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="edit80gsm">Update</button>
            </div>
        </form>   
<?php
    }
}
?>