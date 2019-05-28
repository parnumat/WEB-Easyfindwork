<html>
    <head>
    <title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
    </head>
    <?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    
    $strKeyword = null;
    
    if(isset($_POST["txtKeyword"]))
    {
    $strKeyword = $_POST["txtKeyword"];
    }
    ?>
        <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
            <table width="599" border="1">
            <tr>
            <th>Keyword
            <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
            <input type="submit" value="Search"></th>
            </tr>
            </table>
        </form>
    
    <?php
    
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "parnumat";
    $dbName = "efw";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    
    $sql = "SELECT * FROM worker WHERE Name LIKE '%".$strKeyword."%' ";
    
    $query = mysqli_query($conn,$sql);
    
    ?>
    <table width="600" border="1">
        <tr>
        <th width="91"> <div align="center">ID </div></th>
        <th width="98"> <div align="center">Name </div></th>
        <th width="198"> <div align="center">Email </div></th>
        </tr>
        <?php
        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
        {
        ?>
        <tr>
        <td><div align="center"><?php echo $result["ID"];?></div></td>
        <td><?php echo $result["Name"];?></td>
        <td><?php echo $result["Email"];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>