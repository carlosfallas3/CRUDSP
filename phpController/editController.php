<?php 
require('model/phpConnect.php');

$db = dbConect();
mysqli_set_charset($db, "utf8");
//Generamos la consulta

$sql = "SELECT * from libro where id=".$_GET["id"];
$result = mysqli_query($db, $sql);
$json = json_encode(mysqli_fetch_assoc($result));
$json = json_decode($json);	
dbClose($db);

?>