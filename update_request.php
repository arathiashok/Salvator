<?php
require_once('dbConnect.php');
$hospital_id=$_GET['hospital_id'];
$ambulance_id=$_GET['ambulance_id'];
$req_id=$_GET['req_id'];

$response=array();
$sql="update user_request set hospital_id='$hospital_id',ambulance_id='$ambulance_id' where id='$req_id'";
$result=mysqli_query($con,$sql);

$response['success']=true;

	
mysqli_close($con);
echo json_encode($response)
?>