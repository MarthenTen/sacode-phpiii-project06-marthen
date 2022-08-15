<?php
require_once('./config/koneksi2.php');

$sql = "CREATE DATABASE sacode";

$query = $koneksi ->query($sql);

//periksa database 
if ($query === true)
{
    echo "<b> BERHASIL </b> Databse sudah jadi";
} else {
    echo "erorrr";
}
?>