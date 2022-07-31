<?php
session_start();
require("../conn.php");
if (isset($_POST['officeFile_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a470gsmReq = "select * from `files_db` where filesId ='" . $_POST["officeFile_Id"] . "';";
    $data = $con->query($a470gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["filesId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">officeFile Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["officeFile"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">officeFile Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["officeFilePrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateOfficeFile">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['fileBag_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a470gsmReq = "select * from `files_db` where filesId ='" . $_POST["fileBag_Id"] . "';";
    $data = $con->query($a470gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["filesId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">fileBag Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["fileBag"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">fileBag Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["fileBagPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateFileBag">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
