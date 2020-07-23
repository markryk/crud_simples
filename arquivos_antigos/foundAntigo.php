<?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Nome</th><th>CPF</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_jquery_ajax";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $cpof = $_POST['cpf'];
        //echo $_POST['cpf'];
        $query = "SELECT nome FROM table_name_cpf WHERE cpf = $cpof";
        //$query .= $_GET['cpf'];
        //echo $cpof;
        $stmt = $conn->prepare($query);
        $stmt->execute();

        // set the resulting array to associative
        //echo ($sql_client_name) ? $sql_client_name[0]['client_name'] : "Cliente não encontrado (estou no controllers)";
        //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            //$result = $stmt->fetchAll();
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    //echo "</table>";
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