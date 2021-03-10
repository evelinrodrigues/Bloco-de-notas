<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar anotação</title>
</head>
<body>
 <?php include 'menu.php'; ?>
	<h3>Nova nota:</h3>
	<form action = "cadastrar_nota.php" method="post">
		<p>
			<label>Título:</label><br>
			<input type="text" name="titulo">
		</p>
		<p>
			<label>Data:</label><br>
			<input type="date" name="data">
		</p>
		<p>
			<label>Texto:</label><br>
			<input type="text" name="texto">
		</p>
		<p>
			<button type="submit">Salvar</button>
		</p>


<?php
	
	include 'conn.php';

		if(!empty($_POST['titulo']) && !empty($_POST['data']) && !empty($_POST['texto']))
		{
			$titulo  = $_POST['titulo'];
			$texto 	 = $_POST['texto'];
			$data 	 = $_POST['data'];
			$id_user = $_SESSION['id_user'];
			

		
			$sql = "INSERT INTO tb_posts 
			(titulo_post, texto_post, data_post, id_user)
			VALUES ('$titulo', '$texto', '$data', '$id_user')";

			$result = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) > 0)
			{
				echo "<h3>Nota salva com sucesso!</h3>";
			}
			else
			{
				echo '<h3>Erro ao salvar nota: ' . mysqli_error($conn) . '</h3>';
			}

		}
	

 ?>


	</form>
