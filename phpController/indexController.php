<?php 
require('model/phpConnect.php');

$db = dbConect();
mysqli_set_charset($db, "utf8");
//Generamos la consulta

$sql = "SELECT * from libro";
if(!$result = mysqli_query($db, $sql)) die();

dbClose($db);

?>