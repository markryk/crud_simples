 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud1";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to create table
        $sql = "CREATE TABLE users (
        id INT(3) UNSIGNED ZEROFILL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(20) NOT NULL, 
        pwd VARCHAR(20) NOT NULL,
        cellphone VARCHAR(20) NOT NULL
        )";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table users created successfully";
        }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?> 