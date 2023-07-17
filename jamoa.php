<?php
   session_start();
   require_once('auth.php');
   
  
    require('inc/conflang.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <style>
        /* Dropdown Button */


/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
 
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color:black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */


/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
    </style>

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>KITOB</span>tumaniga sayohat</a>

    <nav class="navbar">
    <a href="index.php"><?=$lang['home']?></a>
        
        <a href="manzil.php"><?=$lang['manzil']?></a>
        <a href="services.php"> <?=$lang['services']?></a>
        <a href="gallery.php">  <?=$lang['gallery']?></a>
        <a href="jamoa.php"> <?=$lang['jamoa']?></a>
        <a href="taxi.php"><?=$lang['taxi']?></a>
        
    </nav>
 
    <div class="icons">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn btn"><?=$lang['lang']?></button>
  <div id="myDropdown" class="dropdown-content">
    <a  href="?lang=uz"><?=$lang['uz']?> </a>
    <a  href="?lang=en"><?=$lang['en']?></a>
    <a href="?lang=ru"><?=$lang['ru']?></a>
  </div>
</div>
    <i class="" id="login-btn"></i>
        <i class="fas fa-search" id="search-btn"></i>
       
    </div>
    <form action="search.php" method="post" class="search-bar-container">
        <input type="search" id="search-bar" name="sea" placeholder="search here...">
        <input for="search-bar" type="submit" class=" btn" name="submit">
    </form>

</header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>KITOB</span>tumaniga sayohat</a>

    <nav class="navbar">
    <a href="index.php">home</a>
        
        <a href="manzil.php">manzillar</a>
        <a href="services.php">services</a>
        <a href="gallery.php">gallery</a>
        <a href="jamoa.php">jamoa</a>
        <a href="taxi.php">taxi xizmati</a>
        <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn btn"><?=$lang['lang']?></button>
  <div id="myDropdown" class="dropdown-content">
    <a  href="?lang=uz"><?=$lang['uz']?> </a>
    <a  href="?lang=en"><?=$lang['en']?></a>
    <a href="?lang=ru"><?=$lang['ru']?></a>
  </div>
</div>
  
</header>
<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>

</div>

<!-- home section starts  -->


<br><br><br><br><br><br>
<!-- home section ends -->

<!-- book section starts  -->


<!-- book section ends -->

<!-- packages section starts  -->

<?php include('components/review.php')?>

<!-- packages section ends -->

<!-- services section starts  -->



<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Biz haqimizda</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>Bizning joylashuvimiz</h3>
            <a href="#">Joylashuv1</a>
            <a href="#">Joylashuv1</a>
            <a href="#">Joylashuv1</a>
            <a href="#">Joylashuv1</a>
        </div>
        <div class="box">
            <h3>tezkor havolalar</h3>
            <a href="index.php"><?=$lang['home']?></a>
        
        <a href="manzil.php"><?=$lang['manzil']?></a>
        <a href="services.php"> <?=$lang['services']?></a>
        <a href="gallery.php">  <?=$lang['gallery']?></a>
        <a href="jamoa.php"> <?=$lang['jamoa']?></a>
        <a href="taxi.php"><?=$lang['taxi']?></a>
        </div>
        <div class="box">
            <h3>bizni ijtimoiy tarmoqlarimiz</h3>
            <a href="#">telegram</a>
            <a href="#">instagram</a>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</section>
















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>