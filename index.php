<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <!-- Header section -->
    <section class="header">
        <a href="index.php" class="logo">Voyager</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- home section  -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">

                    <div class="content">
                        <span>explore, discover, travel </span>
                        <h3>Travel around the world </h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">

                    <div class="content">
                        <span>explore, discover, travel </span>
                        <h3>Discover The New Places </h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">

                    <div class="content">
                        <span>explore, discover, travel </span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                    
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    
    <!-- services section  -->
    <section class="services">
        <h2 class="heading-title"> Our Services</h2>
        <div class="box-container">
            
            <div class="box">
                <img src="images/icon-1.png" alt="icon-1">
                <h3>adventure</h3>
            </div>
            
            
            <div class="box">
                <img src="images/icon-2.png" alt="icon-2">
                <h3>Tour guide</h3>
            </div>
            
            <div class="box">
                <img src="images/icon-3.png" alt="icon-3">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="icon-4">
                <h3>Camp fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="icon-5">
                <h3>Off road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="icon-6">
                <h3>Camping</h3>
            </div>

        </div>
    </section>
    
    <!-- About section -->
    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, corrupti praesentium nostrum eveniet, porro perferendis temporibus vero modi facilis corporis libero dolore repellendus voluptates consequatur laboriosam inventore animi, quo numquam?</p>
            <a href="about.php" class="btn">Read more</a>
        </div>
    </section>
    <!-- Packages section -->
    <section class="home-packages">
        <h2 class="heading-title">Our Packages</h2>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, ratione.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
            
            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, ratione.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, ratione.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
            
        </div>
        <div class="load-more"><a href="package.php" class="btn">Load more</a></div>
    </section>
    <!-- footer section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
            <h3>quick links</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>Ask a Question</a>
            <a href="#"><i class="fas fa-angle-right"></i>About us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
            </div>

            <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +201011****84</a>
            <a href="#"><i class="fas fa-phone"></i> +201012****65</a>
            <a href="#"><i class="fas fa-envelope"></i> sakr93117@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Menofia,Egypt</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>
        </div>
        
        <div class="rights">Created by <span>M.Sakr</span> | All rights reserved</div>
    </section>

    <!-- Js files links -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>