<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>  
<body>   
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container" >
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Graphic&design</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                <a class="dropdown-item" href="search.php?txtKeyword=Logo" target="content2">Logo</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Banner " target="content2">Banner</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Line stickers" target="content2">Line stickers</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Photoshop" target="content2">Photoshop</a>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-success">Audio&Video</button>
                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                <a class="dropdown-item" href="search.php?txtKeyword=photography" target="content2">Photography</a>
                <a class="dropdown-item" href="search.php?txtKeyword=3D&Animation" target="content2">3D&Animation</a>
                <a class="dropdown-item" href="search.php?txtKeyword=video production" target="content2">Video production</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Sound Effects" target="content2">Sound Effects</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Subtitle Video Editing" target="content2">Subtitle Video Editing</a>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-warning">Web&programming</button>
                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                <a class="dropdown-item" href="search.php?txtKeyword=web development" target="content2">Web development</a>
                <a class="dropdown-item" href="search.php?txtKeyword=html/css" target="content2">HTML/CSS</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Word Press" target="content2">Word Press</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Mobile application" target="content2">Mobile application</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Technical support" target="content2">Technical support</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Ecommerce" target="content2">Ecommerce</a>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info">ปรึกษา​และ​แนะนำ</button>
                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                <a class="dropdown-item" href="search.php?txtKeyword=กฏหมาย" target="content2">กฏหมาย</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Branding" target="content2">Branding</a>
                <a class="dropdown-item" href="search.php?txtKeyword=จดทะเบียน​การค้า​บริษัท" target="content2">จดทะเบียน​การค้า​บริษัท</a>
                <a class="dropdown-item" href="search.php?txtKeyword=บัญชี​และ​การเงิน" target="content2">บัญชี​และ​การเงิน</a>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-danger">Artist</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                <a class="dropdown-item" href="search.php?txtKeyword=painter" target="content2">Painter</a>
                <a class="dropdown-item" href="search.php?txtKeyword=musician" target="content2">Musician</a>
                <a class="dropdown-item" href="search.php?txtKeyword=cartoonist" target="content2">Cartoonist</a>
                <a class="dropdown-item" href="search.php?txtKeyword=singer" target="content2">Singer</a>
                <a class="dropdown-item" href="search.php?txtKeyword=Gamer" target="content2">Gamer</a>
                </div>
            </div>
            <form class="form-inline my-2 my-lg-0"action="search.php" method="get" target="content2">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  name="txtKeyword"ype="text" id="">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <iframe src="search.php" name="content2" height="1100" width="100%"> 
    </iframe>
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    
</body>
</html>