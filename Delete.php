<?php
include('ConnectDB.php');
$query = "DELETE  FROM employer WHERE ID ='".$_GET["ID"]."' ";  
$result = mysqli_query($conn, $query); 
mysqli_close($conn);
header('location:me.php');
?>