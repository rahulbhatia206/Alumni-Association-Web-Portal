<?php
session_start();
if(isset($_SESSION['userlogin']))
{
header("Location:profile.php");
}
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
                    <a href="#" class="style1">LNMIIT Alumni Association</a> </li>                  
                    <div align="center"><a href="#" class="x-navigation-control"></a>                  
                        </li>
                      </div>
                  <li class="xn-title">
                      <div align="center"> Alumni Login</div>
                  </li>
                    <div align="center">
                      
                      
                        </div>
                        
                        <form action="" class="form-horizontal" method="post">
                    <ul class="x-navigation x-navigation-custom">    
                <li class="xn">
                        <div class="form-group" style="float: right; margin-right: 20px;">
                                     <div class="input-group">
                                            <div class="input-group-addon">
                                                  <span class="fa fa-user"></span>                                
                                            </div>
                                            <input name="adminName" type="text" class="form-control" id="adminName" placeholder="E-Mail ID"/>
                                     </div>
                  		</div>                
                </li>
                	</ul>
                   
				  <li class="xn">
                      <div align="center"><br></div>
                  </li>
                                      
                	<ul class="x-navigation x-navigation-custom">    
                <li class="xn">
                        <div class="form-group" style="float: right; margin-right: 20px;">
                                     <div class="input-group">
                                            <div class="input-group-addon">
                                                  <span class="fa fa-lock"></span>                                
                                            </div>
                                            <input name="adminPass" type="password" class="form-control" id="adminPass" placeholder="Password"/>
                                     </div>
                  		</div>                
                </li>
                	</ul>
                    
                    
                  <li class="xn">
                      <div align="center"><br></div>
                  </li>
                                      
                	<ul class="x-navigation x-navigation-custom">    
                <li class="xn">
                        <div class="form-group" style="float: right; margin-right: 20px;">
                                     <div class="input-group">
                                            <div class="input-group-addon">
                                                                         
                                            </div>
                                            <button class="btn btn-primary btn-lg btn-block" id="adminLogin" name="adminLogin" style="float: right;">Login</button>
                                     </div>
                  		</div>                
                </li>
                	</ul>                
                
                <li class="xn">
                      <div align="center"><br></div>
                  </li>
                                      
                	<ul class="x-navigation x-navigation-custom">    
                <li class="xn">
                        <div class="form-group" style="float: right; margin-right: 20px;">
                                     <div class="input-group">
                                            <div class="input-group-addon">
                                                                         
                                            </div>
                                            <button type="button" class="btn btn-info mb-control" data-box="#message-box-info" >Forgot Your Password?</button>
                                     </div>
                  		</div>                
                </li>
                	</ul>   
                    
                    
                    <li class="xn">
                      <div align="center"><br></div>
                  </li>
                <?php
		  if(isset($_REQUEST['adminLogin']))
		  {
				include 'connect.php';
				$email=$_REQUEST['adminName'];
				$pass=$_REQUEST['adminPass'];
				if($email=="" or $pass=="")
				{
					echo "<div class='alert alert-danger' role='alert' align='center'>
                                <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button> Please enter your Username or Password to proceed. </div>	";
				
				
				}
				else
				{
					$sql="select * from student where email='$email' AND password='$pass';";
					$run=mysqli_query($con,$sql);
					$nor=mysqli_num_rows($run);
					if($nor==0)
					{
						echo "<div class='alert alert-danger' role='alert'>
                                <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                                <strong>Oh snap!</strong> Either your username or your password is invalid. </div>	"; 
					}
					else
					{
						$rw=mysqli_fetch_array($run,MYSQLI_NUM);
						$_SESSION['userlogin']=1;
						$_SESSION['userId']=$rw[0]; 
						echo "<META HTTP-EQUIV='Refresh' Content='0; URL=profile.php'>";
					}
				}
			}	
          
          
          ?>     
                
                </form>
                
                <li class="xn">
                      <div align="center"><br></div>
                  </li>
                                      
                	<ul class="x-navigation x-navigation-custom">    
                <li class="xn">
                        <div class="form-group" style="float: right; margin-right: 20px;">
                                     <div class="input-group">
                                            <div class="input-group-addon">
                                                                         
                                            </div>
                                          <a href='register.php'> <button type="button" class="btn btn-success btn-rounded btn-block">Register Here</button></a>
                                     </div>
                  		</div>                
                </li>
                	</ul> 
                
                <!-- END X-NAVIGATION -->
          </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last" style="float: right;">
                        <a href="#"><span class="fa fa-key"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                        <li class="">
                        <a href="admin/index.php" target="_blank"><span class="fa fa-key"></span> <span class="xn-text">Admin Login</span></a>                    </li>
                        <!--<li><a class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a></li>-->
                        </ul>                        
                    </li> 
                    <li class="xn" style="text-align:right;float: right;margin-top: 15px; color: white;">The LNM Institute of Information Technology, Jaipur</li>
                    
        <!-- END POWER OFF -->                    
                </ul>
                
                <!-- END X-NAVIGATION VERTICAL -->                    
                
                <!-- START BREADCRUMB --><!-- END BREADCRUMB -->                

              <div class="page-title"><a href="index.php">Home</a>&nbsp;&nbsp; > &nbsp;&nbsp;New Registration</div>                               
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap"><br>
                  <div class="row">
                  <div class="block">
                  <h4><b>Register Here</b></h4>
                  
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
					
					$createdDate = date("Y-m-d H:i:s");
					$createdBy = "Student";
					
					$sel="select * from student where rollNo='$rollNo' and mobile='$mobile' ";
					$res=mysqli_query($con,$sel);
					if(mysqli_num_rows($res)!=0){
					echo "<div class='alert alert-danger' role='alert'>
													<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
													<strong>Sorry!</strong>&nbsp;This Alumni is already present in the database
						  </div>";					} 
					else {
					$pp_name=$_FILES["profilePic"]["name"];
					$profilePic = time().$pp_name;
					if(isset($pp_name))
					{
					move_uploaded_file($_FILES["profilePic"]["tmp_name"], "profilePic/" . $profilePic);
					}
					
					
					$sql="insert into student (createdDate,createdBy,isDisabled,name,rollNo,batch,currentAddr,permanentAddr,mobile,otherContact,currentOrganisation,gender,achievements,previousOrganisation,email,password,major,photo,dob) values ('$createdDate','$createdBy','0','$name','$rollNo','$batch','$currentAddr','$permanentAddr','$mobile','$otherContact','$currentOrganisation','$gender','$achievements','$previousOrganisation','$email','$password','$major','$profilePic','$dob');";
					mysqli_query($con,$sql) or die(mysqli_error($con));
					
					
					echo "<div class='alert alert-success' role='alert'>
                                <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                                <strong>Congrats!</strong> You have been registered successfully. Please Login to continue. Remember you first time password is your Roll Number.
						  </div>";
}
					
			  }
