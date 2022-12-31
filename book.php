

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- swiper css link -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

     <!-- custom css file link -->
     <link rel="stylesheet" href="stylesheet.css">
     <!-- <link rel="stylesheet" href="style2.css">
     <link rel="stylesheet" href="style3.css">
     <link rel="stylesheet" href="style4.css"> -->

</head>
<body>
    <!-- header section starts -->
     <section class="header">
        <a class="logo" href="home.html" >travel.</a>
        <nav class="navbar">
            <a href="home.html">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>

            <!-- for google fonts direct link
            https://fonts.google.com/specimen/Poppins -->
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
     </section>
    <!-- header section ends -->

    <div class="heading" style="background:url(images/booktrip2.jpg)">
        <h1>make enjoy of your journey</h1>
    </div>

<SECTION class="booking">
  <H1 class="heading-title">book your trip !</H1>
  <form action="book_form.php"  method="post" class="book-form">
    <div class="flex">
      <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name">
      </div>
      <div class="inputBox">
        <span>Email :</span>
        <input type="email" placeholder="enter your email" name="email">
      </div>

      <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone">
      </div>
       
      <div class="inputBox">
        <span>address</span>
        <input type="text" placeholder="enter your address" name="address">
      </div>

      
      <div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location">
      </div>
      
      <div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder="number of guests" name="guests">
      </div>
     
      <div class="inputBox">
        <span>arrivals :</span>
        <input type="date" name="arrivals">
      </div>

      <div class="inputBox">
        <span>leaving :</span>
        <input type="date" name="leaving">
      </div>
 </div>

    <input type="submit" value="submit" class="btn" name="send">
  </form>
</SECTION>


<!-- footer section starts -->

<section class="footer">
  <div class="box-container">
    <div class="box"> 
         <h3>quick links</h3>
            <a href="home.html"> <i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
    </div>

    <div class="box">
    <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a> 
    </div>

    <div class="box">
    <h3>Contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"> <i class="fas fa-envelope"></i>mdhaiderali1012@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i>New Delhi, India -110001</a>
     </div>

     <div class="box">
      <h3>follow us</h3>
      <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
      <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
      <a href="#"> <i class="fab fa-github"></i>github</a>
     </div>

  </div>

  <div class="credit">created by <span>Mohd Haider Ali</span>| all rights reserved</div>
</section>

 <!-- footer section ends -->

 <!-- swipper js link -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="Script.js" ></script>
</body>
</html>
