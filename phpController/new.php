<?php 
require('../model/phpConnect.php');
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$precio = $_POST['precio'];


$db = dbConect();
mysqli_set_charset($db, "utf8");
//Generamos la consulta

if(isset($_POST['titulo'])){
	$db = dbConect();
	mysqli_set_charset($db, "utf8");
	//Generamos la consulta
	if (!$db->query("CALL crearlibro('".$titulo."','".$autor."','".$editorial."',".$precio.")")) {
     echo "Falló CALL: (" . $db->errno . ") " . $db->error;
	}
	header('Location: /CRUDSP');
	exit();
}
dbClose($db);
?>