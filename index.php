<!doctype html>
<html lang="en">
  <head>
    <title>Notlarım</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>


  <div class="container-fluid">
    <div class="row">
    
      <!-- Form Başlangıç -->
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
      <!-- Form Bitiş -->

      <!-- Notlar Başlangıç -->
      <div class="col-8 notes-div">

        <h3 class="ustbaslik">NOTLARIM</h3>


        <div class="alert alert-success mt-4" role="alert">
          <span class="badge badge-pill badge-success mb-4">Düşük Öncelik</span>
          <h4 class="alert-heading">Başlık</h4>
          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        </div>

        <div class="alert alert-success mt-4" role="alert">
          <span class="badge badge-pill badge-success mb-4">Düşük Öncelik</span>
          <h4 class="alert-heading">Başlık</h4>
          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        </div>

        <div class="alert alert-success mt-4" role="alert">
          <span class="badge badge-pill badge-success mb-4">Düşük Öncelik</span>
          <h4 class="alert-heading">Başlık</h4>
          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        </div>

        <div class="alert alert-success mt-4" role="alert">
          <span class="badge badge-pill badge-success mb-4">Düşük Öncelik</span>
          <h4 class="alert-heading">Başlık</h4>
          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        </div>

        <div class="alert alert-success mt-4" role="alert">
          <span class="badge badge-pill badge-success mb-4">Düşük Öncelik</span>
          <h4 class="alert-heading">Başlık</h4>
          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        </div>

        <div class="alert alert-success mt-4" role="alert">
          <span class="badge badge-pill badge-success mb-4">Düşük Öncelik</span>
          <h4 class="alert-heading">Başlık</h4>
          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        </div>


      </div>
      <!-- Notlar Bitiş -->

    </div>
      


    </div>







      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>  
