 <!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="views/assets/css/style.css">

</head>
<body>
	<?php
	  	//echo "<table style='border: solid 1px black;'>";
	    

	    $servername = "localhost";
	    $username = "root";
	    $password = "";
	    $dbname = "test_jquery_ajax";

	    try {
	        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	        // set the PDO error mode to exception
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        $cpof = $_POST['cpf'];
	        
	        $query = "SELECT * FROM table_name_cpf WHERE cpf = '$cpof'";

	        $statement = $conn->prepare($query);

	        if(!$statement) {
			    echo "\PDO::errorInfo():\n";
			    print_r($dbh->errorInfo());
			}

	        $statement->execute();

	        if($statement->rowCount()){
				echo "<table>";
				echo "<thead><tr><th>Id</th><th>Nome</th><th>CPF</th><th colspan=2>Ações</th></tr></thead>";
				echo "<tbody>";
				while($result = $statement->fetch(PDO::FETCH_ASSOC)){
					echo "<tr>";
					echo '<td>'.$result['id'].'</td>'.'<td>'.$result['nome'].'</td>'.'<td>'.$result['cpf'].'</td>';
					echo '<td><a href="edit.html" class="button">Editar</a></td>&nbsp;<td><a href="delete.html" class="button">Excluir</a></td>';
					echo "</tr>";
				}
				echo "<tbody></table>";
			} else {
				//return false;
				echo "0 results";
			}	        
	    }
	    catch(PDOException $e) {
	        echo $e->getMessage();
	    }

	    $conn = null;
	?>

    <br><hr><br>
    <nav>
        <a href="index.php" role="button">Voltar para início</a>
    </nav>
</body>
</html>