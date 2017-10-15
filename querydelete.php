<?php
session_start();
if(!isset($_SESSION['userlogin']))
{
header("Location:index.php");
}
$userId=$_SESSION['userId'];

?>

<?php 
if(isset($_REQUEST['id']))
{
$id=$_REQUEST['id'];
include 'connect.php';
$modifiedDate = date("Y-m-d H:i:s");
$sql="delete from query where queryId='$id';";
mysqli_query($con,$sql);
echo "<META HTTP-EQUIV='Refresh' Content='0; URL=queries.php'>";
	 
}
else
{
header("Location:queries.php");
}
?>