<?php
	$con = mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($con,'db_practice');
	$id = $_GET['id'];
	$sql = "DELETE FROM tb_practice WHERE id = '$id'" ;

	if(mysqli_query($con,$sql))
	{
		header("refresh:1;url=delete.php");
	}
	else
	{
		echo "Not deleted";
	}
?>