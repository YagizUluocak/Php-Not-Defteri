<?php 

$notlar = new Not();
$notGetir = $notlar->notGetir();

$oncelik = new Oncelik();
$oncelikGetir = $oncelik->oncelikGetir();
?>

<?php
if($notGetir)
{
    foreach($notGetir as $not)
    {
        $not_id = $not->not_id;
        ?>
            <div class="modal fade " id="exampleModalCenter<?php echo $not->not_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header model">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white"><?php echo $not->not_baslik?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body model">
                    <form method="POST" class="formicerik">
                        <div class="form-group mb-4" >
                            <label for="not_baslik"><h5 style="color:white;">Başlık</h5></label>
                            <input type="text" class="form-control" id="not_baslik" name="not_baslik"  placeholder="Not Başlığı Ekleyiniz" value="<?php echo $not->not_baslik?>">
                        </div>
                
                        <div class="form-group mb-4">
                            <label for="not_icerik"><h5 style="color:white;">İçerik</h5></label>
                            <textarea name="not_icerik" id="not_icerik" name="not_icerik" spellcheck="false"><?php echo $not->not_icerik?></textarea>
                        </div>
                
                        <div class="form-group">
                            <label for="oncelik_id"><h5 style="color:white; ">Öncelik Durumu</h5></label>
                            <select class="form-control onceliklist" name="oncelik_id" value="<?php echo $not->oncelik_id?>">
                                <?php
                                if($oncelikGetir)
                                {
                                    foreach($oncelikGetir as $oncelik)
                                    {
                                        ?>
                                        <option value="<?php echo $oncelik->oncelik_id?>"><?php echo $oncelik->oncelik_durum?></option>
                                        <?php
                                    }
                                }
                                else{
                                    echo 'Kayıt Bulunamadı.';
                                }
                                ?>
                            </select>
                        </div>
                
                        <div class="form-group mb-4">
                            <input type="submit" class="form-control btn btn-success mt-2"  style="color:white;  font-size: larger;"  value="Kaydet" name="submit">
                                
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php
    }   
}

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

