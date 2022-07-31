<?php
session_start();
require("../conn.php");
if (isset($_POST['glossy115_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a370gsmReq = "select * from `glossy_a4_db` where A4Id ='" . $_POST["glossy115_Id"] . "';";
    $data = $con->query($a370gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/70gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["A4Id"];?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">glossy115 Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["glossy115"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">glossy115 Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["glossy115Price"]; ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editglossy115">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['glossy360_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a380gsmReq = "select * from `glossy_a4_db` where A4Id ='" . $_POST["glossy360_Id"] . "';";
    $data = $con->query($a380gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/70gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["A4Id"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">glossy360 Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["glossy360"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">glossy360 Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["glossy360Price"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editglossy360">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['glossy140_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a370gsmReq = "select * from `glossy_a4_db` where A4Id ='" . $_POST["glossy140_Id"] . "';";
    $data = $con->query($a370gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/70gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["A4Id"];?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">glossy140 Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["glossy140"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">glossy140 Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["glossy140Price"]; ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editglossy140">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['texture260_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a380gsmReq = "select * from `glossy_a4_db` where A4Id ='" . $_POST["texture260_Id"] . "';";
    $data = $con->query($a380gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/70gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["A4Id"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">texture260 Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["texture260"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">texture260 Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["texture260Price"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="edittexture260">Update</button>
            </div>
        </form>   
<?php
    }
}
?>

<?php
if (isset($_POST['glossyA3_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $a380gsmReq = "select * from `glossy_a3_db` where A3Id ='" . $_POST["glossyA3_Id"] . "';";
    $data = $con->query($a380gsmReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="80gsm_id" value="<?php echo $row["A3Id"]; ?>">
            <div class="mb-3">
                <label for="80gsmQuantity" class="form-label">glossyA3 Quantity</label>
                <input type="text" class="form-control" id="80gsmQuantity" name="80gsmQuantity" value="<?php echo $row["glossyA3"]; ?>">
            </div>
            <div class="mb-3">
                <label for="80gsmPrice" class="form-label">glossyA3 Price</label>
                <input type="number" class="form-control" id="80gsmPrice" name="80gsmPrice" value="<?php echo $row["glossyA3Price"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editglossyA3">Update</button>
            </div>
        </form>   
<?php
    }
}
?>