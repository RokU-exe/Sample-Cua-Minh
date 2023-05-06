<?php
  session_start();

  if (isset($_POST['act'])) {
    $product = [
      'name' => $_POST['product_name'],
      'price' => $_POST['price'],
      'created_time' => date('Y-m-d h:i:s')
    ];
    $_SESSION['products'][] = $product;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
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
                        <li class="listitem"><a href="login.php">Logout</a></li>
                        <li class="listitem"><a href="myacc_vendor.php">My account</a></li>
                    </ul></div>
                </nav>
            </header>
            <main>

<form method="post" action="addmyproduct.php">
  <div class="pname">
    Product name <input type="text" name="product_name" minlength="10" maxlength="20"><br>
  </div>
  <div class="pprice">
    Price <input type="number" name="price"><br>
  </div>
  
  <div class="file-upload">
  <input class="file-upload__input" type="file" name="myFile[]" id="myFile" multiple>
  <button class="file-upload__button" type="button"></button>
  <span class="filead-upload__label"></span>
</div>
<div class="description">    
<input type="submit" name="act" value="Add Product">
  Product description: <textarea name="pdescription" rows="5" cols="40" maxlength="500"></textarea>

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





<?php
  if (isset($_SESSION['products'])) {
    echo '<pre>';
    print_r($_SESSION['products']);
    echo '</pre>';
  }

?>