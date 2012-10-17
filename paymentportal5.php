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

$status='Completed';
$mode='Cash';
$customer='customer';

mysql_query("INSERT INTO zhyrizsh_orders (cusid, amountpaid, status, transactiondate, transactioncode, mode) VALUES('$cusid', '$grandtotal', '$status', '$trasactiondate', '$transactioncode', '$mode')");
?> 
<center>

<br />


Items:<br />
<span class="style2">
<?php
include('config.php');
$transactioncode=$_POST['transactioncode'];
$result = mysql_query("SELECT * FROM orderdetails3 where transactioncode = '$transactioncode'");
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
$result = mysql_query("SELECT sum(total) FROM orderdetails3 where transactioncode = '$transactioncode'");
while($row1 = mysql_fetch_array($result))
{
echo number_format($row1['sum(total)'], 2);
}
?>
</b>

</span><br /><br /></div>
<br />
<?php
		include('config.php');


$resulta = mysql_query("SELECT * FROM orderdetails3 WHERE transactioncode = '$memid'");

			
     
        echo '<div align="center">'.'<a href=deleteorder3.php?id=' . $row["orderid"] . '>' . '<img src="images/done.jpg">' . '</a>'.'</div>';
 
			?></center>
</body>

</html>

