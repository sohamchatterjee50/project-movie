<?php include_once("selectfunction.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Print Ticket</title>
<style>
body
{
	margin-top:5%;
	width:100%;
	height:100%;
}
table
{
	width:75%;
}
#container
{
	
}
.printbutton
{
	min-width:120px;
	min-height:30px;
	border-radius:3px;
	box-shadow:0 0 10px #D7EBF9;
	background-color:#00B5E0;
	color:White;
	cursor:pointer;
}

.borderstyle
{
	border-right-style:none;
}
.borderleft
{
	border-left-style:none;
}
.tdstyle
{
	font-family: "Arial", Helvetica, sans-serif;
	color: #2779AA;
	font-weight:300;
}
#tdhead
{
	font-family: "Arial", Helvetica, sans-serif;
  font-size: 120%;
  color:#2779AA;
  font-weight:400;
}
#please
{
	font-family: "Arial", Helvetica, sans-serif;
	color:#00B5E0;
	font-weight:300;
	font-size:18px;
}
#thank
{
	font-family: "Arial", Helvetica, sans-serif;
	color:green;
	font-weight:300;
}
</style>

</head>

<body>
<div id="container" align="center">
<table  border="2px" bordercolor="#00B5E0" cellpadding="6px" align="center" >
<tr>
<td class="borderstyle" align="left" width="40%">
Cine World
</td>
<td class="borderleft" align="center" width="40%">
<table align="right" width="auto">
<tr>
<td  align="right" width="auto">DATE :</td>
<td><?php echo date("d/m/20y"); ?></td>
</tr>
<tr>
<td align="right" width="auto">TID NO.:</td>
<td><?php
        $length = 5;
    $id = '';
    for ($i=0;$i<$length;$i++){
        $id .= rand(1, 9);

    }
echo 'TIN'.$id;
?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<table  border="2px" bordercolor="#00B5E0" cellpadding="8px" align="center">
  <tbody>
    <tr>
      <td id="tdhead" width="80%" colspan="4" align="center">TICKET</td>
  
    </tr>
    <tr>
      <td class="tdstyle" width="40%" colspan="2">Movie Name :</td>
      <td width="40%" colspan="2"><?php echo select_option_list('booking_details-1','id','movie_name');?></td>
    </tr>
    <tr>
      <td class="tdstyle" width="20%">Date :</td>
      <td width="20%"><?php echo fordate('booking_details-1','id','date');?></td>
      <td class="tdstyle" width="20%">Time :</td>
      <td width="20%"><?php echo select_option_list('booking_details-1','id','show_timing');?></td>
    </tr>
    <tr>
      <td class="tdstyle" width="40%" colspan="2">Theater Name :</td>
      <td width="40%" colspan="2"><?php echo select_option_list('booking_details-1','id','theater_name');?></td>
    </tr>
    
      <tr>
      <td class="tdstyle" width="20%">Number of Tickets :</td>
      <td width="20%"><?php echo select_option_list('booking_details-2','id','tickets_quantity');?></td>
      <td class="tdstyle" width="20%">Seat Number :</td>
      <td width="20%"><?php echo forseat('seat_map','seat_id','seat_name');?></td>
    </tr>
    
    <tr>
      <td class="tdstyle" width="40%" colspan="2">City :</td>
      <td width="40%" colspan="2"><?php echo select_option_list('booking_details-1','id','city_name');?></td>
    </tr>
    
    <tr>
      <td class="tdstyle" width="40%" colspan="2">Customer Email ID :</td>
      <td width="40%" colspan="2"><?php echo select_option_list('booking_details-2','id','email');?></td>
    </tr>
    
    <tr>
      <td class="tdstyle" width="40%" colspan="2">Customer Phone Number :</td>
      <td width="40%" colspan="2"><?php echo select_option_list('booking_details-2','id','contact');?></td>
    </tr>
    
    
    <tr>
      <td colspan="4" align="center">
      <input class="printbutton" type="button" value="Print" onClick="window.print()"/>
      <a href="welcome.php">
      <input class="printbutton" type="button" value="Home"/>
      </a>
      </td>
      
    </tr>
  </tbody>
</table>
</div>
<br/>
<p id="please" align="center">Please carry this ticket on the venue.</p>
<p id="thank" align="center">Thank you visit Again.</p>
</body>
</html>