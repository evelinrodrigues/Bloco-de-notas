
 <?php session_start(); // inicia a sessão
	
	// recebe os dados do form de login:
	$usuario = $_POST['usuario'];
	$senha 	 = $_POST['senha'];
	
	// incluir o arquivo de conexão:
	include 'conn.php';
	
	// cria o comando sql:
	$sql = "SELECT * FROM tb_users WHERE nome_user = '$usuario'  
	AND senha_user = '$senha' ";

	// executa o comando sql
	$result = mysqli_query($conn, $sql);
	
	// verifica se foi executado corretamente
	$linhas = mysqli_affected_rows($conn);
	
	if ( $linhas > 0 ) // se maior que zero, encontrou um usuario com estes dados
	{
		// registra as variáveis de sessão:
		$login = mysqli_fetch_assoc($result);
		$_SESSION['id_user']    = $login['id_user'];
		$_SESSION['nome_user']  = $login['nome_user'];
		$_SESSION['senha_user'] = $login['senha_user'];
		$_SESSION['email_user'] = $login['email_user'];
		
		// redireciona para a página restrira:
		header("location:index.php");
	}
	else // senão, não foi encontrado nenhum usuario com estes dados
	{
		// redireciona novamente para a pagina de login, informando tbm um cod de erro:
		//header ("location:login.php?error=1");
		echo $sql;
	}
?>