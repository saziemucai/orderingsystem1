<?php
session_start();

include('config.php');
$userid = $_POST['userid'];
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_size_name=$_POST['product_size_name'];
$status=$_POST['status'];

mysql_query("UPDATE zhyrizsh_products SET product_id='$product_id', product_name='$product_name', product_price='$product_price', product_size_name='$product_size_name' , status='$status' WHERE id='$userid'");
header("location: viewmeals.php");
mysql_close($con);
?> 