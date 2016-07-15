 <?php
 
if($_REQUEST['act'])
{
	$_REQUEST['act']();
}
//function for saving record of booking details-2

function booked_details()
{
	$r=$_REQUEST;
	$db = mysqli_connect("localhost","root","","cinema") or die(mysql_error());
	$sql="INSERT INTO `cinema`.`booking_details-2` (`email`, `contact`, `tickets_quantity`) VALUES ('$r[email]', '$r[contact]', '$r[tickets_quantity]');";

$rs=mysqli_query($db,$sql) or die(mysql_error());
if($rs)
{
	header('Location:SeatMapping.php');
}
}
?>