 <!DOCTYPE html>
  <html>
    <head>
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
                <form action="details.php" method="POST">
					<div class="row">
						  <div class="input-field col s12 m8 l4">
						  <select name="memtype" id="memtype">
							<option value="" disabled selected>Choose your Member</option>
							<option value="Delegate">Delegate</option>
							<option value="EB">EB</option>
							<option value="OC">OC</option>
						  </select>
						  </div>
					</div>
					<div class="row">
					  <div class="input-field col s12 m8 l4">
						<input name="certno" id="certno" placeholder="Enter Certificate Number" type="text" class="validate">
					  </div>
					</div>
					<div class="row">
						  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						  </button>
					</div>
				</form>
            </div>
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