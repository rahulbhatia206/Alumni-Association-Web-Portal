<?php

// Connection File
 $con=mysqli_connect("localhost","root","","arm_sepm");
	  if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();//error in connection
 	    }
mysqli_select_db($con,"arm_sepm");
?>