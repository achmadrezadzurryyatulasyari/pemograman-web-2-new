<<<<<<< HEAD
<?php

require_once 'Model/listbuku.php';

class bukucontroler{
    public function jalankan(){

        //menggunakan model
        $daftar_buku_model = new listbuku();
        $daftar_buku = $daftar_buku_model->getdata();

        //mengirim dan menampikan data view
        include_once "View/bukuview.php";
    }
=======
<?php

require_once 'Model/listbuku.php';

class bukucontroler{
    public function jalankan(){

        //menggunakan model
        $daftar_buku_model = new listbuku();
        $daftar_buku = $daftar_buku_model->getdata();

        //mengirim dan menampikan data view
        include_once "View/bukuview.php";
    }
>>>>>>> 09866dd7e2419bcb2ed28c6cee9c201d053da652
}