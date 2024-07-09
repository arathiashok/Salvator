<?php
require_once('dbConnect.php');

$user_id=$_GET['user_id'];

$response=array();
$check="SELECT * from payment where user_id='$user_id'";
$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0){
	$response['success']=true;
	while($row=mysqli_fetch_assoc($result))
		{
			$response["data"][]=$row;
		
		}
		echo json_encode($response);
	
		mysqli_close($con);
}
?>