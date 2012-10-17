<?php
			if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM zhyrizsh_products WHERE id='$id'");
			header("location: viewmeals.php");
			exit();
			}
			?>
			
			
