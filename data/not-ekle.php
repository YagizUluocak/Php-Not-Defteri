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
                <option value="0" class="option0">Düşük Öncelikli</option>
                <option value="1" class="option1" >Orta Öncelikli</option>
                <option value="2" class="option2">Yüksek Öncelikli</option>
              </select>
            </div>

            <div class="form-group mb-4">
              <label for="bitistarihi">Bitiş Tarihi</label>
              <input type="date" class="form-control" id="date" name="bitistarihi">
            </div>

            <div class="form-group mb-4">
              <button type="button" class="form-control btn btn-primary" name="submit">Kaydet</button>
            </div>

            

          </form>
        </div>