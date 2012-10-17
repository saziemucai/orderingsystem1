<?php
			if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM orderdetails3 WHERE orderid='$id'");
			header("location: makeneworder2.php");
			exit();
			}
			?>
			
			
