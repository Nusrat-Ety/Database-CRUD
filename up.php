<?php
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'db_practice');

$sql = "UPDATE tb_practice SET id='$_POST[id]',name='$_POST[name]',email='$_POST[email]' WHERE i='$_POST[i]'";

if(mysqli_query($con,$sql))
header("refresh:.1; url=update.php");
else
echo "Not Updated";
header("refresh:1; url=update.php");

?>