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

				<form action="phpController/aumentaPrecio.php" method="POST" role="form">
					<legend>Aumentar precio a libros de Editorial</legend>

					<div class="form-group">
						<label for="">Editorial</label>
						<input type="text" class="form-control" id="editorial" name="editorial" placeholder="Nuevo">
					</div>				
					<button type="submit" class="btn btn-primary">Aumentar precio</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>