<?php  
  
$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"cinema");  
?>



<?php  

$delete_id=$_GET['del'];  
$delete_query="delete  from signup WHERE id='$delete_id'";//delete query  
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
