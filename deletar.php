<?php

if(empty($_GET['id'])){

	header('location:gerenciar.php');
}
else{


	$id = $_GET['id'];


	include 'conn.php';

	$sql= "DELETE FROM tb_posts WHERE id_post = $id";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:gerenciar.php?msg=delSuccess');
	}
	else
	{
		header('location:gerenciar.php?msg=delError');
	}

}

 ?>