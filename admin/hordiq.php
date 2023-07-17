<?php
          session_start();
          require_once('../auth.php');

          if(!isset($_SESSION['user'])){
                    header('location:login.php');
          }
            // Select jadvalga chiqarish uchun 
          $sql = "SELECT * FROM hordiq";
          $result = mysqli_query($connection, $sql);
  try{
    $connection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

    if(isset($_GET['delete'])){
      $smtp = $connection->prepare("DELETE FROM `hordiq` WHERE  id=:id ");
      $smtp->bindParam(':id', $_GET['id']);
      $smtp->execute();
       header("location:".$_SERVER['HTTP_REFERER']);
      $_SESSION['success'] = "Muvaffaqiyatli O'chirildi!";
                      
}


   }
   catch(PDOException $e) {
    $error[] = "Xatolik";
                            }
          
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://www.cssscript.com/demo/sticky.css" rel="stylesheet" type="text/css">
        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
   
        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Service</title>
   
        <style>
            @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');

.table {
  width: 100%;
  border: 1px solid #EEEEEE;
}
.table-header {
  display: flex;
  width: 100%;
  background: #000;
  padding: 18px 0;
}
.table-row {
  display: flex;
  width: 100%;
  padding: 18px 0;
}
.table-row:nth-of-type(odd) {
  background: #EEEEEE;
}
.table-data, .header__item {
  flex: 1 1 20%;
  text-align: center;
}
.header__item {
  text-transform: uppercase;
}
.filter__link {
  color: white;
  text-decoration: none;
  position: relative;
  display: inline-block;
  padding-left: 24px;
  padding-right: 24px;
}
.filter__link::after {
  content: '';
  position: absolute;
  right: -18px;
  color: white;
  font-size: 12px;
  top: 50%;
  transform: translateY(-50%);
}
.filter__link.desc::after {
  content: '(desc)';
}
.filter__link.asc::after {
  content: '(asc)';
}

.service{
  display: flex;
  gap: 3rem;
  align-items:center;
  margin-bottom: 50px;
}
.service a{
  padding: 8px 20px;
  background: #2ecc71;
  color: white;
  border 1px solid #000;
  border-radius: 10px;
  transition: all 0.6s;
  font-size: 20px;
}
.service a:hover{
  opacity: 0.7;
}
.service input{
  padding: 8px 20px;
  background: #fa2a00;
  color: white;
  border 1px solid #000;
  border-radius: 10px;
  transition: all 0.6s;
  font-size: 20px;
}
.service input:hover{
  opacity: 0.7;
}
.button_table{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items:center;
  gap: 0.5rem

}
.button_table a, .button_table input{
  width: 80px;
  height: 25px;
  border: 1px solid #000;
}
        </style>
</head>
    <body>
        
          <?php require('components/sidebar.php')?>

        <!--=============== MAIN ===============-->
      
        <main class="container section">
          <div class="service">
            <h1>Portfolio</h1>
            <a href="hordiq_add.php">Add Portfolio</a>
            <form action="">
              <input type="submit" value="Delete All">
            </form>
          </div>
        <div class="table">
          <div class="table-header">
            <div class="header__item"><a id="name" class="filter__link" href="#">Id</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">IMG</a></div>
           
            <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">body_uz</a></div>
            <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">title_uz</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">narx</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">foiz</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">titlee_uz</a></div>
            <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Actions</a></div>
          </div>
          <div class="table-content">
          <?php
                               if($result->num_rows > 0){
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                                  ?>
                                                <div class="table-row">		
                                                  <div class="table-data"><?=$row['id']?></div>
                                                  <div class="table-data">
                                                            <img src="img/<?=$row['img']?>" alt="" width="100px">
                                                  </div>
                                                 
                                                  <div class="table-data"><?=$row['title_uz']?></div>
                                                  <div class="table-data"><?=$row['body_uz']?></div>
                                                  <div class="table-data"><?=$row['narx']?></div>
                                                  <div class="table-data"><?=$row['foiz']?></div>
                                                  <div class="table-data"><?=$row['titlee_uz']?></div>
                                                  
                                                  <div class="table-data button_table">
                                                    <form action="" method="GET" >
                                                            <input type="hidden" value="<?=$row['id']?>" name="id">
                                                            <input type="submit" name="delete"  value="Delete">
                                                  </form>
                                                  <form action="hordiq_add.php" method="POST">
                                                    <input type="hidden" value="1" name="key">
                                                    <input type="hidden" name="id" value="<?=$row['id']?>">
                                                    <input type="submit" value="Update">
                                                  </form>
                                                    
                                                    <a href="">Show</a>
                                                  </div>
                                                </div>
                                       
                              <?php }} else {
                                        echo "<h1>Malumot yo'q</h1>";
                              } ?>	
            
          </div>	
        </div>
        </main>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

      
    
       
    </body>
</html>
