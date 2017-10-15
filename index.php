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
.style2 {
	font-family: verdana;
	font-size: 13px;
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
                    <div align="center">                        </div>
                        
                        <form action="" class="form-horizontal" method="post">
                    <ul class="x-navigation x-navigation-custom">    
                <li class="xn">
                        <div class="form-group" style="float: right; margin-right: 20px;">
                                     <div class="input-group">
                                            <div class="input-group-addon">
                                                  <span class="fa fa-user"></span>                                            </div>
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
                                                  <span class="fa fa-lock"></span>                                            </div>
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
                                            <div class="input-group-addon">                                            </div>
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
                                            <div class="input-group-addon">                                            </div>
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
                                            <div class="input-group-addon">                                            </div>
                                          <a href='register.php'> <button type="button" class="btn btn-success btn-rounded btn-block">Register Here</button></a>                                     </div>
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

              <div class="page-title"></div>                               
                
                <!-- PAGE CONTENT WRAPPER -->
              <div class="page-content-wrap">

                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="panel-title"><strong>Welcome to LNMIIT ALUMNI Association</strong></h2>
                                </div>
                </div>
                  
                  

                    <div class="col-md-10" style="margin-left: 25px; margin-right: 50%;" align="center"	>
                  <div class="panel-title ">
                    <div align="center"><strong>From the Director's Desk</strong></div>
                      </div><br>
                  <a href="#"><img src="img/director.jpg" alt="" hspace="30" vspace="30" style="float: left;"></a>
                    <p style="margin-left: 50px"><div style="font-family: "Times New Roman", Times, serif;font-size: 20px;">
                      <h4 align="left" class="style2" style="font-family: "Times New Roman", Times, serif;font-size: 25px;">Dear Alumni,<br>
                        <br>
                      Greetings from The LNMIIT, Jaipur.<br>
                      <br>
                      The LNM Institute of Information Technology, Jaipur is pleased to provide you this platform to know about each other. Being a young institute, positive feedback from the industry and recruiters about our students has been both a motivation and insight.<br>
                      The students of LNMIIT undergo rigorous academic training in the areas of Computer Science and Engineering, Electronics and Communication Engineering and Computer and Communication Engineering. We have recently started with two more streams from 2013: Mechanical-Mechatronics Engineering and Mathematics and Information Technology. Each of our programmes is designed to give the students an optimum blend with theory as well as practical knowledge. In addition, numerous extracurricular and social activities on the campus helps them develop soft-skills and become well rounded and refined personalities. It is this that differentiates our students from the others and makes them a valuable part of the organization they join.<br>
                      LNMIIT has been a bake-house of most ripe and versatile brains. We strive to produce world class engineers through world-class faculty, research, state-of-the-art infrastructure, industrial relations and an evolving curriculum.<br>
                      The Training and Placement Cell of the LNMIIT in a channel between the industry and the students to facilitate both the entities in choosing the best-suited for them. We are proud to present and show-case our budding engineers who are the future of our country.<br>
                      We extend a warm welcome to all the participating organizations. We look forward to a vegete and enduring association and expect it to grow and strenghten in the years to come. <br>
                      <br>
                      <br>
                      S. S. Gokhale <br>
                      Director <br>
                      The LNMIIT, Jaipur</h4>
                    </p></div>
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
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END PAGE PLUGINS --> 

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_4/html/layout-nav-custom.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Dec 2014 17:26:51 GMT -->
</html>





