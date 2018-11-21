<?php
function dbConect(){

	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$db = "dbprocedimiento";
	$conexion = mysqli_connect($servidor, $usuario, $password,$db) 
	or die("La conexion con la base de datos ha fallado!");
	return $conexion;
} 

function dbClose($conexion){

    $close = mysqli_close($conexion) 
        or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

    return $close;
}

?>