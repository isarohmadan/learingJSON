<?php


    $content = file_get_contents('pizza.json');
    $resul = json_decode($content,true);
    $resul = $resul['menu'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="">All Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=makan">Makanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=minuman">Minuman</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <h1 class="mt-5 mb-5">All Menu</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4" id="daftar-menu">
    <?php foreach ($resul as $key):?>

    <?php while ($resul[0]['kategori'] == 'minuman') {

    }?>
      <div class="col">
          <div class="card">
            <img src="img/pizza/<?= $key['gambar'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"><?= $key['nama'] ?></h5>
              <p class="card-text"><span class="bol"><?= $key['harga'] ?></span> .</p>
            </div>
          </div>
        </div>

    <?php endforeach;?>
       
      </div>
    <script src="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
  </body>
</html>