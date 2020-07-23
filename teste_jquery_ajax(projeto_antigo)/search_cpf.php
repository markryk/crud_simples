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

            $cpof = $_GET['cpf'];
            
            $query = "SELECT nome FROM table_name_cpf WHERE cpf = '$cpof'";

            $statement = $conn->prepare($query);

            if(!$statement) {
                echo "\PDO::errorInfo():\n";
                print_r($dbh->errorInfo());
            }

            $statement->execute();

            if($statement->rowCount()){
                while($result = $statement->fetch(PDO::FETCH_ASSOC)){
                    $output = $result['nome'];
                }
            } else {
                //return false;
                $output = "Cliente não cadastrado";
            }
            echo $output;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }

        $conn = null;
    ?>