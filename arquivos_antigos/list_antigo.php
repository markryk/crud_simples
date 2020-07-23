<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="views/assets/css/style.css">
</head>
<body>
	<?php
	    $servername = "localhost";
	    $username = "root";
	    $password = "";
	    $dbname = "test_jquery_ajax";

	    try {
	        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
	        // set the PDO error mode to exception
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $stmt = $conn->query("SELECT * FROM table_name_cpf");
	        //if ($res = $stmt) {
	        if ($stmt->fetchColumn() > 0){
	        	//$stmt = $conn->query("SELECT * FROM table_name_cpf");
	        	echo "<table><thead><tr><th>ID</th><th>Nome</th><th>CPF</th><th colspan=2>Ações</th></tr></thead>";
	        	foreach ($stmt as $row) {
	                echo "<tbody><tr><td>".$row['id']."<td>".$row['nome']."</td><td>".$row['cpf']."</td><td><a href='edit.html' class='button'>Editar</a><a href='delete.html' class='button'>Excluir</a></td></tbody>";
	                
	            }
	            echo "</table>";
	        } else {
	            echo "0 results";    
	        }
	        //}
	    }
	    catch(PDOException $e) {
	        echo $sql . "<br>" . $e->getMessage();
	    }

	    $conn = null;
	?>
	<br><hr><br>
	<nav>
		<a href="index.php" role="button">Voltar para início</a>
	</nav>
</body>
</html>