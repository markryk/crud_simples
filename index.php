<!DOCTYPE html>
<html>
<head>
	<!--Css p/ Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="views/assets/css/style.css">
	<title> CRUD simples </title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-9">
				<div class="jumbotron">
					<h1 class="display-4"> CRUD simples </h1>
					<hr class="my-4">
					<!--<p class="lead"> Escolha uma opção </p><br>-->
					<a href="controllers/insert.php" class="btn btn-dark color"> Inserir </a>&nbsp;
					<a href="controllers/list.php" class="btn btn-dark color"> Listar todos </a>&nbsp;
					<a href="controllers/search_jquery.php" class="btn btn-dark color"> Buscar no banco (c/jQuery) </a>&nbsp;
					<a href="controllers/search_javascript.php" class="btn btn-dark color"> Buscar no banco (c/ JavaScript) </a>&nbsp;
					

					<a href="https://github.com/markryk" class="MarkRyk" target="_blank"> MarkRyk </a>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
	
	<!-- JS p/ Bootstrap (os 3, nessa ordem; esse trecho deve vir antes de quaisquer outros scripts)-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>