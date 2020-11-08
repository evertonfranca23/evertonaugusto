<?php 

	include('conexao.php');
	session_start();

		if(empty($_POST['usuario']) || empty($_POST['senha'])){

			header('location: cadastro.php');
			exit();
		}

			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];

			$_SESSION["new"]=$usuario;		

			// mysql_real_escape_string($conexao, $_POST['usuario'])
			// Codigo para proteção de envio de dados via POST

			$query = "SELECT * FROM usuarios WHERE usuario = '{$usuario}'
			AND senha = '{$senha}' ";

			$result = mysqli_query($conexao, $query);

			$row = mysqli_num_rows($result);

			if($row > 0){
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
												<a href='painelUsuario.php' class='btn btn-primary btn-finish pull-right' role='button'>OK</a>
												<div class='alert alert-success alert-dismissible'>
												<p class ='text-center'><strong>Parabens!</strong> logado com sucesso!</a></p>
												</div>
										</body>
						</html>";
			}else{
					header('location: cadastro.php');
					}
							
 ?>