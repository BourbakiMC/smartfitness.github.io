<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$date = $resultData['date'];
$weight = $resultData['weight'];
?>
<html>
<head>	
	<title>Editar Datos</title>
	<link rel="stylesheet" href="mainstyleEdit.css">
</head>

<body>
    <h2>Editar Datos</h2>
    <p>
	    <a style='color:white' href="index.php">Pagina principal</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr> 
				<td>Fecha</td>
				<td><input type="text" name="date" value="<?php echo $date; ?>"></td>
			</tr>
			<tr> 
				<td>Peso</td>
				<td><input type="text" name="weight" value="<?php echo $weight; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
