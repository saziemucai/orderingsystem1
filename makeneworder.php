<?php
	//Start new session
	session_start();
	require ('refresh2.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<center><br>
<img src="images/welcome.jpg" alt=" MeDay" />
<br>
<img src="images/menu.gif"> <br>

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="validation.js" type="text/javascript"></script>
<script src="ex1.js" type="text/javascript"></script>
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>






</head>

<script type="text/javascript">

function check(){
	if((document.qty.total.value=="0.00")){
		alert("You didn't order anything!");
		return false;
		}
	else
		return true;
}

</script>

<form id="qty" name="qty" method="post" action="paymentportalnew.php" onSubmit="return check();" >
<body >
<div id="templatemo_container">
 <br>
 
  
    <div id="templatemo_content_left">
	      
	                  <div class="view1"><?php
			   include('config.php');
								
								

								
									
								$result2 = mysql_query("SELECT * FROM zhyrizsh_products WHERE status='available'");
								
								
								while($row2 = mysql_fetch_array($result2))
								  {
								  $ble=$row2['id'];
								  
								  
								  
								  $result3 = mysql_query("SELECT * FROM zhyrizsh_products where product_id='$ble'and status='available'");
								
								
								$row3 = mysql_fetch_array($result3);
								  
								  
      echo '<div class="templatemo_meal_box"> <a rel="facebox" href=portal1.php?id=' . $row3["product_id"] . '><img alt="Meal" src="images/meals/'.$row3['product_photo'].'" width="55px" height="50px" /></a>';
          echo '<div class="textbox"> '.$row3['product_name'].' </div>';
      echo '</div>';
	 
								  }
										  
	?></div>
    </div>
	
	
    <div id="templatemo_content_right">
		  <form method="post" action="paymentportalnew.php" name="abcd" onsubmit="return validateForm()">
	  
	  
	  <table width="500" border="1" cellpadding="0" cellspacing="0" style="color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:10px;">
        <tr>
          <td width="90"><div align="center"><strong>Meal Name </strong></div></td>
          <td width="27"><div align="center"><strong>Qty</strong></div></td>
          <td width="45"><div align="center"><strong>Price</strong></div></td>
          <td width="46"><div align="center"><strong>total</strong></div></td>
          <td width="100"><div align="center"><strong>del</strong></div></td>
        </tr>
		<?php
		include('config.php');


$resulta = mysql_query("SELECT * FROM orderdetails1 WHERE transactioncode = '$memid'");

			while($row = mysql_fetch_array($resulta))
			{
		
        echo '<tr>';
          echo '<td><div align="center">'.$row['name'].'</div></td>';
          echo '<td><div align="center">'.$row['qty'].'</div></td>';
          echo '<td><div align="center">'.$row['price'].'</div></td>';
          echo '<td><div align="center">'.$row['total'].'</div></td>';
          echo '<td><div align="center">'.'<a href=delorder1.php?id=' . $row["orderid"] . '>' . 'Cancel' . '</a>'.'</div></td>';
        echo '</tr>';
		}
		
			?>
 <br>
		  <tr>
          <td colspan="4"><div align="right">Grand Total: </div></td>
          <td colspan="2"><div align="left">
		  <?php
		  include('config.php');
		 $resulta = mysql_query("SELECT sum(total) FROM orderdetails1 WHERE transactioncode = '$memid'");

			while($rows = mysql_fetch_array($resulta))
			{ 
			echo '<input name="total" disabled="disabled" type="text" size="10" value="'.number_format($rows['sum(total)'], 2).'"/>'; 
		  }
		  ?>
		  
		 
		  
		  
		  </div></td>
        </tr>
          </table>
	  <br />
	  <table width="273" border="0" cellpadding="0" cellspacing="0" style="color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:10px;">
        
		
      </table><br />
	   <div id="templatemo_content_right">
		<form method="post" action="paymentportalnew.php" name="abcd" onsubmit="validateForm"> </div>
	<input name="submit1" type="submit" value="Confirm Order" />
	  </form>
    </div>

	
	<div id="templatemo_card"></div>
  </div>
  <div id="templatemo_container_end"></div>
</div>
<div id="templatemo_footer">
  
        <div class="button"></div>
</div>
<div>
</div>
</body>

</html>