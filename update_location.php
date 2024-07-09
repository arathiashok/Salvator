<?php
require_once('dbConnect.php');
$lat=$_GET['lat'];
$lng=$_GET['lng'];
$id=$_GET['id'];

$response=array();
$sql="update driver set current_lat='$lat',current_lon='$lng' where id='$id'";
$result=mysqli_query($con,$sql);

$response['success']=true;

	
mysqli_close($con);
echo json_encode($response)
?>