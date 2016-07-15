<?php
$db=mysql_connect("localhost","root","") or die(mysql_error());
$db_sel=mysql_select_db("cinema",$db) or die(mysql_error());
//$con=mysqli_connect("localhost","root","","cinema");
?>