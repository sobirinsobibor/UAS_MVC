<?php
require_once 'Mahasiswa.php';

if(isset($_POST['input_btn'])){

    echo '<script>

            if(confirm("Apakah Ingin Mengisi Data Lagi ?")){
                location.href="http://localhost/pboprak_smt2/UAS/SOAL_2/public/mahasiswa";
            };

        </script>';
}

$dataLength = $_POST['dataLength'];
$dataLength = (int)$dataLength;

$nama = [];
$nim = [];
$alamat = [];
$jurusan = [];
$arrMhs = [];

for( $i = 0; $i < $dataLength; $i++){
    $nama[] = $_POST["nama$i"];
} 
for( $i = 0; $i < $dataLength; $i++){
    $nim[] = $_POST["nim$i"];
} 
for( $i = 0; $i < $dataLength; $i++){
    $alamat[] = $_POST["alamat$i"];
} 
for( $i = 0; $i < $dataLength; $i++){
    $jurusan[] = $_POST["jurusan$i"];
} 

for($i = 0; $i < $dataLength; $i++){
    $arrMhs [] = new Mahasiswa($nama[$i], $nim[$i], $alamat[$i], $jurusan[$i]);
}

?>

<div class="container mt-3">
<div class="row mb-3">
<nav class="navbar navbar-dark" style="background-color: #4a4c94;">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Data Mahasiswa</span>
    </div>
</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $nomor = 1;
        for($i = 0; $i < $dataLength; $i++) :
    ?>
        <tr>
        <th scope="row"><?=$nomor?></th>
        <td><?=$arrMhs[$i]->getNim()?></td>
        <td><?=$arrMhs[$i]->getNama()?></td>
        <td><?=$arrMhs[$i]->getAlamat()?></td>
        <td><?=$arrMhs[$i]->getJurusan()?></td>
        </tr>
    <?php
        $nomor++;
        endfor;
    ?>
  </tbody>
</table>
</div>
</div>
