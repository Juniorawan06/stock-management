<?php
session_start();
require("../conn.php");
if (isset($_POST['colorSheets_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a470gsmReq = "select * from `sheets_db` where sheetsId ='" . $_POST["colorSheets_Id"] . "';";
    $data = $con->query($a470gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["sheetsId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">colorSheets Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["colorSheets"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">colorSheets Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["colorSheetsPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateColorSheets">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['bindingSheets_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a470gsmReq = "select * from `sheets_db` where sheetsId ='" . $_POST["bindingSheets_Id"] . "';";
    $data = $con->query($a470gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["sheetsId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">fileBag Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["bindingSheets"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">fileBag Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["bindingSheetsPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateBindingSheets">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
