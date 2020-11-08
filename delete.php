<?php 

	include('conexao.php');

			$usuario = $_POST['usuario'];

			$query = "DELETE FROM usuarios WHERE USUARIO = '{$usuario}'" ;

			if (mysqli_query($conexao, $query)) {
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
												<div class='alert alert-danger alert-dismissible'>
												<p class ='text-center'><strong>Que Pena!</strong> Usuario excluido!</a></p>
												</div>
										</body>
						</html>";
			} else {
      				echo "Error: " . $query . "<br>" . mysqli_error($conexao);
}
 ?>