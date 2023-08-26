<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

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
    <div class="heading" style="background:url(images/header-bg-3.png) no-repeat"><h1>Book Now</h1></div>
    <!-- Booking section -->
    <section class="booking">
        <h1 class="heading-title">Book your trip!</h1>
        <form action="booking_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="Enter your name" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="number" placeholder="Enter your Phone number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>Where to ?</span>
                    <input type="text" placeholder="Place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>How many ?</span>
                    <input type="number" placeholder="Number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>Arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="Submit" class="btn" name="send">
        </form>

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