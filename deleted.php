<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['candidate_n'];
// sql to delete a record
$sql = "DELETE FROM candidate WHERE firstname= '$name'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>





</html>