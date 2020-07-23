<?php
	$connect = mysqli_connect("localhost", "root", "", "test_jquery_ajax");

	if (isset($_GET["cpf"])) {
		$query = "SELECT nome FROM table_name_cpf WHERE cpf = '$_GET["cpf"]'";
		$result = mysqli_query($connect, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)){
				$output = $row["nome"];
			}
		}
	} else {
		$output = "Cliente não cadastrado";
	}
	echo $output;
?>