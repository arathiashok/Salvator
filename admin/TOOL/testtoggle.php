<script type='text/javascript'>
function getXMLHTTPRequest() {
   var req =  false;
   try {
      /* for Firefox */
      req = new XMLHttpRequest(); 
   } catch (err) {
      try {
         /* for some versions of IE */
         req = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (err) {
         try {
            /* for some other versions of IE */
            req = new ActiveXObject("Microsoft.XMLHTTP");
         } catch (err) {
            req = false;
         }
     }
   }
   return req;
}
function updateToggle(obj,id){
    obj.style.backgroundColor = '#cc0000';
    var updReq = getXMLHTTPRequest();
    var url = 'updateToggle.php';
    var vars = 'id='+id+'&value='+obj.value;
    updReq.open('POST', url, true);
    updReq.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    updReq.onreadystatechange = function() {//Call a function when the state changes.
        if(updReq.readyState == 4 && updReq.status == 200) {
            if(updReq.responseText == 'N'){
		
                obj.style.backgroundColor = '#fff';
            }else{
                if(obj.value == '1'){
				
                    obj.value = '2';
                }else if(obj.value == '2'){
				
                    obj.value = '0';
                }
				else{
						
                    obj.value = '1';
                }
                obj.src = updReq.responseText;
                obj.style.backgroundColor = '#fff';
            }
        }
    }
    updReq.send(vars);
}
</script>



<table>
    <tr>
        <td>ID</td>
        <td>First Name</td>
       
    </tr>
<?php
// Loop through the table and display all records in tabular format

$con=mysqli_connect("localhost","root","","us_track");


$table="bill";


$query = "SELECT * FROM $table";
$result = mysqli_query ($con,$query);
$count = mysqli_num_rows($result); // Count table rows
while ($row = mysqli_fetch_array($result))
{
    $id = $row["id"];
   $quantity = $row["quantity"];
$enabled = $row ["admin_verification"];
?>
<tr>
    <td><?php echo $id; ?></td>
    <?php 
	
		
$sql2 = "select *  from location where id='$row[from_location]' ";
$result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
$row2 =mysqli_fetch_array($result2);
	
		

			echo "<td > $row2[location] 
			</td>";
				
		
			
			
		
$sql2 = "select *  from location where id='$row[to_location]' ";
$result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
$row2 =mysqli_fetch_array($result2);
	
		

			echo "<td > $row2[location] 
			</td>";
				
		
	
	
	
	
	
	
	
	
	
	echo "<td>".$quantity; ?></td>
  
    <td>
    <?php 
        if($enabled == '1')
		{
            ?>
            <input type="image" onclick="updateToggle(this,'<?php echo $id;?>');" src="accept.png" border="0" name="enabled" value="2" width="120"/>
            <?php 
        }
		 elseif($enabled == '2')
		{
            ?>
            <input type="image" onclick="updateToggle(this,'<?php echo $id;?>');" src="reject.png" border="0" name="enabled" value="0" width="120"/>
            <?php 
        }
		else
		{
            ?>
            <input type="image" onclick="updateToggle(this,'<?php echo $id;?>');" src="approve.png" border="0" name="enabled" value="1" width="120"/>
            <?php
        }
    ?>
    </td>
</tr>
<?php // Close our while loop
}
?>
</table>