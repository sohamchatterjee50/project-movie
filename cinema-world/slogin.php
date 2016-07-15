


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
echo("Email $email is already registered, Please try another one!");  

    header("Location:slogin.php");

    }  
  
  
  else
  {
  
  $new_password = password_hash($password, PASSWORD_DEFAULT);
  
//insert the user into the database.  
    $sql="INSERT INTO `signup` (`fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname', '$email', '$new_password')"; 
   $rs=mysql_query($sql) or die(mysql_error());
echo "Successfully registered,please log in to continue";
header("Location:slogin.php");
   } 
}  
  
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css_login/normalize.css">

    
        <link rel="stylesheet" href="css_login/style.css">

    
    
    
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
			   </div>
              <input name="fname" type="text" required autocomplete="off"    />
           
        <br>
		
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
			  </div>

              <input name="lname"  type="text" required autocomplete="off"  />
			  <br>
                      </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
			 </div>
            <input name="email" type="email" required autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email for e.g: xyz@xyz.domain" required  />
         <br>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
			 </div>
            <input  name="password" type="password" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  />
         <br>
          
          <button type="submit" class="button button-block" name="register"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
           </div>
		   <br>
		   <br>
		    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email for e.g: xyz@xyz.domain" required autocomplete="off" name="email"/>
          <br>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
           </div>
		    <input type="password" required autocomplete="off" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
          
          <br>
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block" name="logged"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="index.js"></script>

    
    

  






    
  </body>
</html>













