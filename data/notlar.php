<?php 

$notlar = new Not();
$notGetir = $notlar->notGetir();

?>

<div class="col-8 notes-div">
    <h3 class="ustbaslik">NOTLARIM</h3>
    <?php
    if($notGetir)
    {
        foreach($notGetir as $not)
        {
            ?>
                <div class="alert alert-success mt-4" role="alert">
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

