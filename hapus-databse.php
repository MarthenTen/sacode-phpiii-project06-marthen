<?php

require_once('confiq/koneksi.php');

$sql = "DROP DATABASE sacode";

$query = $koneksi ->query($aql);

//periksa database
if ($query === true)
{
echo "<b> BERHASIL </b> Databse sudah jadi";
} else {
echo "erorrr";
}

?>