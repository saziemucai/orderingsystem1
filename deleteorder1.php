<?php
   mysql_connect("localhost","root","");
   mysql_select_db("orderingsystem1") or die("Could not select database");

   $query = "DELETE FROM orderdetails1";
   $result = mysql_query($query);
?>