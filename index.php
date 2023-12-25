<?php 
require_once ('./classes/db.class.php');
include "./classes/functions.classes.php";
include "./inc/_header.php";



?>


  <body>

    <div class="container-fluid">
      <div class="row">
      
        <!-- Form Başlangıç -->
        <?php include "./data/not-ekle.php"?>
        <!-- Form Bitiş -->

        <!-- Notlar Başlangıç -->
        <?php include "./data/notlar.php"?>
        <!-- Notlar Bitiş -->

      </div>
    </div>

    <!-- Footer Başlangıç -->
    <?php include "./inc/_footer.php"?>
    <!-- Footer Bitiş -->
  </body>
</html>  
