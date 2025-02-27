<?php

require_once "buku.php";
require_once "Database/database.php";

class listbuku
{

    public function getData()
    {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku";

        $query = $koneksi->query($sql);

        $list_buku = [];

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $buku = new buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                $buku->setId($row['id']);
                array_push($list_buku, $buku);
            }
        }
        return $list_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun', 'Aksi');
    }

    public function  simpan($buku){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "INSERT INTO buku (judul, pengarang, penerbit, tahun) VALUES 
        ('".$buku->getJudul()."', '".$buku->getPengarang()."',
        '".$buku->getPenerbit()."', '".$buku->getTahun()."')";

        $query = $koneksi->query($sql);

        return $query;
    }

    public function hapus($id){
        $db = New Database();
        $koneksi = $db->getKoneksi();
        $sql = "DELETE FROM buku WHERE id = " .$id;

        $query = $koneksi->query($sql);

        return $query;
    }

    public function update($buku){
        $db = New Database();
        $koneksi = $db->getKoneksi();
        $sql = "UPDATE buku SET judul = '".$buku->getJudul()."', pengarang = '".$buku->getPengarang()."',
        peenrbit = '".$buku->getPenerbit()."', tahun = '".$buku->getTahun()."' WHERE id = '".$buku->getId()."'";

        $query = $koneksi->query($sql);

        return $query;
    }

    public function getBukuById($id){
        $db = New Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku WHERE id=" . $id;

        $query = $koneksi->query($sql);

        if($query->num_rows > 0){
            $data = $query->fetch_assoc();

            $buku = new Buku ($data['judul'], $data['pengarang'], $data['penerbit'], $data['tahun']);
            $buku->setId($data['id']);

            return $buku;
        }

        return false;
    }
}
