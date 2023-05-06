<?php

session_start();


  
    define('VALID_USERNAME', 'dog');
  define('VALID_PASSWORD1', 'ccccaaaa');

  if (isset($_POST['act'])) {
    if (isset($_POST['password']) && $_POST['password'] == VALID_PASSWORD1 &&
    isset($_POST['username']) && $_POST['username'] == VALID_USERNAME) {
      $_SESSION['loggedin'] = true;
      header('location: vendor.php');
    } else {
      $error = 'Invalid username/password';
    }
  }

  define('VALID_USERNAME2', 'cat');
  define('VALID_PASSWORD2', 'aaaabbbb');

  if (isset($_POST['act'])) {
    if (isset($_POST['password']) && $_POST['password'] == VALID_PASSWORD2 && 
    isset($_POST['username']) && $_POST['username'] == VALID_USERNAME2) {
      $_SESSION['loggedin'] = true;
      header('location: about.php');
    } else {
      $error = 'Invalid username/password';
    }
  }

  define('VALID_USERNAME3', 'mouse');
  define('VALID_PASSWORD3', 'bbbbcccc');

  if (isset($_POST['act'])) {
    if (isset($_POST['password']) && $_POST['password'] == VALID_PASSWORD3 &&
    isset($_POST['username']) && $_POST['username'] == VALID_USERNAME3) {
      $_SESSION['loggedin'] = true;
      header('location: about.php');
    } else {
      $error = 'Invalid username/password';
    }
  }


  if (isset($error)) {
    echo "<p>$error</p>";
  }  

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="container">
        <div id="wrap">
            <header class="header">
                <nav class="navbar">
                    <div> 
                        <a href="./www/index.php"><img src="./image/lazadaddy.png" alt="Logo" class="logo"></a>       
                    </div>
                    <div class="topnav">
                        <input type="text" placeholder="Search in Lazadaddy">                                         
                    </div>     
                    <div>
                        <button type="submit" class="sub-btn"><img src="./image/glass.png"></button>      
                    </div>                                 
                    <div><ul class="navlist">
                        <li class="listitem"><a href="login.php">Login</a></li>
                        <li class="listitem"><a href="register.php">Sign up</a></li>
                    </ul></div>
                </nav>
            </header>
            <main>
            
            <form action="login.php" method="post">
   <h3>Welcome to Lazadaddy! Please login.</h3>

            <label for="username">Username</label><br>
   <input type="text" name="username" required placeholder="Please enter your username"><br>
   <label for="password">Password</label><br>
   <input type="password" name="password" required placeholder="Please enter your password"><br>
   <input type="submit" name="act" value="Login" class="form-btn"><br>
   <p>Don't have an account? <a href="register.php">Register now</a></p>
   </form>

        </main>
        </div>  
        <footer id="footer">
            <nav class="navbar2">
                <ul class="navlist2">
                    <li class="listitem2"><a href="about.php">About</a></li>
                    <li class="listitem2"><a href="#">Copyright</a></li>
                    <li class="listitem2"><a href="privacy.php">Privacy</a></li>                   
                    <li class="listitem2"><a href="">Help</a></li>
                </ul>
            </nav>    
        </footer>      
    </div>
<script src="./script.js"></script>
</body>
</html>


