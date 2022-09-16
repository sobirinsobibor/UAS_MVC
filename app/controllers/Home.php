<?php

class Home extends Controller{
    public function index(){
        $data['judul']  = "Home";
        $data['univ']   = "Universitas Airlangga";
         
        $this->view('fixedTemplate/header', $data);
        $this->view('home/index', $data);
        $this->view('fixedTemplate/footer');
    }
}

?>