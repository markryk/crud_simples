<?php 
	include_once dirname(__DIR__) ."/models/config.php";
	include_once $GLOBALS['project_path']."/models/class/Connect.class.php";
	include_once $GLOBALS['project_path']."/models/class/Manager.class.php";

	$manager = new Manager();
	$user_cpf = $_GET['usercpf'];

	$query = $manager->select_common("table_name_cpf", array("nome"), array("cpf"=>$user_cpf));
	echo ($query) ? $query[0]['nome'] : "Cliente não cadastrado";
?>