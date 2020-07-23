<?php
	include_once dirname(__DIR__) ."/models/config.php";
	include_once $GLOBALS['project_path']."/models/class/Connect.class.php";
	include_once $GLOBALS['project_path']."/models/class/Manager.class.php";

	$manager = new Manager();
	$client = $manager->select_common("table_name_cpf", NULL, array("id"=>$_GET['filter']));

	include_once $GLOBALS['project_path']."views/forms/update.html";
?>