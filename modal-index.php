<?php 
require_once ('./classes/db.class.php');
include "./classes/functions.classes.php";
include "./inc/_header.php";


$id = $_GET["not_id"];
?>
<?php 
$oncelik = new Oncelik();
$oncelikGetir = $oncelik->oncelikGetir();


$not_id = $_GET["not_id"];
$notlar = new Not();
$notGetir = $notlar->notIdGetir($not_id);


if(isset($_POST["submit"]))
{
    $not_baslik = $_POST["not_baslik"];
    $not_icerik = $_POST["not_icerik"];
    $oncelik_id = $_POST["oncelik_id"];

    $notGetir = new Not();
    if($notGetir->notGuncelle($not_id, $not_baslik, $not_icerik, $oncelik_id))
    {
        echo "<script>window.location.href='index.php';</script>";

    }
}
?>


  <body>
    <div class="container-fluid">
      <div class="row">
      
        <!-- Form Başlangıç -->
        <?php include "./data/not-ekle.php"?>
        <!-- Form Bitiş -->

        <!-- Notlar Başlangıç -->
        <?php include "./data/notlar.php"?>
        <?php include "./data/modal-duzenle.php"?>
        <!-- Notlar Bitiş -->

      </div>
    </div>

    <!-- Footer Başlangıç -->
    <?php include "./inc/_footer.php"?>
    <!-- Footer Bitiş -->
  </body>
</html>  
