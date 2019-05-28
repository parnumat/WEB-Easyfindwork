<?php
$objConnect = mysql_connect("localhost","root","parnumat") or die("Error Connect to Database");
$objDB = mysql_select_db("efw");
$strSQL = "UPDATE worker SET ";

$strSQL .="User_Name = '".$_POST["txtName"]."' ";
$strSQL .=",User_Email = '".$_POST["txtEmail"]."' ";
$strSQL .=",Promote = '".$_POST["txtPromote"]."' ";
$strSQL .=",Facebook = '".$_POST["txtFacebook"]."' ";
$strSQL .=",PhoneNumber = '".$_POST["txtPhoneNumber"]."' ";
$strSQL .=",name_job = '".$_POST["txtnamejob"]."' ";
$strSQL .=" WHERE ID = '".$_GET["ID"]."' ";
$objQuery = mysql_query($strSQL);
header('location:me.php');
mysql_close($objConnect);
?>