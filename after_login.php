<html>
<p> you are login</p>
<?php
session_start();
if(isset($_SESSION['USERNAME']) && !empty($_SESSION['USERNAME'])){
	
echo $_SESSION["USERNAME"];

}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

mysqli_select_db($conn,"admin_db");

$sql = "SELECT id, firstname, lastname FROM candidate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
	 
	
    while($row = $result->fetch_assoc()) {
		 echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>"; 
		
		 
		
    }
    echo "</table>";
} else {
    echo "0 results";
}


?>

<?php



if(isset($_POST['vote']) && !empty($_POST['vote'])){

$vote = $_POST['vote'];

$sql = "UPDATE candidate SET vote=vote+1  WHERE id= $vote";
if ($conn->query($sql) === TRUE) {
    if(isset($_POST['vote']) && !empty($_POST['vote'])){
		
		echo '<script type="text/javascript">alert("Sucessfully")</script>';
		
		
	}
	
	
} else {
    echo "Error updating record: " . $conn->error;
}

}
else{
	echo " Enter the id";
}

$conn->close();	
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

Enter Id Of candidate: <input type="text" name="vote"> <br><br>
<input type="Submit" name = "Submit" value="Submit">

</form>
</html>