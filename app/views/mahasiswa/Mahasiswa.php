<script>
    var arrayFromStroage = JSON.parse(localStorage.getItem("allEntries"));
    var arrayLength = arrayFromStroage.length;
</script>

<?php

class Mahasiswa{

    private $nama;
    private $nim;
    private $alamat;
    private $jurusan;
    public static $ind = 0;

    public function __construct($nama, $nim, $alamat, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    public function arr(){
       $arr = [
            "nama" => $this->nama,
            "nim" => $this->nim,
            "alamat" => $this->alamat,
            "jurusan" => $this->jurusan
       ];
       return $arr;
    }

    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getAlamat(){
        return $this->alamat;
    }
    public function getJurusan(){
        return $this->jurusan;
    }

}
?>