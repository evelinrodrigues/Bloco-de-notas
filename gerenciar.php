<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Gerenciar</title>
</head>
<body>

	<?php include 'menu.php'; ?>


	<h1>Gerenciar anotações</h1>

	<?php

	include 'conn.php';
	$id_user = $_SESSION['id_user'];

	$sql = "SELECT * FROM tb_posts WHERE id_user = $id_user";

	$result = mysqli_query ($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{

		$linha_atual = array();

		?>

		<table class= "table table-striped">
			<tr>
				<th>ID # </th>
				<th>TITULO</th>
				<th>TEXTO</th>
				<th>DATA</th>
				<th>EDITAR</th>
				<th>DELETAR</th>
			</tr>

		<?php

		while ($linha_atual = mysqli_fetch_assoc($result))
		{
			echo "<tr>";


			foreach ($linha_atual as $indice => $valor) 
			{
				echo"<td>$valor</td>";


				if($indice == 'id_post')
				{

					$id = $valor;
				}
			}

			echo "<td><a href=\"editar.php?id=$id\">Editar</a></td>";

			echo "<td><a href=\"deletar.php?id=$id\" onclick=\"return confirm('Deseja excluir esta anotação?')\">Deletar</a></td>";
			echo "</tr>";
		}

		echo"</table>";


	}
	else if (mysqli_affected_rows($conn) == 0)
	{
		echo '<h3>Não há anotações cadastradas</h3>';
	}
	else
	{
		echo "<h3>Erro: " . mysqli_error($conn) . "</h3>";
	}
