<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!--swiper js link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <!--Header-->
    <section class="header">
        <a href="home.php" class="logo">Journey<span>G<i class="fa-solid fa-compass"></i></span></a>

        <nav class="navbar">
            <a class="active" href="home.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="Places.php">PLACES</a>
            <a href="package.php">PACKAGE</a>
            <a href="book.php">BOOK</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="heading" style="background:url(images/tea.jpg)no-repeat">
    <h1>Book Now</h1>
    </section>
    <section class="booking">
        <h1 class="heading-tittle">Book Your Trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter Your Name" name="name">

                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="Enter Your Email" name="email">

                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="number" placeholder="Enter Your Number" name="phone">

                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Enter Your Address" name="address">

                </div>
                <div class="inputBox">
                    <span>Where To :</span>
                    <input type="text" placeholder="Place You Want To Visit" name="location">

                </div>
                <div class="inputBox">
                    <span>No of Guests :</span>
                    <input type="number" placeholder="No of Guests" name="guests">

                </div>
              
                <div class="inputBox">
                    <span>Arrivals :</span>
                    <input type="date"  name="arrivals">

                </div>
                <div class="inputBox">
                    <span>Leaving :</span>
                    <input type="date"  name="leaving">

                </div>
              
              
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>

    </section>
  
     <section class="footer">
        <div class="box-container">
           <div class="box">
           <a href="home.php" class="logo">Journey<span>G<i class="fa-solid fa-compass"></i></span></a>
            <h3>quick links</h3>
    

            <a href="home.php"><i class="fas fa-angle-right"></i>HOME</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>ABOUT</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>PACKAGE</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>BOOK</a>
           </div>
           <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
            <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
           </div>
           <div class="box">
            <h3>Contact Information</h3>
            <a href="#"><i class="fa-solid fa-phone-volume"> </i> +123-456-7890</a>
            <a href="#"><i class="fa-solid fa-phone-volume"> </i> +123-246-1190</a>
             <a href="#"><i class="fa-solid fa-envelope"></i> journeygo.gamil.com</a>
            <a href="#"><i class="fa-solid fa-map"></i> Colombo 10, Sri Lanka.</a>
           </div>
           <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fa-brands fa-linkedin"></i> Linkedin</a>

           
           </div>
        </div>
        <div class="creadit">&copy Created by <span>sjp.fot web designer</span> | all rights reserved!</div>
     </section>
    


    
    <script src="script.js"></script>
</body>
</html>
