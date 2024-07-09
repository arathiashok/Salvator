<?php
 require_once('dbConnect.php');
$status=$_GET['status'];
$paymentid=$_GET['payment_id'];

$response=array();
$sql="update payment set status='$status' where id='$paymentid'";

$result=mysqli_query($con,$sql);

$response['success']=true;
mysqli_close($con);

echo ".$sql"
// json_encode($response);
?>