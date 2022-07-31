<?php
session_start();
require ("conn.php");
if (isset($_POST['deleteStaff'])) {
  
  $sql = "update staff_user_db set staffDeleted = 1,staffUpdatedBy = '" . $_SESSION['staffName'] . "'  where staffId ='".$_POST['deleteStaffId']."'";
  
  if($con->query($sql))
  {
    echo "<script>window.location.href='staff.php';</script>";
  }
  else{
    echo "Error Occoured ".$sql. $con->error;
  }
}
?>