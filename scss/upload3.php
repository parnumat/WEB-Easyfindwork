<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</head>

<body background="">
    <?php  
         if(isset($_POST['submit'])){
             echo 'ชื่่อรูปภาพ:'.$_FILES['filUpload']['name'].'<br>';
             echo 'เนื้อหาไฟล์:'.$_FILES['filUpload']['temp_name'].'<br>';
             echo 'ขนาดรูปภาพ:'.$_FILES['filUpload']['size']/1024 .'KB <br>';
             echo 'ชนิดไฟล์:'.$_FILES['filUpload']['type'].'<br>';

             move_uploaded_file($_FILES['filUpload']['temp_name'],'uploads/'.$_FILES['filUpload']['name']);


         }else{
             echo "<script>alert('Sorry, your file was not uploaded.')</script>";
        
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                    <div class="card-header text-center">
                        Register
                    </div>
                    <div class "form-group row " style="text-align:center;">
                        <form action="upload.php" method="POST" enctype="multipart/form-data" style="text-align:center;">
                            Select image to upload:<br>
                            <input type="file" class="form-control" id="filUpload" name="filUpload">
                            <input type="submit" name="submit" class="btn btn-success" value="Register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
