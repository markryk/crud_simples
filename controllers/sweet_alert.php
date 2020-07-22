<?php
	function validate_success() {
		if (!isset($_GET['success'])) return false;
		switch ($_GET['success']) {
			case "inserted":
				$msg = "Cadastro salvo no banco";
				$submsg = "";
				$class = "success";
				include_once 'alert.html';
			break;
		}
	}
?>