<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytu</title>
</head>
<body>
<h3>Kalkulator kredtu</h3>
<form action="<?php print(_APP_URL);?>/app/kredyt.php" method="post">
<label for="id_kwota">Kwota kredytu:</label>
<input id="id_kwota" type="text" name="kw"/></br>
<label for="id_lat">Ilosc lat:</label>
<input id="id_lat" type="text" name="lat"/></br>
<label for="id_procent">Oprocentowanie:</label>
<input id="id_procent" type="text" name="procent"/></br>
<input type="submit" value="rata"/>
</form>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Rata kredytu wynosi: '.$result; ?>
</div>
<?php } ?>

</body>
</html>