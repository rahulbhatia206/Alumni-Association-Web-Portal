<?php
session_start();
if(!isset($_SESSION['userlogin']))
{
header("Location:index.php");
}
$userId=$_SESSION['userId'];

include 'connect.php';
$sql="select * from student where id='$userId';"; 
$run=mysqli_query($con,$sql);
$rw=mysqli_fetch_array($run, MYSQLI_NUM);
$nor=mysqli_num_rows($run);
if($nor==0)
{
}
else
{

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
                <li class="xn active">
                        <?php echo "<a href='profile.php'>" ?><span class="fa fa-user"></span><span class="xn-text">My Profile</span></a>                    </li>
                </ul>
                <ul class="x-navigation x-navigation-custom">    
                <li class="xn">
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

              <div class="page-title">My Profile</div>                               
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
<br>

                  <div class="row">
                  <div class="block">
                  <h4 align="left">My Details </h4>
                  <div>
                    <div align="right"><br>
                      
                    </div>
                  </div>
                  <form role="form" class="form-horizontal">
                                  <div class="panel panel-default tabs">                                
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Personal Details</a></li>
                                        <li><a href="#tab-second" role="tab" data-toggle="tab">Current Details</a></li>
                                        <li><a href="#tab-third" role="tab" data-toggle="tab">Previous Organisation</a></li>
                                    </ul>
                                    <div class="panel-body tab-content">

                              <!-------------------------Personal Details------------------------------>      

                                        <div class="tab-pane active" id="tab-first">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name :</label>
                                        <div class="col-md-4"><?php echo "<span class='style1'>$rw[6]</span> "; ?></div>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Profile Picture :</label>
                                          <div class="col-md-5">
                                        <?php echo "<img src='profilePic/$rw[20]' alt='&nbsp;&nbsp;Photo Not Available' style='max-width:100%;'>" ?>                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Mobile No. :</label>
                                        <div class="col-md-2"> <?php echo $rw[11]; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Other Contact :</label>
                                        <div class="col-md-2"> <?php echo $rw[12]; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Permanent Address :</label>
                                        <div class="col-md-4"> <?php echo $rw[10]; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Batch :</label>
                                        <div class="col-md-3"> <?php echo $rw[8]; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Roll No. :</label>
                                        <div class="col-md-2"> <?php echo $rw[7]; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Gender :</label>
                                        <div class="col-md-4"> <?php echo $rw[14]; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Achievements :</label>
                                        <div class="col-md-4"> <?php echo $rw[15]; ?></div>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Email :</label>
                                        <div class="col-md-4"> <?php echo $rw[17]; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Major :</label>
                                        <div class="col-md-4"> <?php echo $rw[19]; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Date of Birth :</label>
                                        <div class="col-md-4"> <?php echo $rw[21]; ?></div>
                                    </div>                                    
                             </div>
                              <!-------------------------General Rates------------------------------>      
                                        <div class="tab-pane" id="tab-second">

                                        <div class="form-group">
                                        <label class="col-md-2 control-label">Current Organisation :</label>
                                        <div class="col-md-4"> <?php echo $rw[13]; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Current Address :</label>
                                        <div class="col-md-4"> <?php echo $rw[9]; ?></div>
                                    </div>
                                    
                                    </div>                                  
                                    <!-------------------------Cab Details------------------------------>      

                    <div class="tab-pane" id="tab-third">
										
                      <div class="form-group">
                                        <label class="col-md-2 control-label"><span class="style2"></span>Previous Organisation :</label>
                                        <div class="col-md-2"><?php echo $rw[16]; ?></div>
                      </div> 
                                    
									
                                    <!-------------------------End of Form------------------------------>      
                                 </div></form>                                                                   
                    </div>
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
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
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
    <script>
		function delete_trans(number){
			if(confirm("Do you really want to Delete ?"))
				window.location.href="alumnidelete.php?id="+number;
			else
				return false;
		}
	</script>        
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_4/html/layout-nav-custom.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Dec 2014 17:26:51 GMT -->
</html>


<?php
}

?>


