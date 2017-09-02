<?php
require("connectdb.php");
$str=$_GET["str"];
if($str=="OC")
{
	echo '<div class="container">';
				$sql="Select DISTINCT team from oc";
				$result=$conn->query($sql);
				while($row=$result->fetch_assoc())
				{
					$team=$row["team"];
				echo '<h4 style="text-align:center">'.$team.'</h4>
				<table class="highlight striped">
					<thead>
					  <tr>
						  <th>Sl.no</th>
						  <th>Name</th>
						  <th>Designation</th>
						  <th>Mobile</th>
						  <th>Email</th>
					  </tr>
					</thead>
					<tbody>';
							$count=0;
							$sql2="Select * from oc where team='$team'";
							$result2=$conn->query($sql2);
							while($row2=$result2->fetch_assoc())
							{				
							$count++;
						  echo '<tr>
							<td>'.$count .'</td>
							<td>'.$row2["name"].'</td>
							<td>' .$row2["designation"].'</td>
							<td>' .$row2["mobile"].'</td>
							<td>' .$row2["email"].'</td>
						  </tr>';
							}
					echo '</tbody>
				</table>
				<br><br>';		  
				 }
	echo '</div>';
}
else
{
	echo'<h4 style="text-align:center">'.$str.' Member Details</h4>
    <div class="container">
		<h4 style="text-align:center">EB</h4>
		<table class="highlight striped">';
				$sql="Select * from eb where council='$str'";
				$result=$conn->query($sql);
				$numrow=$result->num_rows;
				if($numrow==0)
				{
					echo'<h6 style="text-align:center;font-weight:bold"> No, EB details present </h6>';
				}
				else
				{
			echo'<thead>
			  <tr>
				  <th>Sl.no</th>
				  <th>Name</th>
				  <th>College</th>
				  <th>Designation</th>
				  <th>Mobile</th>
				  <th>Email</th>
			  </tr>
			</thead>
			<tbody>';
				$count=0;
				while($row=$result->fetch_assoc())
				{
					$count++;
				
			echo' <tr>
				<td>'.$count.' </td>
				<td>'.$row["name"].'</td>
				<td>'.$row["college"].'</td>
				<td>'.$row["designation"].'</td>
				<td>'.$row["mobile"].'</td>
				<td>'.$row["email"].'</td>
			  </tr>';
					}
				}
			echo '</tbody>
		  </table>
		  <br><br>	
		<h4 style="text-align:center">DELEGATE</h4>
		<table class="highlight striped">';
				$sql="Select * from delegate where council='str'";
				$result=$conn->query($sql);
				$numrow=$result->num_rows;
				if($numrow==0)
				{ 
					echo '<h6 style="text-align:center;font-weight:bold"> No, Delegate details present </h6>';
				}
				else
				{
			echo '<thead>
			  <tr>
				  <th>Sl.no</th>
				  <th>Name</th>
				  <th>College</th>
				  <th>Country</th>
				  <th>Mobile</th>
				  <th>Email</th>
			  </tr>
			</thead>
			<tbody>';	
				$count=0;
				while($row=$result->fetch_assoc())
				{
					$count++;
			  echo '<tr>
				<td>'.$count.'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["college"].'</td>
				<td>'.$row["country"].'</td>
				<td>'.$row["mobile"].'</td>
				<td>'.$row["email"].'</td>
			  </tr>';
					}
				}
			echo '</tbody>
		  </table>		  
	</div>';
}
?>