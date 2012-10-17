<?php
session_start();
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>
<body>

<body background="images/cork.jpg" bgcolor="#330000"	>
<center>
<img src="images/welcome.jpg" alt=" MeDay" />
<img src="images/vieworder.gif" alt=" MeDay" />

	
	
<?php


include('config.php');
require('refresh4.php');
$orderid=$_POST['orderid'];
$grandtotal=$_POST['grandtotal'];
$transactioncode=$_POST['transactioncode'];

$status='Completed';
$mode='Cash';
$customer='customer';

mysql_query("INSERT INTO marias_orders (cusid, amountpaid, status, transactiondate, transactioncode, mode) VALUES('$cusid', '$grandtotal', '$status', '$trasactiondate', '$transactioncode', '$mode')");
?> 
<div style="margin:0 auto; width:500px; height:auto; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:right;"></div>
<div style="margin:0 auto; width:500px; height:auto; font-family:Arial, Helvetica, sans-serif; font-size:20px;">

<br />

Items:<br />
<span class="style2">
<?php
include('config.php');
$transactioncode=$_POST['transactioncode'];
$result = mysql_query("SELECT * FROM orderdetails1 where transactioncode = '$transactioncode'");
while($row1 = mysql_fetch_array($result))
{
echo $row1['name'].' '.$row1['size'].'&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;&nbsp;'.$row1['qty'].'<br>';
}
?>
</span><br />
<b>TOTAL PAYABLE:
<span class="style3">
<?php
include('config.php');
$transactioncode=$_POST['transactioncode'];
$result = mysql_query("SELECT sum(total) FROM orderdetails1 where transactioncode = '$transactioncode'");
while($row1 = mysql_fetch_array($result))
{
echo number_format($row1['sum(total)'], 2);
}
?>
</b>

</span><br /><br /></div>
<br /><img src ="images/getorder.jpg"><br /><br /><br />
<form action="refresh1.php" method="post">
<a href="makeneworder1.php"><img src="images/okay.jpg"></a>
</form>

</body>
</html>

