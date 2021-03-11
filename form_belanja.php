<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Belanja Online</title>
  </head>
  <body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-12">
            <div class="box shadow mb-5 putih">
                <div class="container pt-5">
                    <h4 class="wisata">Belanja Online<hr></h4>
                <div class="row">
                    <div class="col-9">
                    <form action="hallo.php" method="post" class="mt-3">
                    <div class="form-group row">
                        <label for="inputName3" class="col-sm-2 col-form-label">customer</label>
                        <div class="col-sm-5">
                        <input class="form-control" id="customer" name="customer" value="">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0" for="produk">Pilih Produk</legend>
                        <div class="col-sm-5" id="produk">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="produk" id="tv" value="TV">
                            <label class="form-check-label" for="tv">
                                TV
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="produk" id="kulkas" value="Kulkas">
                            <label class="form-check-label" for="kulkas">
                                Kulkas
                            </label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="produk" id="mesin cuci" value="Mesin Cuci">
                            <label class="form-check-label" for="mesin_cuci">
                                Mesin cuci
                            </label>
                            </div>
                        </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-5">
                        <input type="number" class="form-control" id="jumlah" name="jumlah">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" id="kirim">Kirim</button>
                        </div>
                    </div>
                    </form>
                    </div>
                    <div class="col-2 mt-0 mb-3">
                        <div class="card" style="width: 18rem;">
                                <div class="card-header bg-primary text-white">Daftar Harga</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">TV : 4.200.000</li>
                                <li class="list-group-item">Kulkas : 3.100.000</li>
                                <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                                <li class="list-group-item bg-primary text-white">Harga dapat berubah setiap saat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>