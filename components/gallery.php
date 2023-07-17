<?php
          session_start();
          require_once('auth.php');
          
          $select = "SELECT * FROM manzil";
          $result = mysqli_query($connection, $select);
?>

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">
    <?php  if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
        <div class="box">
            <img src="./admin/img/<?php echo $row['img']?>" alt="">
            <div class="content">
                <h3> <?php echo $row['body_'.$_SESSION['lang']]?></h3>
                <p><?php echo $row['title_'.$_SESSION['lang']]?></p>
                <a href="#" class="btn">Batafsil</a>
            </div>
        </div>
        <?php }} ?> 

    </div>

</section>
