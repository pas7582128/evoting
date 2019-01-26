
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


mysqli_select_db($conn,"admin_db");
// Form Variable

$sql = "SELECT id,lastname,firstname,vote FROM category1";
$result = $conn->query($sql);
$c=1;
$m=0;
$d=0;
//$array=new SplFixedArray(200);
echo "<font size='5px'><i>  Result of category1 : </i><br><br></font>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Votes</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        if($row["vote"]>$m)
        {
            $d=0;
            $m=$row["vote"];
        }
        else if($row["vote"]==$m)
        {
            $d=1;
        }
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]." "."</td><td>".$row["vote"]."</td></tr>";
    }
    echo "</table>";
} else {
    $c=0;
    echo "No candidate<br>";
}
if($d==1)
{
    echo "No winners. Draw<br>";
}
else
{
$rowSQL = "SELECT MAX( vote ) AS max ,id,firstname,lastname FROM category1";
$result = $conn->query($rowSQL);
$row = $result->fetch_array( MYSQLI_ASSOC );
$largestNumber = $row['max'];
if($c)
    echo "<font size='5px'> The winner of category1 is:   "."<u> ".$row["firstname"]." ".$row["lastname"]." </u>"."with ".$largestNumber." votes"."<br><font><br>";
}



$sql = "SELECT id,lastname,firstname,vote FROM category2";
$result = $conn->query($sql);
$c=1;
$m=0;
$d=0;
//$array=new SplFixedArray(200);
echo "<font size='5px'><i>  Result of category2 : </i><br><br></font>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Votes</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        if($row["vote"]>$m)
        {
            $d=0;
            $m=$row["vote"];
        }
        else if($row["vote"]==$m)
        {
            $d=1;
        }
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]." "."</td><td>".$row["vote"]."</td></tr>";
    }
    echo "</table>";
} else {
    $c=0;
    echo "No candidate<br>";
}
if($d==1)
{
    echo "No winners. Draw<br>";
}
else
{
$rowSQL = "SELECT MAX( vote ) AS max ,id,firstname,lastname FROM category2";
$result = $conn->query($rowSQL);
$row = $result->fetch_array( MYSQLI_ASSOC );
$largestNumber = $row['max'];
if($c)
	echo "<font size='5px'> The winner of category2 is:   "."<u> ".$row["firstname"]." ".$row["lastname"]." </u>"."with ".$largestNumber." votes"."<br><font><br>";
}


$sql = "SELECT id,lastname,firstname,vote FROM category3";
$result = $conn->query($sql);
$c=1;
$m=0;
$d=0;
//$array=new SplFixedArray(200);
echo "<font size='5px'><i>  Result of category3 : </i><br><br></font>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Votes</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        if($row["vote"]>$m)
        {
            $d=0;
            $m=$row["vote"];
        }
        else if($row["vote"]==$m)
        {
            $d=1;
        }
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]." "."</td><td>".$row["vote"]."</td></tr>";
    }
    echo "</table>";
} else {
    $c=0;
    echo "No candidate<br>";
}
if($d==1)
{
    echo "No winners. Draw<br>";
}
else
{
$rowSQL = "SELECT MAX( vote ) AS max ,id,firstname,lastname FROM category3";
$result = $conn->query($rowSQL);
$row = $result->fetch_array( MYSQLI_ASSOC );
$largestNumber = $row['max'];
if($c)
    echo "<font size='5px'> The winner of category3 is:   "."<u> ".$row["firstname"]." ".$row["lastname"]." </u>"."with ".$largestNumber." votes"."<br><font><br>";
}


$sql = "SELECT id,lastname,firstname,vote FROM category4";
$result = $conn->query($sql);
$c=1;
$m=0;
$d=0;
//$array=new SplFixedArray(200);
echo "<font size='5px'><i>  Result of category4 : </i><br><br></font>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Votes</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        if($row["vote"]>$m)
        {
            $d=0;
            $m=$row["vote"];
        }
        else if($row["vote"]==$m)
        {
            $d=1;
        }
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]." "."</td><td>".$row["vote"]."</td></tr>";
    }
    echo "</table>";
} else {
    $c=0;
    echo "No candidate<br>";
}
if($d==1)
{
    echo "No winners. Draw<br>";
}
else
{
$rowSQL = "SELECT MAX( vote ) AS max ,id,firstname,lastname FROM category4";
$result = $conn->query($rowSQL);
$row = $result->fetch_array( MYSQLI_ASSOC );
$largestNumber = $row['max'];
if($c)
    echo "<font size='5px'> The winner of category4 is:   "."<u> ".$row["firstname"]." ".$row["lastname"]." </u>"."with ".$largestNumber." votes"."<br><font><br>";
}

$conn->close();
?>




























</div>


</html>


















































