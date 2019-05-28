<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>  
<body background="image/im02.jpg">  
<form action="save2.php?ID=<?php echo $_GET["ID"];?>" name="frmEdit" method="post">
        <div class="row">
            <div class="col-md-13 mx-auto mt-5"> 
                <div class="card">
                    <?php
                    $objConnect = mysql_connect("localhost","root","parnumat") or die("Error Connect to Database");
                    $objDB = mysql_select_db("efw");
                    $strSQL = "SELECT * FROM worker WHERE ID = '".$_GET["ID"]."' ";
                    $objQuery = mysql_query($strSQL);
                    $objResult = mysql_fetch_array($objQuery);
                    if(!$objResult)
                    {
                    echo "Not found ID=".$_GET["ID"];
                    }
                    else
                    {
                    ?>
                    <table class='table'>
                    <th scope='col'>ชื่อ-นามสกุล</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Promote</th>
                    <th scope='col'>Facebook</th>
                    <th scope='col'>Phone number</th>
                    <th scope='col'>Job</th>

                    <tr>

                    <td><input type="text" name="txtName" size="20" value="<?php echo $objResult["User_Name"];?>"></td>
                    <td><input type="text" name="txtEmail" size="20" value="<?php echo $objResult["User_Email"];?>"></td>
                    <td><input type="text" name="txtPromote" size="50" value="<?php echo $objResult["Promote"];?>"></td>
                    <td><input type="text" name="txtFacebook" size="5" value="<?php echo $objResult["Facebook"];?>"></td>
                    <td><input type="text" name="txtPhoneNumber" size="10" value="<?php echo $objResult["PhoneNumber"];?>"></td>
                    <td><input type="text" name="txtnamejob" size="5" value="<?php echo $objResult["name_job"];?>"></td>
                    </tr>
                    </table>
                    <input  class="btn btn-primary" type="submit" name="submit" value="submit">
                    <?php
                    }
                    mysql_close($objConnect);
                    ?>
                </div>
            </div>
        </div>
</form>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    
</body>
</html>