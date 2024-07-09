<?php
session_start();
?><!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>aumento tracking</title>
    <!-- Custom CSS -->

    
    <style>

label
{
text-transform:capitalize;	
}
thead
{
text-transform:capitalize;

font-weight:bold; !important 
}
.input-sm
{
	float:right; !important 
}

</style>
    
    <!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
</head>
<body>
<style>

.box
{
border:1px solid #000;	

}

</style>


     <style>
	  h3
	 {
		font-size:15px; 
	 }

        .bg-yellow
        {

        backgroud:yellow;
        }

        .inner
        {

        float:left;
        padding:10px;
        }
		.inner a
		{
			
		color:#FFF;
		text-decoration:none;	
		}
		.inner a:hover
		{
			
		color:#FFF;
		text-decoration:none;	
		}
		
		
		
        .icon
        {

        backgroud:right;
  float:left;
        font-size:50px;
		
	
     
         
        }

            .icon i {
                margin: 5px;
            }

        .small-box

         {
       margin-bottom:10px;
        height:100px;
        }
        .small-box-footer
        {
       
       color:#fff;
	   font-size:16px;
       
        }
		
		
		a.small-box-footer 
        {
       
       color:#fff; !important
	  
       
        }
		
		
		 .small-box-footer a:hover
        {
       
       color:#fff;
	   font-size:16px;
       
        }

.headt
{
margin-left:30px;
float:left;
margin-top:10px;

}
.headt h3
{
font-size:20px;	
	
}

    </style>

    
    
    
    <style>
.row
{
	
background:#FFF;
padding:10px;	
}
</style>
    
    
    <style>
.dataTables_length
{
	
	
float:left; !important	
}
.dataTables_filter
{
	
	
float:right; !important	
}



</style>
    
    
    
    
    
    
    
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body onLoad="">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>-->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
		include("../header_top.php");
		
		//include("../menu.php");
		
		
		
		?>
		
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
        
                
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../dashboard/index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        
                     <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../user/select.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">User</span></a></li>
                     
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../user_request/select.php" aria-expanded="false"><i class="mdi mdi-domain"></i><span class="hide-menu">Accidents</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../driver/select.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Ambulance</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../payment/select.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Payment</span></a></li>
                        
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../police/select.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Police</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../hospital/select.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Hospital</span></a></li>
                        
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../ambulance_rate/select.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">KM Rate</span></a></li>
                        
                    
                        
                        
                        
                        
                    <!--    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span></a></li>-->
                     <!--   <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Report </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="../report/pack.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Pack </span></a></li>-->
                              <!--  <li class="sidebar-item"><a href="../report/pack2.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Full Report  </span></a></li>-->
                                
                          <!-- 
                              <li class="sidebar-item"><a href="../report/approve.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Check Verify Status  </span></a></li>  
                            
                                
                            </ul>
                        </li>-->
                       
                       
                     <!--   
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../users/form.php" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Setting</span></a></li>-->
                        
                        
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../login/login.php" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Logout</span></a></li>
                        
                        
                        
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
          <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <!--<div class="page-breadcrumb">
                <div class="row" style="padding:10px;">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                   
                </div>
            </div>-->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                
                
                
                