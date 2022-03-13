<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	
	<form action="<?php print(_APP_ROOT);?>/app/security/login.php" class="pure-form pure-form-stacked">
		<legend>Logowanie</legend>
		<fieldset>
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="" />
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="passwd" />
		</fieldset>
		<input type="submit" value="zaloguj" class="pure-button pure-button-primary tertiary" />
	</form>
	
	<?php

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
</body>

</html>