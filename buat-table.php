<?php
require_once('config/koneksi.php');

$sql = "CREATE TABLE kategori_anggota(
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    kategori VARCHAR (50) NOT NULL
    )";

    //melakukan perinth KE DATABASE 
$query = $koneksi->query($sql);

if ($query === true)
{
    echo "<b> BERHASIL </b> Table sudah jadi";
} else {
    echo "erorrr";
}
?>