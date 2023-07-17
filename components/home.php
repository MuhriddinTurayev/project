<?php
          session_start();
          require_once('auth.php');
          
          $select = "SELECT * FROM home";
          $result = mysqli_query($connection, $select);
?>





<section class="home" id="home">

    <div class="content">
        <h3><?=$lang['kitob']?></h3>
        <p><?=$lang['biz']?></p>
        <a href="#gallery" class="btn">qani kettik</a>
    </div>

    <div class="controls">
    <?php  if($result->num_rows > 0){
                  $k=0;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
        <span class="vid-btn <?php if(!$k)  echo "active";  $k++;?>" data-src="./admin/video/<?php echo $row['video']?>"></span>
      
        <?php }} ?> 
    </div>
<?php
          session_start();
          require_once('auth.php');
          
          $select = "SELECT * FROM home1 limit 1";
          $result = mysqli_query($connection, $select);
?>






    
    <?php  if($result->num_rows > 0){
                  $k=0;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
    <div class="video-container">
        <video src="./admin/video/<?php echo $row['video']?>" id="video-slider" loop autoplay muted></video>
    </div>
    <?php }} ?> 

    

</section>