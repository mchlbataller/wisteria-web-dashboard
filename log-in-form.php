<?php
    require_once "login.php";
?>
<html>
    <head>
        <title> Log In WWD! </title>
        <link href="log-in-CSS.css" rel="stylesheet" type="text/css" href="assets/indexCSS.css">
    </head>

    <body>
		<div id="logo" style="text-align: center">
		<img src="assets/ICON ONLI.png" alt="">
		<h1>WiSTERIA Web<br>Development Inc.</h1>
		</div>
		<div id="form_1">
			<form method="POST" action="log-in-form.php">
				<fieldset>
					<legend>Log In</legend>
					<label> Username:</label>
					<input type="text" name="username" placeholder="Enter username.">
					<hr>
					<label> Password:</label>
					<input type="password" name="pw" placeholder="Enter password.">
					<br>
					<hr>
					<button class="button" name="submit" type="submit">Submit</button>
				</fieldset>
			</form>
		</div>
    </body>
</html>
