<?php

  $DB_host = "localhost";
  $DB_user = "root";
  $DB_pass = "";
  $DB_name = "cinema";
  
  $MySQLi_CON = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLi_CON->connect_errno)
     {
         die("ERROR : -> ".$MySQLi_CON->connect_error);
     }


?>


<?php
session_start();
ob_start();


if(isset($_POST['email']) && isset($_POST['password']))
{
	if(isset($_POST['logged']))
	{
	$email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
	$password = $MySQLi_CON->real_escape_string(trim($_POST['password']));
	
	$query = $MySQLi_CON->query("SELECT * FROM signup WHERE email='$email'");
	$row=$query->fetch_array();
	
	
	
		if(password_verify($password, $row['password']))
 		{
			$_SESSION['email'] = $email;
  			$_SESSION['fname']=$row['fname'];
			echo "<script>alert('Successfully Login!!!');</script>";
  			header("Location: welcome.php");
 		}
 		else
 		{
  			echo "<script>alert('Email or Password does not exists!!!');</script>";
 		}
 	
	}
	$MySQLi_CON->close();
}

?>


