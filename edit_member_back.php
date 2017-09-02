<?php
require("connectdb.php");
session_start();
$member=$_SESSION["memtype"];
$cno=$_SESSION["cert"];
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$sql="";
if($member=="EB")
{
	$designation=$_POST["designation"];
	$college=$_POST["college"];
	$council=$_POST["council"];
	$sql="Update eb set name='$name',email='$email',mobile='$mobile',designation='$designation',college='$college',council='$council' where certificate='$cno' ";
	$msg=" EB member details have been updated successfully.";
}
else if($member=="Delegate")
{
	$college=$_POST["college"];
	$merits=$_POST["merits"];
	$country=$_POST["country"];
	$council=$_POST["council"];
	$sql="Update delegate set name='$name',email='$email',mobile='$mobile',country='$country',college='$college',council='$council',merits='$merits' where certificate='$cno' ";
	$msg="Delegate member details have been updated successfully.";
}
else if($member=="OC")
{
	$team=$_POST["team"];
	$designation=$_POST["designation"];
	$sql="Update oc set name='$name',email='$email',mobile='$mobile',designation='$designation',college='$college',team='team' where certificate='$cno' ";
	$msg=" EB member details have been updated successfully.";
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