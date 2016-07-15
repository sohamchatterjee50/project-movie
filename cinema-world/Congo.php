<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Congratulation !</title>
<link rel="stylesheet" type="text/css" href="css/congo.css">
</head>

<body>

<section>
<div align="center" id="container">
<h1>Congratulation !</h1>
<h2>You have successfully booked your ticket.</h2>
<form action="PrintTicket.php" method="post">
<input id="Print_ticket" type="button" value="Print Your Ticket Here !" onClick="javascript: submit()"/>
</form>
</div>

</section>
<?php include_once("footer.php");?>