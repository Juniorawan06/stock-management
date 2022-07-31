<?php

$con = new mysqli("localhost", "root", "", "stock_management_system");

if($con->connect_error)
{
	echo "Error in Connection";
}

?>