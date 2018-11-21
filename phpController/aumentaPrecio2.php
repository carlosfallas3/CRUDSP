<?php 
require('../model/phpConnect.php');
$editorial = $_POST['editorial'];
$porcentaje = $_POST['porcentaje'];
$db = dbConect();
mysqli_set_charset($db, "utf8");
//Generamos la consulta

if(isset($_POST['editorial'])){
	$db = dbConect();
	mysqli_set_charset($db, "utf8");
	//Generamos la consulta
	if($porcentaje == ""){
		$porcentaje = 0;
	}
	if (!$db->query("CALL porcentajeAumento('".$editorial."',".$porcentaje.")")) {
     echo "Falló CALL: (" . $db->errno . ") " . $db->error;
	}
	header('Location: /CRUDSP');
	exit();
}
dbClose($db);
?>