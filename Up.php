<?php 
                    //1. เชื่อมต่อ database: 
                    include('ConnectDB.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                    
                    //2. query ข้อมูลจากตาราง tb_member: 
                    $query = "SELECT * FROM employer WHERE ID='1'"
                    or die("Error:" . mysqli_error()); 
                    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
                    $result = mysqli_query($conn, $query); 
                    
                    while($row = mysqli_fetch_array($result)) { 
                        $up = $row["Score"]+1;
                        echo $up;
                        $objConnect = mysql_connect("localhost","root","parnumat") or die("Error Connect to Database");
                        $objDB = mysql_select_db("efw");
                        $strSQL = "UPDATE employer SET ";
                        $strSQL .=",Score = $up" ; 
                        $strSQL .=" WHERE ID = '1' ";
                        $objQuery = mysql_query($strSQL);
                        }
                        //5. close connection
                        header('location:me.php');
                        mysqli_close($conn);
                        ?>


