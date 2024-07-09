<?php
session_start();
include("../../db/connection.php");

error_reporting(0);

$country=$_REQUEST['country'];

$div=$_REQUEST['field'];

$_SESSION['aa']="anish";
?>



<table><tr><td>



<?php

/*echo "<select name='serial' class='form-control'>";

$result222= mysqli_query($con,"SELECT * FROM customers where id='$country'") or die("error".mysql_error());

	while($roww=mysqli_fetch_array($result222))

	{




	echo "<option value=''> $roww[person_name]</option>";

	}

	echo "</select>";
*/

	?>







</td><td>

<input type="text" name="tax" value="<?php echo $_SESSION['aa']; ?>"  style='width:50px;' class="form-control"/>

<input type="hidden" name="pname" value="<?php //echo $country2; ?>"  /></td></tr></table>