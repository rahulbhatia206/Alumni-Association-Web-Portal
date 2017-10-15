<?php
session_start();
if(!isset($_SESSION['userlogin']))
{
header("Location:index.php");
}
$userId=$_SESSION['userId'];
?>




<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_4/html/layout-nav-custom.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Dec 2014 17:26:51 GMT -->
<head>        
        <!-- META SECTION -->
        <title>LNMIIT Alumni Association</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
}
.style2 {
	color: #FF0000;
	font-weight: bold;
}

-->
        </style>
</head>
    <body>
        <!-- START PAGE CONTAINER -->
    <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar page-sidebar-fixed scroll">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation ">
                  <li class="xn" style="text-align:center;background:#e34724;">
				 	<a href="#" class="style1">LNMIIT Alumni Association</a>  
                    <a href="#" class="x-navigation-control"></a>                  </li>
                  <li class="xn-title" ></li>
                <ul class="x-navigation x-navigation-custom">    
                    <li class="xn ">
                        <a href="events.php"><span class="fa fa-calendar"></span><span class="xn-text">Events</span></a>                    </li>
                </ul>
                <ul class="x-navigation x-navigation-custom">    
                <li class="xn">
                        <?php echo "<a href='profile.php'>" ?><span class="fa fa-user"></span><span class="xn-text">My Profile</span></a>                    </li>
                </ul>
                <ul class="x-navigation x-navigation-custom">    
                <li class="xn active">
                        <a href="queries.php"><span class="fa fa-question"></span><span class="xn-text">My Queries</span></a>                    </li>
                </ul>
                <ul class="x-navigation x-navigation-custom">    
                    <li class="xn ">
                        <?php echo "<a href='editprofile.php'>" ?><span class="fa fa-pencil"></span><span class="xn-text">Edit Details</span></a>                    </li>
                </ul>
                <ul class="x-navigation x-navigation-custom">    
                    <li class="xn ">
                        <a href="search.php"><span class="fa fa-search"></span><span class="xn-text">Search Alumni</span></a>                    </li>
                </ul>
                
                
                
                <!-- END X-NAVIGATION -->
          </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
		<!-- POWER OFF -->

                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                        <li class="">
                        <a href="changepassword.php"><span class="fa fa-unlock-alt"></span> <span class="xn-text">Change Password</span></a>                    </li>
                        <li><a class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span>Sign Out</a></li>
                        </ul>                        
                    </li> 
		<!-- END POWER OFF -->                    
                </ul>
                
                <!-- END X-NAVIGATION VERTICAL -->                    
                
                <!-- START BREADCRUMB --><!-- END BREADCRUMB -->                

              <div class="page-title"><a href="queries.php">My Queries</a>&nbsp;&nbsp; > &nbsp;&nbsp; Add Query</div>                               
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap"><br>
                  <div class="row">
                  <div class="block">
                  <h4>Add Query Details</h4>
                  
                                  <form role="form" method="post" enctype="multipart/form-data" class="form-horizontal">
<?php
	  		  if(isset($_REQUEST['add']))
			  {
			  		include 'connect.php';
					$title=$_REQUEST['title'];
					$description=$_REQUEST['description'];
					$email=$_REQUEST['email'];
					//$time=$_REQUEST['time'];
					
					$createdDate = date("Y-m-d H:i:s");
					
					if($email!='' and $title!='' and $description!='')
					{
					
					$sql="insert into query (createdDate,title,description,email,studentId,querySeen) values ('$createdDate','$title','$description','$email','$userId','0');";
					mysqli_query($con,$sql) or die(mysqli_error($con));
					
					
					echo "<div class='alert alert-success' role='alert'>
                                <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                                Your Query has been forwarded successfully. You will be informed through the Email ID you have given, if needed. By the way you can check whether your query has been seen or not by Alumni Association. Thank You!!
						  </div>";
}
					else{
					
					echo "<div class='alert alert-danger' role='alert'>
                                <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                                <strong>Oh snap!</strong> You forgot to fill in all the details. </div>	"; 
					
					}
					
			  }
?> 						<br>

                             <div class="form-group">
                                        <label class="col-md-2 control-label">Title :</label>
                                        <div class="col-md-4">
                                            <input name="title" type="text" class="form-control" id="cabtype"/>
                                        </div>
                             </div>
                             <div class="form-group">
                                        <label class="col-md-2 control-label">Description :</label>
                                        <div class="col-md-6">
                                            <textarea name="description" rows="5" class="form-control" id="achievements"></textarea>
                                        </div>
                             </div>
                             <div class="form-group">
                                        <label class="col-md-2 control-label">Email Id :</label>
                                        <div class="col-md-4">
                                            <input name="email" type="text" class="form-control" id="email"/>
                                        </div>
                             </div>
                             
                             <div class="panel-footer">
                                <button class="btn btn-primary pull-right" id="add" name="add">Submit Query</button>
                             </div>             

                                </form>
   
                                 
                               
					</div>
                  </div>                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type="text/javascript" src="js/plugins/filetree/jqueryFileTree.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
        <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
 <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="js/plugins/fileinput/fileinput.min.js"></script>   
        <!-- END PAGE PLUGINS --> 

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
        <script type="text/javascript" src="js/demo_file_handling.js"></script>

    <!-- END SCRIPTS -->         
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_4/html/layout-nav-custom.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Dec 2014 17:26:51 GMT -->
</html>






