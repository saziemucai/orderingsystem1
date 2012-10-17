<?php
session_start();

include('config.php');
$oderid = $_POST['orderid'];
$customer=$_POST['customer'];
$qty=$_POST['qty'];
$name=$_POST['name'];
$id=$_POST['but'];
$transcode=$_POST['transcode'];
$ingre=$_POST['ingre'];
$ids=$_POST['ids'];



$resulta = mysql_query("SELECT * FROM zhyrizsh_products WHERE id = '$id'");

			while($row = mysql_fetch_array($resulta))
			{
			$pprice=$row['product_price'];
			$psize=$row['product_size_name'];
			}
$total=$pprice*$qty;

mysql_query("INSERT INTO orderdetails3 (orderid, customer, qty, price, total, name, size, transactioncode) VALUES(' $oderid', '$customer', '$qty', '$pprice', '$total', '$name', '$psize', '$transcode')");
header("location: makeneworder2.php");


?> 









