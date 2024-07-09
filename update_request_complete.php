<?php
 require_once('dbConnect.php');
$req_id=$_GET['req_id'];

$response=array();
$sql="update user_request set status='1'where id='$req_id'";
$result=mysqli_query($con,$sql);

$response['success']=true;

	
mysqli_close($con);
echo json_encode($response)
?>