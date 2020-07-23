<html>
<head>
	<title>Formulecs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- CSS do Bootstrap -->
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->

	<!--Scripts p/ funcionar máscara de CPF (os 3) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>
</head>
<body>
	<form method="POST" action="found.php">
		<label for="cpf">CPF</label><br>
		<input type="text" name="cpf" id="cpf" onblur="buscaCpf(value)" required><br><br>

		<label for="nome">Nome</label><br>
		<input type="text" name="nome" id="nome" size="50" readonly><br><br>
		<button>Buscar no banco</button>
	</form>
	<br><hr><br>
	<nav>
		<a href="index.php" type="button" role="button">Voltar para início</a>
	</nav>
</body>
	<!-- JS do Bootstrap (os 3, nessa ordem) [está dando conflito c/ script do datamask] -->
	<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>-->

	<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("999.999.999-99");
		});
	</script>
	<script type="text/javascript">
		function buscaCpf(cpf) {
			//cpf = $(#cpf).unmask();
			var xhttp;
			if (cpf == "" || cpf == "___.___.___-__") {
		  		document.getElementById('nome').value = "CPF vazio, favor preencher";
		    	return;
		  	}

		  	xhttp = new XMLHttpRequest();
		  	xhttp.onreadystatechange = function() {
		    	if (this.readyState == 4 && this.status == 200) {
		    		document.getElementById('nome').value = this.responseText;
		    	}
		    }
		  	
		  	xhttp.open("GET", "verify_user.php?usercpf="+cpf, true);
		  	xhttp.send();
		}
	</script>
</html>