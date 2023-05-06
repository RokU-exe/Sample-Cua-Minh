<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <div class="form-container">

<form action="" method="post">
   <h3>Registration for Vendor</h3>
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <label for="username">Username</label><br>
   <input type="text" name="username" required placeholder="Enter your username"><br>
   <label for="password">Password</label><br>
   <input type="password" name="password" required placeholder="Enter your password"><br>

   <div id="message">
  <p>Password must contain the following: at least 1 lowecase letter, 1 capital letter, number and minimum of 8 characters</p>
    </div>
   <label for="cpassword">Confirm password</label><br>
   <input type="password" name="cpassword" required placeholder="Confirm your password"><br>
   <input type="file" accept="image/*" onchange="loadFile(event)" name="profilepic">
<img id="output"/>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script><br>
   <label for="businessname">Business name</label><br>
   <input type="text" name="businessname" required placeholder="Enter your business name"><br>
   <label for="businessaddress">Business address</label><br>
   <input type="text" name="businessaddress" required placeholder="Enter your business address"><br>

   <input type="submit" name="submit" value="Sign up" class="form-btn">
   <p>Already have an account? <a href="login.php">Login now</a></p>
</form>

</div>

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
<script src="js/bootstrap.min.js"></script>
</body>
</html>


