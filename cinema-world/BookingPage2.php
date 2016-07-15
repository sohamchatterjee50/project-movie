<?php include_once("functions.php");?>
<?php  
session_start();  
  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Booking Form</title>
<link rel="stylesheet" type="text/css" href="css/BookingPage.css">
<style>
body{

background-size:cover;
background-repeat:no-repeat;
background-attachment:fixed;

}
table{
background:#FFFFFF;
}
</style> 
</head>

<body background="images/theatre.jpeg">

<section>
<form action="booked_details-2.php" method="post">

<div id="box" align="center">
      <fieldset>
        <legend>Booking Details-2</legend>
		<table id="padtable" align="center" width="100%">
        
        <tr>
        <td width="50%" align="center" class="padtd">
          <label for="email">Email<span style="color:red;">*</span></label>
          </td>
          <td width="50%" align="center" class="padtd">
          <?php 
		  if(isset($_SESSION['email']))
		  {
			echo'<input type="email" name="email" id="email" value="'.$_SESSION['email'].'" required autofocus/>';  
		  }
		  else
		  {
          echo'<input type="email" name="email" id="email" required autofocus/>';
		  }
		  ?>
          </td>
        </tr>
        
        <tr>
        <td align="center" class="padtd">
          <label for="contact">Contact No.<span style="color:red;">*</span></label>
          </td>
          <td align="center" class="padtd">
          <?php 
		 
          echo'<input type="text" maxlength="10" pattern="[0-9]{10}" title="Please enter exactly 10 digits mobile number!" name="contact"  id="contact" required />';
		  
		  ?>
          </td>
        </tr>

        <tr>
        <td align="center" class="padtd">
          <label for="tickets_quantity">No. of Tickets<span style="color:red;">*</span></label>
          </td>
          <td align="center" class="padtd">
          <select id="tickets_quantity" name="tickets_quantity" required autofocus>
           <?php echo get_option_list('ticket_no','tno_id','tickets_quantity');?>
			</select>
          </td>
        </tr>
    
        <tr>
        <td align="right" class="padtd">
        <a href="booking1.php">
        <input type="button" id="submit" value="Back" />
        </a>
        </td>
        <td align="left" class="padtd">
          <input type="submit" id="submit" value="Book Tickets" />
        </td>
        </tr>
         <tr>
        <td align="center" colspan="2" class="padtd">
        <i id="mandatory">* mandatory fields</i>
        </td>
        </tr>
        </table>
      </fieldset>
      </div>
      <input type="hidden" name="act" value="booked_details"/>
    </form>
  
      <p align="center" id="disount_title">Discounts:</p>
      <p align="center" class="disc">5% discount if show is on weekday</p>
      <p align="center" class="disc">10% discount if number of booked shows >= 10</p>
       
</section>

<?php include_once("footer.php");?>

</body>
</html>
