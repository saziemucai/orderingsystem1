<?php
			if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM orderdetails2 WHERE orderid='$id'");
			header("location: makeneworder1.php");
			exit();
			}
			?>
			
			
