<?php
session_start();
if($_REQUEST['cus_id']!="")
{
$_SESSION['cus_id']=$_REQUEST['cus_id'];
}

$k=0;
?>


  

















<link rel="stylesheet" href="../style.css" />

<link rel="stylesheet" href="jquery-ui.min.css" type="text/css" /> 
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplete({
		
		source: "autopage.php",
		minLength:0
		
	});				


});

</script>
<script>
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
	
	
	function getCity(strURL,value) {		
		
		
		
		alert(strURL);
	
		
		var req = getXMLHTTP();
		var val=value;
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv'+val).innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>













<?php
$r=1;
?>



<input name='$name' class='auto form-control'  onblur="getCity('fieldgen.php?field=1&country='+this.value,<?php echo $r; ?>)" autocomplete="off">




 <div id="citydiv<?php echo $r; ?>" >
    &nbsp;
    </div>