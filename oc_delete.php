<?php
require("connectdb.php");
session_start();
if(isset($_GET["cert"])==false)
{
	header("Location:dashboard_main.php");
	exit();
}
else
{
	$cert=$_GET["cert"];
	$sql="Delete from oc where certificate='$cert'";
	if($conn->query($sql)=== TRUE)
	{
		echo "DELETED";
		$_SESSION["msg"]="OC member details were deleted";
	}
	header("Location:dashboard.php");
	exit();
}
?>