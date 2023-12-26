<?php 
// index.php üzerinde notlarımızı gördüğümüz alertbox içerisindeki modal(açılıp kapanan pencere)de Get ile gelen not_id'yi alabilmek için index.php'nin kopyasını oluşturup düzenleme için kullanacağımız modalı yeni bir sayfada tanımlayarak bir nevi köprü oluşturduk. (modal-index.php) bu sasfanın içerisinede modal-duzenle.php sayfamızı include ederek güncelleme işlemini yaptık.

// index.php -> 1 numaralı düzenle butonu =>  /not/modal-index.php?not_id=1 -> modal-duzenle.php(içerisinde düzenleme formu).

require_once ('./classes/db.class.php');
include "./classes/functions.classes.php";
include "./inc/_header.php";

$id = $_GET["not_id"];
?>
<?php 
$oncelik = new Oncelik();
$oncelikGetir = $oncelik->oncelikGetir();
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

        <!-- Modal Düzenle Başlangıç -->
        <?php include "./data/modal-duzenle.php"?>
        <!-- Modal Düzenle Bitiş -->

      </div>
    </div>

    <!-- Footer Başlangıç -->
    <?php include "./inc/_footer.php"?>
    <!-- Footer Bitiş -->
  </body>
</html>  
