<?php
	include_once "models/config.php";
	include 'controllers/sweet_alert.php';
	include_once $GLOBALS['project_path']."/models/class/Connect.class.php";
	include_once $GLOBALS['project_path']."/models/class/Manager.class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<!--Css p/ Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title> CRUD simples </title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-9">
				<div class="jumbotron" style="background-color: ;">
					<h1 class="display-4"> CRUD simples </h1>
					<hr class="my-4">
					<?php
						$manager = new Manager();
						$manager->insert_common("table_name_cpf", $_POST, NULL);
						echo "<h2> Cadastro salvo no banco </h2><br>";
					?>
					<nav>
						<a href="index.php">Voltar para início</a>
					</nav>
					<a href="https://github.com/markryk" class="MarkRyk" target="_blank"> MarkRyk </a>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>

	<!-- JS p/ Bootstrap (os 3, nessa ordem; esse trecho deve vir antes de quaisquer scripts)-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>