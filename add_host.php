<?php

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    include("header/header.php");
    include("includes/connect.php");
    include("includes/lagertha_functions.php");
} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    header("Location: login.php");
    include("views/not_logged_in.php");
}
?>			


<html>
<body>
<br />
<br />
<br />
<br />


	<!-- Start User Panel -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-desktop" aria-hidden="true"></i> Add New Host</h3>
            </div>
          <div class="panel-body">
			<h4>Please fill out required fields.</h4>

			<form action='create_host.php'>
				<input class='form-control' name='hostname' placeholder='Hostname' type='text' required>
				<br />
				<input class='form-control' name='mac' placeholder='MAC (No Colons eg: 0A1BC34D5F6G)' type='text' required>
				<br />
				<input class='form-control' name='os' placeholder='OS/Distro' type='text' required>
                                <br />
                                <input class='form-control' name='details' placeholder='Details' type='text' required>
                                <br />
      		<button type='submit' class='btn btn-success'>+Add New Host</button>
			</form>			
			
			

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    
  </body>
</html>
