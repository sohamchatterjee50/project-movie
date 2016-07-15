<?php
//function for generating the dynamic option list

function select_option_list($table,$col_id,$col_value,$sel=0)
{
	$db = mysqli_connect("localhost","root","","cinema") or die(mysql_error());
	$sql="SELECT `$col_id`,`$col_value` FROM `$table` order by `$col_id` DESC LIMIT 1";
	$rs=mysqli_query($db,$sql) or die(mysql_error());
	$data=mysqli_fetch_assoc($rs);
	$option_list="<option>$data[$col_value]</option>";
	return $option_list;

}

function fordate($table,$col_id,$col_value,$sel=0)
{
	$db = mysqli_connect("localhost","root","","cinema") or die(mysql_error());
	$sql="SELECT `$col_id`,`$col_value` FROM `$table` order by `$col_id` DESC LIMIT 1";
	$rs=mysqli_query($db,$sql) or die(mysql_error());
	$data=mysqli_fetch_assoc($rs);
	$date="$data[$col_value]";
	return $date;

}
function forseat($table,$col_id,$col_value,$sel=0)
{
	$db = mysqli_connect("localhost","root","","cinema") or die(mysql_error());
	$sql="SELECT `$col_id`,`$col_value` FROM `$table` order by `$col_id` DESC LIMIT 1";
	$rs=mysqli_query($db,$sql) or die(mysql_error());
	$data=mysqli_fetch_assoc($rs);
	$seat="$data[$col_value]";
	return $seat;

}
?>