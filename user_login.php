<?php

$con=mysqli_connect("localhost","root","")or
    die("Could not connect: " . mysql_error());
	session_start();
//Select Database
mysqli_select_db($con,"form_db")or
 die("Could not select db: " . mysql_error());
	
if(isset($_POST['User_login']) && !empty($_POST['User_login'])  && isset($_POST['user_pwd']) && !empty($_POST['user_pwd'])){
  $username=$_POST['User_login'];
  $password=$_POST['user_pwd'];
  if($password!=NULL && $username!=NULL)
  {  
    $result=mysqli_query($con,"SELECT * FROM form WHERE userid='$username' AND password='$password' ");
	$i1 = mysqli_num_rows($result);
    if($i1)
    {
		$_SESSION["USERNAME"] = $username;
		header("Location:sel_category.php")or
		die("Could not select db: " . mysql_error());
    }
    else {
      echo '<script type="text/javascript">
           alert("Invalid userid or password");
          window.location.href = "USER_LOGIN_1.html";
             </script>';
	  
    }
  }
}
else{
	echo '<script type="text/javascript">
           alert("Enter the userid or password");
          window.location.href = "USER_LOGIN_1.html";
             </script>';
	
	
}
?>
<html>
<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>


</head>
</html>
