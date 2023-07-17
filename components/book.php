<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

<section class="book" id="book">

    <h1 class="heading">
        <span>T</span>
        <span>a</span>
        <span>x</span>
        <span>i</span>
        <span class="space"></span>
        <span>x</span>
        <span>i</span>
        <span>z</span>
        <span>m</span>
        <span>a</span>
        <span>t</span>
        <span>i</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="./images/taxi.jpg" alt="">
        </div>

        <form id="FORM" action="send.php" method="post">
            <div class="inputBox">
                <h3>Manzilni kiriting</h3>
                <input type="text" placeholder="Manzilni kiriting" id="manzil" name="manzil">
            </div>
            <div class="inputBox">
                <h3>Qayirga borishingizni kiriting</h3>
                <input type="text" placeholder="Qayirga borishingizni kiriting"  name="address" id="address">
            </div>
             
            <div class="inputBox">
                <h3>Telefon nommeringizni kiriting</h3>
                <input type="phone" placeholder="Telefon nommeringizni kiriting" value="" name="phone" id="phone">
            </div>
            <div class="inputBox">
                <h3>Yo'lovchilar soni</h3>
                <input type="number" placeholder="Yo'lovchilar sonini kiriting" id="yulovchi" name="yulovchi">
            </div>
            <div class="inputBox">
                <h3>ketish vaqti</h3>
                <input type="date" id="vaqt" name="vaqt">
            </div>
            <input type="submit" class="btn" value="Buyurtma berish">
        </form>
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
</section>

    </div>
  