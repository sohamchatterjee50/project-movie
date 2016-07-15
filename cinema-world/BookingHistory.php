<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Booking History</title>
<link rel="stylesheet" type="text/css" href="css/BookingHistory.css">
</head>

<body>
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
?>

<?php
 
$query1 = $MySQLi_CON->query("SELECT `booking_details-1`.`city_name`, `booking_details-1`.`movie_name`, `booking_details-1`.`theater_name`, `booking_details-1`.`date`, `booking_details-2`.`email`, `booking_details-2`.`tickets_quantity`,`total_amount`.`amount` FROM `booking_details-1` INNER JOIN `booking_details-2` ON `booking_details-2`.`id`=`booking_details-1`.`id`-1 INNER JOIN `total_amount` ON `booking_details-2`.`id`=`total_amount`.`id`+1 WHERE `email`='".$_SESSION['email']."'");

 
$MySQLi_CON->close();
?>
<section>
<div id="container">
<div id="box" align="center">
	<legend>Booking History</legend>
      <fieldset>
      <table id="bookinghistorytable" border="1px" width="100%">
      <tr>
      <!--td class="tdhead" align="center">Select</td-->
      <td class="tdhead" align="center">Movie</td>
      <td class="tdhead" align="center">Theater</td>
      <td class="tdhead" align="center">City</td>
      <td class="tdhead" align="center">Quantity</td>
      <td class="tdhead" align="center">Booking Date</td>
      <td class="tdhead" align="center">Amount Paid</td>
      <!--td class="tdhead" align="center">Delete</td-->
      </tr>
      <?php
      while($row1=$query1->fetch_assoc())
      {
		?>
      <tr>
      <!--td align="center"><input type="checkbox" name="chk1"/></td-->
      <td align="center"><?php echo $row1['movie_name']; ?></td>
      <td align="center"><?php echo $row1['theater_name']; ?></td>
      <td align="center"><?php echo $row1['city_name']; ?></td>
      <td align="center"><?php echo $row1['tickets_quantity']; ?></td>
      <td align="center"><?php echo $row1['date']; ?></td>
      <td align="center"><?php echo $row1['amount']; ?></td>
      <!--td align="center"><a id="X" href="#">X</a></td-->
      </tr>
      <?php
		
		
      }
	  ?>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
   <!--td>&nbsp;</td-->
      <!--td>&nbsp;</td-->
      </tr>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    <!--td>&nbsp;</td-->
      <!--td>&nbsp;</td-->
      </tr>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
     <!--td>&nbsp;</td-->
      <!--td>&nbsp;</td-->
      </tr>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
     <!--td>&nbsp;</td-->
      <!--td>&nbsp;</td-->
      </tr>
      </table>
      </fieldset>
    </div>
</div>
</section>
<?php include_once("footer.php");?>
</body>
</html>