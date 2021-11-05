<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Śilpī by Vaishnavi Dasika</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/parsley.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- header section starts  -->

<header class="header">


  <a href="#" class="logo"> <img src="../image/logo.png" width="50px" height="50px"> </a>

  <nav class="navbar">
      <a href="#home">home</a>
      <a href="#features">features</a>
      <a href="#products">products</a>
      <a href="#categories">categories</a>
      <a href="#review">review</a>
      <a href="#blogs">blogs</a>
  </nav>

  <div class="icons">
      <div class="fas fa-bars" id="menu-btn"></div>
      <div class="fas fa-search" id="search-btn"></div>
      <div class="fas fa-shopping-cart" id="cart-btn"></div>
      <?php  if(!isset($_SESSION["user_id"])){
        echo '<div class="fas fa-user" id="login-btn"></div>';
       }
       else {
         echo '<div class="fas fa-trash" id="login-bt"></div>';
       }
       ?>
  </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="../image/cart-img-1.png" alt="">
            <div class="content">
                <h3>wooden rings</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="../image/cart-img-2.png" alt="">
            <div class="content">
                <h3>hand-made buttons</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="../image/cart-img-3.png" alt="">
            <div class="content">
                <h3> loom yarn</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div>


        <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box" id="user">
            <input type="password" placeholder="your password" class="box" id="password">
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#" id="reg_button">create now</a></p>
            <input type="submit" value="login now" class="btn" name="btnlogin" id="submit_login">
        </form>
        <form action="" class="register-form">
            <h3>Register here</h3>
            <input type="text" placeholder="your name" class="box" id="name">
            <input type="text" placeholder="your surname" class="box" id="sname">
            <input type="email" placeholder="your email" class="box" id="email">
            <input type="text" placeholder="your location" class="box" id="loc">
            <input type="text" placeholder="your phone number" class="box" id="phone">
            <select class="box" id="role">
                <option value="manager">Manager</option>
                <option value="community">Community</option>
                <option value="officers">Waste management officers</option>
              </select>
            <input type="password" placeholder="your password" class="box" id="pas">
            <select class="box" id="gender" >
                <option value="male">male</option>
                <option value="female">female</option>
              </select>
              <p>Already registered <a href="#" id="go-login">click here</a></p>
            <input type="submit" id="submit_register" value="Register" class="btn">
        </form>


</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3> Project <span> Śilpī </span></h3>                     
        <a href="#" class="btn">Discover now</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>Mission</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../image/feature-img-1.png" alt="">
            <h3>About Śilpī</h3>
            <p>Single point trade contact for authentic artisans and creators</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="../image/feature-img-2.png" alt="">
            <h3>Craft development</h3>
            <p>Encouraging the development of craft through globalisation and creator directed profits</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="../image/feature-img-3.png" alt="">
            <h3>enabling lives</h3>
            <p>Creating a sustainable livelihood to craftsman through global collaborations</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper" id="prod_div">

        </div>

    </div>


</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container" id="cat_div">

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>Events</span> </h1>

    <div class="box-container" id="events">
    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> silpi </h3>
            <p>Single point trade contact for authentic artisans and creators</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +91 8898895566 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +91 9949528889 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> dasikavaishnavi@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> India </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="../image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by Sri Bhuvana Vaishnavi Dasika </div>

</section>
<script src="../js/jquery.min.js"></script>
<script src="../js/parsley.js"></script>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>
