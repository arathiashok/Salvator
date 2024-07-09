<?php
require_once('dbConnect.php');
$imei=$_GET['imei'];
$user_id=$_GET['user_id'];
$latitude=$_GET['latitude'];
$longitude=$_GET['longitude'];
$vehicle_no=$_GET['vehicle_no'];
$date=date("Y-m-d h:i:s");
$check="SELECT * from user_reg where id='$user_id'";

$resultu=mysqli_query($con,$check);
$uu=mysqli_num_rows($resultu);


$result=mysqli_query($con,"SELECT  contact_no,( 3959 * acos( cos( radians($latitude) ) * cos( radians( lat)) * cos(radians(lon) - radians($longitude)) + sin(radians($latitude)) * sin(radians(latitude)))) AS distance FROM hospital  HAVING distance < 5 ORDER BY distance LIMIT 0 , 1 ");
$row22=mysqli_num_rows($result);


$result22=mysqli_query($con,"SELECT  contact_no,( 3959 * acos( cos( radians($latitude) ) * cos( radians( lat)) * cos(radians(lon) - radians($longitude)) + sin(radians($latitude)) * sin(radians(latitude)))) AS distance FROM police  HAVING distance < 5 ORDER BY distance LIMIT 0 , 1 ");
$row25=mysqli_num_rows($result22);


$url="http://akrut.in/SMS/gateway.php"; 
$mobile=$row25['contact_no'];
$msg="EMERGENCY ALERT https://www.google.com/maps/dir/$latitude,$longitude]/"; // HTML message
$message = urlencode($msg);
$ch = curl_init();
if (!$ch){die("Couldn't initialize a cURL
handle");} $ret = curl_setopt($ch,CURLOPT_URL,$url); 
curl_setopt ($ch,CURLOPT_POST, 1);
curl_setopt($ch,
CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt ($ch,CURLOPT_POSTFIELDS,"mobile=$mobile&msg=$msg");
$ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//If you are behind proxy then please uncomment below line and provide your proxyip with port.
 // $ret = curl_setopt($ch, CURLOPT_PROXY, "PROXY IP ADDRESS:PORT");
$curlresponse = curl_exec($ch); //
 if(curl_errno($ch))
echo 'curl error : '. curl_error($ch);
if (empty($ret)) {
// some kind of an error

die(curl_error($ch));
curl_close($ch); // close cURL
 } else {

$info = curl_getinfo($ch);
curl_close($ch); // close cURL

//echo $curlresponse;  

}












$response=array();
$sql="insert into user_request(user_id,device_id,latitude,longitude,vehicle_no,timestamp) values('$user_id','$imei','$latitude','$longitude','$vehicle_no','$date')";

$result=mysqli_query($con,$sql);
	$response['success']=true;

		mysqli_close($con);
echo json_encode($response)

?>