<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <title>halaman <?=$data['judul']?></title>
    </head>

    <body>
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4a4c94;">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Informasi Kemahasiswaan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="<?=BASEURL?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=BASEURL?>/mahasiswa" >Mahasiswa</a>
              </ul>
            </div>
        </div>
      </nav>