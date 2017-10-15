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

              <div class="page-title">My Queries</div>                               
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                  <div class="row">
                    
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">My Queries</h3>
                        	           <div class="form-group">
                                          <div align="right">
                                            <a href="addquery.php">
                                            <button type="button" class="btn btn-primary">Add Query</button>
                                          </a></div> 
           	            </div>
                      </div>
                      <div class="panel-body">                        
                        
<br>
                        </h5>
                        <div class="table-responsive">
                          
	<?php
	    include 'connect.php';
		$sql="select * from query where studentId='$userId'";
		$run=mysqli_query($con,$sql);
		$nor=mysqli_num_rows($run);
		if($nor==0)
		{
  		echo "<strong>No Queries got from you yet.</strong>";
  		}
  		else
  		{
		echo "<table class='table datatable'>
                            <thead>
                              <tr>
                                <th>Serial No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Email</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>";
		$sno=1;
		while($rw=mysqli_fetch_array($run,MYSQLI_NUM))
  		{
		if($rw[7]==1) //querySeen==1 ie query is Seen
				{
					echo "<tr>
						 <td width='20'>$sno</td>
						 <td>$rw[1]</td>
						 <td>$rw[2]</td>";
						
						$sqlq="select * from student where id='$rw[6]';"; 
						$runq=mysqli_query($con,$sqlq);
						$rwq=mysqli_fetch_array($runq, MYSQLI_NUM);
						 
						 
						 
						 
		$sno=$sno+1;
						

					echo "<td>$rw[3]</td>
						<td ><button type='button' class='btn btn-success active'>Seen<br></button>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
						 
						 <a href='javascript:void(0);' onClick='delete_trans($rw[0]);'><button class='btn btn-danger btn-rounded btn-condensed btn-sm'><span class='fa fa-times'></span></button></a><br><br>
<br>
						 </td>
						</tr>";
				}
			else
				{
					
					echo "<tr>
						 <td width='20'>$sno</td>
						 <td>$rw[1]</td>
						 <td>$rw[2]</td>";

					$sqlq="select * from student where id='$rw[6]';"; 
						$runq=mysqli_query($con,$sqlq);
						$rwq=mysqli_fetch_array($runq, MYSQLI_NUM);
						 
						 
					
					echo "<td>$rw[3]</td><td >
					<button type='button' class='btn btn-danger active'>Not Seen<br></button>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
							
							<a href='javascript:void();' onClick='delete_trans($rw[0]);'><button class='btn btn-danger btn-rounded btn-condensed btn-sm'><span class='fa fa-times'></span></button></a><br>
							 </td>
							</tr>";
		$sno=$sno+1;
				}
			}
  		
  		echo "</tbody></table>";
  		}
	  ?>
                        </div>
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
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    

        <!-- END PAGE PLUGINS --> 

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
	<script>
		function delete_trans(number){
			if(confirm("Do you really want to Delete ?"))
				window.location.href="querydelete.php?id="+number;
			else
				return false;
		}
	</script>

    </body>
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_4/html/layout-nav-custom.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Dec 2014 17:26:51 GMT -->
</html>


