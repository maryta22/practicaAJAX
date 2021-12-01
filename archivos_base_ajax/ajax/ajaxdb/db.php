<?php
	//echo $_GET['c'];
	$db = new PDO('sqlite:/clientes.db');
	$sql = 'SELECT * FROM clientes;';

	foreach ($conn-> query($sql) as $row) {
		if($row['nombre'] == $_GET['c']){
			echo $row['nombre'];
			echo ' - ';
			echo $row['direccion'];
			echo ' - ';
			echo $row['telefono'];
			echo ' - ';
			echo $row['codigopostal'];
			echo ' - ';
			echo $row['poblacion'];
			echo ' - ';	
			echo $row['pais'];
			echo ' - ';
		}
	}
	$db = null;
?>