<?php
require_once('dbConnect.php');


$response=array();

//$check="SELECT * from user_request where ambulance_id=0";


//$result=mysqli_query($con,$check);

$lat=$_GET['latitude'];
$lon=$_GET['longitude'];

//$lat="9.99";
//$lon="76.323";
/*echo $lat;
echo $lon;*/
$result=mysqli_query($con,"SELECT  id,`user_id`, `vehicle_no`, `device_id`, `latitude`, `longitude`, `hospital_id`, `ambulance_id`, `remark`, `timestamp`, `status`, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude)) * cos(radians(longitude) - radians($lon)) + sin(radians($lat)) * sin(radians(latitude)))) AS distance FROM user_request where ambulance_id=0 HAVING distance < 50 ORDER BY distance LIMIT 0 , 20 ");


//echo "SELECT  id,`user_id`, `vehicle_no`, `device_id`, `latitude`, `longitude`, `hospital_id`, `ambulance_id`, `remark`, `timestamp`, `status`, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude)) * cos(radians(longitude) - radians($lon)) + sin(radians($lat)) * sin(radians(latitude)))) AS distance FROM user_request where ambulance_id=0 HAVING distance < 50 ORDER BY distance LIMIT 0 , 20 ";



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