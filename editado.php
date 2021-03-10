<?php
if(empty($_POST['titulo']) || empty($_POST['data']) || empty($_POST['texto']))
{
	header('location:gerenciar.php?msg=empty');
}
else
{
		$id     = $_POST['id'];
		$titulo = $_POST['titulo'];
		$data   = $_POST['data'];
		$texto  = $_POST['texto'];

		
	include 'conn.php';

	$sql = "UPDATE tb_posts SET
	titulo_post   = '$titulo',
	texto_post    = '$texto',
	data_post     = '$data'
	WHERE id_post =  $id";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) >= 0)
	{
		header('location:gerenciar.php?msg=edtSuccess');
	}
	else
	{
		header ('location:gerenciar.php?msg=edtError');
	}
}

?>