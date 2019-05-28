<?php session_start();?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body background="image/im02.jpg" alt="No">
  <?php 
    session_start();
    include_once('ConnectDB.php');

    if (isset($_POST['commit'])){
      $Email = $_POST['Email'];
      $Password = $conn->real_escape_string($_POST['Password']);
      $sql = "SELECT * FROM `member` WHERE `Email` = '".$Email."' AND `Password` = '".$Password."'";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['mem_name'] = $row['mem_name'];
        header('location:index.php');

      }else{
        echo "<script>alert('Email & Password is invalid')</script>";     
      }
    }
  ?>
  

  <?php 
    session_start();
    include_once('ConnectDB.php');

    if (isset($_POST['submit'])){
        echo $_POST['user-name'].'<br>';
        echo $_POST['user-email'].'<br>';
        echo $_POST['user-pw'].'<br>';
        echo $_POST['user-pw-repeat'].'<br>';

        $sql ="INSERT INTO `member` (`ID`, `mem_name`, `Email`, `Password`)
        VALUES (NULL, '".$_POST['user-name']."', '".$_POST['user-email']."', '".$_POST['user-pw']."');";

        $result = $conn->query($sql);
        
        if($result){
          echo "<script>alert('Success.')</script>";    
        }else{
          echo "<script>alert('Sorry.')</script>";
        }
    }
  ?>




  <div class="logmod">
      <div class="logmod__wrapper">
        <span class="logmod__close">Close</span>
        <div class="logmod__container">
          <ul class="logmod__tabs">
            <li data-tabtar="lgm-2"><a href="#">Login</a></li>
            <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
          </ul>
          <div class="logmod__tab-wrapper">
          <div class="logmod__tab lgm-1">
            <div class="logmod__heading">
              <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
            </div>
            <div class="logmod__form">


              <form accept-charset="utf-8" action="" method = "POST" class="simform" enctype ="multipart/form-data" >
                <div class="sminputs">
                  <div class="input full">
                    <label class="string optional" for="user-email">Email*</label>
                    <input class="string optional" maxlength="255" name="user-email" id="user-email" placeholder="Email" type="email" size="50" require />
                  </div>
                </div>
                <div class="sminputs">
                  <div class="input string optional">
                    <label class="string optional" for="user-pw">Password *</label>
                    <input class="string optional" maxlength="255" name="user-pw" id="user-pw" placeholder="Password" type="text" size="50" require />
                  </div>
                  <div class="input string optional">
                    <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                    <input class="string optional" maxlength="255" name="user-pw-repeat" id="user-pw-repeat" placeholder="Repeat password" type="text" size="50" require />
                  </div>
                </div>
                <div class="sminputs">
                  <div class="input full">
                    <label class="string optional" for="user-name">Name*</label>
                    <input class="string optional" maxlength="255" name="user-name" id="user-name" placeholder="name" type="name" size="50" require />
                  </div>
                </div>
                <div class="simform__actions text-center">
                  <input class="alert alert-primary" role="alert" name="submit" type="submit" value="Create Account" />
                  <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
                </div> 
              </form>



            </div> 
            <div class="logmod__alter">
              <div class="logmod__alter-container">
                <a href="#" class="connect facebook">
                  <div class="connect__icon">
                    <i class="fa fa-facebook"></i>
                  </div>
                  <div class="connect__context">
                    <span>Create an account with <strong>Facebook</strong></span>
                  </div>
                </a>
                  
                <a href="#" class="connect googleplus">
                  <div class="connect__icon">
                    <i class="fa fa-google-plus"></i>
                  </div>
                  <div class="connect__context">
                    <span>Create an account with <strong>Google+</strong></span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="logmod__tab lgm-2">
            <div class="logmod__heading">
              <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
            </div> 
            <div class="logmod__form">
              
            
            
            <form accept-charset="utf-8" action="#" class="simform" method="POST">
                <div class="sminputs">
                  <div class="input full">
                    <label class="string optional" for="user-email">Email*</label>
                    <input class="string optional" maxlength="255" id="user-email" name="Email" placeholder="Email" type="email" size="50" />
                  </div>
                </div>
                <div class="sminputs">
                  <div class="input full">
                    <label class="string optional" for="user-pw">Password *</label>
                    <input class="string optional" maxlength="255" id="user-pw" name="Password" placeholder="Password" type="password" size="50" />
                                <span class="hide-password">Show</span>
                  </div>
                </div>
                <div class="simform__actions text-center">
                  <input class="alert alert-primary" role="alert" name="commit" type="submit" value="Log In" />
                  <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password? Click here</a></span>
                </div> 
              </form>

              
            </div> 
            <div class="logmod__alter">
              <div class="logmod__alter-container">
                <a href="#" class="connect facebook">
                  <div class="connect__icon">
                    <i class="fa fa-facebook"></i>
                  </div>
                  <div class="connect__context">
                    <span>Sign in with <strong>Facebook</strong></span>
                  </div>
                </a>
                <a href="#" class="connect googleplus">
                  <div class="connect__icon">
                    <i class="fa fa-google-plus"></i>
                  </div>
                  <div class="connect__context">
                    <span>Sign in with <strong>Google+</strong></span>
                  </div>
                </a>
              </div>
            </div>
              </div>
          </div>
        </div>
      </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>
</html>
