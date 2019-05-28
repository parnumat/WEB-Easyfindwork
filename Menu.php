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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://images.unsplash.com/photo-1495887633121-f1156ca7f6a0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6c1db8d9d23f2cf939fa8f694def3861&auto=format&fit=crop&w=1050&h=400&q=80" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7627d227061b49e48737d835fda210a7&auto=format&fit=crop&w=1050&h=400&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f38005f4ef6c02f1e40c1a3af591f5e9&auto=format&fit=crop&w=1050&h=400&q=80" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    <div class="jumbotron">
    <div class="contianer text-center">  
        <h1 class="display-4">Wellcome to Easy find work</h1>
        <p class="lead">You can easily make money from our website.</p>
    </div>
    </div>

    
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    
</body>
</html>