<?php
require_once('dbConnect.php');


$user_id=$_GET['user_id'];

$response=array();
$check="SELECT * from user_request  WHERE user_id='$user_id'";


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

