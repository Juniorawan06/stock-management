<?php
session_start();
if (isset($_SESSION['staffPass'])) {
    session_destroy();
    unset($_SESSION['staffPass']);
}
header('location:login.php');
?>