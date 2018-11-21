<?php 
require('../model/phpConnect.php');
$editorial = $_POST['editorial'];
$db = dbConect();
mysqli_set_charset($db, "utf8");
//Generamos la consulta

if(isset($_POST['editorial'])){
	$db = dbConect();
	mysqli_set_charset($db, "utf8");
	//Generamos la consulta
	if (!$db->query("CALL aumentarPrecio('".$editorial."')")) {
     echo "Falló CALL: (" . $db->errno . ") " . $db->error;
	}
	header('Location: /CRUDSP');
	exit();
}
dbClose($db);
?>