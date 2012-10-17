<?php
			if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM orderdetails1 WHERE orderid='$id'");
			header("location: makeneworder.php");
			exit();
			}
			?>
			
			
