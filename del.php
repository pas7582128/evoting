
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Main.css">
</head>

<div class="rel_top">

<div class="absolute_top" style="background-color:#ff944d;  top:0px;">

<h1 style="color:black; text-align:center; margin:10px;">EVOTING </h1>
</div>

<div class ="absolute_sec_top">
<a href="Administrative.html"><button class="btn Home">HOME</button></a>
<!--<button class="btn Vote">VOTE</button>
<button class="btn Result">View Result</button>
<button class="btn Extra1">Extra</button>-->
<a href="Main.html"><button class="btn Extra1">LOGOUT</button></a>
</div>
<div class ="absolute_mid" style="height:350px;">
<h1 style="color:#663300; text-align:center; margin:10px;">Welcome to the Online Voting System</h1>
<hr width="85%">




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_db";
session_start();
if(isset($_POST['cate']) && !empty($_POST['cate']))
{
$_SESSION["display"]=$_POST['cate'];}
/*else
{
	echo '<script type="text/javascript">alert("Enter Id of candidate!!!")</script>';
	
}*/
if(isset($_SESSION["display"]) && !empty($_SESSION["display"]))
{
	$cand = $_SESSION["display"] ;
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//
//
//$name = $_POST['candi_n'];
if(isset($cand) && !empty($cand))
{
	//$cand = $_POST['cate'];
	$_SESSION["del"]=$cand;//$del= $cand;
if($cand == 1)
{
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
}
else if ($cand == 2)
{
	$sql = "SELECT id, firstname, lastname FROM category2";
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
}
else if ($cand == 3)
{
	$sql = "SELECT id, firstname, lastname FROM category3";
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
}
else if ($cand == 4)
{
	$sql = "SELECT id, firstname, lastname FROM category4";
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
}
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

Enter ID Of candidate: <input type="text" name="candi_n"> <br><br>
<input type="Submit" name = "Submit" value="Submit">

<a href="delet_candidate.php" ><button type="button">Exit</button></a>

</form>




<?php
if(isset($_POST['candi_n']) && !empty($_POST['candi_n']))
{
	$name= $_POST['candi_n'];
	$del=$_SESSION["del"];
if($del == 1)
{
	$sq = "DELETE FROM category1 WHERE id= '$name'";

}
else if ($del == 2)
{
	$sq = "DELETE FROM category2 WHERE id= '$name'";

}
else if ($del == 3)
{
	$sq = "DELETE FROM category3 WHERE id= '$name'";

}
else if ($del == 4)
{
	$sq = "DELETE FROM category4 WHERE id= '$name'";

}

if ($conn->query($sq) === TRUE) {
	echo '<script type="text/javascript">
           alert(" Record Deleted Successfully");
          window.location.href = "del.php";
             </script>';
    
} else {
    echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>




















</div>


</html>








































