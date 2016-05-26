<?php

$tipo = $_GET['tipo'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Junior Robo Inteligente</title>
</head>
<body>
	<form action="comand/robo_execute.php" method="post">
	 <select name="tip">
	 	<option value="abrir">abrir</option>
	 	<option value="achar">achar</option>
	 	<option value="upar">upar</option>
	 </select>
	 <input type="text" name="pe" placeholder="digite o comando">
	 <?php if($tipo == "procurar"){

	 	echo "<select name='pro'>
	 	<option value='facebook'>Facebook</option>
	 	<option value='youtube'>Youtube</option>
	 	<option value='google'>Google</option>
	 </select>
	     ";}

	 ?>
	 <input type="submit" value="Enviar">
	</form>
	<a href="?tipo=procurar">Pocurar</a>
</body>
</html>