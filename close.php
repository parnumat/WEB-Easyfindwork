<?php
$objConnect = mysql_connect("localhost","root","parnumat") or die("Error Connect to Database");
$objDB = mysql_select_db("efw");
$strSQL = "UPDATE employer SET ";

$strSQL .="Status = '0' ";
$strSQL .=" WHERE ID = '".$_GET["ID"]."' ";
$objQuery = mysql_query($strSQL);
header('location:me.php');
mysql_close($objConnect);
?>