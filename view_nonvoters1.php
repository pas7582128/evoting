
<html>
<head>
<link rel="stylesheet" href="Main.css">
</head>

<div class="rel_top" style="background-color:#b3ffb3;">


<hr width="85%">

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
//echo "Connected successfully";


mysqli_select_db($conn,"form_db");
// Form Variable

$sql = "SELECT category1,category2,category3,category4,id,lastname,firstname FROM form";
$result = $conn->query($sql);

echo "<font size='5px'><i>  Non voter's list of category1 : </i></font><br>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	//echo $row["category1"].$row["category2"].$row["category3"].$row["category4"];
    	if($row["category1"]==0)
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table><br>";
} else {
    echo "0 results";
}
$sql = "SELECT category1,category2,category3,category4,id,lastname,firstname FROM form";
$result = $conn->query($sql);

echo "<font size='5px'><i>  Non voter's list of category2 : </i></font><br>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	//echo $row["category1"].$row["category2"].$row["category3"].$row["category4"];
    	if($row["category2"]==0)
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table><br>";
} else {
    echo "0 results";
}
$sql = "SELECT category1,category2,category3,category4,id,lastname,firstname FROM form";
$result = $conn->query($sql);

echo "<font size='5px'><i>  Non voter's list of category3 : </i></font><br>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	//echo $row["category1"].$row["category2"].$row["category3"].$row["category4"];
    	if($row["category3"]==0)
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table><br>";
} else {
    echo "0 results";
}
$sql = "SELECT category1,category2,category3,category4,id,lastname,firstname FROM form";
$result = $conn->query($sql);

echo "<font size='5px'><i>  Non voter's list of category4 : </i></font><br>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	//echo $row["category1"].$row["category2"].$row["category3"].$row["category4"];
    	if($row["category4"]==0)
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table><br>";
} else {
    echo "0 results";
}
$conn->close();
?>






















</div>


</html>
