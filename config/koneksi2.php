<?php 
    //koneksi Database

    // Panggil file confiq
require_once('config.php');
//
$koneksi = new mysqli($servername, $username, $password );

// periksa koneksi
    if ($koneksi -> connect_error)
    {
    echo "Koneksi Gagal !!";
    }else {
    echo "Koneksi Berhasil";
    }
?>