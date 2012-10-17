
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/ble.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
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

  <!--sa validate from-->

<link rel="stylesheet" href="./febe/style.css" type="text/css" media="screen" charset="utf-8">
    
    <script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/application.js" type="text/javascript" charset="utf-8"></script>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<div style="width:700px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">
<div style="background-color:#FFCC66; height:40px; margin-bottom:10px;">
<div style="float:right; width:50px; margin-right:20px; background-color:#FFCC66; text-align:center;"><a href="admin.php">BACK</a></div>
<div style="float:left; margin-left:10px; margin-top:10px;"><strong></strong> <?php echo $_SESSION['SESS_FIRST_NAME'];?></div>
</div>


 <br /><label style="margin-left:12px;">Filter</label> <input type="text" name="filter" value="" id="filter" /> 

   <br />
  <table cellpadding="1" cellspacing="1" id="resultTable" border="1">
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;">
              		<th>Product ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Size</th>
					<th>Status</th>
					<th>Action</th>
            </tr>
          </thead>
          <tbody>
         <?php
			   include('config.php');
								
								

								
								$result3 = mysql_query("SELECT * FROM zhyrizsh_products");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
									echo '<td>'.$row3['product_id'].'</td>';
									echo '<td>'.$row3['product_name'].'</td>';
									echo '<td>'.$row3['product_price'].'</td>';
									echo '<td>'.$row3['product_size_name'].'</td>';
									echo '<td>'.$row3['status'].'</td>';
									echo '<td>';
									echo'<a rel="facebox" href=editproduct.php?id=' . $row3["id"] . '>' . 'Edit' . '</a>';
									echo ' | ';
									echo'<a href=deleteproduct.php?id=' . $row3["id"] . '>' . 'Delete' . '</a>';
									echo '</td>';
								 echo '</tr>';
							
								  }
			  
			  ?>
          </tbody>
  </table>
</div>
</body>
</html>
