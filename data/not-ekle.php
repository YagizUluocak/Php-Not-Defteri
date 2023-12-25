<?php 
$oncelik = new Oncelik();
$oncelikGetir = $oncelik->oncelikGetir();
if(isset($_POST["submit"]))
{
    $not = new Not();

    $not_baslik = $_POST["not_baslik"];
    $not_icerik = $_POST["not_icerik"];
    $oncelik_id = $_POST["oncelik_id"];

    if($not->notEkle($not_baslik, $not_icerik, $oncelik_id))
    {
        echo "<script>window.location.href='index.php';</script>";
    }
}
?>

<div class="col-4 form-div">
    <div>
        <form method="POST" class="formicerik" >
            <div class="form-group mb-4" >
                <label for="not_baslik">Başlık</label>
                <input type="text" class="form-control" id="not_baslik" name="not_baslik"  placeholder="Not Başlığı Ekleyiniz">
            </div>
    
            <div class="form-group mb-4">
                <label for="not_icerik">İçerik</label>
                <textarea name="not_icerik" id="not_icerik" name="not_icerik" spellcheck="false"></textarea>
            </div>
    
            <div class="form-group">
                <label for="oncelik_id">Öncelik Durumu</label>
                <select class="form-control onceliklist" name="oncelik_id">
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
                <input type="submit" class="form-control btn btn-success" value="Kaydet" name="submit">
                    
            </div>
            
            <div class="form-group ">
            <a href="./data/tamamlanan-notlar.php" class="form-control btn btn-danger" style="margin-top:40%;">Tamamlanan Notlar</a>
            </div>
        </form>

    </div>

</div>
