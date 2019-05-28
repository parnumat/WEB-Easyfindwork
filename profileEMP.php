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
                    $query = "SELECT * FROM employer WHERE ID='".$_GET['ID']."'"
                    or die("Error:" . mysqli_error()); 
                    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
                    $result = mysqli_query($conn, $query); 
                    //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
                    
                     
                    
                    
                    echo "<div class='mx-auto'>";

                    echo "<form class='mx-auto'>";

                    $i=1; while($row = mysqli_fetch_array($result)) { 
                            echo "<div class='card' style='width: 30rem;'>";                    
                                echo"<img class='card-img-top' src='.../100px180/?text=Image cap' alt='Card image cap'>";
                                echo"<div class='card-body'>";
                                    echo"<h5 class='card-title'>ชื่อ-นามสกุล :" .$row['User_Name'];
                                    echo"</h5>";
                                    echo"<p class='card-text'>คุณสมบัติ :" .$row["Property"];
                                    echo"</p>";
                                echo"</div>";
                                echo"<ul class='list-group list-group-flush'>";
                                    echo"<li class='list-group-item'>Facebook : ".$row["Facebook"];
                                    echo"</li>";
                                    echo"<li class='list-group-item'>เบอร์โทรศัพท์ : +66 ".$row["PhoneNumber"];
                                    echo"</li>";
                                    echo"<li class='list-group-item'>ชื่องาน : ".$row["name_job"];
                                    echo"</li>";
                                    echo"<li class='list-group-item'>ค่าจ้าง : ".$row["Price"];
                                    echo"</li>";
                                echo "</ul>";
                                echo"<div class='card-body'>";
                                    
                                    echo"<a href='UP.php?ID=$row[0]' onclick=\"return confirm('Do you want to upgate record')\">สนใจ</a>";
                                echo"</div>";
                            echo "</div>";
                   
                    $i++; 
                    }
                    echo "</form>";
                  
                    echo "</div>";
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

