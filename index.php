<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Minhas notas</title>
	</head>
	<body>

		<?php include 'menu.php'; ?>
		<h2>Últimas notas</h2>

		<?php

		include 'conn.php';
		
		$id_user = $_SESSION['id_user'];
			
		$sql = "SELECT tb_posts.titulo_post AS 'Título', tb_posts.data_post AS 'Data', tb_posts.texto_post AS 'Post', tb_users.nome_user AS 'Usuario' 
			FROM tb_posts INNER JOIN tb_users ON
			tb_posts.id_user = tb_users.id_user 
			WHERE tb_posts.id_user = $id_user
			ORDER BY tb_posts.id_post DESC
			LIMIT 0, 10";
		
		$result = mysqli_query($conn, $sql);

		$linhas = mysqli_affected_rows($conn);
			
			if ($linhas > 0)
			{
				
				while ($registros = mysqli_fetch_assoc($result))
				{
					
					foreach ($registros as $indice => $valor)
					{
						echo "<b>".$indice.":</b> " . $valor . "<br/>";
					}
					echo '<br/>';

				} 
				

			}
			else
			{
				echo "<h3>Não há anotações para mostrar</h3>";
			}


		?>

	</body>
	</html>