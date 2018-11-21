<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Libro</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php
	include('phpController/editController.php');
	?>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

				<form action="phpController/edit.php" method="POST" role="form">
					<legend>Nuevo Libro</legend>

					<div class="form-group">
						<label for="">Titulo</label>
						<input type="text" class="form-control" id="titulo" name="titulo" value="<?php print $json->titulo; ?>" placeholder="Titulo">

					</div>
					<div class="form-group">
						<label for="">Autor</label>
						<input type="text" class="form-control" id="autor" name="autor" value="<?php print $json->autor; ?>" placeholder="Autor">
					</div>
					<div class="form-group">
						<label for="">Editorial</label>
						<input type="text" class="form-control" id="editorial" name="editorial" value="<?php print $json->editorial; ?>" placeholder="Editorial">
					</div>
					<div class="form-group">
						<label for="">Precio</label>
						<input type="text" class="form-control" id="precio" name="precio" value="<?php print $json->precio; ?>" placeholder="000.00">
					</div>

					<div class="form-group" style="display: none">
						<label for="">id</label>
						<input type="text" class="form-control" id="id" name="id" value="<?php print $json->id; ?>">
					</div>

					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>