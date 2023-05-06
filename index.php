<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div id="container">
        <div id="wrap">
            <header class="header">
                <nav class="navbar">
                    <div> 
                        <a href="index.php"><img src="./image/lazadaddy.png" alt="Logo" class="logo"></a>       
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
                <div id="carouselExampleSlidesOnly" class="carousel-slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./image/slide.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./image/slide1.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./image/slide2.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./image/slide3.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./image/slide4.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
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