<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="mainstyle.css">
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
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

		// Show link to the previous page
		echo "<br/><a style='color:white' href='javascript:self.history.back();'>Regresar</a>";
	} else { 
		// If all the fields are filled (not empty) 


$sql = "INSERT INTO users (`name`, `date`, `weight`)
VALUES ('$name', '$date', '$weight')";
if ($mysqli->query($sql) === TRUE) {
  echo "Datos añadidos satisfactoriamente!";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}



		
		// Display success message
		echo "<p><font color='green'>Sus datos fueron añadidos!</p>";
		echo "<a style= 'color:white' href='index.php'>Ver</a>";
	}
}
?>
</body>
</html>
