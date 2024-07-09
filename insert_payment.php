<?php
require_once('dbConnect.php');
$request_id=$_GET['request_id'];
$amount=$_GET['amount'];
$ambulance_no=$_GET['ambulance_no'];
$user_id=$_GET['user_id'];

$response=array();
$sql="insert into payment(request_id,amount,ambulance_no,user_id) values('$request_id','$amount','$ambulance_no','$user_id')";

$result=mysqli_query($con,$sql);
	$response['success']=true;

		mysqli_close($con);
echo json_encode($response)

?>