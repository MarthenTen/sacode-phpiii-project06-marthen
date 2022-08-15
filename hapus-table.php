<?php
require_once('config/koneksi.php');
echo "<br>";

$sql = "DROP TABLE kategori_anggota";

    //melakukan perinth KE DATABASE 
$query = $koneksi->query($sql);

if ($query === true)
{
    echo "<b> BERHASIL </b> Table sudah Hapus";
} else {
    echo "erorrr";
}
?>