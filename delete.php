<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
<table border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>delete</th>
	</tr>
	<?php
	$con = mysqli_connect('127.0.0.1','root','');
	
	if (!mysqli_select_db($con,'db_practice')) {
	# code...
	echo "NOT CONNECTED DB";
	}

	$sql = "SELECT * FROM tb_practice" ;
	$records = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>" .$row['id']. "</td>";
		echo "<td>" .$row['name']. "</td>";
		echo "<td>" .$row['email']. "</td>";
		echo "<td><a href=d.php?id=".$row['id']. ">delete</a></td>";
	}

	?>

</table>
<button><a href="index.html">HOME</a></button>
</body>
</html>