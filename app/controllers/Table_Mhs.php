<?php

class Table_Mhs extends Controller{

    public function index(){
        $data['judul'] = 'Tabel Mahasiswa';

        $this->view('fixedTemplate/header', $data);
        $this->view('mahasiswa/Config');
        $this->view('fixedTemplate/footer');
    }

    
}


?>