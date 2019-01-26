<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "admin_db";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);

/*
$sql = "INSERT INTO admin (username, password,result)
VALUES ('yashraj1432', 'yash1432','0')";
if ($conn->query($sql) === TRUE) {
	
	echo "here";
}
else{
	
	 echo "Error updating record: " . $conn->error;
	
}*/

$sql = "UPDATE admin SET result=result+1  WHERE username= 'yashraj1432'";
if ($conn->query($sql) === TRUE) {
	
	echo "here";
}
else{
	
	 echo "Error updating record: " . $conn->error;
	
}

echo '<script type="text/javascript">
           alert(" Result is declared");
          window.location.href = "Administrative.html";
             </script>';
	



?>