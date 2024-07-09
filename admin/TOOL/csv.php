<?php

//Open the file.
include("../db/connection.php");
$conn=mysql_connect("localhost","root","");
mysql_select_db("icecream",$conn);
$fileHandle = fopen("small.csv", "r");
echo "<table border='1'>";
//Loop through the CSV rows.
while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
    //Print out my column data.
	$r++;
    echo '<tr><td>'. $r .' </td><td>' . $row[0] . '</td>';
    echo '<td> ' . $row[1] . '</td>';
    echo '<td>' . $row[2] . '</td>';
	echo '<td>' . $row[3] . '</td>';
    echo '</tr>';
	$product=$row[1];
	$hsn=$row[3];
	
	mysql_query("INSERT INTO product (product_code,product_model) values ('$product','$hsn')");
}
echo "</table>";

?>