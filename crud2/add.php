<html>
<head>
	<title>Añadir Datos</title>
	<link rel="stylesheet" href="mainstyleAdd.css">
</head>

<body>
	<h2>Ingrese sus datos</h2>
	<p>
		<a style='color:white' href="index.php">Pagina principal</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Fecha</td>
				<td><input type="text" name="date"></td>
			</tr>
			<tr> 
				<td>Peso</td>
				<td><input type="text" name="weight"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Añadir"></td>
			</tr>
		</table>
	</form>
</body>
</html>

