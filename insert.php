<?php

$con = mysqli_connect('127.0.0.1','root','');

if (!$con) {
	# code...
	echo "NOT CONNECTED server";
}

if (!mysqli_select_db($con,'db_practice')) {
	# code...
	echo "NOT CONNECTED DB";
}

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO tb_practice (id,name,email) VALUES ('$id','$name','$email')" ;
if(!mysqli_query($con,$sql))
{
	echo "NOT INSERTED";
}
else
{
	echo "INSERTED";
}

header("refresh:1;url=index.html");
?>