<?php
         require_once('auth.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          
          <title>Document</title>
</head>
<body>
          <?php
                    $manzil = $_POST['manzil'];
                    $yulovchi = $_POST['yulovchi'];
                    $vaqt=$_POST['vaqt'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                 

                    $data = "INSERT INTO `sayohat`.`taxi` (`manzil`, `yulovchi`, `vaqt`, `address`, `phone` )";
                    $data .= "VALUES ('$manzil', '$yulovchi', '$vaqt', '$address', '$phone')";
                    
                    $result = mysqli_query($connection, $data);

                    if(!$result){
                              echo 'xatolik'.$data. "<br>" .$connection->error;
                    }
                    
                    $connection->close();
                    header("location: index.php");
                    $success[] = "Muvaffaqiyatli yuklandi!";
          ?>

          

          
          
</body>
</html>