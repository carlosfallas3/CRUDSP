<?php 

require('model/phpConnect.php');

$db = dbConect();
mysqli_set_charset($db, "utf8");
//Generamos la consulta

if(isset($_GET['id'])){
	$db = dbConect();
	mysqli_set_charset($db, "utf8");
	//Generamos la consulta
	$sql = "DELETE FROM libro WHERE id=".$_GET['id'];
	$result = mysqli_query($db, $sql);
}
dbClose($db);
?>