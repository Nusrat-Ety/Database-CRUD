<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<style >
	a{text-decoration: none;}
</style>
<body>
<table border="1" cellpadding="1" cellspacing="1">
	<tr>
                
		<th>id</th>
		<th>name</th>
		<th>email</th>
	</tr>
	<?php
	$con = mysqli_connect('127.0.0.1','root','');
	
	if (!mysqli_select_db($con,'db_practice')) {
	# code...
	echo "NOT CONNECTED DB";
	}

	//$sql = "SELECT tb_st.sname,tb_practice.id,tb_practice.name,tb_practice.email FROM tb_st INNER JOIN  tb_practice ON tb_st.sid=tb_practice.id" ;
	$sql="SELECT * FROM tb_practice";
	$records = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($records))
	{
		echo "<tr>";
        //echo "<td>" .$row['sname']."</td>";
		echo "<td>" .$row['id']. "</td>";
		echo "<td>" .$row['name']. "</td>";
		echo "<td>" .$row['email']. "</td>";
	}

	?>


</table>
<button><a href="index.html">HOME</a></button>
<button><a href="pdf.php">!!  PRINT REPORT  !!</a></button>
</body>
</html>