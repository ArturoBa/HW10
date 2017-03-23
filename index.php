<html>
<head>
	<title>ATOM Electrodomesticos</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
	body{
		background: #FDF3E7;
	}
</style>
</head>
<body class="container">
	<h2>Registra aqu&iacute tu producto</h2>
<!--Lo que debe registrar

	Marca
	Fecha de compra
	Tipo (tv, radio, microhondas)
	Peso
	Color
	Foto
	comentario.
	
-->

	<form method="post" action="" class="row">
		<div class="form-group">	
			<label class="col col-sm-6">Marca: </label>
				<input type="text" name="marca" class="form-control"/>
			<label class="col col-sm-6">Fecha de compra: </label>
				<input type="date" name="fecha" class="form-control"/>
			<label class="col col-sm-6">Tipo de producto: </label>
				<input type="text" name="tipo" class="form-control"/>
			<label class="col col-sm-6">Peso: </label>
				<input type="text" name="peso" class="form-control"/>
			<label class="col col-sm-6">Color: </label>
				<input type="text" name="color" class="form-control"/>
			<label class="col col-sm-6">Foto: </label>
				<input type="file" name="foto" class="form-control"/>
			<label class="col col-sm-6">Comentario: </label>
				<textarea name="comentario" class="form-control" rows="5"></textarea>
				<br/>
			<button type="submit" class="btn btn-primary">Guardar datos</button>
		</div>

	</form>

</body>

</html>