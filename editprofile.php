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
                <li class="xn ">
                        <?php echo "<a href='profile.php'>" ?><span class="fa fa-user"></span><span class="xn-text">My Profile</span></a>                    </li>
                </ul>
                <ul class="x-navigation x-navigation-custom">    
                <li class="xn">
                        <a href="queries.php"><span class="fa fa-question"></span><span class="xn-text">My Queries</span></a>                    </li>
                </ul>
                <ul class="x-navigation x-navigation-custom">    
                    <li class="xn active">
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

              <div class="page-title"><a href="profile.php">My Profile</a>&nbsp;&nbsp; > &nbsp;&nbsp; Edit Details</div>                               
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                  <div class="row">
                  <div class="block">
                  <h4>Edit Profile</h4>
                  
                                  <form role="form" method="post" enctype="multipart/form-data" class="form-horizontal">
<?php
	  		  if(isset($_REQUEST['submit']))
			  {
			  		include 'connect.php';
					$name=$_REQUEST['name'];
					$rand=rand(1111111,9999999999);
					$mobile=$_REQUEST['mobile'];
					$otherContact=$_REQUEST['otherContact'];
					$currentAddr=$_REQUEST['currentAddr'];
					$permanentAddr=$_REQUEST['permanentAddr'];
					$rollNo=$_REQUEST['rollNo'];
					$batch=$_REQUEST['batch'];
					$currentOrganisation=$_REQUEST['currentOrganisation'];
					$gender=$_REQUEST['gender'];
					$achievements=$_REQUEST['achievements'];
					$previousOrganisation=$_REQUEST['previousOrganisation'];
					$email=$_REQUEST['email'];
					$password=$_REQUEST['rollNo'];
					$major=$_REQUEST['major'];
					$dob=$_REQUEST['dob'];
					
					$modifiedDate = date("Y-m-d H:i:s");
					$createdBy = "Admin";
					
					
					$pp_name=$_FILES["profilePic"]["name"];
					$profilePic = time().$pp_name;
					if(isset($pp_name))
					{
					move_uploaded_file($_FILES["profilePic"]["tmp_name"], "profilePic/" . $profilePic);
					}
					
					
					if($pp_name!='')
					{
					$sql="update student set name='$name',photo='$profilePic',mobile='$mobile',otherContact='$otherContact',currentAddr='$currentAddr',permanentAddr='$permanentAddr',rollNo='$rollNo',batch='$batch',currentOrganisation='$currentOrganisation',gender='$gender',achievements='$achievements',previousOrganisation='$previousOrganisation',email='$email',major='$major',dob='$dob',modifiedBy='Student',modifiedDate='$modifiedDate' where id='$userId'";
					}
					else
					{
					$sql="update student set name='$name',mobile='$mobile',otherContact='$otherContact',currentAddr='$currentAddr',permanentAddr='$permanentAddr',rollNo='$rollNo',batch='$batch',currentOrganisation='$currentOrganisation',gender='$gender',achievements='$achievements',previousOrganisation='$previousOrganisation',email='$email',major='$major',dob='$dob',modifiedBy='Student',modifiedDate='$modifiedDate' where id='$userId'";
					}
					
					mysqli_query($con,$sql) or die(mysqli_error($con));
					
					
					
					echo "<div class='alert alert-success' role='alert'>
                                <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                                <strong>Congrats!</strong> Your Details were updated successfully. Redirecting to Your Profile.
						  </div>";
							  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=profile.php'>";	
			  }
