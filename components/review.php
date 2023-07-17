<?php
          session_start();
          require_once('auth.php');
          
          $select = "SELECT * FROM review";
          $result = mysqli_query($connection, $select);
?>

<section class="review" id="review">

    <h1 class="heading">
        <span>J</span>
        <span>A</span>
        <span>M</span>
        <span>O</span>
        <span>A</span>
        
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">
        <?php  if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
            <div class="swiper-slide">
                <div class="box">
                    <img src="./admin/img/<?php echo $row['img']?>" alt="">
                    <h3><?php echo $row['title_'.$_SESSION['lang']]?></h3>
                    <p><?php echo $row['body_'.$_SESSION['lang']]?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <?php }} ?> 

        </div>

    </div>

</section>