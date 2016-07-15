<?php  
session_start();  
  ?>

 <?php
 
if($_REQUEST['act'])
{
	$_REQUEST['act']();
}
//function for saving record of booking details-1

function booked_details()
{
	$r=$_REQUEST;
	$db = mysqli_connect("localhost","root","","") or die(mysql_error());
	$sql="INSERT INTO `cinema`.`booking_details-1` (`city_name`, `movie_name`, `theater_name`, `date`, `show_timing`, `ticket_cost`) VALUES ('$r[city_name]', '$r[m_name]', '$r[t_name]', '$r[dname]', '$r[time_name]', '$r[tcost]');";

$rs=mysqli_query($db,$sql) or die(mysql_error());
if($rs)
{
	header('Location:BookingPage2.php');
}
}
?>