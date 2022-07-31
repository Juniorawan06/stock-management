<?php
session_start();
require("../conn.php");
if (isset($_POST['stampPaper50_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $stampPaper50Req = "select * from `stamp_paper_db` where stampPaperId ='" . $_POST["stampPaper50_Id"] . "';";
    $data = $con->query($stampPaper50Req);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["stampPaperId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">stampPaper50 Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["stampPaper50"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">stampPaper50 Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["stampPaper50Price"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editStampPaper50">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['stampPaper100_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $stampPaper100Req = "select * from `stamp_paper_db` where stampPaperId ='" . $_POST["stampPaper100_Id"] . "';";
    $data = $con->query($stampPaper100Req);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["stampPaperId"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">stampPaper100 Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["stampPaper100"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">stampPaper100 Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["stampPaper100Price"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editStampPaper100">Update</button>
            </div>
        </form>   
<?php
    }
}
?>