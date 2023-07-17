


<?php
session_start();
         require_once('auth.php');

         try{

            $errors = [];
            $data = [];
            
            if (empty($_POST['name'])) {
                $errors['name'] = 'Name is required.';
            }
            
            if (empty($_POST['email'])) {
                $errors['email'] = 'Email is required.';
            }
            
            if (empty($_POST['phone'])) {
                $errors['phone'] = 'Superhero alias is required.';
            }
            if (empty($_POST['theme'])) {
               $errors['theme'] = 'Superhero alias is required.';
           }
           if (empty($_POST['xabar'])) {
            $errors['xabar'] = 'Superhero alias is required.';
        }
            
            if (!empty($errors)) {
               header("location: review.php");
                $data['errors'] = $errors;
            } else {
               header("location: index.php");
                $data['message'] = 'Success!';
            }




        
            $connection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
                      $smtp = $connection->prepare("INSERT INTO contact (name, email, phone, theme, xabar) VALUES ( :name, :email, :phone, :theme, :xabar)");
                     
                      $smtp->bindParam(':name', $_POST['name']);
                      $smtp->bindParam(':email', $_POST['email']);
                      $smtp->bindParam(':phone', $_POST['phone']);
                      $smtp->bindParam(':theme', $_POST['theme']);
                      $smtp->bindParam(':xabar', $_POST['xabar']);
                    
                      $smtp->execute();
  
                     
                    

                      echo json_encode($data);
  
  
  
  
         }
           catch(PDOException $e) {
            $error[] = "Xatolik";
                                    }
                                      
          ?>

          
                                 
          
