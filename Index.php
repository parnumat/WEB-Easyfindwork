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
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="Menu.php" target="content">Easy Find Work</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="dropdown.php" target="content">จ้างงาน<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dropdown2.php" target="content">หางาน<span class="sr-only">(current)</span></a>
              </li>
              </ul>
              
              
              <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['ID'])) {?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ยินดีต้อนรับ คุณ <?php echo $_SESSION['mem_name']; ?>
                    </a>
                    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form action="me.php" method="post" target="content">
                      <button class="dropdown-item" >ข้อมูลของคุณ</button>
                      <tag input type="hide" value="<?php $_SESSION['ID']; ?>">
                    </form>
                      <a class="dropdown-item" href="upload.php" target="content">สมัครหางาน</a>
                      <a class="dropdown-item" href="employer.php" target="content">สมัครจ้างงาน</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="Menu.php" target="content">Logout</a>
                    </div>
                    
                  </li>
                <?php }else{ ?>
                  <li class="nav-item">
                    <a class="btn btn-primary" href="login.php" target="content">Login</a>
                  </li>
                
                <?php } ?>
              </ul>
          </div>
        </div>
    </nav>
    <iframe src="Menu.php" name="content" height="1200" width="100%"> 
    </iframe>
    

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    
</body>
</html>