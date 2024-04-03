<html>
<head>
</head>
<body>
<?php
	echo "Nombre: " . $_POST["nombre"];
	echo "</br>";
	echo "Apellidos: " . $_POST["apellidos"];
	echo "</br>";
	$la_fecha = $_POST["fecha"];
	$fecha_convertida = date("d/m/Y", strtotime($la_fecha));
	echo "Fecha: " . $fecha_convertida;
	echo "</br>";
	echo "Sexo: " . $_POST["sexo"];
	echo "</br>";
	echo "Nº de hijos: " . $_POST["num_hijos"];
	echo "</br>";
	echo "Email: " . $_POST["dir_email"];
	echo "</br>";
	echo "Teléfono: " . $_POST["telefono"];
	echo "</br>";
	echo "Dirección: " . $_POST["direccion"];
	echo "</br>";
	echo "Provincia: " . $_POST["provincia"];
	echo "</br>";
	echo "Comentario: " . $_POST["comentario"];
	echo "</br>";
	if (isset($_POST["publicidad"])){
		$publi_convertido = "Sí";
	}else{
		$publi_convertido = "No";
	}
	echo "Publicidad: " . $publi_convertido;
?>
</body>
</html>

