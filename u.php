<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>

<?php

$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'db_practice');
$id = $_GET["id"];
$sql = "SELECT * FROM tb_practice WHERE id = '$id'";
$records = mysqli_query($con,$sql);

?>

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
	</tr>

<?php
while ($row = mysqli_fetch_array($records)) {
	echo "<tr><form action=up.php method=post>";
	echo "<td><input type=text name=id value='".$row['id']."'</td>";
	echo "<td><input type=text name=name value='".$row['name']."'</td>";
	echo "<td><input type=text name=email value='".$row['email']."'</td>";
	echo "<input type=hidden name=i value='".$row['i']."'>";
	echo "<td><input type=submit value=update>";
	echo "</form></tr>";
}
?>

</table>
</body>
</html>