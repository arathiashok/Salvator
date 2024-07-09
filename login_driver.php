<?php
require_once('dbConnect.php');
$username=$_GET['username'];
$password=$_GET['password'];
$response=array();
$check="SELECT * from driver where username='$username' and password='$password'";
$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0)
	{
		$response['success']=true;
		$row=mysqli_fetch_assoc($result);
		
		$response['data'][]=$row;
		
	}
	else
	{
		$response['success']=false;
	}
	
		echo json_encode($response);
		mysqli_close($con);
?>