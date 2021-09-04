<!DOCTYPE html>


<form method="POST" class="form" action="http://localhost/db/search.php">
      <br><br>
      <h3>Search by ID</h3>
  <br>ID:<br><br>
  <input type="text" name="id">
  <br><br>
  <input type="submit" value="Search">    
  </form> 

<!---php start--->
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_practice";
$id="";
if(isset($_POST["id"])){
$id=$_POST["id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT *  FROM tb_practice where id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row


  echo "<table><tr><th><center>id</th><th>name</th><th>email</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>". $row["id"]. "</td><td>" . $row["name"]."</td><td>" . $row["email"]."</td>";
  echo "</tr>";
    }
echo "</table>";
} else {
    echo "<h2><font color='black'></font></h2>";
}

mysqli_close($conn);
?> 
<button><a href="index.html">HOME</a></button>
</body>
</html>