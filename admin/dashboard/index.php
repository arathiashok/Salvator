<?php
error_reporting(0);
include("../header.php");
include("../db/connection.php");
function countdb($table)
{
include("../db/connection.php");


							
			 $sql2 = "select count(*) as cc  from $table  ";				
						
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));	
	$row2 =mysqli_fetch_array($result2);
	$cc=$row2['cc'];
	

//$cc=3456789;
$amount = moneyFormatIndia($cc);
	
	
	
	if(strlen($amount)>5)
	$amount=$amount;
	else
	$amount=" Count " . $amount;

	return $amount;
}

function countdb2($table,$location,$field)
{
include("../db/connection.php");
$date=date("Y-m-d");

 if($_SESSION['privilege']=="admin")
						{
							
			$sql2 = "select count(*) as cc  from $table ";			
						}
						else
						{
	  $sql2 = "select count(*) as cc  from $table where $field='$location' ";
	  
						}
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));	
	$row2 =mysqli_fetch_array($result2);
	$cc=$row2['cc'];
	


$amount = moneyFormatIndia($cc);
	
	
	
	if(strlen($amount)>5)
	$amount=$amount;
	else
	$amount=" Todays " . $amount;

	return $amount;
}







function moneyFormatIndia($num) {
    $explrestunits = "" ;
    if(strlen($num)>3) {
        $lastthree = substr($num, strlen($num)-3, strlen($num));
        $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
        $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
        $expunit = str_split($restunits, 2);
        for($i=0; $i<sizeof($expunit); $i++) {
            // creates each of the 2's group and adds a comma to the end
            if($i==0) {
                $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
            } else {
                $explrestunits .= $expunit[$i].",";
            }
        }
        $thecash = $explrestunits.$lastthree;
    } else {
        $thecash = $num;
    }
    return $thecash; // writes the final format where $currency is the currency symbol.
}












function num2text($cc)
{
	
	
   $number = round($cc);
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
	return $result;	
	
	
}




?>
      
                
                
                
                
                
                
                
                
                
                
                
                  <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="small-box btn-warning">
         
         
          <div class="inner  card-hover" >
          
             
            <a class="small-box-footer" title="Branches" href="../user_request/select.php">  
            <i class="icon mdi mdi-sale"></i> 
            
             
            <span class='headt'>  
            <h3> 
          
            ACCIDENTS</h3>
            <p> 
			<?php
            
			echo countdb("user_request");
			
			?>
            </p>
            </span>
  
          </div>

</a>      

  </div>
      </div>





    <!-- Groups-->
             <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="small-box btn-danger">
         
         
          <div class="inner  card-hover" >
          
             
            <a class="small-box-footer" title="Branches" href="../driver/select.php">  
            <i class="icon mdi mdi-apps"></i> 
            
             
            <span class='headt'>  
            <h3> AMBULANCE</h3>
            <p><?php
            
			echo countdb("driver");
		
			?></p>
            </span>
  
          </div>

</a>      

  </div>
      </div>
                
                
                
                
                
                
                
                
                
                 
                    
                             
                    
                       <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="small-box bg-cyan">
         
         
          <div class="inner  card-hover" >
          
             
            <a class="small-box-footer" title="Branches" href="../payment/select.php">  
            <i class="icon mdi mdi-package-variant"></i> 
            
             
            <span class='headt'>  
            <h3> 
          
            PAYMENT</h3>
            <p><?php
           		echo countdb("payment");
				
			?></p>
            </span>
  
          </div>

</a>      

  </div>
      </div>
             
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-md-6">
                      <h3> Accident Request </h3>
                      <div style="height:450px;overflow:auto;">
                                <table class="table table-striped table-fixed">
                               <thead style="background:#333;color:#FFF;"> <tr ><th>Vehicle</th><th>Place</th><th>Timing</th></tr></thead>
                               <tbody>
							   
							   <?php
							   $sql22 = "select * from user_request order by id DESC limit 0,3";				
						
								$result22 = mysqli_query($con, $sql22) or die("Error in Selecting " . mysqli_error($connection));	
								while($row22 =mysqli_fetch_array($result22))
								{
							   
							   ?>
							   
							   
                                <tr><td><?php echo $row22['vehicle_no']; ?></td>
								<td><?php echo "<a href='https://www.google.com/maps/dir/$row22[latitude],$row22[longitude]/' target='_blank' >View location</a>"; ?></td>
								<td><?php echo $row22['timestamp']; ?></td></tr>
								
								<?php
								}
								?>
                                  <!--<tr><td>Anish</td><td>Aluva</td><td>10:30 AM</td></tr> -->
                                  </tbody>
                                </table>
                                </div>
                    </div>
                    
                     <div class="col-md-6">
                      <h3>Recent Payments </h3>
                      <div style="height:450px;overflow:auto;">
                                <table class="table table-striped .table-condensed table-bordered">
                               <thead style="background:#333;color:#FFF;"> <tr ><th>Particular</th><th>Amount</th></tr></thead>
                               <?php
							   $sql22 = "select * from payment order by id DESC limit 0,3";				
						
								$result22 = mysqli_query($con, $sql22) or die("Error in Selecting " . mysqli_error($connection));	
								while($row22 =mysqli_fetch_array($result22))
								{
							   
							   ?>
                                <tr><td><?php echo $row22['ambulance_no']; ?></td><td><?php echo $row22['amount']; ?></td></tr>
								<?php
								}
								?>
                                  
                                </table>
                                
                                
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
             <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
          <?php
		  
		  include("../footer.php");
		  ?>