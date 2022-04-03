<?php
include "koneksi.php";

$id=$_GET['id'];

$sql="DELETE FROM tbl_197 WHERE id=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Tidak dihapus";
}else{
    echo "<h2>Berhasil dihapus</h2><br>";
    echo "<a href='read.php'><button>Tampilkan<button> </a>";
}

?>