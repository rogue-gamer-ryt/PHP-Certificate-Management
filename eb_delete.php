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
	$sql="Delete from eb where certificate='$cert'";
	if($conn->query($sql)=== TRUE)
	{
		$_SESSION["msg"]="EB member details were deleted";
	}
	header("Location:dashboard.php");
	exit();
}
?>