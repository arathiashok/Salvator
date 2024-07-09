<?php



include("../../db/connection.php");



  



$term=$_GET['term'];

$return_arr = array();



$stmt = mysqli_query($con,"SELECT * FROM pincode WHERE pincode LIKE '$term%' or place like '$term%'  ");

	
	    while($row =mysqli_fetch_array($stmt)) 

		{

	        $return_arr[] =  $row['place']." :: ". $row['pincode']."( Extra Amount : ".$row['extra_amount']." )" ;

		

		

		}

	    





    

    echo json_encode($return_arr);







?>