<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="mainstyle.css">
</head>
</html>


<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$date = mysqli_real_escape_string($mysqli, $_POST['date']);
	$weight = mysqli_real_escape_string($mysqli, $_POST['weight']);	
	
	// Check for empty fields
	if (empty($name) || empty($date) || empty($weight)) {
		if (empty($name)) {
			echo "<font color='red'>Debe ingresar nombre.</font><br/>";
		}
		
		if (empty($date)) {
			echo "<font color='red'>Debe ingresar edad.</font><br/>";
		}
		
		if (empty($weight)) {
			echo "<font color='red'>Debe ingresar correo.</font><br/>";
		}

		echo "<br/><a style='color:white' href='javascript:self.history.back();'>Regresar</a>";
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE users SET `name` = '$name', `date` = '$date', `weight` = '$weight' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Datos actualizados correctamente!</p>";
		echo "<a style='color:white' href='index.php'>Ver</a>";
	}
}
