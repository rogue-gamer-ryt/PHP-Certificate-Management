 <!DOCTYPE html>
  <html>
  <?php
  session_start();
  ?>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <style>
          .mid{
              margin-top: 120px;
          }
	  </style>
    </head>
    <body>
	<h2 style="text-align:center"> SRMRMUN-17 Applications </h2>	
	<?php if(isset($_SESSION["msg"]))
	{
	?>
	<h4 style="text-align:center"><?php echo $_SESSION["msg"]?></h4>
	<?php
	}
	?>
	<div class="container mid">
		<div class="row ">
            <div class="col s10 m10 l8 push-s2 push-m2 push-l3">
            <a class="waves-effect waves-light btn-large" href="insert_details.php"><i class="material-icons left">import_export</i>Insert Details</a>
		  <!--<div id="box" class="col l4"><a href="insert_details.php"><h4>Insert Details</h4></a></div>-->
            <a class="waves-effect waves-light btn-large" href="select_details.php"><i class="material-icons left">perm_identity</i>View Information</a>
		  <!--<div id="box" class="col l4"><a href="select_details.php"><h4>View Information</h4></a></div>-->
        </div>
		</div>
		<div class="row ">
            <div class="col s10 m10 l8 push-s2 push-m2 push-l3">
            <a class="waves-effect waves-light btn-large" href="delete_details.php"><i class="material-icons left">import_export</i>Delete Details</a>
		  <!--<div id="box" class="col l4"><a href="insert_details.php"><h4>Insert Details</h4></a></div>-->
            <a class="waves-effect waves-light btn-large" href="edit_details.php"><i class="material-icons left">perm_identity</i>Edit Information</a>
		  <!--<div id="box" class="col l4"><a href="select_details.php"><h4>View Information</h4></a></div>-->
        </div>
     </div>	


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
	<?php
	unset($_SESSION["msg"]);
	?>
  </html>