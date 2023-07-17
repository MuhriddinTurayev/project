<?php
          session_start();
          require_once('auth.php');
          
          $select = "SELECT * FROM manzil limit 6";
          $result = mysqli_query($connection, $select);
?>
<section class="packages" id="packages">

    <h1 class="heading">
        <span><?=$lang['m']?></span>
        <span><?=$lang['a']?></span>
        <span><?=$lang['n']?></span>
        <span><?=$lang['z']?></span>
        <span><?=$lang['i']?></span>
        <span><?=$lang['l']?></span>
        <span><?=$lang['la']?></span>
        <span><?=$lang['ar']?></span>
        <span><?=$lang['r']?></span>
    </h1>

    <div class="box-container">
    <?php  if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
        <div class="box">
            <img src="./admin/img/<?php echo $row['img']?>" alt="">
            <div class="content">
                <h3>
                
                <a href="xarita.php"><i class="fas fa-map-marker-alt" value="<?=$row['body_uz']?>"></i></a>  <?php echo $row['body_'.$_SESSION['lang']]?></h3>
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
              
               <form action="batafsil.php" method="post">
                <input type="hidden" value="<?=$row['id']?>" name="sea">
                <input type="submit" class="btn" value="<?=$lang['batafsil']?>">
               </form>
               
                
            </div>
        </div>
        <?php }} ?> 
     

    </div>

</section>