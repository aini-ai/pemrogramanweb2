<?php

require_once "model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model  ke view dan menampilkan view
        include "view/BukuView.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id = $_POST['ID_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('location: http://localhost/index.php');
        exit;
    }
}