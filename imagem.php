<?php
$cno = $_GET["cno"];
$memtype = $_GET["memtype"];
require("connectdb.php");
	if($memtype=="Delegate")
	{
			$sql="Select * from delegate where certificate='$cert'";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc())
			{
					$name=$row["name"];
					$mobile=$row["mobile"];
					$college=$row["college"];
					$email=$row["email"];
					$council=$row["council"];
					$country=$row["country"];
					$merits=$row["merits"];
			}
	}
 	if($memtype=="EB")
	{
			$sql="Select * from eb where certificate='$cert'";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc())
			{
					$name=$row["name"];
					$mobile=$row["mobile"];
					$college=$row["college"];
					$email=$row["email"];
					$council=$row["council"];
					$designation=$row["designation"];
			}
	}
	else if($memtype=="OC")
	{
			$sql="Select * from oc where certificate='$cert'";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc())
			{
					$name=$row["name"];
					$mobile=$row["mobile"];
					$email=$row["email"];
					$team=$row["team"];
					$designation=$row["designation"];
			}
	}
//Carregar imagem
$rImg = ImageCreateFromJPEG("mun.jpeg");
 
//Definir cor
$cor = imagecolorallocate($rImg, 132, 112, 255);
//Escrever nome
//imagestring($rImg,5,226,354,urldecode($_GET['nome']),$cor);
imagettftext ( $rImg, 12, 0, 226, 367, $cor, 'Lucida Handwriting.ttf' , urlencode($name));
//imagettftext ( $rImg, 12, 0, 226, 427, $cor, 'Lucida Handwriting.ttf' , $college);
//Header e output
	 imagejpeg($rImg,"./Images/".$name.".jpeg");
imagejpeg($rImg);
 
?>;