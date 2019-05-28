<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<form name="frmSearch" method="get" action="a.php">
<th>Keyword
<input name="txtKeyword" type="text" id="" value="<?=$_GET["txtKeyword"];?>">
<input type="submit" value="Search"></th>
</form>
<?
if($_GET["txtKeyword"] != "")
{
$objConnect = mysql_connect("localhost","root","parnumat","efw") or die("Error Connect to Database");
$objDB = mysql_select_db("efw");
// Search By Name or Email
$strSQL = "SELECT * FROM member WHERE (mem_name LIKE '%".$_GET["txtKeyword"]."%' or Email LIKE '%".$_GET["txtKeyword"]."%' )";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
<tr>
<th width="91"> <div align="center">ID </div></th>
<th width="98"> <div align="center">Name </div></th>
<th width="198"> <div align="center">Email </div></th>
<th width="97"> <div align="center">CountryCode </div></th>
<th width="59"> <div align="center">Budget </div></th>
<th width="71"> <div align="center">Used </div></th>
</tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
?>
<tr>
<td><div align="center"><?=$objResult["ID"];?></div></td>
<td><?=$objResult["mem_name"];?></td>
<td><?=$objResult["Email"];?></td>
<td><div align="center"><?=$objResult["CountryCode"];?></div></td>
<td align="right"><?=$objResult["Budget"];?></td>
<td align="right"><?=$objResult["Used"];?></td>
</tr>
<?
}
?>
</table>
<?
mysql_close($objConnect);
}
?>
</body>
</html>