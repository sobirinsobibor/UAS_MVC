<?php

class Mahasiswa extends Controller{

    public function index(){
        $data['judul'] = 'Mahasiswa';

        $this->view('fixedTemplate/header', $data);
        $this->view('mahasiswa/index');
        $this->view('fixedTemplate/footer');
    }
}


?>