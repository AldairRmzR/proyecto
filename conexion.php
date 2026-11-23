<?php
$user = "postgres";
$password = "LUAH2019";
$dbname = "postgres";
$port = "5432";
$host = "localhost";
$cadenaconexion = "host=$host port=$port dbname=$dbname user=$user password=$password";
$conexion = pg_connect($cadenaconexion) or die("Error en la Conexión: ".pg_last_error());
?>
