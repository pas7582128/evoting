

<?php
session_start();
if(isset($_SESSION['USERNAME']) && !empty($_SESSION['USERNAME'])){
	
//echo $_SESSION["USERNAME"];

}
$servername = "localhost";
$username = "root";
$password = "";
$database = "form_db";


$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,"form_db");
if(isset($_SESSION["USERNAME"]) && !empty($_SESSION["USERNAME"]))
{
  $userid= $_SESSION["USERNAME"];
  
}
  if(isset($_POST['select']) && !empty($_POST['select'])){
	  
	  
	 $cetegory = $_POST['select'];
	// echo $cetegory;
 if($cetegory == 1){
	 
  if(isset($userid) && !empty($userid))
  {  
    
    $result1=mysqli_query($conn,"SELECT * FROM form WHERE userid='$userid' AND category1 = '0' ");
	$i1 = mysqli_num_rows($result1);
    if($i1)
    {
		$flag = 1;
		header("Location:category1.php");
		
		
    }
    else {
		echo '<script type="text/javascript">alert("You Already voted in category1")</script>';
		
		$flag = 0;
    }
  }
 }
 
 if($cetegory == 2){
	 
  if(isset($userid) && !empty($userid))
  {  
    
    $result2=mysqli_query($conn,"SELECT * FROM form WHERE userid='$userid' AND category2 = '0' ");
	$i2 = mysqli_num_rows($result2);
    if($i2)
    {
		$flag = 1;
		header("Location:category2.php");
		
		
    }
    else {
		echo '<script type="text/javascript">alert("You Already voted in category2 ")</script>';
		
		$flag = 0;
    }
  }
 }
 
 if($cetegory == 3){
	 
  if(isset($userid) && !empty($userid))
  {  
    
    $result3=mysqli_query($conn,"SELECT * FROM form WHERE userid='$userid' AND category3 = '0' ");
	$i3 = mysqli_num_rows($result3);
    if($i3)
    {
		$flag = 1;
		header("Location:category3.php");
		
		
    }
    else {
		echo '<script type="text/javascript">alert("You Already voted in category3 ")</script>';
		
		$flag = 0;
    }
  }
 }
 if($cetegory == 4){
	 
  if(isset($userid) && !empty($userid))
  {  
    
    $result4=mysqli_query($conn,"SELECT * FROM form WHERE userid='$userid' AND category4 = '0' ");
	$i4 = mysqli_num_rows($result4);
    if($i4)
    {
		$flag = 1;
		header("Location:category4.php");
		
		
    }
    else {
		echo '<script type="text/javascript">alert("You Already voted in category4 ")</script>';
		
		$flag = 0;
    }
  }
 }
 
 
 
 
 
 
  }

?>








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

<div class="Middlediv" style="height:150px;">
<form method="post"   action="<?php echo $_SERVER["PHP_SELF"];?>">
<center><button class="btn_mid middle_sele" type="submit" value="1" name ="select">Category 1</button>
<center><button class="btn_mid middle_sele" type="submit" value="2" name ="select">Category 2</button>
<center><button class="btn_mid middle_sele" type="submit" value="3" name ="select">Category 3</button>
<center><button class="btn_mid middle_sele" type="submit" value="4" name ="select">Category 4</button>
</form>
</div>
</div>


</html>