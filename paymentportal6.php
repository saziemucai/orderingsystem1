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
	
<?php


include('config.php');
$cusid=$_POST['cusid'];
$grandtotal=$_POST['grandtotal'];
$transactioncode=$_POST['transactioncode'];
$trasactiondate=date("m/d/Y");
$status='Completed';
$mode='Cash';
$customer='customer';

mysql_query("INSERT INTO marias_orders (cusid, amountpaid, status, transactiondate, transactioncode, mode) VALUES('$cusid', '$grandtotal', '$status', '$trasactiondate', '$transactioncode', '$mode')");
?> 
<center>
Date<strong>:<?php echo date("m/d/Y");?></strong>
<br />

<?php
include('config.php');
$memid=$_POST['cusid'];
$result = mysql_query("SELECT * FROM marias_members where id = '$memid'");
$row1 = mysql_fetch_array($result);


?>
Items:<br />
<span class="style2">
<?php
include('config.php');
$transactioncode=$_POST['transactioncode'];
$result = mysql_query("SELECT * FROM orderdetails where transactioncode = '$transactioncode'");
while($row1 = mysql_fetch_array($result))
{
echo $row1['pizzaname'].' '.$row1['pizasize'].'&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;&nbsp;'.$row1['qty'].'<br>';
}
?>
</span><br />
<b>TOTAL PAYABLE:
<span class="style3">
<?php
include('config.php');
$transactioncode=$_POST['transactioncode'];
$result = mysql_query("SELECT sum(total) FROM orderdetails where transactioncode = '$transactioncode'");
while($row1 = mysql_fetch_array($result))
{
echo number_format($row1['sum(total)'], 2);
}
?>
</b>

</span><br /><br /></div>
<br />
<form action="refresh.php" method="post">
<a href="paymentportal6.php">DONE</a>
</form></center>
</body>

</html>

