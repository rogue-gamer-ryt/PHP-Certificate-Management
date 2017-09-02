 <!DOCTYPE html>
  <html>
    <head>
	<?php
	require("connectdb.php");
	$cert="";
	if(isset($_GET["certno"]) && $_GET["certno"]!="")
	{
		$cert=$_GET["certno"];
	}
	if(isset($_GET["memtype"]) && $_GET["memtype"]!="")
	{
		$memtype=$_GET["memtype"];
	}
	?>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <div class="container">
            <div class="row down">
                <form id="">
					<div class="row">
						  <div class="input-field col s12 m8 l4">
						  <select name="memtype">
							<option value="" disabled selected>Choose your Member</option>
							<option value="Delegate" <?php if(isset($memtype) && $memtype=="Delegate"){?> selected <?php } ?>>Delegate</option>
							<option value="EB" <?php if(isset($memtype) && $memtype=="EB"){?> selected <?php } ?>>EB</option>
							<option value="OC"  <?php if(isset($memtype) && $memtype=="OC"){?> selected <?php } ?>>OC</option>
						  </select>
						  </div>
					</div>
					<div class="row">
					  <div class="input-field col s12 m8 l4">
						<input name="certno" value="<?php echo $cert?>" placeholder="Enter Certificate Number" type="text" class="validate">
					  </div>
					</div>
					<div class="row">
						  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						  </button>
					</div>
				</form>
            </div>
			<?php 
			if(isset($cert)&&($cert!=""))
			{ 
			if($memtype=="EB")
			{
			?>
			<div class="row down">
			<table class="highlighted striped">
			<thead>
				<th> Name </th>
				<th> Council </th>
				<th> Designation </th>
				<th> College </th>
				<th> Mobile </th>
				<th> Email </th>
				<th> Delete </th>
			</thead>
			<tbody>
				<?php
					$sql="Select * from eb where certificate='$cert'";
					$result=$conn->query($sql);
					while($row=$result->fetch_assoc())
					{
				?>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["council"]?></td>
				<td><?php echo $row["designation"]?></td>
				<td><?php echo $row["college"]?></td>
				<td><?php echo $row["mobile"]?></td>
				<td><?php echo $row["email"]?></td>
				<td><a class="waves-effect waves-light btn red"  href="eb_delete.php?cert=<?php echo $cert?>">Delete</a></td>
				<?php
					}
				?>
			</tbody>
			</table>
			</div>
			<?php
			}
			else if($memtype=="Delegate")
			{
			?>
			<div class="row down">
			<table class="highlighted striped">
			<thead>
				<th> Name </th>
				<th> Council </th>
				<th> Country </th>
				<th> College </th>
				<th> Mobile </th>
				<th> Email </th>
				<th> Delete </th>
			</thead>
			<tbody>
				<?php
					$sql="Select * from delegate where certificate='$cert'";
					$result=$conn->query($sql);
					while($row=$result->fetch_assoc())
					{
				?>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["council"]?></td>
				<td><?php echo $row["country"]?></td>
				<td><?php echo $row["college"]?></td>
				<td><?php echo $row["mobile"]?></td>
				<td><?php echo $row["email"]?></td>
				<td><a class="waves-effect waves-light btn red"  href="delegate_delete.php?cert=<?php echo $cert?>">Delete</a></td>
				<?php
					}
				?>
			</tbody>
			</table>
			</div>
			<?php
			}
			else if($memtype=="OC")
			{
			?>
			<div class="row down">
			<table class="highlighted striped">
			<thead>
				<th> Name </th>
				<th> Team </th>
				<th> Designation </th>
				<th> Mobile </th>
				<th> Email </th>
				<th> Delete </th>
			</thead>
			<tbody>
				<?php
					$sql="Select * from oc where certificate='$cert'";
					$result=$conn->query($sql);
					while($row=$result->fetch_assoc())
					{
				?>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["team"]?></td>
				<td><?php echo $row["designation"]?></td>
				<td><?php echo $row["mobile"]?></td>
				<td><?php echo $row["email"]?></td>
				<td><a class="waves-effect waves-light btn red"  href="delegate_delete.php?cert=<?php echo $cert?>">Delete</a></td>
				<?php
					}
				?>
			</tbody>
			</table>
			</div>
			<?php
			}
			}
			?>
		</div>
			<div class="val" id="val"></div>
      <!--Import jQuery before materialize.js-->
	        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
    $('select').material_select();
});
      </script>
    </body>
  </html>