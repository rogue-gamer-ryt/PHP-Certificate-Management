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
    
        <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
	
        body{
            overflow-x:hidden;}
	</style>
	<script>
	function memberdet(val)
	{
		var x=val.value;
		document.getElementById("details").style.display="block";
		if(x=="DEL")
		{
			document.getElementById("DEL").style.display="block";
			document.getElementById("EB").style.display="none";
			document.getElementById("OC").style.display="none";
		}
		else if(x=="OC")
		{
			document.getElementById("DEL").style.display="none";
			document.getElementById("EB").style.display="none";
			document.getElementById("OC").style.display="block";		
		}
		else if(x=="EB")
		{
			document.getElementById("DEL").style.display="none";
			document.getElementById("EB").style.display="block";
			document.getElementById("OC").style.display="none";
		}
	}
	function chkNum(val)
	{
		var x=val.length;
		if(x>10 || x<10)
		{
			alert("Phone Number should be of 10 digits");
			val.value="";
			val.focus();
		}
	}
	</script>
	</head>
    <body>
	<h3 class="heading" style="text-align:center"> Enter the details below </h3>
		<div class="container mid">
			<div class="row">
			  <form class="col s12 m8 l8 push-s3 push-m5 push-l4" action="insert_details_back.php" method="POST">
				<div class="row">
				  <div class="input-field col s6">
				  <select id="member" name="member" onchange="memberdet(this)">
					<option value="" disabled selected>Choose your Member</option>
					<option value="DEL">Delegate</option>
					<option value="EB">EB</option>
					<option value="OC">OC</option>					
				  </select>
				  </div>
				</div>	
                </form>
				<span id="details" style="display:none">
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="cno" name="cno" placeholder="Certificate Number" type="text" class="validate" required>
						<label for="cno"></label>
					  </div>
					</div>				
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="fullname" name="fullname" placeholder="Full Name" type="text" class="validate" required>
						<label for="fullname"></label>
					  </div>
					</div>
					<span id="DEL" style="display:none">
						<div class="row">
						  <div class="input-field col s12 m8 l10">
							<input name="dcollege" placeholder="College" type="text" class="validate">
							<label for="college"></label>
						  </div>
						</div>
						<div class="row">
						  <div class="input-field col s12 m8 l10">
						  <select name="dcouncil">
							<option value="" disabled selected>Choose your Council</option>
							<option value="DISEC">DISEC</option>
							<option value="UNSC">UNSC</option>
							<option value="UNCSW">UNCSW</option>
							<option value="UN ECOSOC">UN ECOSOC</option>
							<option value="AIPPM">AIPPM</option>
							<option value="IP">IP</option>
						  </select>
						  </div>
						</div>	
						<div class="row">
						  <div class="input-field col s12 m8 l10">
							<input name="country" placeholder="Country" type="text" class="validate">
							<label for="country"></label>
						  </div>
						</div>						
						<div class="row">
						  <div class="input-field col s12 m8 l10">
							<textarea name="merits" id="merits" class="materialize-textarea" data-length="120"></textarea>
							<label for="merits">Merits</label>
						  </div>
						</div>					
					</span>
					<span id="EB" style="display:none">
						<div class="row">
						  <div class="input-field col s12 m8 l10">
							<input id="ecollege" name="ecollege" placeholder="College" type="text" class="validate">
							<label for="college"></label>
						  </div>
						</div>
						<div class="row">
						  <div class="input-field col s12 m8 l10">
						  <select name="ecouncil">
							<option value="" disabled selected>Choose your Council</option>
							<option value="DISEC">DISEC</option>
							<option value="UNSC">UNSC</option>
							<option value="UNCSW">UNCSW</option>
							<option value="UN ECOSOC">UN ECOSOC</option>
							<option value="AIPPM">AIPPM</option>
							<option value="IP">IP</option>
						  </select>
						  </div>
						</div>	
						<div class="row">
						  <div class="input-field col s12 m8 l10">
							<input name="edesignation" placeholder="Designation" type="text" class="validate">
						  </div>
						</div>				
					</span>				
					<span id="OC" style="display:none">
						<div class="row">
						  <div class="input-field col s12 m8 l10">
							<input name="team" placeholder="TEAM" type="text" class="validate">
						  </div>
						</div>		
						<div class="row">
						  <div class="input-field col s12 m8 l10">
							<input name="odesignation" placeholder="Designation" type="text" class="validate">
						  </div>
						</div>						
					</span>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="phone" name="phone" onchange="chkNum(this)" placeholder="Mobile Number" type="number" class="validate" required>
						<label for="phone"></label>
					  </div>
					</div>
					<div class="row">
					  <div class="input-field col s12 m8 l10">
						<input id="email" name="email"  placeholder="Email Address" type="text" class="validate" required>
						<label for="email"></label>
					  </div>
					</div>				
					<div class="row">
						  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						  </button>
					</div>
				</span>
			
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