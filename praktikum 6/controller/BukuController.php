<?php

require_once "model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model  ke view dan menampilkan view
        include "view/BukuView.php";
    }
}