<?php
	
	//echo (isset($_POST['nome'])) ? "Dados enviados <br> Nome: $nome, CPF: $cpf" : "Dados não enviados";

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test_jquery_ajax";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    // prepare sql and bind parameters
	    $stmt = $conn->prepare("INSERT INTO table_name_cpf (nome, cpf) VALUES (:nome, :cpf)");
	    $stmt->bindParam(':nome', $nome);
	    $stmt->bindParam(':cpf', $cpf);

	    // insert a row
	    $nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
	    $stmt->execute();

	    echo (isset($_POST['nome'])) ? "Cadastro salvo no banco <br><br> <strong>Nome:</strong> $nome <br> <strong>CPF</strong>: $cpf" : "Dados não enviados";
	    }
	catch(PDOException $e)
	    {
	    echo "Error: " . $e->getMessage();
	    }
	$conn = null;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br><hr><br>
	<nav>
		<a href="index.php" role="button">Voltar para início</a>
	</nav>
</body>
</html>