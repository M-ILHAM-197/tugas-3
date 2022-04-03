<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$asal = $_POST['asal'];

$sql = "INSERT INTO tbl_197 VALUES (null,'$nama','$nim','$asal')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Tidak berhasil ditambah";
}else{
    echo "<h2>eksekusi berhasil</h2><br>";
    echo "<a href='read.php'><button>Tampilkan</button></a>";
}
?>