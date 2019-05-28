<?php
include('ConnectDB.php');
$query = "DELETE  FROM worker WHERE ID ='".$_GET["ID"]."' ";  
$result = mysqli_query($conn, $query); 
mysqli_close($conn);
header('location:me.php');
?>