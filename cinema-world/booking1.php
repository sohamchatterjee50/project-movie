<?php include_once("functions.php");?>
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

<body style="background-image:url(images/2.jpg)">

<section>
<form action="booked_details-1.php" method="post">

<div id="box" align="center">
      <fieldset>
	  
        <legend  style="color:#FFFFFF">Booking Details</legend>
		<table id="padtable" align="center" width="100%">
        <tr>
        <td width="50%" align="center" class="padtd">
          <label for="city_name">City<span style="color:red;">*</span></label>
          </td>
          <td width="50%" align="center" class="padtd">
          <select id="city_name" name="city_name" required autofocus>
          <?php echo get_option_list('city','city_id','city_name');?>
          </select>
          </td>
        </tr>    
         <tr>
        <td align="center"  width="50%" class="padtd">
          <label for="movie_name">Movie<span style="color:red;">*</span></label>
          </td>
          <td align="center" class="padtd">
          <select id="movie_name" name="m_name" required autofocus>
            <?php echo get_option_list('movie','m_id','m_name');?>
          </select>
          </td>
        </tr>

        <tr>
        <td align="center" class="padtd">
          <label for="theaters">Theaters<span style="color:red;">*</span></label>
          </td>
          <td align="center" class="padtd">
          <select name="t_name" required id="theaters">
            <?php echo get_option_list('theatre','t_id','t_name');?>
           </select>
          </td>
        </tr>

 <tr>
        <td align="center" class="padtd">
          <label for="Show_date">Date<span style="color:red;">*</span></label>
          </td>
          <td align="center" class="padtd">
          <select name="dname" id="Show_date" required>
          <?php echo get_option_list('dates','did','dname');?>
          </select>
          </td>
        </tr>
         
        
        <tr>
        <td align="center" class="padtd">
          <label for="Show_timing">Show Timing<span style="color:red;">*</span></label>
          </td>
          <td align="center" class="padtd">
          <select name="time_name" id="Show_timing" required>
          <?php echo get_option_list('times','time_id','time_name');?>
          </select>
          </td>
        </tr>
         
		<tr>
        <td align="center" class="padtd">
        	<label for="ticket_class">Ticket Class<span style="color:red;">*</span></label>
            </td>
            <td align="center" class="padtd">
            <select name="tcost" required id="ticket_class">
            <?php echo get_option_list('ticket','tid','tcost');?>
          </select>
          </td>
        </tr>
       
        
        <tr>
        <td align="right" class="padtd">
        <a href="welcome.php">
        <input type="button" id="submit" value="Back" />
        </a>
        </td>
        <td align="left" class="padtd">
          <input type="submit" id="submit" value="Proceed" />
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
</section>

<?php include_once("footer.php");?>

</body>
</html>
