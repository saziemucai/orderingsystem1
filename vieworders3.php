<?php
require('ex1.inc.php');
	//Start new session
	session_start();
?>
		<?php
require('includes/ex1.inc.php');

function getOrderInfo() {
    global $PRODUCTS;;
    $str = ''; $total = 0;
    while ( list($key, $val) = each($_POST) ) {
        // Check for valid quantity entries > 0
        if ( ( strpos($key, '_qty') !== false ) && is_int( (int)$val) && $val > 0  ) { 
            $pt = strrpos($key, '_qty'); 
            $name_pt = substr( $key, 0, $pt); // product abbr
            
            foreach($PRODUCTS as $product) {
                list($prod_abbr, $prod_name, $prod_price) = $product;
                if ($prod_abbr == $name_pt) {
                    $sub_tot = $val * $prod_price;
                    // build string to display order info
                    $str .= "<p>$val $prod_abbr at " . number_format($prod_price, 2) . 
                        ' each for ' . number_format($sub_tot, 2) . '</p>';
                    $total += $sub_tot;
                }
            }
        }
    }
    if ( $str === '' ) {
        $str = '<p>You didn\'t order anything.</p>';
    } else {
        $str = $str . '<p>Total: ' .  number_format($total, 2) . '</p>';
    }
    
    return $str;
}
?

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<center><br>
<img src="images/welcome.jpg" alt=" MeDay" />
<br>
<img src="images/ordersare.gif">
<div style="width:700px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:3%;">
<div style="background-color:#FFCC66; height:40px; margin-bottom:10px;">
<div style="float:right; width:50px; margin-right:20px; background-color:#FFCC66; text-align:center;"><a href="admin.php">Back</a></div>




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

<div style="float:left; margin-left:10px; margin-top:10px;"><strong></strong> <?php echo $_SESSION['SESS_FIRST_NAME'];?></div>
</div>
	
</head>

<?php
$dbname="orderingsystem";

mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("$dbname")or die("cannot select DB");

$query="SELECT * FROM orderdetails2";
$result = mysql_query($query);

$num = mysql_numrows ($result);

mysql_close();

?>

<html>
<head>
<style type="text/css">
ul
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
}
li
{
float:right;
}
a:link,a:visited
{
display:block;
width:130px;
font-weight:bold;
color:#999900;
background-color:#CCCC66;
text-align:center;
padding:4px;
text-decoration:none;
text-transform:uppercase;
}
a:hover,a:active
{
background-color:#342C29;
}

</style>
</head>
<body>

<br>
<hr>

   
<style type="text/css">
#uploadedfiles
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:100%;
border-collapse:collapse;
}
#uploadedfiles td, #uploadedfiles th
{
color: #ffffff;
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}
#uploadedfiles th
{
font-size:1.1em;
text-align:left;
padding-top:4px;
padding-bottom:3px;
background-color:#342C29;
color:#98bf21;
}
#uploadedfiles tr.alt td
{
color:#000000;
background-color:#9999cc;
}
</style>
</head>		

<body>
<form action="refresh.php" method="post">
<table id="orderdetails" width="805"height="200" border="1" cellpadding="0" cellspacing="0" style="color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:15px;">

        <tr>
		   <td width="65"><div align="center"><strong>Order ID </strong></div></td>
          <td width="65"><div align="center"><strong>Meal Name </strong></div></td>
          <td width="70"><div align="center"><strong>Quantity</strong></div></td>
          <td width="65"><div align="center"><strong>Price</strong></div></td>
          <td width="65"><div align="center"><strong>Total</strong></div></td>
		  
		
		
		</tr>
>
<?php echo getOrderInfo();?>			
	<tr>
          <td colspan="3"><div align="right">Grand Total: </div></td>
          <td colspan="2"><div align="left">
		  <?php
		  include('config.php');
		  $memid = $_SESSION['SESS_FIRST_NAME'];
		  $resulta = mysql_query("SELECT sum(total) FROM orderdetails2 WHERE transactioncode = '$memid'");

			while($rows = mysql_fetch_array($resulta))
			{ 

          echo '<div align="center">'.$rows['sum(total)'].'</div>';
        
		  }
		  ?>
		  
		  
		  </div></td>
        </tr>
		</table>
			
</body>
</html>
		