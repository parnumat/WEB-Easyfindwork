<?php session_start();?>
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
    <?php

        include_once('ConnectDB.php');

        if(isset($_POST['submit'])){
            // echo $_POST['firstname'].'<br>';
            // echo $_POST['lastname'].'<br>';
            // echo $_POST['facebook'].'<br>';
            // echo $_POST['phonenumber'].'<br>';
            // echo $_POST['skills'].'<br>';
            // echo $_FILES['fileupload']['name'].'<br>';

            //echo 'ชื่อรูปภาพ :' .$_FILES['fileupload']['name'].'<br>';
            //echo 'เนื้อหาไฟล์ :' .$_FILES['fileupload']['tmp_name'].'<br>';
            //echo 'ขนาดรูปภาพ :' .$_FILES['fileupload']['size']/1024 .'KB <br>';
            //echo 'ชนิดของไฟล์ :' .$_FILES['fileupload']['type'].'<br>';   

            $temp = explode('.',$_FILES['fileupload']['name']);
            $newName = round(microtime(true)).'.'. end($temp);
            //echo $newName;
            
            if(move_uploaded_file($_FILES['fileupload']['tmp_name'], 'uploads/'.$newName)){

            $sql = "INSERT INTO `worker` (`member_code`,`User_Name`, `User_Email`, `Promote`, `Facebook`, `PhoneNumber`,`name_job`,`Status`, `Photo_Name`) 
            VALUES ('".$_SESSION['ID']."', '". $_POST['firstname'].' '.$_POST['lastname']."', '".$_POST['email']."', '".$_POST['promote']."', '".$_POST['facebook']."', '".$_POST['phonenumber']."', '".$_POST['inputJob2']."','1', '".$newName."');";

            $result = $conn->query($sql);
            if($result){
                echo "<script>alert('Upload Completed!!!')</script>";
                header('Refresh:0; url=Menu.php');
            }else{
                echo "NOOOO!!";
            }

            }
        } 
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5"> 
                <div class="card">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-header text-center">
                            สมัครข้อมูลเป็น WORKER
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                                </div>
                            </div>
                        
                        
                            <div class="form-group row">
                                <label for="lastname" class="col-sm-3 col-form-label">last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastname" class="col-sm-3 col-form-label">กรุณายืนยัน Email ของคุณ</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="facebook" name="facebook" required>
                                </div>
                            </div>
                        
                        
                            <div class="form-group row">
                                <label for="phonenumber" class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label for="inputJob2" class="col-sm-3 col-form-label">Job</label>
                                <div class="col-sm-9">
                                <select id="inputJob2" class="form-control" name="inputJob2" required>
                                <option selected>Choose...</option>
                                    <option>Logo</option>
                                    <option>Banner</option>
                                    <option>Line stickers</option>
                                    <option>Photoshop</option>
                                    <option>Photography</option>
                                    <option>3D&Animation</option>
                                    <option>Video production</option>
                                    <option>Sound Effects</option>
                                    <option>Subtitle Video Editing</option>
                                    <option>Web development</option>
                                    <option>HTML/CSS</option>
                                    <option>Word Press</option>
                                    <option>Mobile application</option>
                                    <option>Teachnical support</option>
                                    <option>Ecommerce</option>
                                    <option>กฏหมาย</option>
                                    <option>Branding</option>
                                    <option>จดทะเบียนการค้าบริษัท</option>
                                    <option>บัญชีและการเงิน</option>
                                    <option>painter</option>
                                    <option>Musician</option>
                                    <option>Cartoonist</option>
                                    <option>Singer</option>
                                    <option>Gamer</option>
                                </select>
                                </div>    
                            </div>

                            <div class="form-group row">
                                <label for="promote" class="col-sm-3 col-form-label">เล่าเรื่องราวการทำงานของคุณได้ที่นี้</label>
                                <div class="col-sm-9">
                                    <textarea cols="10" row="5" class="form-control" id="promote" name="promote" required></textarea>
                                </div>
                            </div> 
                        
                        
                            <div class="form-group row">
                                <label for="uploadfile" class="col-sm-3 col-form-label">Up load Profile</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="fileupload" name="fileupload" onchange="readURL(this)">
                                    </div>
                            </div>

                            <figure class="figure">
                                <img id="imgupload" class="figure-img img-fluid rounded" alt="">
                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>

                        </div>
                        <div class="card-footer text-center">
                            <input type="submit" name="submit" class="btn btn-success" value="Register"> 
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

    <script>
        function readURL(input){
            var reader = new FileReader();

            reader.onload = function(e){
                console.log(e.target.result)
                $('#imgupload').attr('src', e.target.result)
            }

            reader.readAsDataURL(input.files[0]);
        }
    
    </script>
    
</body>
</html>