?> 
                               <div class="wizard">                                
                                    <ul>
                                        <li>
                                            <a href="#step-1">
                                                <span class="stepNumber">1</span>
                                                <span class="stepDesc">Personal Details<br /><small>College Details of the alumni</small></span>                                            </a>                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <span class="stepNumber">2</span>
                                                <span class="stepDesc">Current Details<br /><small>Current organisation and Address</small></span>                                            </a>                                        </li>
                                                                
                                    </ul>

                              <!-------------------------Personal Details------------------------------>      

                                 <div id="step-1">  
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name :</label>
                                        <div class="col-md-4">
                                            <input name="name" type="text" required class="form-control" id="name" value="<?php echo $rw[6]; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Profile Picture :</label>
                                          <div class="col-md-5">
                                   <?php echo "<img src='profilePic/$rw[20]' alt='&nbsp;&nbsp;Photo Not Available' style='max-width:100%;'><br>" ?>
                                           <br> <input type="file" class="file" name="profilePic" id="profilePic" data-preview-file-type="image"/>
                                    	  </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Mobile No. :</label>
                                        <div class="col-md-2">
                                            <input name="mobile" type="text" required class="form-control" id="mobile" value="<?php echo $rw[11]; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Other Contact :</label>
                                        <div class="col-md-2">
                                            <input name="otherContact" type="text" class="form-control" id="otherContact" value="<?php echo $rw[12]; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Permenant Address :</label>
                                        <div class="col-md-4">
                                            <textarea name="permanentAddr" required rows="5" class="form-control" id="permanentAddr"><?php echo $rw[10]; ?></textarea>                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Batch :</label>
                                        <div class="col-md-3">
                                         <select name="batch" id="batch">
                                         <option value="<?php echo $rw[8]; ?>"><?php echo $rw[8]; ?></option>
                                           <option>Select Batch</option>
                                           <option value="Y-03">Y-03</option>
                                           <option value="Y-04">Y-04</option>
                                           <option value="Y-05">Y-05</option>
                                           <option value="Y-06">Y-06</option>
                                           <option value="Y-07">Y-07</option>
                                           <option value="Y-08">Y-08</option>
                                           <option value="Y-09">Y-09</option>
                                           <option value="Y-10">Y-10</option>
                                           <option value="Y-11">Y-11</option>
                                           <option value="Y-12">Y-12</option>
                                           <option value="Y-13">Y-13</option>
                                           <option value="Y-14">Y-14</option>
                                           <option value="Y-15">Y-15</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Roll No. :</label>
                                        <div class="col-md-2">
                                            <input name="rollNo" type="text" readonly class="form-control" id="rollNo" value="<?php echo $rw[7]; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Gender :</label>
                                        <div class="col-md-4">
                                          <label>
                                          <input type="radio" checked name="gender" id="gender" value="male">&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;	
                                          <input type="radio" name="gender" id="gender" value="female">&nbsp;Female
                                          </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Achievements :</label>
                                          <div class="col-md-5">
                                             <textarea name="achievements" rows="5" class="form-control" id="achievements"><?php echo $rw[15]; ?></textarea>                                      </div>
                                    </div>
									
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Email :</label>
                                          <div class="col-md-5">
                                                <input name="email" type="text" class="form-control" id="email" value="<?php echo $rw[17]; ?>"/>
                                      </div>
                                    </div>   
                                    
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Major :</label>
                                      <div class="col-md-5">
                                        <label>
                                        <select name="major" id="major">
                                          
                                          <option value="<?php echo $rw[19]; ?>"><?php echo $rw[19]; ?></option><option>Select Branch</option>
                                          <option value="CSE">CSE</option>
                                          <option value="CCE">CCE</option>
                                          <option value="ECE">ECE</option>
                                          <option value="MME">MME</option>
                                          <option value="ME">ME</option>
                                                                                                                        </select>
                                        </label>
                                      </div>
                                    </div> 
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Date of Birth :</label>
                                          <div class="col-md-3">
                                            <div class="input-group">
                                                <input name="dob" type="text" class="form-control datepicker" value="<?php echo $rw[21]; ?>" >
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>                                            </div>
                                        </div>
                                    </div>                                   
                           </div>
                              <!-------------------------General Rates------------------------------>      
                             <div id="step-2"> 

                                        <div class="form-group">
                                        <label class="col-md-2 control-label">Current Organisation :</label>
                                        <div class="col-md-4">
                                            <input name="currentOrganisation" type="text" class="form-control" id="currentOrganisation"/ value="<?php echo $rw[13]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Current Address :</label>
                                        <div class="col-md-4">
                                            <textarea name="currentAddr" rows="5" class="form-control" id="currentAddr"><?php echo $rw[9]; ?></textarea>                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Previous Organisation :</label>
                                        <div class="col-md-4">
                                            <input name="previousOrganisation" type="text" class="form-control" id="previousOrganisation" value="<?php echo $rw[16]; ?>"/>
                                        </div>
                                    </div>
                                            <div class="panel-footer">
                                        <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">Finish</button>
                                    </div>
                                                                                                                
                              </div>                           
                                    <!-------------------------Cab Details------------------------------>      

                               
                              <!-------------------------End of Form------------------------------>      
                                                                                                    
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
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_4/html/layout-nav-custom.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Dec 2014 17:26:51 GMT -->
</html>


<?php
}

?>



