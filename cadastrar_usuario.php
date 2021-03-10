<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
</head>
<body>

	<p>
		<h2>Novo Usuário</h2>
	</p>
	<form action="cadastrar_usuario.php" method="post">
		<p>
			<label>Nome de usuário:</label><br>
			<input type="text" name="usuario">
		</p>
		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha">
		</p>
		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email">
		</p>
		<p>
			<button type="submit">
				Cadastrar
			</button>
			<button type="button" onclick="window.history.back()">
				Cancelar
			</button>
		</p>
	</form>

	<?php 
	if(!empty($_POST['usuario']) && !empty($_POST['senha']) && !empty($_POST['email']))
	{
		$usuario = $_POST['usuario'];
		$senha 	 = $_POST['senha'];
		$email 	 = $_POST['email'];
		$id_user = $_SESSION['id_user'];

		include 'conn.php';

		$sql = "INSERT INTO tb_users (nome_user, senha_user, email_user, id_user) VALUES ('$usuario', '$senha', '$email', '$id_user')";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			header('location:login.php?msg=userCad');
		}
		else
		{
			header('location:cadastrar_usuario.php?msg=errorCad');
		}

	}



	?>

</body>
</html>