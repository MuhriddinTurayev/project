<?php
          session_start();

          if(!isset($_SESSION['user'])){
                    header('location:login.php');
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

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Responsive Collapsible Side & Tab Navigation Example</title>
    </head>
    <body>
        
          <?php require('components/sidebar.php')?>

        <!--=============== MAIN ===============-->
      
        <main class="container section">
            
            <h1>Welcome Admin!</h1>


        </main>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
       
    </body>
</html>
