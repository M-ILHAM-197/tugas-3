<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Menambah Data</title>
</head>
<body>
    <div class="container mt-3">
        <h1>Menambah Data</h1>
        <form action="action.php" method="post">
            <div class="mb-3 mt-3">
                <label for="nama" class="form-label"> Nama :</label> 
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="nim" class="form-label"> NIM :</label> 
                <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="asal" class="form-label"> Asal :</label> 
                <input type="text" class="form-control" id="asal" placeholder="Asal Daerah" name="asal" required><br>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>