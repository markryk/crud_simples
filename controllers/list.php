<?php
	include_once dirname(__DIR__) ."/models/config.php";
	include_once $GLOBALS['project_path']."/models/class/Connect.class.php";
	include_once $GLOBALS['project_path']."/models/class/Manager.class.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<!--CSS p/ Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- CSS p/ DataTables -->
	<link rel="stylesheet" href="<?=$project_index;?>views/plugins/datatables/1.10.20/css/jquery.dataTables.min.css">
	<!-- CSS da página -->
	<link rel="stylesheet" type="text/css" href="<?=$project_index?>views/assets/css/style.css">
	
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
					<h2> Lista de clientes </h2>
					<hr class="my-4">
					<?php
						$manager = new Manager();
						$table_content = $manager->select_common("table_name_cpf", NULL, NULL);

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
						$update_destiny = "update.php";
						$delete_destiny = "controllers/found.php";

						# Filtro
						$filter = "id";

						# Incluir a tabela
						include_once $GLOBALS['project_path']."/views/list_common.html";
					?>
					<br><hr><br>
					<nav>
						<a href="../index.php">Voltar para início</a>
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

	<!-- Scripts p/ fazer funcionar o DataTable (os 2)-->
	<script src="<?=$project_index;?>views/assets/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?=$project_index;?>views/plugins/datatables/1.10.20/js/jquery.dataTables.ptBR.min.js"></script>

	<!-- Script Font Awesome -->
	<script type="text/javascript" src="<?=$project_index;?>views/assets/font-awesome-5.12.0/js/all.js"></script>

	<script type="text/javascript">
      /* DataTables*/
      $(document).ready(function(){
        $("#data_table").DataTable();
      });
    </script>
</body>
</html>