<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$asal = $_POST['asal'];

$sql = "UPDATE tbl_197 SET  nama = '$nama',nim = '$nim', asal = '$asal' where id = '$id'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Tidak berhasil diupdate";
}else{
    echo "<h2>eksekusi update berhasil</h2><br>";
    echo "<a href='read.php'><button>Tampilkan</button></a>";
}
?>