<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Libro</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

				<form action="phpController/new.php" method="POST" role="form">
					<legend>Nuevo Libro</legend>

					<div class="form-group">
						<label for="">Titulo</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">

					</div>
					<div class="form-group">
						<label for="">Autor</label>
						<input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
					</div>
					<div class="form-group">
						<label for="">Editorial</label>
						<input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial">
					</div>
					<div class="form-group">
						<label for="">Precio</label>
						<input type="text" class="form-control" id="precio" name="precio" placeholder="000.00">
					</div>

					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>