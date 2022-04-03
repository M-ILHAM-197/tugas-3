<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Mengupdate Data</title>
</head>
<body>
    <?php
    include "koneksi.php";
    $id=$_GET['id'];

    $sql = "SELECT * FROM tbl_197 WHERE id=$id";
    $hasil=mysqli_query($koneksi, $sql);
    if (!$hasil){
        echo "Tidak diupdate";
    }


    ?>
    <div class="container mt-3">
        <h1>Update Data</h1>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form action="action_update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div class="mb-3 mt-3">
                <label for="nama" class="form-label">Nama : </label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required value="<?php echo $row['nama']?>"><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="nim" class="form-label">NIM : </label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required value="<?php echo $row['nim']?>"><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="asal" class="form-label">Asal : </label>
                <input type="text" class="form-control" id="asal" name="asal" placeholder="Daerah Asal" required value="<?php echo $row['asal']?>"><br>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <?php }?>
    </div>
</body>
</html>