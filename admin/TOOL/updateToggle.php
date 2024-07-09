<?php 

$con=mysqli_connect("localhost","root","","us_track");


$id = $_POST['id'];
$value = $_POST['value'];

    //mysql_connect();
    $Q = "UPDATE bill SET admin_verification = {$value} WHERE id = {$id}";
    if(mysqli_query($con,$Q)){
        if($value == '1'){
            echo "accept.png";
        }elseif($value == '2'){
            echo "reject.png";
        }else{
            echo "approve.png";
        }
    }else{
        echo 'N';
    }

?>