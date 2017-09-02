 <!DOCTYPE html>
  <html>
    <head>
	<?php
	require("connectdb.php");
	?>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <script>
	  function displayvalue(val)
	  {
		xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  document.getElementById("val").innerHTML = this.responseText;
			}
		  };
		  xhttp.open("GET", "filerecieve.php?str="+val.value, true);
		  xhttp.send();
	  }
	  </script>
    </head>

    <body>
        
            <div class="row down">
              <div class="input-field col s10 m6 l4 push-s1 push-m3 push-l4">
              <select onchange="displayvalue(this)">
                <option value="" disabled selected>Choose your option</option>
                <option value="OC">OC</option>
                <option value="DISEC">DISEC</option>
				<option value="UNSC">UNSC</option>
				<option value="UNCSW">UNCSW</option>
				<option value="UN ECOSOC">UN ECOSOC</option>
				<option value="AIPPM">AIPPM</option>
				<option value="IP">IP</option>
              </select>
                <label>Dropdown</label>
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