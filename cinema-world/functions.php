<?php
//function for generating the dynamic option list

function get_option_list($table,$col_id,$col_value,$sel=0)
{
	$db = mysqli_connect("localhost","root","","cinema") or die(mysql_error());
	$sql="SELECT * FROM $table order by $col_id";
	$rs=mysqli_query($db,$sql) or die(mysql_error());
	$option_list="<option></option>";
	while($data=mysqli_fetch_assoc($rs))
	{
		$option_list.="<option value='$data[$col_value]'>$data[$col_value]</option>";
	}
	return $option_list;

}
