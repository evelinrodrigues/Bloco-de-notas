<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Entrar no Sistema</title>
	<meta charset="utf-8">
</head>
<body>

	<p>
		<h2>Notes</h2>	
		<h3>Informe seus dados de acesso:</h3>
	</p>
	
	<form method="post" action="validacao_login.php">
		<p>
			<label>Usuário</label><br>
			<input type="text" name="usuario">
		</p>
		<p>
			<label>Senha</label><br>
			<input type="password" name="senha">
		</p>
		<p>
			<button type="submit">
			Entrar
			</button>
			<a href="cadastrar_usuario.php">Cadastre-se</a>
		</p>	
	</form>

</body>
</html>