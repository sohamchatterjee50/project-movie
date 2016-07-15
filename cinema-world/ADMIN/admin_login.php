
 
 <?php
 
 $dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"cinema"); 
 
 ?> 
<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/24/2014 
 * Time: 3:26 AM 
 */  
 
  
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('view_users.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>  