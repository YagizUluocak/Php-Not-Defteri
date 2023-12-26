<?php 

$notlar = new Not(); // Yeni Şablon oluştur. $notlar değişkenine ata
$notGetir = $notlar->notGetir(); // oluşturulan şablondaki notGetir methodunu çağır ve $notGetir değişkenine ata


// islem 'sil' e eşitse VE 'not_id' değeri geliyorsa fonksiyonu çağır gelen not_id değerini fonksiyona parametre olarak gönder.

if(isset($_GET['islem']) && $_GET['islem'] === 'sil' && isset($_GET['not_id'])) {
    $not_id = $_GET['not_id'];
    // notSil fonksiyonunu çağır
    $silme_sonuc = $notlar->notSil($not_id);
    
    // Silme işlemi başarılıysa
    if($silme_sonuc) {
        echo "<script>window.location.href='index.php?notSil=ok';</script>";
        exit; // İşlem tamamlandıktan sonra betik çalışmasını sonlandır
    } else {
        echo "<script>window.location.href='index.php?notSil=no';</script>";
        exit; 
    } 
  }

?>

<div class="col-9 notes-div">
    <h3 class="ustbaslik">YAPILACAKLAR</h3>
    <?php
    if($notGetir) // $notGetir değişkeni true ise (Kayıt varsa / method çalışıyorsa)
    {
        foreach($notGetir as $not) // bu değişkeni kayıt sayısı kadar döndür her kaydı $not değişkenine atar $not->(çağırılmak istenilen sütun adı)
        {
            ?>
                <div class="alert alert-success mt-4" role="alert">

                    <a class="btn btn-warning btnmodal" href="./modal-index.php?not_id=<?php echo $not->not_id?>"><i class="fa-solid fa-pen-to-square"></i> Düzenle</a>
                    <a style="position: absolute; top: 55px; right: 5px;" class="btn btn-danger" href="./index.php?not_id=<?php echo $not->not_id?>&islem=sil"><i class="fa-solid fa-delete-left"></i> Sil</a>

                    <span class="badge badge-pill badge-<?php echo $not->alert_type?> mb-4"><?php echo $not->oncelik_durum?></span>
                    <h4 class="alert-heading"><?php echo $not->not_baslik?></h4>
                    <p><?php echo $not->not_icerik?></p>
                </div>

            <?php
        }
    }
    else // Kayıt Yoksa
    {
        ?>
        <div class="alert alert-danger mt-4" role="alert">
            <h5>Kayıt Bulunamadı Lütfen Not Ekleyiniz.</h5>
        </div>
        <?php
    }
    ?>

</div>


