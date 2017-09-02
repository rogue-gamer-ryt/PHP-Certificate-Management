<?php
require("connectdb.php");
session_start();
$member=$_POST["member"];
$cno=$_POST["cno"];
$name=$_POST["fullname"];
$email=$_POST["email"];
$mobile=$_POST["phone"];
$sql="";
if($member=="EB")
{
	$designation=$_POST["edesignation"];
	$college=$_POST["ecollege"];
	$council=$_POST["ecouncil"];
	$sql="Insert into eb values ('$cno','$name','$college','$council','$designation','$mobile','$email')";
	$msg=" EB member details have been inserted successfully.";
}
else if($member=="DEL")
{
	$college=$_POST["dcollege"];
	$merits=$_POST["merits"];
	$country=$_POST["country"];
	$council=$_POST["dcouncil"];
	$sql="Insert into delegate values ('$cno','$name','$college','$country','$council','$mobile','$email','$merits')";
	$msg="Delegate member details have been inserted successfully.";
}
else if($member=="OC")
{
	$team=$_POST["team"];
	$designation=$_POST["odesignation"];
	$sql="Insert into oc values ('$cno','$name','$team','$designation','$mobile','$email')";
	$msg="OC member details have been inserted successfully.";
}
if($conn->query($sql)==TRUE)
{
	$_SESSION["msg"]=$msg;
}
else
{
	$_SESSION["msg"]="Error in Insertion,Try again";
}
header("Location: dashboard.php");
exit();
?>