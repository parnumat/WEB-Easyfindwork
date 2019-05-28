<?php

mysql_connect("localhost","root","parnumat","efw") or die("could not connect");
mysql_select_db("efw") or die ("could not find db!");
$output = '';
 if(isset($_GET['search'])){
    $searchq = $_GET['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

    $query = mysql_query("SELECT * FROM member WHERE (name_mem  LIKE '%$searchq%')") or die("Could nor search!");
    $count = mysql_num_rows($query);
    if($count == 0){
        $output = 'There was no search results!';
    }else{
        while($row = mysql_fetch_array($query)){
            $ID = $row["ID"]; 
            $Name = $row["Name_mem"];  
            $Email = $row["Email"];
            
            $output = '<div>'.$ID.''.$Name.''.$Email.'</div>' ;
        }
    }
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
   <form action="search3.php" method="get">
        <input type="text" name="search" placeholder="search for member">
        <input type="submit" value="search" />
   </form>
   <?php print("$output");?>
    
    

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>