<html>
<?php
session_start();
require("connectdb.php");
    
if(isset($_POST["certno"]))
{
	$cno=$_POST["certno"];
	$memtype=$_POST["memtype"];
}
else
{
	header("Location : index.php");
	exit();
}

$name="";
$college="";
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
<title> Certificate Acquisition Portal</title>
</head>
<body>
<h1 style="text-align:center"> Certificate Acquisition Portal </h1>
<div class="row">
<div class="col-lg-1 col-xs-12 col-sm-5">
</div>
<div class="col-lg-5 col-xs-12 col-sm-5">
<table>
<tr>
<td> Certificate Number </td>
<td> <?php echo $cno ?></td>
</tr>
<?php
	$sql="Select * from delegate where certificate='$cno'";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$name=$row["name"];
		$college=$row["college"];
?>
		<tr>
		<td> Delegate Name </td>
		<td> <?php echo $row["name"]?> </td>
		</tr>
		<tr>
		<td> College/University </td>
		<td> <?php echo $row["college"]?> </td>
		</tr>
		<tr>
		<td> Council </td>
		<td> <?php echo $row["council"]?> </td>
		</tr>
		<tr>
		<td> Country Representation </td>
		<td> <?php echo $row["country"]?> </td>
		</tr>
		<tr>
		<td> Merits </td>
		<td> <?php echo $row["merits"]?></td>
		</tr>
		<td> Download Certificate </td>
		<td><a href="./Images/<?php echo $name?><?php echo $college?>.jpeg" style="text-decoration:none" download onclick="doSomething();"><button> Click Here </button></a></td>
		</tr>
<?php
	}
?>
</table>
</div>
<div class="col-lg-6 col-xs-12 col-sm-6">
<img id="cert" src="imagem.php?cert=<?php echo $cno?>&memtype=<?php echo $memtype?>" alt="" d/></div>
</div>
</body>
<!--<script type="text/javascript" src="jquery.min.js"></script>-->
<script type="text/javascript">
function doSomething() {
    $.get("imagem.php");
    return false;
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php $_SESSION["img"]="imagem.php?name=<?php echo $name?>&college=<?php echo $college?>"?>
</html>