<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE LIBROS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php
	include('phpController/indexController.php');
	?>

</head>
<body>

	<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CRUD MYSQL SP</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="new.php">Nuevo Libro</a></li>
					<li><a href="sumPrecio.php">Sum Precio</a></li>
					<li><a href="sumPrecioporcentaje.php">Sum Precio + Parametro</a></li>
				</ul>			
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


				<table class="table table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>Titulo</th>
							<th>Autor</th>
							<th>Editorial</th>
							<th>Precio</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php

						while($row = mysqli_fetch_array($result))
						{
							print "<tr>";
							print "<td>" . $row['id'] . "</td>";
							print "<td>" . $row['titulo'] . "</td>";
							print "<td>" . $row['autor'] . "</td>";
							print "<td>" . $row['editorial'] . "</td>";
							print "<td>" . $row['precio'] . "</td>";
							print "<td><a href='edit.php?id=".$row['id']."'>Editar</a></td>";
							print "<td><a href='phpController/delete.php?id=".$row['id']."'>Eliminar</a></td>";
							print "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>