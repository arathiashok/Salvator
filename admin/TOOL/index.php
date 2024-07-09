<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 5px;
  background: #555;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 500px;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$sql = "SELECT * from product order by product_code";
$faq = $db_handle->runQuery($sql);
?>
<html>
    <head>
      <title>PHP MySQL Inline Editing using jQuery Ajax</title>
		<style>
			body{width:610px;}
			.current-row{background-color:#B24926;color:#FFF;}
			.current-col{background-color:#1b1b1b;color:#FFF;}
			.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
			.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
			.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;}
		</style>
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script>
		function showEdit(editableObj) {
			$(editableObj).css("background","#FFF");
		} 
		
		function saveToDatabase(editableObj,column,id) {
			$(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "saveedit.php",
				type: "POST",
				data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
				success: function(data){
					$(editableObj).css("background","#FDFDFD");
				}        
		   });
		}
		</script>
    </head>
    <body>		
 

	   <table class="tbl-qa">
		  <thead class="header" id="myHeader">
			  <tr>
              <th>Si</th>
				<th class="table-header" width="10%">Product</th>
				<th class="table-header">HSN</th>
				
                	<th class="table-header">Company</th>
                    <th class="table-header">Category</th>
                     <th class="table-header">P1</th>
                      <th class="table-header">P2</th>
                       <th class="table-header">P3</th>
                        <th class="table-header">Tax</th>
			  </tr>
		  </thead>
		  <tbody>
		  <?php
		  foreach($faq as $k=>$v) {
		  ?>
			  <tr class="table-row">
				<td><?php echo $k+1; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'product_code','<?php echo $faq[$k]["product_id"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["product_code"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'product_model','<?php echo $faq[$k]["product_id"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["product_model"]; ?></td>
                
                <td contenteditable="true" onBlur="saveToDatabase(this,'product_name','<?php echo $faq[$k]["product_id"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["product_name"]; ?></td>
                
                <td contenteditable="true" onBlur="saveToDatabase(this,'category_id','<?php echo $faq[$k]["product_id"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["category_id"]; ?></td>
                
                 <td contenteditable="true" onBlur="saveToDatabase(this,'p1','<?php echo $faq[$k]["product_id"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["p1"]; ?></td>
                  <td contenteditable="true" onBlur="saveToDatabase(this,'p2','<?php echo $faq[$k]["product_id"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["p2"]; ?></td>
                   <td contenteditable="true" onBlur="saveToDatabase(this,'p3','<?php echo $faq[$k]["product_id"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["p3"]; ?></td>
                    <td contenteditable="true" onBlur="saveToDatabase(this,'tax','<?php echo $faq[$k]["product_id"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["tax"]; ?></td>
                
			  </tr>
		<?php
		}
		?>
		  </tbody>
		</table>
    </body>
</html>



<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
