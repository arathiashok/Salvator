<?php
require_once('dbConnect.php');
$status=$_GET['status'];
$user_id=$_GET['user_id'];

$response=array();
$sql="update driver set status='$status' where id='$user_id'";
$result=mysqli_query($con,$sql);

$response['success']=true;

	
mysqli_close($con);
echo json_encode($response)
?>