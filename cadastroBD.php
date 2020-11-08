<?php

include('conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (usuario, senha)
VALUES ('$usuario', '$senha')";

if (mysqli_query($conexao, $sql)) {

	echo " 
			<!DOCTYPE html>
								<head>
			  					<meta name='viewport' content='width=device-width, initial-scale=1'>
			  					<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
			  					<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
			  					<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
								</head>
										<body>
												<div class='container'>
												<a href='index.php' class='btn btn-primary btn-finish pull-right' role='button'>OK</a>
												<div class='alert alert-success alert-dismissible'>
												<p class ='text-center'><strong>Parabens!</strong> Cadasrto efetuado com sucesso!</a></p>
												</div>
										</body>
						</html>";

		/*echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='index.php'</script>";*/
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
?>