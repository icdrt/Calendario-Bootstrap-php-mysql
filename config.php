<?php
$servidor='localhost';									    //
$usuario='root';											//
$pass='';											        // Nos conectamos a
$bd='calendario';											// la base de datos
															//
$conexion = new mysqli($servidor, $usuario, $pass, $bd);	//
$conexion->set_charset('utf8'); // Los datos vendran en formato utf-8

if ($conexion->connect_errno) {                                            //
	echo "Error al conectar la base de datos {$conexion->connect_errno}";  // Mostramos algun posble error
}                                                                          //

$base_url="http://localhost/calendario2/"; // Url donde estara el proyecto

?>
