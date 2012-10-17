
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<script src="zero.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
<SCRIPT language=Javascript>
      <!--

      function isNumberKey(evt)

      {

         var charCode = (evt.which) ? evt.which : event.keyCode

         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;	
		    return true;

}

function checkValue(qty) {
	if(document.myform.qty.value == 0) {
	alert("Please enter a quantity!");
	return false;
return true;	}
}
	
function isNil(){

		var quantity = document.myform.qty.value;
		if (quantity == 0){
			alert("Please enter a quantity!");
		}
		else if (quantity >= 100) {
			alert("You have reached the maximum number of order. Maximum: 99");
			
		}
		else if (parseInt(quantity) == "" || parseInt(quantity) == "NaN"){
			alert("Please enter a number... quantity.");
		}
		else {
			$('#submit-button').removeAttr("disabled");
		}
	}
	
	  
	      //-->

   </SCRIPT> 
   
   
</head>
<body>

<form name="myform" action="saveorder3.php" method="post" onsubmit="return checkValue(qty)">
<input name="id" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>" />
<input name="transcode" type="hidden" value="<?php echo $_SESSION['SESS_FIRST_NAME']; ?>" />
<table width="400" border="0" cellpadding="0" cellspacing="0">
<?php

				  if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM zhyrizsh_products WHERE product_id = $id and status='available'");

			$row3 = mysql_fetch_array($result);

  echo '<tr>';
    echo '<td width="100"><img alt="Meal" src="images/meals/'.$row3['product_photo'].'" /></td>';
    echo '<td width="200"><span class="style1">'.'</span></td>';
  echo '<tr>';
    echo '<td width="80"><input name="name" type="text" value="'.$row3['product_name'].'" readonly/><input name="ingre" type="hidden" value="'.$row3['product_ingredients'].'"/><input name="ids" type="hidden" value="'.$row3['id'].'"/></td>';
	echo '<td width="120"></span></td>';
  echo '</tr>';
  }
			?>

</table>
<br />
  <label style="color:#000000;">Quantity:
  <INPUT id="qty" onkeypress="return isNumberKey(event)" onblur='Javascript:isNil()' type="int" name="qty">

  </label>
<br />
<table width="400" border="0" cellpadding="0" cellspacing="0" style="color:#000000;"> 
  <tr>
   
    <td width="179">Size</td>
    <td width="128">Price</td>
    <td width="93">Selection</td>
  </tr>
  <?php

				  if (isset($_GET['id']))
			{
	
	
			include('config.php');

		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM zhyrizsh_products WHERE product_id = $id");

			while($row3 = mysql_fetch_array($result))
  			{
	
			
  echo '<tr>';
    echo '<td>'.$row3['product_size_name'].'</td>';
    echo '<td>'.$row3['product_price'].'</td>';
      echo '<td>'.'<input name="but" type="image" value="'.$row3['id'].'" src="images/button.png" onclick="checkValue(qty)" />'.'</td>';

  echo '</tr>';
  }

  }
			?>
</table>
</form>
</body>
</html>
