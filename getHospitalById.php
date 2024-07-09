<?php
 require_once('dbConnect.php');

$id=$_GET['id'];

$response=array();
$check="SELECT * from hospital where id='$id'";
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