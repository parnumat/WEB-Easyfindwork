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
    <div class="container"> 
        <div class="row">
            <div class="col-md-13 mx-auto mt-5"> 
                <div class="card">
                    <?php 
                    //1. เชื่อมต่อ database: 
                    include('ConnectDB.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                    
                    //2. query ข้อมูลจากตาราง tb_member: 
                    $query = "SELECT * FROM employer WHERE Status='1' AND (User_Name LIKE '%".$_GET["txtKeyword"]."%' 
                    or User_Email LIKE '%".$_GET["txtKeyword"]."%'
                    or Price LIKE '%".$_GET["txtKeyword"]."%' 
                    or name_job LIKE '%".$_GET["txtKeyword"]."%' )"
                    or die("Error:" . mysqli_error()); 
                    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
                    $result = mysqli_query($conn, $query); 
                    //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
                    
                    echo "<table class='table'>";
                    //หัวข้อตาราง
                    echo "<th scope='col'>ลำดับ</th>
                    <th scope='col'>ชื่อ-นามสกุล</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Property</th>
                    <th scope='col'>Facebook</th>
                    <th scope='col'>Phone number</th>
                    <th scope='col'>Job</th>
                    <th scope='col'>Price</th>
                    <th scope='col'>ติดต่อ</th>
                    <th scope='col'>ให้คะแนน</th>";
                    $i=1; while($row = mysqli_fetch_array($result)) { 
                    echo "<tr>";
                    echo "<th scope='row'>" .$i.  "</th> ";  
                    echo "<th scope='row'>" .$row["User_Name"] .  "</th> ";  
                    echo "<th scope='row'>" .$row["User_Email"] .  "</th> ";
                    echo "<th scope='row'>" .$row["Property"] .  "</th> ";
                    echo "<th scope='row'>" .$row["Facebook"] .  "</th> ";
                    echo "<th scope='row'>" .$row["PhoneNumber"] .  "</th> ";
                    echo "<th scope='row'>" .$row["name_job"] .  "</th> ";
                    echo "<th scope='row'>" .$row["Price"] .  "</th> ";
                    //แก้ไขข้อมูล
                    echo "<td><a href='profileEMP.php?ID=$row[0]'>Profile</a></td> ";
                    
                    //ลบข้อมูล
                    echo "<td><a href='Up.php?ID=$row[0]' onclick=\"return confirm('Do you want to upgate record')\">สนใจ</a></td> ";
                    echo "</tr>";
                    $i++; 
                    }
                    echo "</table>";
                    //5. close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    
</body>
</html>

