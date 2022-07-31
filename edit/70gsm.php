<?php
session_start();
require("../conn.php");

if (isset($_POST['update70gsm'])) {
    $qry = "UPDATE `a4_70gsm_db` SET `a470gsm`='" . $_POST["70gsmQuantity"] . "',`a470gsmPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE a4Id = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../A4.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['delete70gsm'])) {

$sql = "update a4_70gsm_db set a4Deleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where a4Id ='".$_POST['delete70gsmId']."';";

if($con->query($sql))
{
    echo "<script>window.location.href='../A4.php';</script>";
}
else{
    echo "Error Occoured ".$sql. $con->error;
}
}
?>
<?php

if (isset($_POST['edit70gsm'])) {
    $qry = "UPDATE `a3_70gsm_db` SET `a370gsm`='" . $_POST["70gsmQuantity"] . "',`a370gsmPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE a3Id = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../A3.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['remove70gsm'])) {

$sql = "update a3_70gsm_db set a3Deleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where a3Id ='".$_POST['delete70gsmId']."';";

if($con->query($sql))
{
    echo "<script>window.location.href='../A3.php';</script>";
}
else{
    echo "Error Occoured ".$sql. $con->error;
}
}
?>
<?php

if (isset($_POST['editglossy115'])) {
    $qry = "UPDATE `glossy_a4_db` SET `glossy115`='" . $_POST["70gsmQuantity"] . "',`glossy115Price`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE A4Id = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../glossy.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['deleteglossy115'])) {

$sql = "update glossy_a4_db set A4Deleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where A4Id ='".$_POST['delete70gsmId']."';";

if($con->query($sql))
{
    echo "<script>window.location.href='../glossy.php';</script>";
}
else{
    echo "Error Occoured ".$sql. $con->error;
}
}
?>
<?php

if (isset($_POST['editglossy360'])) {
    $qry = "UPDATE `glossy_a4_db` SET `glossy360`='" . $_POST["80gsmQuantity"] . "',`glossy360Price`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE A4Id = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../glossy.php#glossy360_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['deleteglossy360'])) {

$sql = "update glossy_a4_db set A4Deleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where A4Id ='".$_POST['glossy360']."';";

if($con->query($sql))
{
    echo "<script>window.location.href='../glossy.php#glossy360_Id';</script>";
}
else{
    echo "Error Occoured ".$sql. $con->error;
}
}
?>
<?php

if (isset($_POST['editglossy140'])) {
    $qry = "UPDATE `glossy_a4_db` SET `glossy140`='" . $_POST["70gsmQuantity"] . "',`glossy140Price`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE a4Id = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../glossy.php#glossy140_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['deleteglossy140'])) {

$sql = "update glossy_a4_db set A4Deleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where A4Id ='".$_POST['glossy140Id']."';";

if($con->query($sql))
{
    echo "<script>window.location.href='../glossy.php#glossy140_Id';</script>";
}
else{
    echo "Error Occoured ".$sql. $con->error;
}
}
?>
<?php

if (isset($_POST['edittexture260'])) {
    $qry = "UPDATE `glossy_a4_db` SET `texture260`='" . $_POST["80gsmQuantity"] . "',`texture260Price`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE A4Id = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../glossy.php#texture260_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['removetexture360'])) {

$sql = "update glossy_a4_db set A4Deleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where A4Id ='".$_POST['texture260Id']."';";

if($con->query($sql))
{
    echo "<script>window.location.href='../glossy.php#texture260_Id';</script>";
}
else{
    echo "Error Occoured ".$sql. $con->error;
}
}
?>
