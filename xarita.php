<?php
   
   
   session_start();
   require_once('auth.php');
   $sea=$_POST['sea'];
   echo $sea;
   $select = "SELECT * FROM manzil   WHERE  body_uz='$sea' ";
   $result = mysqli_query($connection, $select);
   if($result){
    $num=mysqli_num_rows($result);
    echo$num;
   }
   

   
  
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
  color: black;
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
    </nav>
 
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
     
    </div>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <input for="search-bar" type="submit" class="fas fa-search">
    </form>

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


<br><br><br><br><br><br><br>

<section class="packages" id="packages">

    <h1  class="heading">
        <span>B</span>
        <span>a</span>
        <span>t</span>
        <span>a</span>
        <span>f</span>
        <span>s</span>
        <span>i</span>
        <span>l</span>
       
    </h1>

    <div class="box-container">
    <?php  if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
        <div class="box">
            <img src="./admin/img/<?php echo $row['img']?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $row['body_'.$_SESSION['lang']]?></h3>
                <p><?php echo $row['title_'.$_SESSION['lang']]?></p>
              
                <div class="price"> <?php
                  if($row['foiz']){
                    $new =$row['narx']-$row['narx']*$row['foiz']/100;
                    $n = (string)$new;
                    if(mb_strlen($n)==4){
                     echo $n[0]. " " . $n[1] . "" . $n[2]. "" . $n[3] . "" . $n[4]." Sum"." ";
                    }if(mb_strlen($n)==5){
                  echo $n[0]. "" . $n[1] . " " . $n[2]. "" . $n[3] . "" . $n[4]." Sum"." ";
                    }if(mb_strlen($n)==6){
                  echo $n[0]. "" . $n[1] . "" . $n[2]. " " . $n[3] . "" . $n[4]. "" . $n[5]." Sum"." ";
                    }if(mb_strlen($n)==7){
                  echo $n[0]. " " . $n[1] . "" . $n[2]. "" . $n[3] . " " . $n[4]. "" . $n[5]. "" . $n[6]." Sum"." ";
                    }
                   
                    

                    $n = (string)$row['narx'];
    if(mb_strlen($n)==4){
      echo "<span>".  $n[0]. " " . $n[1] . "" . $n[2]. "" . $n[3] . " Sum"."</span>";
    }if(mb_strlen($n)==5){
      echo "<span>".  $n[0]. "" . $n[1] . " " . $n[2]. "" . $n[3] . "" . $n[4]." Sum"."</span>";
    }if(mb_strlen($n)==6){
  echo $n[0]. "" . $n[1] . "" . $n[2]. " " . $n[3] . "" . $n[4]. "" . $n[5];
    }if(mb_strlen($n)==7){
      echo "<span>".  $n[0]. " " . $n[1] . "" . $n[2]. "" . $n[3] . " " . $n[4]. "" . $n[5]. "" . $n[6]." Sum"."</span>";
    }
                  }else{
                   
                      $n = (string)$row['narx'];
                      if(mb_strlen($n)==4){
                       echo $n[0]. " " . $n[1] . "" . $n[2]. "" . $n[3] . "" . $n[4]." Sum"." ";
                      }if(mb_strlen($n)==5){
                    echo $n[0]. "" . $n[1] . " " . $n[2]. "" . $n[3] . "" . $n[4]." Sum"." ";
                      }if(mb_strlen($n)==6){
                    echo $n[0]. "" . $n[1] . "" . $n[2]. " " . $n[3] . "" . $n[4]. "" . $n[5]." Sum"." ";
                      }if(mb_strlen($n)==7){
                    echo $n[0]. " " . $n[1] . "" . $n[2]. "" . $n[3] . " " . $n[4]. "" . $n[5]. "" . $n[6]." Sum"." ";
                      }
                     
                   
                  }
                  ?>
                
                </div>
               
             
            </div>
        </div>
        <?php }} ?> 
     

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->



<!-- services section ends -->

<!-- gallery section starts  -->


<!-- gallery section ends -->

<!-- review section starts  -->


<!-- review section ends -->

<!-- contact section starts  -->


<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <!-- <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div> -->

</section>

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
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
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