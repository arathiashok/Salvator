<?php
session_start();
include('../db/connection.php');
//$db_name="music"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.


// username and password sent from form 
$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

	
if(isset($_POST['login']))
{
//echo "teacher $myusername $mypassword";

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword' ";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
 $result = mysqli_query($con,"SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword' ") or die('Could not connect: ' . mysqli_error($con));

while($row = mysqli_fetch_array($result))
  {

$_SESSION['company_name'] =$row['company_name'];


  
$_SESSION['user']=$myusername;


	header("location:../dashboard/index.php");
  }
}


else
{

header("location:login.php?a=1");

}





}

?>
 
 



