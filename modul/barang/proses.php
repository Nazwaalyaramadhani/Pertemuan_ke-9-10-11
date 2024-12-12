<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "../../koneksi.php";
    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
        $idpemasok = $_POSt['pemasok'];
        $namabaranf = $_POSt['nama_barang'];
        $merk = $_POST['merk'];
        $ukuran = $_POST['ukuran'];
        $satuan = $_POST['satuan'];
        $idkategori = $_POST['kategori'];
        $hargabeli = $_POST['harga_beli'];
        $hargajual = $_POST['harga_jual'];
        $deskripsi = $_POST['deskripsi'];
        $sql = "INSERT INTO barang(id_pemasok,nama_barang,merk,ukuran,satuan,id_kategori,harga_beli,
        harga_jual,deskripsi_barang) VALUES ('$idpemasok','$namabarang','$merk','$ukuran','$satuan','$idkategori,
        '$hargabeli','$hargajual','$deskripsi')";
    }elsiif($aksi=="edit"){
        $id = $_GET['id'];
        $idpemasok = $_POSt['pemasok'];
        $namabaranf = $_POSt['nama_barang'];
        $merk = $_POST['merk'];
        $ukuran = $_POST['ukuran'];
        $satuan = $_POST['satuan'];
        $idkategori = $_POST['kategori'];
        $hargabeli = $_POST['harga_beli'];
        $hargajual = $_POST['harga_jual'];
        $deskripsi = $_POST['deskripsi'];
    }elseif($aksi == "hapus"){
        $id = $_GET['id'];
        $sql = "DELETE FROM barang WHERE id_barang='$id'";
    }
    $mysqli->query($sql);
        }
        header('location:../../dashboard.php?modul=barang');