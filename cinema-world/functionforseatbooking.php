 <?php
 
if($_REQUEST['act'])
{
	$_REQUEST['act']();
}
//function for saving record of seat bookings
  
function seat_book()
{
	$db = mysqli_connect("localhost","root","","cinema") or die(mysql_error());
	$checkbox1=$_POST['seat'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($db,"INSERT INTO seat_map(seat_name)VALUES('$chk')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
	  header('Location:ReviewBookingPage.php');
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?> 