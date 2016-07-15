<?php include_once("db_connect.php");
if(isset($_POST['register']))  
{  
    $fname=$_POST['fname'];//here getting result from the post array after submitting the form.  
    $lname=$_POST['lname'];//same  
    $email=$_POST['email'];//same  
     $password=$_POST['password'];
  
    if($fname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
    if($lname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
    if($password=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
 if(!ereg("^[A-Za-z0-9\.\-\_]*[@]{1}[A-Za-z0-9\.|-|_]*[.]{1}[a-z]{2,5}$",$email))
 {
  echo "<script>alert('Invalid email format')</script>";
 

 
 }

 
   $check_email_query="select * from signup WHERE email='$email'";  
    $run_query=mysql_query($check_email_query,$db);  
  $count=mysql_num_rows($run_query);
    if($count>0)  
    {  
echo "<script>alert('Email $email is already registered, Please try another one!')</script>";  

 

    }  
  
  
  else
  {
  
  $new_password = password_hash($password, PASSWORD_DEFAULT);
  
//insert the user into the database.  
    $sql="INSERT INTO `signup` (`fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname', '$email', '$new_password')"; 
   $rs=mysql_query($sql) or die(mysql_error());
   } 
}  
  
  



?>

