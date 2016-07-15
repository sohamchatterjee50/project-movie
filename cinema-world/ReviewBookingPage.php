<?php include_once("selectfunction.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Review Booking Details</title>
<link rel="stylesheet" type="text/css" href="css/BookingPage.css"> 
</head>

<body>

<section id="sectionbackground">
<form action="Payment.php" method="post">

<div id="box" align="center">
      <fieldset>
        <legend>Review Booking Details</legend>
		<table id="padtable" align="center" width="100%">
        <tr>
        <td width="50%" align="center" class="padtd">
          <label for="city_name">City</label>
          </td>
          <td width="50%" align="center" class="padtd">
          <select id="city_name" name="city_name" required autofocus>
            <?php echo select_option_list('booking_details-1','id','city_name');?>
          </select>
          </td>
        </tr>    
        <tr>
        <td align="center" class="padtd">
          <label for="movie_name">Movie</label>
          </td>
          <td align="center" class="padtd">
          <select id="movie_name" name="movie_name" required autofocus>
            <?php echo select_option_list('booking_details-1','id','movie_name');?>
          </select>
          </td>
        </tr>

        <tr>
        <td align="center" class="padtd">
          <label for="theaters">Theaters</label>
          </td>
          <td align="center" class="padtd">
          <select id="theaters" required>
            <?php echo select_option_list('booking_details-1','id','theater_name');?>
          </select>
          </td>
        </tr>

        <tr>
        <td align="center" class="padtd">
          <label for="date">Date</label>
          </td>
          <td align="center" class="padtd">
          <input type="text" name="date" id="date" value="<?php echo fordate('booking_details-1','id','date');?>"/>
          </td>
        </tr>
        
        <tr>
        <td align="center" class="padtd">
          <label for="Show_timing">Show Timing</label>
          </td>
          <td align="center" class="padtd">
          <select id="Show_timing" required>
            <?php echo select_option_list('booking_details-1','id','show_timing');?>
          </select>
          </td>
        </tr>
       
        <tr>
        <td align="center" class="padtd">
          <label for="tickets_quantity">No. of Tickets</label>
          </td>
          <td align="center" class="padtd">
          <select id="tickets_quantity" name="tickets_quantity" required autofocus>
          <?php echo select_option_list('booking_details-2','id','tickets_quantity');?>
          </td>
        </tr>
		<tr>

        <td align="center" class="padtd">
        	<label for="ticket_class">Ticket Class</label>
            </td>
            <td align="center" class="padtd">
            <select id="ticket_class" required>
            <?php echo select_option_list('booking_details-1','id','ticket_cost');?>
          </select>
          </td>
        </tr>
        
        <tr>
        <td align="center" class="padtd">
          <label>Seat Selected</label>
          </td>
          <td align="center" class="padtd">
          <span><input id="Seat_selected" type="text" name="Seat_selected" value="<?php echo forseat('seat_map','seat_id','seat_name');?>"/>
          </span>
          </td>
        </tr>
        
        <tr>
        <td align="center" class="padtd">
          <label><span style="color:#D04528">Payment Amount</span></label>
          </td>
          <td align="center" class="padtd">
          <span><input id="total_price" type="text" name="total_price" value="<?php
function value($table,$col_id,$col_value,$sel=0)
{
	$db = mysqli_connect("localhost","root","","cinema") or die(mysql_error());
	$sql="SELECT `$col_id`,`$col_value` FROM `$table` order by `$col_id` DESC LIMIT 1";
	$rs=mysqli_query($db,$sql) or die(mysql_error());
	$data=mysqli_fetch_assoc($rs);
	$value="$data[$col_value]";
	return $value;
}

$a = value('booking_details-2','id','tickets_quantity');
$b = value('booking_details-1','id','ticket_cost');
if($b==70)
{
	
	$c = $a*$b;
}
elseif($b==60)
{
	$b=70;
	$c = $a*$b;
}
else
{
	
	$c = $a*$b;
}

echo $c;
?>"/>
<?php
$db = mysqli_connect("localhost","root","","cinema") or die(mysql_error());
	$sql="INSERT INTO `cinema`.`total_amount` (`amount`) VALUES ('$c');";

$rs=mysqli_query($db,$sql) or die(mysql_error());
?>
          </span>
          </td>
        </tr>
        <tr>
        <td align="right" class="padtd">
        <a href="booking1.php">
         <input type="button" id="back" value="Cancel"/>
         </a>
         </td>
         <td align="left" class="padtd">
          <input type="submit" id="submit" value="Proceed to Pay"/>
        </td>
        </tr>
        </table>
      </fieldset>
      </div>
    </form>
  
      <p align="center" id="disount_title">Discounts:</p>
      <p align="center" class="disc">5% discount if show is on weekday</p>
      <p align="center" class="disc">10% discount if number of booked shows >= 10</p>
       
</section>

<?php include_once("footer.php");?>

</body>
</html>
