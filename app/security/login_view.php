<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	
	<form action="<?php print(_APP_ROOT);?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
		<legend>Logowanie</legend>
		<fieldset>
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="" />
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="passwd" />
		</fieldset>
		<input type="submit" value="zaloguj" class="pure-button pure-button-primary" />
	</form>
	
<!-- CSS'y 
	<form action="/app/security/login.php" method="post">
		<div class="input-group fluid">
			<label for="id_login">Login</label>
			<input type="text" id="id_login" name="login" placeholder="login" />

			<label for="id_passwd">Password</label>
			<input type="password" id="id_passwd" name="passwd" placeholder="Password" />
			<input type="submit" value="zaloguj" class="tertiary" />
		</div>
	</form>
	-->
</body>

</html>