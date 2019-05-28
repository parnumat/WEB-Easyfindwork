<?php
$host = 'localhost';
$user = 'root';
$password = 'parnumat';
$database = 'efw';
 
mysql_connect($host, $user, $password);
mysql_select_db($database);
mysql_query("SET NAMES UTF8");