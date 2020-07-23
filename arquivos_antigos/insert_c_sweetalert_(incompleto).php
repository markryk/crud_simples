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

	<link rel="stylesheet" href="<?=$project_index;?>views/plugins/sweetalert/sweetalert2.min.css">
	
	<title> CRUD simples </title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-9">
				<div class="jumbotron">
					<h1 class="display-4"> CRUD simples </h1>
					<h2> Inserir no banco </h2>
					<hr class="my-4">
					<form method="POST" action="#">
						<label for="nome">Nome</label><br>
						<input class="form-control" type="text" name="nome" id="nome" required><br><br>
						<label for="cpf">CPF</label><br>
						<input class="form-control" type="text" name="cpf" id="cpf" required><br><br>
						<button class="btn btn-primary btn-lg"> Cadastrar </button>
					</form>
					<br><hr><br>
					<nav>
						<a href="index.php">Voltar para início</a>
					</nav>

					<a href="https://github.com/markryk" class="MarkRyk" target="_blank"> MarkRyk </a>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
	
	<!-- JS p/ Bootstrap (os 3, nessa ordem; esse trecho deve vir antes de quaisquer outros scripts)-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	

	<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
	<script type="text/javascript" src="js/jquery-maskedinput-1.1.4.pack.js"/></script>

	<script type="text/javascript" src="<?=$project_index;?>views/plugins/sweetalert/sweetalert2.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("999.999.999-99");
			//$("#cpf").unmask();
		});
	</script>
</body>
</html>
<?php
	$manager = new Manager();
	$manager->insert_common("table_name_cpf", $_POST, NULL);
	$table_content = $manager->select_common("table_name_cpf", NULL, array("cpf"=>$_POST['cpf']));

						if ($table_content) {
							$table_titles['nome'] = "Nome";
							$table_titles['cpf'] = "CPF";
						}

						#Ações
						$update = true;
						$delete = true;

						# Botões de ações e legendas
						$icon_edit = "fas fa-user-edit";
						$sub_edit = "Editar cliente";
						$icon_del = "fas fa-user-slash";
						$sub_del = "Excluir cliente";

						# Caminhos
						$update_destiny = "?op=update_client";

						# Filtro
						$filter = "id";

						# Incluir a tabela
						include_once $GLOBALS['project_path']."/views/log_clients.html";
						header("location: {$project_index}found.php?success=inserted");
?>