<html>

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

$fname = $_POST['fname'];
$midname =$_POST['mname'];
$lname = $_POST['lname'];
$birth = $_POST['dob'];
$gend =  $_POST['gender'];
$aadhar_no =  $_POST['adhaar'];
$mail = $_POST['mail'];
$mobno =  $_POST['phone'];
$add =  $_POST['add'];
$cit =  $_POST['city'];
$pinno = $_POST['pin'];
$stat =  $_POST['state'];
$pass = $_POST['pwd'];
$use = $_POST['user'];

//---------------------------------------------------



//$flag=0;
 if($use!=NULL)
 {  
   // $check = "SELECT userid FROM reg WHERE userid='$use')";
    $result=mysqli_query($conn,"SELECT * FROM form WHERE userid='$use'");
	$result1 =mysqli_query($conn,"SELECT * FROM form WHERE aadhar='$aadhar_no'");
	$result2=mysqli_query($conn,"SELECT * FROM form WHERE mobileno='$mobno'");
	$result3=mysqli_query($conn,"SELECT * FROM form WHERE email='$mail'");
	if($result && $result1 && $result2 && $result3 ){
    if(mysqli_num_rows($result))
    {
		//echo "Username already taken!!!";
	
		//echo '<script type="text/javascript">alert("Username already taken!!!")</script>';
		echo '<script type="text/javascript">
           alert("Username already taken!!!");
          window.location.href = "Reg Form (copy).html";
             </script>';
		//$flag=1;
		//$_SESSION["USERNAME"] = $username;
		//header("Location:after_login.php");
		//die("Could not select db: " . mysql_error());
    }
	else if(mysqli_num_rows($result1)){
		
		//echo '<script type="text/javascript">alert("Aadhar No is already Registered!!!")</script>';
		echo '<script type="text/javascript">
           alert("Aadhar No is already Registered!!!");
          window.location.href = "Reg Form (copy).html";
             </script>';
	}
	else if(mysqli_num_rows($result2)){
		
		//echo '<script type="text/javascript">alert("Mobile No is already Registered!!!")</script>';
		echo '<script type="text/javascript">
           alert("Mobile No is already Registered!!!");
          window.location.href = "Reg Form (copy).html";
             </script>';
	}
	else if(mysqli_num_rows($result3)){
		
		//echo '<script type="text/javascript">alert("Email id already Registered!!!")</script>';
		echo '<script type="text/javascript">
           alert("Email id already Registered!!!");
          window.location.href = "Reg Form (copy).html";
             </script>';
		
	}
    else {
      //echo '<script type="text/javascript">alert("Invalid Username or Password!!!")</script>';
	$sql = "INSERT INTO form (firstname, middlename ,lastname,dob,gender,aadhar,email,mobileno,address,city,pincode,state,userid,password)   
         VALUES ('$fname','$midname','$lname','$birth','$gend','$aadhar_no','$mail','$mobno','$add','$cit','$pinno','$stat','$use','$pass')";
	   if ($conn->query($sql) === TRUE) {
		   echo '<script type="text/javascript">
           alert("registration  Successfully");
          window.location.href = "USER_LOGIN_1.html";
             </script>';
	//echo "Login ID : " .$use;}
	}
 }
 }
 }




?>

</html>