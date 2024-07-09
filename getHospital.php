
<?php
 require_once('dbConnect.php');


$response['success']=true;

$lat=$_GET['latitude'];
$lon=$_GET['longitude'];

//$lat="9.99";
//$lon="76.323";
/*echo $lat;
echo $lon;*/
$res=mysqli_query($con,"SELECT id,name,address,lat,lon, ( 3959 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians($lon ) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM hospital HAVING distance < 5 ORDER BY distance LIMIT 0 , 20");

//echo "SELECT id,name,address,lat,lon,(3959 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians($lon ) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM hospital HAVING distance < 5 ORDER BY distance LIMIT 0 , 20";


//echo $res;
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
$response["data"][]=$row;;
}
//echo "success";
echo json_encode($response);
}
else{
$response['success']=false;
    
echo json_encode($response);
}

mysqli_close($con);
?>
