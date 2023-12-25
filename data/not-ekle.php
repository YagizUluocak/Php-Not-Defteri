<?php 


$oncelik = new Oncelik();

$oncelikGetir = $oncelik->oncelikGetir();

?>



<div class="col-4 form-div">
    <form action="" class="formicerik">
        <div class="form-group mb-4" >
            <label for="baslik">Başlık</label>
            <input type="text" class="form-control" id="baslik"  placeholder="Not Başlığı Ekleyiniz">
        </div>

        <div class="form-group mb-4">
            <label for="icerik">İçerik</label>
            <textarea name="icerik" id="icerik" spellcheck="false"></textarea>
        </div>

        <div class="form-group">
            <label for="icerik">Öncelik Durumu</label>
            <select class="form-control onceliklist">
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
            <button type="button" class="form-control btn btn-primary" name="submit">Kaydet</button>
        </div>
    </form>
</div>
Başlık
Not Başlığı Ekleyiniz
İçerik
Öncelik Durumu

Düşük Öncelikli

Fatal error
: Cannot declare class Not, because the name is already in use in
C:\xampp\htdocs\not\classes\functions.classes.php
on line
3
