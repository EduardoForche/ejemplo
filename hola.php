<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Metodo POST</title>
	<link rel="stylesheet" type="text/css" href="presenta.css">

</head>
<body>
	<form name="Formulario" method="POST" action="dato.php" target="_blank">
	<fieldset><legend>DATOS</legend>
	Nombre:<input type="text" name="nombre">
	Email:<input type="text" name="email"><br>
	Color:<input type="color" name="color"><br>
	Fecha de nacimiento:<input type="date" name="date"><br>
	<input type="radio" name="sexo" value="Mujer">Mujer<br>
	<input type="radio" name="sexo" value="Hombre">Hombre<br>
	Saludo<input type="hidden" name="saludo">
	<input type="textarea" name="textarea">
	Contraseña<input type="password" name="contraseña" value="password"><br>
	<input type="submit" name="Enviar">
	<input type="reset" name="Limpiar">
	</fieldset>
 	</form>




</body>
</html>
