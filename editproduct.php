
<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="editpro-exec.php" method="post" name="abc">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	
			include('config.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM zhyrizsh_products WHERE id = $id");

			while($row = mysql_fetch_array($result))
  			{
			
			
		echo '<input type="hidden" name="userid" value="'. $row['id'] .'">'; 	
			
			
			
			echo '<table width="360" border="0" cellpadding="0">';
              echo '<tr>';
                echo '<td width="87" valign="top"><div align="right">ID:</div></td>';
                echo '<td width="281"><div align="left"><input type="text" name="product_id" value="'. $row['product_id'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Name:</div></td>';
                echo '<td><div align="left"><input type="text" name="product_name" value="'. $row['product_name'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Price:</div></td>';
                echo '<td><div align="left"><input type="text" name="product_price" value="'. $row['product_price'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Size:</div></td>';
                echo '<td><div align="left"><input type="text" name="product_size_name" value="'. $row['product_size_name'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Status:</div></td>';
                echo '<td><div align="left"><select name="status" id="status">';
    echo '<option selected>available</option>';
    echo '<option>unavailable</option>';
               
				?>
			
				
				<?php
				echo '</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right"></div></td>';
                echo '<td><input name="Input" type="submit" value="Save" /></td>';
              echo '</tr>';
            echo '</table>';
			
  			}
	echo '</form>';
			}
			?>
			
			
