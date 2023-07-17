<?php
          session_start();
          require_once('../auth.php');

          if(!isset($_SESSION['user'])){
                    header('location:login.php');
          }
          $key = $_POST['key'];
          $id = $_POST['id'];

          $select = "SELECT * FROM home WHERE id = '$id'";
          $result = mysqli_query($connection, $select);

          if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
              $id_ser = $row['id'];
              $icon_ser = $row['video'];
             
              $title_uz_ser = $row['title_uz'];
              $text_uz_ser = $row['body_uz'];
              $title_en_ser = $row['title_en'];
              $text_en_ser = $row['body_en'];
                        }} 

          try{
            $connection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
            if(isset($_POST['add'])){
                      $smtp = $connection->prepare("INSERT INTO home (video ) VALUES ( :video)");
                     

                      $filename = basename($_FILES["pic"]["name"]);
                      $tmpname = $_FILES["pic"]["tmp_name"];
                      $folder = "video/".$filename;
                      move_uploaded_file($tmpname, $folder);


                      $smtp->bindParam(':video', $filename );
                  
                      $smtp->execute();
  
                      $success[] = "Muvaffaqiyatli yuklandi!";
                      
                    }

                    if(isset($_POST['update'])){
                      $filename = basename($_FILES["pic"]["name"]);
                      $tmpname = $_FILES["pic"]["tmp_name"];
                      $folder = "video/".$filename;
                      move_uploaded_file($tmpname, $folder);
    
                   
    
                      if($tmpname != ""){
                        $smtp = $connection->prepare("UPDATE  `home` SET  video=:video  WHERE id=:id");
                        $smtp->bindParam(':id', $_POST['id']);
                     
                      
                        $smtp->bindParam(':video', $filename);
                      
                        $smtp->execute();
                        header("location: portfolio.php");
                        $success[] = "Muvaffaqiyatli yuklandi!";
              } else{
                        $smtp = $connection->prepare("UPDATE  `home` SET   title_uz=:title_uz WHERE id=:id");
                        $smtp->bindParam(':id', $_POST['id']);
                     
                       
                        $smtp->execute();
                        header("location: portfolio.php");
                        $success[] = "Muvaffaqiyatli yuklandi!";
              }
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

        <title>Responsive Collapsible Side & Tab Navigation Example</title>
<style>
          
#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 20px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
</style>    
</head>
    <body>
        
          <?php require('components/sidebar.php')?>

        <!--=============== MAIN ===============-->
      
        <main class="container section">
                    <form id="contact" action=""  enctype="multipart/form-data" novalidate method="post">
                    <h3>Portfoli add</h3>
                    <img src="video/<?=$icon_ser?>" alt="" width="100px">
                    
                    <fieldset>
                        <input placeholder="Image select" name="pic" id="pic" type="file" >
                    </fieldset>
                   
                   
                    <input type="hidden" name="id" value="<?php if($key == 1) echo $id_ser?>">
                    <fieldset>
                    <button name="<?php if($key == 1) echo 'update'; else echo 'add'; ?>" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                   
                    </form>

        </main>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

           
    <script>
     
     <?php 
     if(isset($error)){
       foreach($error as $error){
         
   ?>
    Swal.fire({
     position: 'top-end',
     icon: 'error',
     title: '<?=$error?>',
     showConfirmButton: false,
     timer: 1500
   })
     <?php
     
   }
 } 

 if(isset($success)){
foreach($success as $success){
         
   ?>
    Swal.fire({
     position: 'top-end',
     icon: 'success',
     title: '<?=$success?>',
     showConfirmButton: false,
     timer: 1500
   })
     <?php
     
   }
 }
 ?>
  
 </script>
    
       
    </body>
</html>
