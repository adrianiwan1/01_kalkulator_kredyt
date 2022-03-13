<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator kredytu</title>
</head>

<body>


    <fieldset>
        <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="button small" >Wyloguj</a>
        <form class="pure-form pure-form-stacked" method="POST" action="<?php print(_APP_ROOT); ?>/app/kredyt.php">
            <legend>Kalkulator kredytu</br>Zalogowano jako: <?php echo $_SESSION['role']  ?></legend>
            
            <fieldset>
                
                <label for="id_kwota">Kwota kredytu:</label>
                <input id="id_kwota" type="text" name="kw" />
                <label for="id_lat">Ilosc lat:</label>
                <input id="id_lat" type="text" name="lat" />
                <label for="id_procent">Oprocentowanie:</label>
                <input id="id_procent" type="text" name="procent" />
                <fieldset>
                    <input type="submit" class="tertiary" value="rata" />
        </form>
    </fieldset>

    <?php if (isset($result)) { ?>
        <div style=" padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #308732; width:200px; color:white;">
            <?php echo 'Rata kredytu wynosi: ' . strval($result); ?>
        </div>
    <?php } ?>

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