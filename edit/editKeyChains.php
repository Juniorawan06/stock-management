<?php
session_start();
require("../conn.php");
if (isset($_POST['circularKeyChain_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a370gsmReq = "select * from `key_chain_db` where keyChainId ='" . $_POST["circularKeyChain_Id"] . "';";
    $data = $con->query($a370gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["keyChainId"];?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">circularKeyChain Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["circularKeyChain"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">circularKeyChain Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["circularKeyChainPrice"]; ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editCircularKeyChain">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['circleKeyChain_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a370gsmReq = "select * from `key_chain_db` where keyChainId ='" . $_POST["circleKeyChain_Id"] . "';";
    $data = $con->query($a370gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["keyChainId"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">circleKeyChain Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["circleKeyChain"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">circleKeyChain Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["circleKeyChainPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editCircleKeyChain">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['boxKeyChain_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a370gsmReq = "select * from `key_chain_db` where keyChainId ='" . $_POST["boxKeyChain_Id"] . "';";
    $data = $con->query($a370gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["keyChainId"];?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">boxKeyChain Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["boxKeyChain"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">boxKeyChain Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["boxKeyChainPrice"]; ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editBoxKeyChain">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['woodKeyChain_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a370gsmReq = "select * from `key_chain_db` where keyChainId ='" . $_POST["woodKeyChain_Id"] . "';";
    $data = $con->query($a370gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["keyChainId"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">woodKeyChain Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["woodKeyChain"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">woodKeyChain Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["woodKeyChainPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editWoodKeyChain">Update</button>
            </div>
        </form>   
<?php
    }
}
?>

