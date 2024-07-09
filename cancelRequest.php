<?php
require_once('dbConnect.php');
$user_id=$_GET['user_id'];

$response=array();
$sql="update user_request set status='2' where user_id='$user_id'";
$result=mysqli_query($con,$sql);

$response['success']=true;

	
mysqli_close($con);
echo json_encode($response)
?>