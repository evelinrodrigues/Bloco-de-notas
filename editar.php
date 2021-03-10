<?php include 'lock.php'; ?>
<?php 
if(empty($_GET['id']))
{
	//se estiver vazio o campo 'id' enviado via GET:
	//redireciona usuário para gerenciar
	header('location:gerenciar.php');
}
?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<title>Editar anotação</title>
	<meta charset="utf-8">
</head>
<body>
	<?php include 'menu.php';


	$id = $_GET['id'];

	include 'conn.php';

	$sql = "SELECT * FROM tb_posts WHERE id_post = $id";

	$result = mysqli_query ($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$post = mysqli_fetch_assoc($result);

		?>
		<h1>Editar Contato</h1>
		<form action="editado.php" method="post">
			<p>
				<label>Título:</label><br>
				<input type="text" name="titulo" value="<?php echo $post['titulo_post']; ?>">
			</p>
				<label>Data:</label><br>
				<input type="date" name="data" value="<?php echo $post['data_post']; ?>">
			<p>
				<label>Texto</label><br>
				<input type="text" name="texto" value="<?php echo $post['texto_post']; ?>">
			</p>
				<input type="hidden" name="id"
				value="<?php echo $post['id_post']?>">
			<p>
				<button type="submit">Salvar</button>
				<button type="button" onclick="window.history.back()">Cancelar</button>
			</p>
		</form>
		<?php
	}
	else
	{
		echo"<h3>Não foi possível carregar o formulário de edição desta anotação</h3>";
	}


	?>


</body>
</html>