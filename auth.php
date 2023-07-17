<?php
          $dbhost = 'localhost';
          $dbuser = 'root';
          $dbpass = '';
          $dbname = 'sayohat';  //baza nomi

          $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("xatolik:P" .mysqli_connect_error());

          if(mysqli_connect_error()){
                    die("xatolik:P" .mysqli_connect_error());
          } 
?>