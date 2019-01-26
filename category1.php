<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Main.css">
</head>

<div class="rel_top">

<div class="absolute_top" style="background-color:#ff944d;  top:0px;">

<h1 style="color:black; text-align:center; margin:10px;">EVOTING</h1>
</div>

<div class ="absolute_sec_top">
<!--<a href="Main.html"><button class="btn Home">HOME</button></a>
<button class="btn Vote">VOTE</button>
<button class="btn Result">View Result</button>
<button class="btn Extra2">Extra</button>-->
<a href="Main.html"><button class="btn Extra1">LOGOUT</button></a>
</div>
<div class ="absolute_mid" style="height:350px;">
<h1 style="color:#663300; text-align:center; margin:10px;">Welcome to the Online Voting System</h1>
<hr width="85%">


<?php
session_start();
if(isset($_SESSION['USERNAME']) && !empty($_SESSION['USERNAME'])){
	
echo "<font size='5px' color='Blue'>You are Login with id:       </font>"."<font font size='5px' color='Red'>" .$_SESSION["USERNAME"] ."</font>";

}

?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "admin_db";
// Create connection




//--------------------------------------------------
//Select Database

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,"form_db");
if(isset($_SESSION["USERNAME"]) && !empty($_SESSION["USERNAME"]))
{
  $userid= $_SESSION["USERNAME"];
  
}

 if(isset($userid) && !empty($userid))
  {  
    
	$result1=mysqli_query($conn,"SELECT * FROM form WHERE userid='$userid' AND category1 = '0'");
	$i1 = mysqli_num_rows($result1);
    if($i1)
    {
		//echo '<script type="text/javascript">alert("You Already voted")</script>';
		
		$flag = 1;
		
    }
    else {
		echo '<script type="text/javascript">alert("Enter the id ")</script>';
		
      	  
    }
  }

  
  if(1){
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


//mysqli_select_db($conn,"admin_db");

$sql = "SELECT id, firstname, lastname FROM category1";
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
mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,"form_db");

if (isset($_POST['vote'])) {


   
	
	 
     if(isset($_SESSION['USERNAME']) && !empty($_SESSION['USERNAME'])){

     $set = $_SESSION["USERNAME"];
	 }
    $sql = "UPDATE form SET category1=category1+1  WHERE userid= '$set'";
	if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}


$conn = mysqli_connect($servername, $username, $password,"admin_db");

//mysqli_select_db($conn,"admin_db");

if(isset($_POST['vote']) && !empty($_POST['vote'])){

$vote = $_POST['vote'];

$sql = "UPDATE category1 SET vote=vote+1  WHERE id= $vote";

if ($conn->query($sql) === TRUE) {
    if(isset($_POST['vote']) && !empty($_POST['vote'])){
		
		echo '<script type="text/javascript">alert("Sucessfully")</script>';
		
		header("Location:sel_category.php");
		
		
		
	}
	
	
} else {
    echo "Error updating record: " . $conn->error;
}


}
else if(isset($_POST['vote'])){
	//echo " Enter the id";
	//echo '<script type="text/javascript">alert("Enter the id")</script>';
}
  

   
mysqli_close($conn);
  }

?>




<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

Enter Id Of candidate: <input type="text" name="vote"> <br><br>
<input type="Submit" name = "Submit" value="Submit">

</form>






</div>
</html>




































