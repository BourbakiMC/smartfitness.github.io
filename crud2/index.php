

<style>
a:link {
    color: white; /* Unvisited link */
}
a:visited {
    color: white; /* Visited link */
}
a:hover {
    color: white; /* Mouse over link */
}
a:active {
    color: white; /* Selected link */
}
</style>

</html>


<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Datos personales</title>
	<link rel="stylesheet" href="mainstyle.css">
</head>

<body>
	<h2>Datos personales</h2>
	<p style= "color:white;">
		<a href="add.php">Añadir Datos</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nombre</strong></td>
			<td><strong>Fecha</strong></td>
			<td><strong>Peso</strong></td>
			<td><strong>id</strong></td>
			<td><strong>Acciones</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['date']."</td>";
			echo "<td>".$res['weight']."</td>";
			echo "<td>".$res['id']."</td>";		
			echo "<td><a style= 'color:white' href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>
