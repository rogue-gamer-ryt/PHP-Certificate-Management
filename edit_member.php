<html>
<?php
	session_start();
	require("connectdb.php");
	if(isset($_POST["certno"]) && isset($_POST["memtype"]))
	{
		$cert=$_POST["certno"];
		$memtype=$_POST["memtype"];
		$_SESSION["cert"]=$cert;
		$_SESSION["memtype"]=$memtype;
	}
	else
	{
		header("Location:dashboard.php");
		exit();
	}
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
?>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
    
        <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
	
        body{
            overflow-x:hidden;}
	</style>
	</head>
    <body>
	<h3 class="heading" style="text-align:center"> Enter the details below </h3>
		<div class="container mid">
			<div class="row">
			  <form class="col s12 m8 l8 push-s3 push-m5 push-l4" action="edit_member_back.php" method="POST">
				<?php 
				if($memtype=="Delegate")
				{
				?>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="cno" name="cno" value="<?php echo $cert?>" type="text" class="validate" required>
						<label for="cno"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="name" name="name" value="<?php echo $name?>" type="text" class="validate" required>
						<label for="name"></label>
					  </div>
					</div>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="council" name="council"  value="<?php echo $council?>" type="text" class="validate" required>
						<label for="council"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="country" name="country" type="text"  value="<?php echo $country?>" class="validate" required>
						<label for="country"></label>
					  </div>
					</div>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="college" name="college"  value="<?php echo $college?>" type="text" class="validate" required>
						<label for="college"></label>
					  </div>
					</div>						
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="mobile" name="mobile" " type="text"  value="<?php echo $mobile?>" class="validate" required>
						<label for="mobile"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="email" name="email" type="text" value="<?php echo $email?>" class="validate" required>
						<label for="email"></label>
					  </div>
					</div>
					<div class="row">
						  <div class="input-field col s12 m8 l10">
							<textarea name="merits" id="merits" class="materialize-textarea" data-length="120"><?php echo $merits?></textarea>
							<label for="merits">Merits</label>
						  </div>
					</div>					
				<?php
				}
				else if($memtype=="EB")
				{
				?>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="cno" name="cno" value="<?php echo $cert?>" type="text" class="validate" required>
						<label for="cno"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="name" name="name" value="<?php echo $name?>" type="text" class="validate" required>
						<label for="name"></label>
					  </div>
					</div>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="council" name="council"  value="<?php echo $council?>" type="text" class="validate" required>
						<label for="council"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="designation" name="designation" type="text"  value="<?php echo $designation?>" class="validate" required>
						<label for="designation"></label>
					  </div>
					</div>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="college" name="college"  value="<?php echo $college?>" type="text" class="validate" required>
						<label for="college"></label>
					  </div>
					</div>						
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="mobile" name="mobile" " type="text"  value="<?php echo $mobile?>" class="validate" required>
						<label for="mobile"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="email" name="email" type="text" value="<?php echo $email?>" class="validate" required>
						<label for="email"></label>
					  </div>
					</div>				
				<?php
				}
				else if($memtype=="OC")
				{
				?>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="cno" name="cno" value="<?php echo $cert?>" type="text" class="validate" required>
						<label for="cno"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="name" name="name" value="<?php echo $name?>" type="text" class="validate" required>
						<label for="name"></label>
					  </div>
					</div>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="team" name="team"  value="<?php echo $team?>" type="text" class="validate" required>
						<label for="team"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="designation" name="designation" type="text"  value="<?php echo $designation?>" class="validate" required>
						<label for="designation"></label>
					  </div>
					</div>					
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="mobile" name="mobile" " type="text"  value="<?php echo $mobile?>" class="validate" required>
						<label for="mobile"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="email" name="email" type="text" value="<?php echo $email?>" class="validate" required>
						<label for="email"></label>
					  </div>
					</div>				
				<?php
				}
				?>
					<div class="row">
						  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						  </button>
					</div>				
              </form>
			</div>
		</div>

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