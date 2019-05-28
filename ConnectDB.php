<?php 
    $conn = new mysqli('localhost','root','parnumat','EFW');
    if($conn->connect_errno){
        die("Connect Failed" .$conn->connect_errno);
    }
?>