?> 
                             <div class="wizard">                                
                                    <ul>
                                        <li>
                                            <a href="#step-1">
                                                <span class="stepNumber">1</span>
                                                <span class="stepDesc">Personal Details<br /><small>Details Related to LNMIIT</small></span>                                            </a>                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <span class="stepNumber">2</span>
                                                <span class="stepDesc">Current Details<br /><small>Where the alumni is currently working?</small></span>                                            </a>                                        </li>
                                        
                                    </ul>

                              <!-------------------------Personal Details------------------------------>      

                                  <div id="step-1">  
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name :</label>
                                        <div class="col-md-4">
                                            <input name="name" type="text" required class="form-control" id="name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Profile Picture :</label>
                                          <div class="col-md-5">
                                            <input type="file" class="file" name="profilePic" id="profilePic" data-preview-file-type="image"/>
                                    	  </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Mobile No. :</label>
                                        <div class="col-md-2">
                                            <input name="mobile" type="text" required class="form-control" id="mobile"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Other Contact :</label>
                                        <div class="col-md-2">
                                            <input name="otherContact" type="text" class="form-control" id="otherContact"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Permenant Address :</label>
                                        <div class="col-md-4">
                                            <textarea name="permanentAddr" rows="5" required class="form-control" id="permanentAddr"></textarea>                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Batch :</label>
                                        <div class="col-md-3">
                                         <select name="batch" id="batch">
                                           <option>Select Batch</option>
                                           <option selected value="Y-03">Y-03</option>
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
                                            <input name="rollNo" required type="text" class="form-control" id="rollNo"/>
                                        </div>(This will be your initial password also)
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
                                             <textarea name="achievements" rows="5" class="form-control" id="achievements"></textarea>                                      </div>
                                    </div>
									
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Email :</label>
                                          <div class="col-md-5">
                                                <input name="email" required type="text" class="form-control" id="email"/>
                                      </div>
                                    </div>   
                                    
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Major :</label>
                                      <div class="col-md-5">
                                        <label>
                                        <select name="major" id="major">
                                          <option>Select Branch</option>
                                          <option selected value="CSE">CSE</option>
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
                                                <input name="dob" type="text" class="form-control datepicker" >
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>                                            </div>
                                        </div>
                                    </div>                             
                             </div>
                              <!-------------------------Current------------------------------>      
                                    <div id="step-2">

                                        <div class="form-group">
                                        <label class="col-md-2 control-label">Current Organisation :</label>
                                        <div class="col-md-4">
                                            <input name="currentOrganisation" required type="text" class="form-control" id="currentOrganisation"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Current Address :</label>
                                        <div class="col-md-4">
                                            <textarea name="currentAddr" rows="5" required class="form-control" id="currentAddr"></textarea>                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Previous Organisation :</label>
                                        <div class="col-md-4">
                                            <input name="previousOrganisation" type="text" class="form-control" id="previousOrganisation"/>
                                        </div>
                                    </div>
                                            <div class="panel-footer">
                                        <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">Finish</button>
                                    </div>
                                                                                                       
                                 </div>                                
                                    
                                    
                                 
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
 <div class="message-box message-box-info animated fadeIn" id="message-box-info">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-info"></span> Forgot your Password ?</div>
                    <div class="mb-content">
                        <p>Please mail us at <a href="mailto:rajatgpt308@gmail.com"> <font color="#CC0000">rajatgpt308@gmail.com</font></a> to get your forgotten password.</p>
                    </div>
                    <div class="mb-footer">
                        <button class="btn btn-default btn-lg pull-right mb-control-close">Close</button>
                    </div>
                </div>
            </div>
        </div>
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






