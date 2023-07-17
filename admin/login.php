
<?php
session_start();

require_once('../auth.php');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  user where email='$username' and pass='$password' ";
	$query = mysqli_query($connection,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username; 
			header('location:index.php');
		}else{
			$error[] = "Login or password not matched!";
		}

}


?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <style>
      .err_msg{
        background: red;
        border: 1px solid #000;
        width:100%;
        text-align:center;
        display:block;
        padding: 10px 10px ;
      }
    </style>
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
     
      
      <form method="POST" action="">
        <div class="txt_field">
          <input type="text" name="user" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="text" name="pass" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login" name="submit">
        
      </form>
    </div>

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
    ?>
     
    </script>

  </body>
</html>
