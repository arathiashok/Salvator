<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<?php
//include("../header.php");
include("data_validation.php");
include("../db/connection.php");

$g=0;
include("table.php");
$result = mysql_query("SHOW FIELDS FROM $table");

$i = 0;

echo "<div class='col-sm-10'>";
echo "<form action='insert.php' method='post' enctype='multipart/form-data' name='register_form' id='register_form'>";
while ($row = mysql_fetch_array($result))
 {

  $name=$row['Field'];
  $type=$row['Type'];
  $type = explode("(", $type);
  $type_only=$type[0];
$i++;

$g++;


//echo " <div ><div >";



if($i==1)
{
	
	//echo "<td>Male <input type='radio' name='$name'> </td>";
	
}

elseif($i==6)
{
	
	//echo "<td>Male <input type='radio' name='$name'> </td>";
	 echo "<div class='col-sm-2'>".str_replace('_', ' ', $name)."</div><div class='col-sm-4'><select name='$name' class='form-control' >
	 
	 <option>Course</option>
	 <option>Project</option>
	 </select>
	 </div>";
}
elseif($i==11)
{
	
	//echo "<td>Male <input type='radio' name='$name'> </td>";
	 echo "<div class='col-sm-2'>".str_replace('_', ' ', $name)."</div><div class='col-sm-4'><select name='$name' class='form-control' >";
	           
         
 	$result2 = mysql_query("SELECT * FROM employee ");
	

		while($row2 = mysql_fetch_array($result2))
		{
echo	 "<option value='$row2[email]'>$row2[name]</option>";
		}
		
		
		
echo	 "</select>
	 </div>";
}
else
{

  if($type_only=="varchar" || $type_only=="int" || $type_only=="int" || $type_only=="tinyint" )
  {
	  echo "<div class='col-sm-2'>".str_replace('_', ' ', $name)."</div><div class='col-sm-4'><input type='text' name='$name'class='form-control' ></div>";
	
      
    
  }
  
  
   if($type_only=="date" )
  {
	  echo "<div class='col-sm-2'>".str_replace('_', ' ', $name)."</div><div class='col-sm-4'><input type='text' name='$name' id='t$k' class='form-control'></div>";
	  
	  ?>
	  
	    <script type="text/javascript">
$(function() {
	$('#t<?php echo $k;?>').datepick();
	
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
      <?php
	  $k++;
  }
  
  
  if($type_only=="tinytext" )
  {
	  echo "<div class='col-sm-2'>".str_replace('_', ' ', $name)."</div><div class='col-sm-4'><input type='file' name='$name' class='form-control'></div>";
  }
  if($type_only=="text" )
  {
	  echo "<div class='col-sm-2'>".str_replace('_', ' ', $name)."</div><div class='col-sm-4'><textarea name='$name' class='form-control'></textarea></div>";
  }
  
  
  

}
  


//echo "</div></div><br>";

  
 
 
 
 
 
  
}



echo "
<div class='col-sm-2'><input type='submit' value='Insert' name='submit'></div>";



echo "</form>";







mysql_free_result($result);

















mysql_close();

//include("../footer.php");

?>
