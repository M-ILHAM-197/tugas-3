<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tampilan Database</title>
</head>
<body>
    <div class="container mt-3">
    <h1>Tabel</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Asal</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";

        $sql = "SELECT * FROM tbl_197";
        $hasil = mysqli_query($koneksi, $sql);

        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['nim'];?></td>
                <td><?php echo $row['asal'];?></td>
                <td><a href="update.php?id=<?=$row['id']?>"><button type="submit" class="btn btn-primary">Edit</button> <a href="delete.php?id=<?=$row['id']?>"><button type="submit" class="btn btn-primary">Delete</button></td>
            </tr>
        </tbody>
        <?php }
        ?>
    </table>
    </div>
</body>
</html>